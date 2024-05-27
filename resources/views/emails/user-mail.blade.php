
     Ciao {{ $lead['customer_name'] }}

    Il tuo ordine è stato inviato.

    Ecco il ripilogo:
    
    Nome: {{ $lead['customer_name'] }}  
    Email: {{ $lead['customer_email'] }}  
    Numero: {{ $lead['customer_phone'] }}  
    Via: {{ $lead['customer_address'] }}  
    Totale: {{ $lead['order_total'] }} €
