<?php
queryInnsertCatImg (dbConnect (), 'category_img', "$_SERVER[DOCUMENT_ROOT]/public/img_content/");
$images = queryGetImages (dbConnect (), 'category_img');

mysqli_close(dbConnect ());