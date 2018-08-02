<?php 
function createModal($id, $size, $icon, $title, $text, $isBtn, $isFooter) {
  $modal = "";
  $modal .= '<div class="modal fade" id="'.$id.'" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-'.$size.'">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="fa fa-fw fa-'.$icon.'"></span> '.$title.'</h4>
        </div>
        <div class="modal-body">
          <p class="text-center">'.$text.'</p>';
          if ($isBtn) {
          $modal .= '<button type="submit" class="btn btn-default btn-danger center-block" data-dismiss="modal"><span class="fa fa-fw fa-remove"></span> Close</button>
          <div class="clearfix"></div>';
          }
        $modal .= '</div>';
        if ($isFooter) {
          '<div class="modal-footer">
            <button type="submit" class="btn btn-default btn-danger pull-left" data-dismiss="modal"><span class="fa fa-fw fa-remove"></span> Close</button>
          </div>';
        }
      $modal .= '</div>
    </div>
  </div> ';
  return $modal;
}
?>