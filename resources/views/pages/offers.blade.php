@extends('layouts.app')

@section('content')
<div id="offers-page">
    <div class="content-box">
         <div class="row">
            <div class="col-md-9 offset-md-1">
                <h1>Sign Up For Offers</h1>
                <form>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstnameinput">First Name</label>
                        <input type="text" name="fname" class="form-control" id="irstnameinput" placeholder="John ">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastnameinput">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="lastnameinput" placeholder="Smith">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="emailinput">Email address</label>
                        <input type="email" name="email" class="form-control" id="emailinput" placeholder="name@example.com">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="emailinput">Email address</label>
                        <input type="email" name="email" class="form-control" id="emailinput" placeholder="name@example.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <p class="col-md-6">
                      I acknowledge Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure accusamus magnam totam fugiat consequuntur quisquam, facere alias optio, vel natus recusandae nisi voluptatibus dignissimos ipsum quasi laborum error excepturi reprehenderit!
                    </p>
                    <div class="form-group col-md-6">
                      <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                  </div>



                </form>
            </div>
            
        </div>
    </>
</div>
@endsection