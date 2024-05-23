@php
    use Astrogoat\PebblePost\Settings\PebblePostSettings;

    $settings = app(PebblePostSettings::class);
@endphp

@if($settings->enabled && filled($settings->brand_id))
    <script>
        window._pp = window._pp || [];
        _pp.brid = "{{ $settings->brand_id }}";
        _pp.brcid = "{{ strata_user_id() }}";
        _pp.sessionId = "{{ session()->getId() }}";
        // _pp.email = "";
        // _pp.orderValue = "";
        // _pp.orderId = "";
        // _pp.offerCode = "";
        // _pp.customerIp = "";
        (function() {
            var ppjs = document.createElement('script');
            ppjs.type = 'text/javascript';
            ppjs.async = true;
            ppjs.src = ('https:' == document.location.protocol ? 'https:' : 'http:') +
                '//cdn.pbbl.co/r/' + _pp.brid + '.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ppjs, s);
        })();
    </script>
@endif
