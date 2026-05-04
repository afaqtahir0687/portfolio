<x-mail::message>
# Thank you for reaching out!

Hi {{ $data['name'] }},

I have received your message and I'm excited to connect with you. I usually respond within 24-48 hours.

In the meantime, feel free to check out my latest projects or follow me on my social media.

<x-mail::button :url="route('home')">
Visit Portfolio
</x-mail::button>

Best regards,<br>
**Afaq Tahir**
</x-mail::message>