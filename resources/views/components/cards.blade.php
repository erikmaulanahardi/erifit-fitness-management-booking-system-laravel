<div {{ $attributes->merge(['class' => 'flex flex-col justify-between rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-500 hover:shadow-lg']) }}>
    {{ $slot }}
</div>