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
 *
 * @package    qtype
 * @subpackage ddmarker
 * @copyright  2012 The Open University
 * @author     Jamie Pratt <me@jamiep.org>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addmoreitems'] = 'Blancs per a {no} m�s marcadors';
$string['alttext'] = 'Text alternatiu';
$string['answer'] = 'Resposta';
$string['bgimage'] = 'Imatge de fons';
$string['confirmimagetargetconversion'] = 'Est�s apunt de convertir la pregunta basada en imatges de sota a una pregunta d\'arrossegar marcadors.';
$string['coords'] = 'Coordenades';
$string['convertingimagetargetquestion'] = 'Pregunta convertida "{$a->name}"';
$string['correctansweris'] = 'La resposta correcta �s: {$a}';
$string['draggableimage'] = 'Imatge arrossegable';
$string['draggableitem'] = '�tem arrossegable';
$string['draggableitemheader'] = '�tem arrossegable {$a}';
$string['draggableitemtype'] = 'Text';
$string['draggableword'] = 'Text arrossegable';
$string['dropbackground'] = 'Imatge de fons per arrossegar-hi marcadors';
$string['dropzone'] = 'Zona de dest� {$a}';
$string['dropzoneheader'] = 'Zones de dest�';
$string['followingarewrong'] = 'Els marcadors seg�ents s\'han col�locat al lloc incorrecte: {$a}.';
$string['followingarewrongandhighlighted'] = 'Els marcadrod seg�ents estan mal col�locats:  {$a}. El(s) marcador(s) destacats es mostren al lloc correcte .<br /> Fes clci al marcador per destacar l\'�rea permesa.';
$string['formerror_nobgimage'] = 'Has de triar una imatge de fons per fer servir a l\�rea d\'arrossegar i deixar anar.';
$string['formerror_noitemselected'] = 'Has triat una zona de dest� per� no has triat cap marcadro per arrossegar-hi';
$string['formerror_nosemicolons'] = 'No hi ha cap punt i coma a la cadena de coordenades. Les coordenades per a {$a->shape} s\'han d\'expressar - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Nom�s "{$a}" etiquetes estan permeses als marcadors';
$string['formerror_onlyusewholepositivenumbers'] = 'Si us plau fes servir nom�s nombres sencers positius per especificar les coordeandes x,y i/o l\'amplada i al�ada de les formes. Les coordenades per a {$a->shape} Les coordenades per a  - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Per fer una forma poligonal has d\'especificar almenys 3 punts. Les coordenades per a {$a->shape} s\'han d\'expressar - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'La forma que has definit surt dels l�mits de la imatge de fons';
$string['formerror_toomanysemicolons'] = 'Hi ha massa parts separades per punt i coma per a les coordenades que has definit.  Les coordenades per a {$a->shape} s\'han d\'expressar - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'L\'amplada i al�ada que has especificat no s�n v�lides. Les coordenades per a {$a->shape} s\'han d\'expressar - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'We do not recognise the x,y coordinates you have specified. Les coordenades per a {$a->shape} s\'han d\'expressar - {$a->coordsstring}.';
$string['imagetargetconverter'] = 'Converteix les preguntes basades en imatges a marcadors d\'arrossegar i deixar anar';
$string['infinite'] = 'Infinit';
$string['listitemconfirmcategory'] = 'About to convert all imagetarget questions in category "{$a->name}" (contains {$a->qcount} imagetarget questions)';
$string['listitemconfirmcontext'] = 'About to convert all imagetarget questions in context "{$a->name}" (contains {$a->qcount} imagetarget questions)';
$string['listitemconfirmquestion'] = 'About to convert question "{$a->name}"';
$string['listitemlistallcategory'] = 'Select all imagetarget questions in category "{$a->name}" (contains {$a->qcount} imagetarget questions)';
$string['listitemlistallcontext'] = 'Select all imagetarget questions in context "{$a->name}" (contains {$a->qcount} imagetarget questions)';
$string['listitemlistallquestion'] = 'Select question "{$a->name}"';
$string['listitemprocessingcategory'] = 'Converting all imagetarget questions in category "{$a->name}" (contains {$a->qcount} imagetarget questions)';
$string['listitemprocessingcontext'] = 'Converting all imagetarget questions in context "{$a->name}" (contains {$a->qcount} imagetarget questions)';
$string['listitemprocessingquestion'] = 'Converted question "{$a->name}"';
$string['marker'] = 'Marcador';
$string['marker_n'] = 'Marcador {no}';
$string['markers'] = 'Marcadors';
$string['nolabel'] = 'No hi ha text a l\'etiqueta';
$string['noquestionsfound'] = 'No s\'ha trobat cap pregunta per convertir.';
$string['pleasedragatleastonemarker'] = 'La resposta no est� completa, almenys has de despla�ar un marcador sobre la imatge.';
$string['pluginname'] = 'Arrossega i deixar anar marcadors';
$string['pluginname_help'] = 'selecciona una imatge de fons, afegeix text a les etiquetes pels marcadors i defineix les zones de dest� sobre la imatge de fons on s\'hauran d\'arrossegar.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'S\'est� afegint una pregunta d\'arrossegar i deixar anar marcadors';
$string['pluginnameediting'] = 'S\'est� editant una pregunta d\'arrossegar i deixar anar marcadors';
$string['pluginnamesummary'] = 'Els marcadors s\'han arrossegat i deixat anar sobre una imatge de fons.';
$string['previewarea'] = '�rea de previsualitzaci� -';
$string['previewareaheader'] = 'Previsualitza';
$string['previewareamessage'] = 'Selecciona una imatge de fons, afegeix text a les etiquetes pels marcadors i defineix les zones de dest� sobre la imatge de fons on s\'hauran d\'arrossegar.';
$string['refresh'] = 'Refresca la previsualitzaci�';
$string['clearwrongparts'] = 'Mou els marcadors col�locats de forma incorrecta a la seva posicio inicial a sota de la imatge';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Cercle';
$string['shape_circle_lowercase'] = 'cercle';
$string['shape_circle_coords'] = 'x,y;r (on x,y s�n les coordenades xy del centre del cercle i r �s el radi)';
$string['shape_rectangle'] = 'Rectangle';
$string['shape_rectangle_lowercase'] = 'rectangle';
$string['shape_rectangle_coords'] = 'x,y;w,h (on x,y s�n les coordenades xy de la cantonada superior esquerra del rectangle i, w i h s�n l\'amplada i l\'al�ada del rectancle)';
$string['shape_polygon'] = 'Pol�gon';
$string['shape_polygon_lowercase'] = 'poligon';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4....(on x1, y1 s�n les coordenades x,y del primer v�rtex, x2, y2 s�n les coordenades x,y del segon, etc. No �s necessari repetir les coordenades del primer v�rtex per tancar el pol�gon.)';
$string['showmisplaced'] = 'Destaca les zones de dest� que no tenen el marcador correcte.';
$string['shuffleimages'] = 'Barreja els �tems que s\'hauran d\'arrossegar cada vegada que es faci un nou intent.';
$string['stateincorrectlyplaced'] = 'Mantenir els marcadors col�locats de forma incorrecta';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zona de dest� {$a}';
$string['ytop'] = 'A dalt';