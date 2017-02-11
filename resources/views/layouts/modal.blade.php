<?php
use App\Modal;
$modal = Modal::where('active', 1)->limit(1)->get();
?>
@if($modal && $modal != NULL && count($modal) > 0)
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="heading-block topmargin-lg">
                                        <h3><strong>{!! $modal[0]->title !!}</strong></h3>
                                        <span>{!! $modal[0]->intro !!}</span>
                                    </div>
      </div>
      <div class="modal-body">
        <div class="control-group">
         <div class="row">
           <div class="col-md-12">
             <div class="container clearfix">

                                {!! $modal[0]->content !!}
                            </div>
           </div>
         </div>
         
        <br/>
      </div>
    </div>
  </div>
</div>
</div>
@endif