<?php

if ( isset( $_FILES['monFichier'] ) ) {
	// var_dump( $_FILES );
	move_uploaded_file( $_FILES['monFichier']['tmp_name'],
			"telechargements/".$_FILES['monFichier']['name'] );
}

?>
<form method="post" action="uploadimage.php"
                            enctype="multipart/form-data">
	<input type="file" name="monFichier"/><br/>
	<input type="submit" name="submit" value="Envoyer"/>
</form>

