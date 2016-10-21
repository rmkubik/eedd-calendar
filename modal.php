<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <!-- <div class="modal-title">
         <a class="" href="#video-carousel" role="button" onclick="slideNext()" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
         <h4><?php echo getModalTitle(); ?></h4>
       </div> -->
       <div class="form-inline" style="text-align: center">
         <a id="next-month" class="btn btn-default" href="#video-carousel" role="button" onclick="slidePrev()" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
           <span class="sr-only">Previous</span>
         </a>
         <h4 class="modal-title"><?php echo getModalTitle(); ?></h4>
         <a id="next-month" class="btn btn-default" href="#video-carousel" role="button" onclick="slideNext()" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
     </div>
     <div class="modal-body">
      <div id="video-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <?php getInstaModal() ?>
        </div>
      </div>
    </div>
     <!-- <div class="modal-footer">
       <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
       <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
       <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
     </div> -->
   </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
