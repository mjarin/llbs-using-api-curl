<!-- Modal -->
<div class="modal fade" id="buy_now_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="max-width:650px!important; max-height:200px!important;" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="">
              <div class="text-center mb-5">
                  <i class="fa  fa-check-circle fa-3x text-success success-icon"></i>
                  <i class="fas fa-exclamation-triangle fa-2x text-danger modal-warning-icon"></i>

                  <h6 class="item-added-to-cart mt-3"  style="font-weight:bold; font-size:30px; margin-bottom:2%;">Item added to your cart!</h5>
              </div>
              <div class="modal-footer text-center">
              {{-- <a href="{{url('/')}}"><button type="button" style=" font-size:25px;border:none; border-radius:0!important;font-weight:bold;" class="btn btn-outline-secondary mb-2 mb-sm-0 mt-1 "data-bs-dismiss="modal">Back to shopping</button></a> --}}
                <a style="border:none; border-radius:0!important; background:#FA7021;!important;font-size:25px;" href="{{ url('/view-cart') }}" class="btn btn-success mb-2 mb-sm-0 mt-1">Proceed to Checkout</a>
              </div>

        </div>
          </div>
      </div>
  </div>
  </div>
        </div>

      </div>
    </div>
  </div>
