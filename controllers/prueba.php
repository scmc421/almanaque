RECETAS SALUDABLES
https://www.facebook.com/IDRDBogota/videos/712842732824903/

//MatriculaSearch.php
Public function buscarCurso($data, $id) {
	$modelbuscar = Curso::findOne($data→idCurso);
$content = $modelbuscar→NomCurso;
return $content;
}

Public function buscarEstudiante($data, $id) {
	$modelbuscar = Estudiante::findOne($data->idEstudiante);
$content = $modelbuscar→apell->do.“ ”.$modelbuscar-> nombre
return $content;
}
EN EL INDEX.PHP BUSCAR GRIDVIEW::WIDGET
<?= GridView::widget([
	‘dataProvider’=>$dataProvider,
	‘filterModel’=>$searchModel,
	‘columns’=>[
		[‘class’=> ‘yii\grid\SerialColumn’],
			
		   ‘idmatricula’, [
		    ‘attribute’ = >‘idcurso’,
		    ‘value’=>array($searchModel, ‘buscarCurso’),
		    ‘filter’=> 
Html::activeDropDownList($searchModel, ‘idcurso’, ArrayHelper
         ::map(curso::find()-→all(), ‘idcurso’, ‘nomcurso’),
[‘prompt’]=>‘----seleccione el Curso-----’, ])
	] ,
	[
	‘attribute’-> ‘codestudiante’,
	‘value’→array($searchModel, ‘buscarEstudiante’)
>
EN MATRICULA FORM TAMBIÉN SE CAMBA
Se hacen las dos listas desplegables:
<?= $form > field($model, ‘codestudiante’)-> dropDownList(
      ArrayHelper::map(Estudiante::find() - > all (), ‘codigo’,
      ‘apellido’),
[‘prompt’=> ‘select estudiante**’,               ]);?>


<?= $form -> field($model, ‘notaF’)-> textInput([‘maxlength’=> true]) ?>
<?= minuto 5:26>