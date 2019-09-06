@extends('amaster')

@section('content')

<div class="container">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome {{auth()->user()->name}}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>USER MENU</h4>
                            <hr>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/mycourses">My Courses</a></li>
                                <li class="list-group-item"><a href="#">Times table</a></li>
                                <li class="list-group-item active"><a href="#">My Payments</a></li>
                                <li class="list-group-item"><a href="/home">Register New Course</a></li>
                                <li class="list-group-item"><a href="/notifications">Notifications</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <h2>Send Course Content</h2>
                            <hr>
                            <form action="{{route('sendlist')}}" method="post">
                                @csrf
                                
                                <input type="hidden" name="id" value="{{$id}}">

                                <div class="form-group">
                                    <label for="subjectname">Course Title</label>
                                    <input type="text" class="form-control" name="subjectname" id="subjectname" value="{{$subjectname}}" readonly>
                                </div>                                

                                <div class="form-group">
                                    <label for="recipients">Enter Recipients</label>
                                    <input type="text" class="form-control" name="recipients" id="recipients" placeholder="Enter Recipient's E-mail(s)">
                                </div>
                                
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-primary">Send Course list</button>
                                </div>


                            </form>
                        </div>

                        <div class="col-md-4">
                            <h2>Payment Instructions</h2>
                            <hr>
                            <p>Please proceed to make through online payment, bank deposit, or mobile transfer.</p>
                            <hr>
                            
                            <p><h2>PAYMENT/BANKING DETAILS</h2>

                                Pay into any of these accounts<br>
                                
                                Bank Name: FIRST CITY MONUMENT BANK PLC<br>
                                
                                Account Number: 0136506015<br>
                                
                                Account Name: COINMAC INT’L. LTD.<br><br>
                                
                                OR
                                <br><br>
                                Bank Name:ZENITH BANK PLC, OLUYOLE BRANCH, IBADAN<br>
                                
                                Account Number:1012790202<br>
                                
                                Account Name:COINMAC INTERNATIONAL LIMITED.</p>
                                <p>Online Payment</p>
                                <hr>
                                ONLINE PAYMENT
                                <hr>
                                <p>Information for Online payment will be published here soon</p>
                                <p>
                                    <form >
                                        <div class="form-group">
                                          <label for="amountopay">Enter Amount to Pay in Naira</label>
                                          <input type="text" class="form-control" name="amountopay" id="amountopay" value="{{preg_replace("/[^0-9]/","",$amount)}}" placeholder="Amount in Naira">
                                          <input type="hidden" id="payment_for" name="payment_for" value="{{$subject->coursename}}">
                                          <input type="hidden" id="paidby" name="paidby" value="{{$subject->email}}">
                                          
                                        </div>
                                        <script src="https://js.paystack.co/v1/inline.js"></script>
                                        <button type="button" onclick="payWithPaystack()">Pay Online</button> 
                                    </form>
                                               
                                </p>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    
</div>
@endsection
