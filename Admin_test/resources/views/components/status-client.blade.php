<p  class="rounded-full font-bold w-fit px-2" style="background: {{ $client->status === 'Active' ? 'rgb(220 252 231)' : ($client->status === 'Inactive' ? 'rgb(254 202 202)' : 'rgb(254 249 195)')}}; color: {{ $client->status === 'Active' ? 'rgb(20 83 45)' : ($client->status === 'Inactive' ? 'rgb(127 29 29)' : 'rgb(113 63 18)')}} " >
    {{ $client->status }}
</p>