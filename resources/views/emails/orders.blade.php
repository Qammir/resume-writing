<x-mail::message>
# Order 

You have new order of Resume on your website Top Slack Resume
<br>
Click bellow button to see your order

<x-mail::button :url="'http://topslackresume.com'">
View Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
