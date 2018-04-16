<?php $imgratio = $img->ratio();
if($imgratio > $minratio && $imgratio <= $maxratio){$imgclass = 'stretch-w';}else{$imgclass = 'stretch-h';};
?>
<?= $imgclass ?>