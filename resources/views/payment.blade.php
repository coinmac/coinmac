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
                                <li class="list-group-item disabled"><a href="#">Notifications</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h2>PAYMENT FORM</h2>
                            <hr>
                            <form action="{{route('paycourse', $subject->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="subjectid" value="{{$subject->subjectid}}">
                                <div class="form-group">
                                  <label for="coursename">Course Title</label>
                                  <input type="text" class="form-control" name="coursename" value="{{$subject->subjectname}}" id="coursename" placeholder="Course Title" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="text" class="form-control" name="amount" value="{{$amount}}" id="amount" placeholder="Amount">
                                </div>

                                <div class="form-group">
                                    <label for="payername">Payers Name</label>
                                    <input type="text" class="form-control" name="payername" id="payername" placeholder="Who made the payment">
                                </div>

                                <div class="form-group">
                                    <label for="Paymentmethod">Payment Method</label>
                                    <select id="Paymentmethod" class="form-control" name="paymentmethod">
                                        <option value="Bank Deposit">Bank Deposit</option>
                                        <option value="Online Transfer">Online Transfer</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="bank">Payment Method</label>
                                    <select id="bank" class="form-control" name="bank">
                                        <option value="FCMB">FCMB</option>
                                        <option value="Zennith Bank">Zennith Bank</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="payparticulars">Payment Ref</label>
                                    <input type="text" class="form-control" name="payparticulars" id="payparticulars" placeholder="Transfer Ref/Teller/Check No">
                                </div>

                                <div class="form-group">
                                    <label for="datepaid">Date of Payment</label>
                                    <input type="date" class="form-control" name="datepaid" id="datepaid" placeholder="Date of Payment">
                                </div>

                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-primary">Send Payment</button>
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
                                        <script src="https://js.paystack.co/v1/inline.js"></script>
                                        <button type="button" onclick="payWithPaystack({{preg_replace("/[^0-9]/","",$amount)}})">Pay Online</button> 
                                    </form>
                                               
                                </p>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    
</div>
@endsection
