<x-layouts>

    <x-slot name="title">Sign Up</x-slot>





    <div class="row g-5">
        <div class="col-md-8  ">


               <div class="card mt-5">
                   <div class="card-header">Sign Up</div>

                   <div class="card-body">
                      <div class="row justify-content-center">
                          <div class="col-md-7 col-lg-8 pt-3 ">

                                <x-errors/>
                              <form class="needs-validation " method="post" action="{{route('register')}}">
                                  @csrf
                                  <div class="row g-3  ">
                                      <div class="col-12">
                                          <label for="firstName" class="form-label">First name</label>
                                          <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="firstName" name="first_name" value="{{old('first_name')}}" >
                                        <div class="invalid-feedback">Valid first name is required</div>
                                      </div>

                                      <div class="col-12">
                                          <label for="lastName" class="form-label">Last name</label>
                                          <input type="text" class="form-control  @error('last_name') is-invalid @enderror" id="lastName" name="last_name" value="{{old('last_name')}}" >

                                            <div class="invalid-feedback">Valid last name is required</div>

                                      </div>



                                      <div class="col-12">
                                          <label for="email" class="form-label">Email Address </label>
                                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="you@example.com" value="{{old('email')}}">
                                          <div class="invalid-feedback">Valid email is required</div>
                                      </div>

                                      <div class="col-12">
                                          <label for="password" class="form-label">Password </label>
                                          <input type="password" class="form-control" id="password" name="password">

                                      </div>

                                      <div class="col-12">
                                          <label for="password" class="form-label">Confirm Password </label>
                                          <input type="password" class="form-control" id="password" name="password" ">

                                      </div>






                                  </div>

                                  <hr class="my-4">






                                  <div class="text-end">
                                      <hr class="my-4">

                                      <button class=" btn btn-primary" type="submit">Sign up</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                   </div>

               </div>





        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <x-about/>

                <x-archives/>

                <x-elsewhere/>
            </div>
        </div>
    </div>

</x-layouts>

