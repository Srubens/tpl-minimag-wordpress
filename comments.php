<?php 
   

   if( post_password_required() ){
	   	return;
   }

   if( have_comments() ){
	   foreach($comments as $comment){
?>
		<div class="box_comentario">
			<div class="foto_avatar">
				<?= get_avatar($comment, 60); ?>
			</div>
			<div class="comentario_area">
				<strong><?php comment_author() ?></strong>
				<?php comment_date(); ?>
				<?php comment_text(); ?>
			</div>
		</div>
		<hr>

<?php 
   }

   the_comments_pagination();

 }

//COLOCANDO OS CAMPOS DOS COMENTARIOS

$formComment = [
	'comment_field' => '<textarea name="comment"></textarea>',
	'fields' => array(
		'author' => '<input type="text" name="author" placeholder="seu nome"/>',
		'email' => '<input type="email" name="email" placeholder="seu email"/>',
		'url' => '<input type="text" name="url" placeholder="seu site"/>'
	),
	'class_submit' => 'botao',
	'label_submit' => 'Enviar comentario',
	'title_reply' => 'Deixe um comentario'
];


comment_form($formComment);