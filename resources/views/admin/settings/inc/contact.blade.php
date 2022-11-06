 <div class="row">
     <div class="col-md-9 grid-margin stretch-card">
         <div class="card">
             <div class="card-body">
                 <div class="input-group date timepicker" id="home" data-target-input="nearest">
                     <span class="input-group-text" data-target="#home" data-toggle="datetimepicker"><i
                             data-feather="home"></i></span>
                     <input type="text" name="address" value="{{ $settings->address ?? 'no data' }}"
                         class="form-control datetimepicker-input" data-target="#home" />
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-md-9 grid-margin stretch-card">
         <div class="card">
             <div class="card-body">
                 <div class="input-group date timepicker" id="phone" data-target-input="nearest">
                     <span class="input-group-text" data-target="#phone" data-toggle="datetimepicker"><i
                             data-feather="phone"></i></span>
                     <input type="text" name="phone" value="{{ $settings->phone ?? 'no data' }}"
                         class="form-control datetimepicker-input" data-target="#phone" />
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-md-9 grid-margin stretch-card">
         <div class="card">
             <div class="card-body">
                 <div class="input-group date timepicker" id="mobile" data-target-input="nearest">
                     <span class="input-group-text" data-target="#mobile" data-toggle="datetimepicker"><i
                             data-feather="phone"></i></span>
                     <input type="text" name="mobile" value="{{ $settings->mobile ?? 'no data' }}"
                         class="form-control datetimepicker-input" data-target="#mobile" />
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-md-9 grid-margin stretch-card">
         <div class="card">
             <div class="card-body">
                 <div class="input-group date timepicker" id="email" data-target-input="nearest">
                     <span class="input-group-text" data-target="#email" data-toggle="datetimepicker"><i
                             data-feather="mail"></i></span>
                     <input type="text" name="email" value="{{ $settings->email ?? 'no data' }}"
                         class="form-control datetimepicker-input" data-target="#email" />
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-md-9 grid-margin stretch-card">
         <div class="card">
             <div class="card-body">
                 <div class="input-group date timepicker" id="mobile_alt" data-target-input="nearest">
                     <span class="input-group-text" data-target="#mobile_alt" data-toggle="datetimepicker"><i
                             data-feather="phone"></i></span>
                     <input type="text" name="mobile_alt" value="{{ $settings->mobile_alt ?? 'no data' }}"
                         class="form-control datetimepicker-input" data-target="#mobile_alt" />
                 </div>
             </div>
         </div>
     </div>
 </div>
