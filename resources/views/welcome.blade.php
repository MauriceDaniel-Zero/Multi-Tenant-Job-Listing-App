<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/default.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Changing the title according to tenant -->
        @if(!Spatie\Multitenancy\Models\Tenant::current())
            <title>Job Listing Domain</title>
        @else
            <title>{{app('currentTenant')->name}}</title>
        @endif
        <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.x/css/font-awesome.min.css" rel="stylesheet">

</head>
    <body class="antialiased">
         <div class="wrapper">

        <!-- Only show jetstream auth in Tenant -->
        @if(Spatie\Multitenancy\Models\Tenant::current())
            @if(Spatie\Multitenancy\Models\Tenant::current()->id==1)
                <img src="/images/vue.png" style="width:4rem; height: auto;">
            @elseif(Spatie\Multitenancy\Models\Tenant::current()->id==2)
                <img src="/images/javascript.png" style="width:8rem; height: auto;">
            @else
                <img src="/images/php.png" style="width:7rem; height: auto;">
            @endif


                    <h3>{{app('currentTenant')->name}}</h3>
                    <div class="card">
                           <p><strong>Company Description:</strong> {{app('currentTenant')->description}}</p>
                    </div>
                    <h5>Login to view available jobs or Register to create jobs</h5>

                    @if (Route::has('login'))
                    <div class="login">
                        @auth 
                                <a href="{{ url('/dashboard') }} " >Dashboard</a>                                
                            @else
                                <a href="{{ route('login') }}" class="btn">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                @else

                <img src="/images/domain.png" style="width:4rem;">
                <h2 >This is the Domain</h2>
                <div class="card">
                        <h3>Multi-Tenant Job Listing App</h3>
                        <p>
                            Domain ipsum dolor sit amet, consectetur adipiscing elit. Rationis enim perfectio est virtus; Tria genera bonorum; Sed haec in pueris; Quippe: habes enim a rhetoribus; 
                            Beatum, inquit. Non est ista, inquam, Piso, magna dissensio. Huius, Lyco, oratione locuples, rebus ipsis ielunior. Duo Reges: constructio interrete. Deprehensus omnem poenam contemnet.
                        </p>
                </div>
                @endif
            </div>
    </body>
</html>
