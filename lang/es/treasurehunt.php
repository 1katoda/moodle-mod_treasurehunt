<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * English strings for treasurehunt
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    mod_treasurehunt
 * @copyright  2015 Your Name
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'Caza del tesoro';
$string['modulenameplural'] = 'Cazas del tesoro';
$string['modulename_help'] = 'Este m�dulo servir� para realizar una actividad de geolocalizaci�n';
$string['riddlename'] = 'Nombre de la pista';
$string['roadname'] = 'Nombre del camino';
$string['successlocation'] = '�Es el lugar correcto!';
$string['faillocation'] = 'No es el lugar correcto';
$string['successlocation'] = '�Es el lugar correcto!';
$string['mustcompleteboth'] = 'Debes responder correctamente a la pregunta y superar la actividad a completar antes de continuar';
$string['mustcompleteactivity'] = 'Debes superar la actividad a completar antes de continuar';
$string['mustanswerquestion'] = 'Debes responder correctamente a la pregunta antes de continuar';
$string['continue'] = 'Continuar';
$string['user'] = 'Usuario';
$string['group'] = 'Grupo';
$string['start'] = 'Empezar';
$string['updatetimes'] = 'Tiempos de actualizaci�n';
$string['locktimeediting'] = 'Tiempo de bloqueo de edici�n';
$string['locktimeediting_help'] = 'Tiempo en segundos durante el cual un usuario puede editar una instancia sin  renovar el bloqueo. Cuanto m�s grande es, menos peticiones de renovaci�n deben hacerse, pero m�s tiempo queda bloqueada la p�gina de edici�n una vez que el usuario termine. Debe ser mayor a 5 segundos, sino se fijar� el tiempo por defecto.';
$string['gameupdatetime'] = 'Tiempo de actualizaci�n de juego';
$string['gameupdatetime_help'] = 'Intervalo de tiempo en segundos entre una actualizaci�n del juego de un usuario y otra. Cuanto m�s grande es, menos peticiones de actualizaci�n deben hacerse, pero m�s tiempo pasa en informar de un posible cambio. Debe ser mayor a 0 segundos, sino se fijar� el tiempo por defecto.';
$string['configintro'] = 'Los valores fijados aqu� definen los valores por defecto usados en el formulario de especificaciones cuando usted crea una nueva caza del tesoro.';
$string['removealltreasurehuntattempts'] = 'Eliminar todos los intentos de resolver la caza del tesoro';
$string['attemptsdeleted'] = 'Eliminados intentos de resolver la caza del tesoro';
$string['gradesdeleted'] = 'Eliminadas calificaciones de la caza del tesoro';
$string['configmaximumgrade'] = 'Valor por defecto al que se ajustar� la calificaci�n de la caza del tesoro.';
$string['nogroupassigned'] = 'Ning�n grupo asignado a este camino';
$string['nouserassigned'] = 'Ning�n usuario asignado a este camino';
$string['overcomefirstriddle'] = 'Para descubrir la primera pista debes comenzar desde el �rea marcada en el mapa';
$string['noroads'] = 'Todav�a no se han a�adido caminos';
$string['attempt'] = 'Intento';
$string['historicalattempts'] = 'Historial de intentos de {$a}';
$string['aerialview'] = 'A�rea';
$string['roadview'] = 'Callejero';
$string['mapview'] = 'Vista del mapa';
$string['ost'] = 'Open Street Maps';
$string['noattempts'] = 'No has realizado ning�n intento';
$string['nouserattempts'] = '{$a} no ha realizado ning�n intento';
$string['state'] = 'Estado';
$string['play'] = 'Jugar';
$string['reviewofplay'] = 'Revisi�n del juego';
$string['treasurehuntclosed'] = 'Esta caza del tesoro est� cerrada desde el {$a}';
$string['treasurehuntcloseson'] = 'Esta caza del tesoro cerrar� el {$a}';
$string['loading'] = 'Cargando';
$string['updates'] = 'Actualizaciones';
$string['userprogress'] = 'El progreso de usuario se ha actualizado con �xito';
$string['usersprogress'] = 'Progreso de los usuarios';
$string['usersprogress_help'] = 'Indica el progreso de las pistas de cada alumno/grupo en funci�n de los colores: '
        . '<P>El color <B>verde</B> indica que la pista se ha superado sin fallos.</P>'
        . '<P>El color <B>amarillo</B> indica que la pista se ha superado con fallos.</P>'
        . '<P>El color <B>rojo</B> indica que la pista no se ha superado y se han cometido fallos.</P>'
        . '<P>El color <B>gris</B> indica que la pista no se ha superado y no se han cometido fallos.</P>';
$string['nomarks'] = 'Marca primero en el mapa el punto deseado.';
$string['noresults'] = 'No se han encontrado resultados.';
$string['startfromhere'] = 'Solo se puede empezar desde aqu�';
$string['userlocationovercome'] = 'Localizaci�n encontrada de la pista {$a->number} en la fecha: {$a->date}';
$string['userriddleovercome'] = 'Pista {$a->number} superada en la fecha: {$a->date}';
$string['userlocationfailed'] = 'Localizaci�n fallida de la pista {$a->number} en la fecha: {$a->date}';
$string['usercompletionovercome'] = 'Actividad a finalizar completada con �xito para la pista {$a->number} en la fecha: {$a->date}';
$string['userquestionfailed'] = 'Respuesta fallida a la pregunta de la pista {$a->number}  en la fecha: {$a->date}';
$string['userquestionovercome'] = 'Respuesta acertada a la pregunta de la pista {$a->number} en la fecha: {$a->date}';
$string['groupquestionovercome'] = 'Respuesta acertada por {$a->user} a la pregunta de la pista {$a->number} en la fecha: {$a->date}';
$string['groupquestionfailed'] = 'Respuesta fallida por {$a->user} a la pregunta de la pista {$a->number} en la fecha: {$a->date}';
$string['grouplocationovercome'] = 'Localizaci�n encontrada por {$a->user} de la pista {$a->number} en la fecha: {$a->date}';
$string['groupriddleovercome'] = 'Pista {$a->number} superada por {$a->user} en la fecha: {$a->date}';
$string['grouplocationfailed'] = 'Localizaci�n fallida por {$a->user} de la pista {$a->number} en la fecha: {$a->date}';
$string['groupcompletionovercome'] = 'Actividad a finalizar completada con �xito por {$a->user} para la pista {$a->number} en la fecha: {$a->date}';
$string['lockedriddle'] = 'Pista bloqueada';
$string['lockedcriddle'] = 'Debes realizar la actividad \'<strong>{$a}</strong>\' para desbloquear la pista';
$string['lockedqacriddle'] = 'Debes realizar la actividad \'<strong>{$a}</strong>\' y responder correctamente a la siguiente pregunta para desbloquear la pista';
$string['lockedqriddle'] = 'Debes responder correctamente a la siguiente pregunta para desbloquear la pista';
$string['treasurehuntname'] = 'Nombre de la caza del tesoro';
$string['treasurehuntname_help'] = 'Este es el contenido asociado al nombre. Soporta barra baja.';
$string['treasurehunt'] = 'Treasure hunt';
$string['notreasurehunts'] = 'A ver que sale D:';
$string['pluginadministration'] = 'Administraci�n de la caza del tesoro';
$string['pluginname'] = 'Caza del tesoro';
$string['question_treasurehunt'] = '�Esto funciona?';
$string['hello'] = 'Hola';
$string['question'] = 'Pregunta';
$string['welcome'] = 'Bienvenido a mi m�dulo de caza del tesoro, espero que lo disfrutes';
$string['addsimplequestion'] = 'A�adir pregunta simple';
$string['addsimplequestion_help'] = 'Permite a�adir una pregunta sencilla antes de mostrar la descripci�n de esta pista';
$string['road'] = 'Camino';
$string['riddle'] = 'Pista';
$string['add'] = 'A�adir';
$string['modify'] = 'Modificar';
$string['save'] = 'Guardar';
$string['remove'] = 'Eliminar';
$string['searchlocation'] = 'Buscar localizaci�n';
$string['savewarning'] = 'No ha guardado los cambios realizados.';
$string['removewarning'] = 'Si la eliminas ya no podras recuperarla';
$string['removeroadwarning'] = 'Si eliminas el camino se eliminaran todas las pistas asociadas y ya no podras recuperarlas';
$string['areyousure'] = '�Est�s seguro?';
$string['noasnwerselected'] = 'Debes seleccionar una respuesta';
$string['timeexceeded'] = 'Se ha superado el tiempo limite para realizar la actividad';
$string['huntcompleted'] = 'Ya has completado esta caza del tesoro';
$string['answerwarning'] = 'Debes responder primero a la pregunta';
$string['activitytoendwarning'] = 'Debes completar primero la actividad a resolver';
$string['overcomeactivitytoend'] = 'Actividad a completar superada';
$string['overcomeactivitytoendarq'] = 'Actividad a completar superada y pregunta eliminada';
$string['removedactivitytoend'] = 'Se ha eliminado la actividad a completar';
$string['removedquestion'] = 'Se ha eliminado la pregunta';
$string['warmatchanswer'] = 'La respuesta no corresponde con la pregunta';
$string['confirm'] = 'Confirmar';
$string['cancel'] = 'Cancelar';
$string['confirm_delete_riddle'] = 'Se eliminaron las pistas correctamente';
$string['saveemptyridle'] = 'Todas las pistas modificadas deben tener geometr�a antes de guardar';
$string['erremptyriddle'] = 'Todas las pistas deben tener al menos una geometr�a para que el camino sea v�lido';
$string['errvalidroad'] = 'Debe existir al menos dos pistas que tengan al menos una geometr�a para que el camino sea v�lido';
$string['eventriddleupdated'] = 'La pista ha sido actualizada';
$string['eventriddlecreated'] = 'La pista ha sido creada';
$string['eventriddledeleted'] = 'La pista ha sido eliminada';
$string['eventroadupdated'] = 'El camino ha sido actualizado';
$string['eventroadcreated'] = 'El camino ha sido creado';
$string['eventroaddeleted'] = 'El camino ha sido eliminado';
$string['treasurehunt:managetreasure'] = 'Administrar Caza del tesoro';
$string['treasurehunt:view'] = 'Ver la caza del tesoro';
$string['treasurehunt:addinstance'] = 'A�adir nueva caza del tesoro';
$string['treasurehuntislocked'] = '{$a} est� editando esta caza del tesoro. Intenta editarla dentro de unos minutos.';
$string['availability'] = 'Disponibilidad';
$string['restrictionsdiscoverriddle'] = 'Restricciones para descubrir la pista';
$string['groups'] = 'Grupos';
$string['edittreasurehunt'] = 'Editar caza del tesoro';
$string['editingtreasurehunt'] = 'Editando caza del tesoro';
$string['editriddle'] = 'Editar pista';
$string['editingriddle'] = 'Editando pista';
$string['addingriddle'] = 'A�adiendo pista';
$string['editroad'] = 'Editar camino';
$string['editingroad'] = 'Editando camino';
$string['addingroad'] = 'A�adiendo camino';
$string['gradingsummary'] = 'Sumario de calificaciones';
$string['groupmode'] = 'Juego en grupos';
$string['changetogroupmode'] = 'El modo de juego ha cambiado a jugar en grupos';
$string['changetoindividualmode'] = 'El modo de juego ha cambiado a jugar individual';
$string['changetoplaywithoutmove'] = 'El modo de juego ha cambiado a jugar sin desplazarse';
$string['changetoplaywithmove'] = 'El modo de juego ha cambiado a jugar desplaz�ndose';
$string['groupmode_help'] = 'Si est� habilitado los estudiantes se dividir�n en grupos en funci�n de la configuraci�n de grupos del curso. El juego del grupo ser� compartido entre los miembros del grupo y todos ellos ver�n los cambios producidos en el juego.';
$string['allowattemptsfromdate'] = 'Permitir intentos desde';
$string['allowattemptsfromdate_help'] = 'Si est� habilitado, los estudiantes no podr�n jugar antes de esta fecha. Si est� deshabilitado, los estudiantes podr�n comenzar a jugar de inmediato.';
$string['duedatereached'] = 'La fecha de vencimiento de esta tarea ya ha pasado';
$string['cutoffdate'] = 'Fecha l�mite';
$string['cutoffdatefromdatevalidation'] = 'La fecha l�mite debe ser posterior de la de inicio.';
$string['cutoffdate_help'] = 'Si se activa la opci�n, no se aceptar�n intentos despu�s de esta fecha sin una ampliaci�n.';
$string['alwaysshowdescription'] = 'Mostrar siempre la descripci�n';
$string['alwaysshowdescription_help'] = 'Si est� deshabilitado, la Descripci�n de la Caza del tesoro superior solo ser� visible para los estudiantes en la fecha "Permitir intentos desde".';
/* * Template */
$string['sendlotacion_title'] = '�Est�s seguro de que deseas enviar esta ubicaci�n?';
$string['sendlotacion_content'] = 'Esta acci�n no se puede deshacer.';
$string['cancel'] = 'Cancelar';
$string['send'] = 'Enviar';
$string['exit'] = 'Salir';
$string['back'] = 'Atr�s';
$string['layers'] = 'Layers';
$string['searching'] = 'Buscando';
$string['discoveredriddle'] = 'Pista descubierta';
$string['failedlocation'] = 'Localizaci�n fallada';
$string['riddledescription'] = 'Descripci�n para localizar la siguiente pista';
$string['riddledescription_help'] = 'Aqu� se debe describir la pista para alcanzar '
        . 'la siguiente localizaci�n. En el caso de que esta sea la �ltima pista debe dejar '
        . 'un mensaje de retroalimentaci�n indicando que la caza del tesoro ha finalizado';
$string['info_validate_location'] = 'Validar ubicaci�n para esta pista';
$string['button_validate_location'] = 'Validar ubicaci�n';
$string['search'] = 'Buscar';
$string['info'] = 'Informaci�n';
$string['riddles'] = 'Pistas';
$string['playwithoutmove'] = 'Jugar sin desplazarse';
$string['playwithoutmove_help'] = 'Si esta opci�n se habilita los alumnos podr�n jugar sin desplazarse a los lugares. Para ello cada vez que el alumno realiza un click simple sobre el mapa se crea una marca, borrando la anterior si existiese, indicando el �ltimo punto deseado.';
$string['groupid'] = 'Grupo asignado al camino';
$string['groupid_help'] = 'Los usuarios de este grupo son asignados a este camino cuando empieza el juego. Si s�lo existe un camino y la opci�n seleccionada es "ninguno", todos los participantes de la actividad jugar�n por �l';
$string['groupingid'] = 'Agrupaci�n asignada al camino';
$string['groupingid_help'] = 'Los grupos de esta agrupaci�n son asignados a este camino cuando empieza el juego';
$string['activitytoend'] = 'Completar antes la actividad seleccionada';
$string['activitytoend_help'] = 'La actividad seleccionada deber� completarse antes de que se muestre la pista actual. Para que las actividades del curso se muestren en la lista debe estar habilitada la terminaci�n de actividad en la configuraci�n de Moodle, en la configuraci�n del curso y en la propia actividad.';
$string['noteam'] = 'No es miembro de ning�n grupo';
$string['noexsitsriddle'] = 'No existe la pista n�mero {$a} en la base de datos. Recargue la p�gina';
$string['noteamplay'] = 'No es miembro de ning�n grupo, por lo que no puede realizar la actividad.';
$string['notdeleteriddle'] = 'Ya se han realizado intentos sobre este camino, no puedes eliminar ninguna pista.';
$string['notcreateriddle'] = 'Ya se han realizado intentos sobre este camino, no puedes a�adir m�s pistas.';
$string['notchangeorderriddle'] = 'No puedes cambiar el orden de las pistas una vez que se han realizado intentos sobre el camino.';
$string['invalidassignedroad'] = 'El camino asignado no est� validado';
$string['invalroadid'] = 'El camino no est� validado';
$string['multipleteamsplay'] = 'Es miembro de m�s de un grupo, por lo que no puede realizar la actividad.';
$string['timelabelfailed'] = 'Ubicaci�n enviada en la fecha: ';
$string['timelabelsuccess'] = 'Pista descubierta en la fecha: ';
$string['nogroupplay'] = 'No tienes ning�n camino asignado, por lo que no puedes jugar la actividad.';
$string['nogroupingplay'] = 'No tienes ning�n grupo asignado a un camino, por lo que no puedes jugar la actividad.';
$string['nogrouproad'] = '{$a} no tiene ning�n camino asignado.';
$string['groupmultipleroads'] = '{$a} tiene m�s de un camino asignado.';
$string['groupinvalidroad'] = '{$a} tiene asignado un camino no validado.';
$string['nouserroad'] = '{$a} no tiene ning�n camino asignado.';
$string['error'] = 'Error';
$string['usermultiplesameroad'] = '{$a} pertenece a m�s de un grupo asignado al mismo camino.';
$string['usermultipleroads'] = '{$a} tiene m�s de un camino asignado.';
$string['userinvalidroad'] = '{$a} tiene asignado un camino no validado.';
$string['multiplegroupsplay'] = 'Tienes asignados m�s de un camino, por lo que no puedes jugar la actividad.';
$string['multiplegroupingsplay'] = 'Tu grupo tiene asignados m�s de un camino, por lo que no puedes jugar la actividad.';
$string['multiplegroupssameroadplay'] = 'Perteneces a m�s de un grupo asignado al mismo camino, por lo que no puedes jugar la actividad.';
$string['warnusersgrouping'] = 'Los siguientes grupos pertenecen a m�s de una agrupaci�n: {$a}, por lo que no son capaces de jugar la actividad.';
$string['warnusersgroup'] = 'Los siguientes usuarios pertenecen a m�s de un grupo: {$a}, por lo que no son capaces de jugar la actividad.';
$string['warnusersoutside'] = 'Los siguientes usuarios no pertenecen a ning�n grupo/agrupaci�n: {$a}, por lo que no son capaces de jugar la actividad.';
$string['correctanswer'] = 'Respuesta correcta.';
$string['incorrectanswer'] = 'Respuesta incorrecta.';
$string['errcorrectsetanswerblank'] = 'Respuesta correcta marcada, pero la respuesta est� vac�a';
$string['errnocorrectanswers'] = 'Debe haber solo una respuesta correcta';
$string['errcorrectanswers'] = 'Debe seleccionar una respuesta correcta';
$string['erroutoftimeanswer'] = 'No es posible enviar la respuesta, est�s fuera del tiempo de entrega';
$string['erroutoftimelocation'] = 'No es posible enviar la localizaci�n, est�s fuera del tiempo de entrega';
$string['errsendinganswer'] = 'El camino se ha actualizado mientras enviabas la respuesta, vuelvelo a intentar';
$string['errsendinglocation'] = 'El camino se ha actualizado mientras enviabas tu localizaci�n, vuelvelo a intentar';
$string['gradefromtime'] = 'Puntuaci�n por tiempo';
$string['gradefromriddles'] = 'Puntuaci�n por pistas';
$string['gradefromposition'] = 'Puntuaci�n por posici�n';
$string['grademethodinfo'] = 'M�todo de calificaci�n: {$a}';
$string['backtocourse'] = 'Volver al curso';
$string['edition'] = 'Panel de edici�n';
$string['edition_help'] = 'Para habilitar el panel de creaci�n y edici�n de geometr�as debe seleccionar la pista que desea editar';
$string['grademethod'] = 'M�todo de calificaci�n';
$string['grademethod_help'] = '<P><B>Puntuaci�n por pistas</B><P>
<UL>
<P>Cada jugador (o equipo) puntua de forma proporcional al n�mero de pistas
resueltas, siendo el 100% de la calificaci�n m�xima cuando se ha completado el camino
y 0 cuando no se ha resuelto ninguna pista.</UL>
<P><B>Puntuaci�n por tiempo</B><P>
<UL>
<P>El ganador de la caza es el que marca el mejor tiempo. La calificaci�n se calcula interpolando el tiempo 
de finalizaci�n, siendo el 50% de la calificaci�n m�xima el peor tiempo de finalizaci�n y el 100% el mejor. 
Los jugadores que no terminaron la caza reciben una calificaci�n por debajo del 50% calculado simplemente por el n�mero de pistas resueltas.
</UL>
<P><B>Puntuaci�n por posici�n</B><P>
<UL>
<P>La puntuaci�n se calcula interpolando la posici�n en el ranking,
siendo el 100% de la calificaci�n m�xima para al primer jugador (o equipo)
en finalizar y 50% para el �ltimo jugador. Los jugadores que no terminaron 
la caza reciben una calificaci�n por debajo del 50% calculado simplemente
por el n�mero de pistas resueltas.</UL>';
$string['gradepenlocation'] = 'Penalizaci�n por fallo en localizaci�n';
$string['gradepenanswer'] = 'Penalizaci�n por fallo en respuesta';
$string['gradepenlocation_help'] = 'La penalizaci�n es expresada en % de la calificaci�n. '
        . 'Por ejemplo, si la penalizaci�n es 5.4, un jugador con 3 fallos penalizar� su '
        . 'nota en un 16.2%, es decir, recibir� el 83.8% de la calificaci�n calculada con el resto de criterios.';
$string['errpenalizationexceed'] = 'La penalizaci�n no puede ser mayor que 100';
$string['errpenalizationfall'] = 'La penalizaci�n no puede ser menor que 0';
$string['errnumeric'] = 'Debe introducir un n�mero decimal v�lido';
$string['treasurehuntnotavailable'] = 'Esta caza del tesoro no estar� disponible hasta el {$a}';
$string['treasurehuntopenedon'] = 'Esta caza del tesoro est� abierta desde el {$a}';
$string['treasurehunt:addriddle'] = 'A�adir pista';
$string['treasurehunt:addroad'] = 'A�adir camino';
$string['treasurehunt:editriddle'] = 'Editar pista';
$string['treasurehunt:editroad'] = 'Editar camino';
$string['treasurehunt:managetreasurehunt'] = 'Gestionar caza del tesoro';
$string['treasurehunt:play'] = 'Jugar';
$string['treasurehunt:viewusershistoricalattempts'] = 'Ver el historial de intentos de los usuarios';




