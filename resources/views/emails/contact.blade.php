You received a message from Sabkomedicine.com:

<p>
    Name: {{ $name }}
</p>

<p>
    Email:  {{ $email }}
</p>

<p>
    Phone:  {{ $phone }}
</p>

<p>
  Address:  {{ $address }}
</p>

<p>
   Medicine: {{ $medicine }}
</p>

<p>
    Quantity: {{ $quantity }}
</p>

<p>
    Usage: {{ $usage }}
</p>

<p>
    NGO: {{ $ngo }}
</p>

<p>
    DATE: {{
    $mytime = Carbon\Carbon::now()
    }}
</p>