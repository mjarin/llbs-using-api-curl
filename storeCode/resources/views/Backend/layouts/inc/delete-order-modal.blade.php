<div class="modal fade" id="deleteOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="max-width: 500px!important;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="text-uppercase mt-3"><b>Delete Order</b></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                <form id="form" class="form-horizontal" action="{{ url('delete-order') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="hidden_order_id" id="hidden_order_id">
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">

                            <h4 class="font-weight-bold" id="order_id"></h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash mr-2">
                            </i>Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
