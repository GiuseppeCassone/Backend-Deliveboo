
     Ciao {{ $lead }}

    Hai ricevuto un nuovo ordine!

    **Da:**

    Nome: {{ $lead['customer_name'] }}  
    Email: {{ $lead['email'] }}  
    Numero: {{ $lead['phone'] }}  
    Via: {{ $lead['address'] }}  
    Totale: {{ $lead['price'] }} €