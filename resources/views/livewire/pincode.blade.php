<div>
    <div class="form-group" style="padding:20px;"> 
        <input type="text" class="form-control" name="pincode" wire:model="pincode"  placeholder="Current Pin Code" pattern="[1-9][0-9]{5}"  required="">
        <br><br>
        @error('pincode') <span class="text-danger">{{ $message }}</span> @enderror
      
    </div>


@php
                                                          
                                                          $pcode=App\Models\postoffice::where('Pincode',$pincode )->first();
                                                       
                                                                    @endphp


@if (empty($pcode))

<span id="alert" style="color:red;">  </span>

    
@else

<div class="col-lg-12 text-center" style="    margin-top: -69px;
">
    <h3>
        
        <span  style="color:red;"><h3><b>Yes! We are servicable in your area :<br>{{$pcode->City}}, {{$pcode->State}}</b></h3><br><span style="color:black;"><h3 style="    margin-top: -19px;
            "><b>119</b> customers from your area are currently applying with us</h3>
            <br><a class="btn btn-primary display-4" href="#home">Apply For A Loan Now</a></span></span>
        
    </h3>
</div>



@endif


</div>
