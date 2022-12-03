<div class="text-end">

    <a href="{{route("backend.$module_name.destroy", $data)}}" class="btn btn-danger" data-method="DELETE"
     data-token="{{csrf_token()}}" data-toggle="tooltip" title="{{__('labels.backend.delete')}}"><i class="fas fa-trash-alt"></i></a>

</div>
