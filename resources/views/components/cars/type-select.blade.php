
<x-form.select 
    {{ $attributes->except('choices') }}
    :choices="$choices" 
/>
