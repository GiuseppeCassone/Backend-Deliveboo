<x-mail::message>
     Ciao {{ $orderEmailUser['customer_name'] }}

    Il tuo ordine è stato inviato.

    Ecco il ripilogo:
    
    Nome: {{ $orderEmailUser['customer_name'] }}  
    Email: {{ $orderEmailUser['customer_email'] }}  
    Numero: {{ $orderEmailUser['customer_phone'] }}  
    Via: {{ $orderEmailUser['customer_address'] }}  
    Totale: {{ $orderEmailUser['order_total'] }} €
</x-mail::message>