<p 
    {{ 
        $attributes->merge([
            'class' => 'text-slate-600 dark:text-white'
        ])
    }}    
>
    {{ $slot }}
</p>