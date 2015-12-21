<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("$CFG->libdir/externallib.php");
require_once("$CFG->dirroot/mod/scavengerhunt/locallib.php");

class mod_scavengerhunt_external_fetch_scavengerhunt extends external_api {

    /**
     * Can this function be called directly from ajax?
     *
     * @return boolean
     * @since Moodle 2.9
     */
    public static function fetch_scavengerhunt_is_allowed_from_ajax() {
        return true;
    }

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function fetch_scavengerhunt_parameters() {
        return new external_function_parameters(
                array(
            'idStage' => new external_value(PARAM_INT, 'id of stage'),
            'idModule' => new external_value(PARAM_INT, 'id of module'),
                )
        );
    }

    public static function fetch_scavengerhunt_returns() {
        return new external_single_structure(
                array(
            'geojson' => new external_value(PARAM_RAW, 'geojson with all features of the stage'),
            'roads' => new external_value(PARAM_RAW, 'array with all roads of the stage')
        ));
    }

    /**
     * Create groups
     * @param array $groups array of group description arrays (with keys groupname and courseid)
     * @return array of newly created groups
     */
    public static function fetch_scavengerhunt($idStage, $idModule) { //Don't forget to set it as static
        global $DB;

        self::validate_parameters(self::fetch_scavengerhunt_parameters(), array('idStage' => $idStage, 'idModule' => $idModule));
        //Recojo todas las features
        $riddles_sql = 'SELECT riddle.id, riddle.name, riddle.description, road_id, num_riddle,astext(geom) as geometry FROM {scavengerhunt_riddle} AS riddle'
                . ' inner join {scavengerhunt_roads} AS roads on riddle.road_id = roads.id WHERE scavengerhunt_id = ? ORDER BY num_riddle DESC';
        $riddles_result = $DB->get_records_sql($riddles_sql, array($idStage));
        $riddlesArray = array();
        $context = context_module::instance($idModule);
        foreach ($riddles_result as $value) {
            $multipolygon = wkt_to_geojson($value->geometry);
            $description = file_rewrite_pluginfile_urls($value->description, 'pluginfile.php', $context->id, 'mod_scavengerhunt', 'description', $value->id);
            $attr = array('idRoad' => intval($value->road_id), 'numRiddle' => intval($value->num_riddle), 'name' => $value->name, 'idStage' => $idStage, 'description' => $description);
            $feature = new Feature(intval($value->id), $multipolygon, $attr);
            array_push($riddlesArray, $feature);
        }
        $featureCollection = new FeatureCollection($riddlesArray);
        $geojson = object_to_geojson($featureCollection);
        //Recojo todos los caminos
        $roads_sql = 'SELECT id, name FROM {scavengerhunt_roads} AS roads where scavengerhunt_id = ?';
        $roads_result = $DB->get_records_sql($roads_sql, array($idStage));
        foreach ($roads_result as &$value) {
            $value->id = intval($value->id);
        }
        $roadsjson = json_encode($roads_result);
        $fetchstage_returns = array($geojson, $roadsjson);
        return $fetchstage_returns;
    }

}

class mod_scavengerhunt_external_update_riddles extends external_api {

    /**
     * Can this function be called directly from ajax?
     *
     * @return boolean
     * @since Moodle 2.9
     */
    public static function update_riddles_is_allowed_from_ajax() {
        return true;
    }

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function update_riddles_parameters() {
        return new external_function_parameters(
                array(
            'GeoJSON' => new external_value(PARAM_RAW, 'GeoJSON with all features')
                )
        );
    }

    public static function update_riddles_returns() {
        return new external_single_structure(
                array(
            'json' => new external_value(PARAM_RAW, 'geojson with all features of the stage'),
        ));
    }

    /**
     * Create groups
     * @param array $groups array of group description arrays (with keys groupname and courseid)
     * @return array of newly created groups
     */
    public static function update_riddles($GeoJSON) { //Don't forget to set it as static
        self::validate_parameters(self::update_riddles_parameters(), array('GeoJSON' => $GeoJSON));
        //Recojo todas las features
        $features = geojson_to_object($GeoJSON);
        foreach ($features as $feature) {
            updateRiddleBD($feature);
        }
        return 'Actualizados';
    }

}

class mod_scavengerhunt_external_delete_riddles extends external_api {

    /**
     * Can this function be called directly from ajax?
     *
     * @return boolean
     * @since Moodle 2.9
     */
    public static function delete_riddles_is_allowed_from_ajax() {
        return true;
    }

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function delete_riddles_parameters() {
        return new external_function_parameters(
                array(
            'idRiddles' => new external_multiple_structure(
                    new external_single_structure(
                    array(
                'idRiddle' => new external_value(PARAM_RAW, 'collection id riddles in JSON format'),
                    )
                    )
        )));
    }

    public static function delete_riddles_returns() {
        return new external_single_structure(
                array(
            'json' => new external_value(PARAM_RAW, ''),
        ));
    }

    /**
     * Create groups
     * @param array $groups array of group description arrays (with keys groupname and courseid)
     * @return array of newly created groups
     */
    public static function delete_riddles($idRiddles) { //Don't forget to set it as static
        self::validate_parameters(self::delete_riddles_parameters(), array('idRiddles' => $idRiddles));

        foreach ($idRiddles as $riddle) {
            foreach ($riddle as $value) {
                deleteEntryBD($value);
            }
        }

        $json = get_string('confirm_delete_riddle', 'scavengerhunt');
        return $json;
    }

}

class mod_scavengerhunt_external_add_road extends external_api {

    /**
     * Can this function be called directly from ajax?
     *
     * @return boolean
     * @since Moodle 2.9
     */
    public static function add_road_is_allowed_from_ajax() {
        return true;
    }

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function add_road_parameters() {
        return new external_function_parameters(
                array(
            'nameRoad' => new external_value(PARAM_RAW, 'collection id riddles in JSON format'),
            'idScavengerhunt' => new external_value(PARAM_INT, 'collection id riddles in JSON format'),
                )
        );
    }

    public static function add_road_returns() {
        return new external_single_structure(
                array(
            'idRoad' => new external_value(PARAM_INT, ''),
            'nameRoad' => new external_value(PARAM_RAW, ''),
        ));
    }

    /**
     * Create groups
     * @param array $groups array of group description arrays (with keys groupname and courseid)
     * @return array of newly created groups
     */
    public static function add_road($nameRoad, $idScavengerhunt) { //Don't forget to set it as static
        self::validate_parameters(self::add_road_parameters(), array('nameRoad' => $nameRoad, 'idScavengerhunt' => $idScavengerhunt));
        if ($nameRoad === '') {
            list($id, $nameRoad) = addDefaultRoad($idScavengerhunt);
        } else {
            $id = insertRoadBD($idScavengerhunt, $nameRoad);
        }
        return array($id, $nameRoad);
    }

}

class mod_scavengerhunt_external_update_road extends external_api {

    /**
     * Can this function be called directly from ajax?
     *
     * @return boolean
     * @since Moodle 2.9
     */
    public static function update_road_is_allowed_from_ajax() {
        return true;
    }

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function update_road_parameters() {
        return new external_function_parameters(
                array(
            'nameRoad' => new external_value(PARAM_RAW, 'collection id riddles in JSON format'),
            'idRoad' => new external_value(PARAM_INT, 'collection id riddles in JSON format'),
                )
        );
    }

    public static function update_road_returns() {
        return new external_single_structure(
                array(
            'json' => new external_value(PARAM_RAW, ''),
        ));
    }

    /**
     * Create groups
     * @param array $groups array of group description arrays (with keys groupname and courseid)
     * @return array of newly created groups
     */
    public static function update_road($nameRoad, $idRoad) { //Don't forget to set it as static
        self::validate_parameters(self::update_road_parameters(), array('nameRoad' => $nameRoad, 'idRoad' => $idRoad));
        if ($nameRoad !== '') {
            updateRoadBD($idRoad, $nameRoad);
        } else {
            return 'El nombre introducido no puede estar vacio';
        }
        return 'Actualizados';
    }

}

class mod_scavengerhunt_external_delete_road extends external_api {

    /**
     * Can this function be called directly from ajax?
     *
     * @return boolean
     * @since Moodle 2.9
     */
    public static function delete_road_is_allowed_from_ajax() {
        return true;
    }

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function delete_road_parameters() {
        return new external_function_parameters(
                array(
            'idRoad' => new external_value(PARAM_INT, 'collection id riddles in JSON format')
                )
        );
    }

    public static function delete_road_returns() {
        return new external_single_structure(
                array(
            'json' => new external_value(PARAM_RAW, ''),
        ));
    }

    /**
     * Create groups
     * @param array $groups array of group description arrays (with keys groupname and courseid)
     * @return array of newly created groups
     */
    public static function delete_road($idRiddles) { //Don't forget to set it as static
        self::validate_parameters(self::delete_road_parameters(), array('idRiddles' => $idRiddles));
            deleteRoadBD($idRoad);
        return 'Eliminado';
    }

}
