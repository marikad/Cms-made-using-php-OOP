<?php include("includes/init.php"); ?>
<?php if (!$session->is_signed_in()) {redirect('login.php');} ?>


<?php 

if (empty($_GET['id'])) {
    redirect("comments.php");
}

$comment = Comment::find_by_id($_GET['id']);

if ($comment) {
    $comment->destroy();
    redirect("comment_photo.php?id=<?php {$comment->photo_id} ?>");
    // echo $session->message('Comment {$comment->id} has been deleted');
} else{
    redirect("comment_photo.php?id=<?php {$comment->photo_id} ?>");
}






?>