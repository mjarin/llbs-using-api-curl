<div class="modal fade" id="updateorders" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" style="max-width: 600px!important;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Update Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                <form id="form" class="form-horizontal" action="{{ url('update-order') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" class="form-control" name="order_id_hidden" id="order_id_hidden">
                    <div class="form-group row">
                        <label for="order_id" class="col-sm-4 col-form-label">Order Id</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="order_id" id="order_id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="delivery_date" class="col-sm-4 col-form-label">Delivery Date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="delivery_date" id="delivery_date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="delivery_status" class="col-sm-4 col-form-label">Delivery Status</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="delivery_status" id="delivery_status" required="">
                                <option selected="" value="Pending">Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="On Hold">On Hold</option>
                                <option value="Complete">Complete</option>
                                <option value="Cancel">Cancel</option>
                                <option value="Returned">Returned</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="remarks" class="col-sm-4 col-form-label">Remarks</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="remarks" id="remarks">
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
