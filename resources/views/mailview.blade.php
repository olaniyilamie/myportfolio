@if ($contactform['subject'])
<h3>Babe, this message is from you portfolio</h3>
<p><b>Name:</b>{{$contactform['name']}}</p>
<p><b>Email:</b> {{$contactform['email']}}</p>
<p><b>Phone-number:</b> {{$contactform['number']}}</p>
<p><b>Subject:</b> <b>{{$contactform['subject']}}</p>
<p><b>Details:</b> {{$contactform['detail']}}</p>
@endif
    

@if ($contactform['budget'])
    <h3><b>Babe, this message is from you portfolio</h3>
    <p><b>Name:</b> <b>{{$contactform['name']}}</b></p>
    <p><b>Email:</b> {{$contactform['email']}}</p>
    <p><b>Phone-number:</b> {{$contactform['number']}}</p>
    <p><b>Service required:</b> {{$contactform['typeservice']}}</p>
    <p><b>Budget:</b> &#8358;{{number_format($contactform['budget'],2)}}</p>
@endif

@if ($contactform['companyname'])
    <h3>Babe, this message is from you portfolio</h3>
    <p><b>Company:</b> {{$contactform['companyname']}}</p>
    <p><b>Email:</b> {{$contactform['email']}}</p>
    <p><b>Phone-number:</b> {{$contactform['phonenumber']}}</p>
    <p><b>Address:</b> {{$contactform['address']}}</p>
    <p><b>Details:</b> {{$contactform['Details']}}</p>
@endif