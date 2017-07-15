<div class="btn-group btn-group-lg" role="group" aria-label="...">
    <a href="/dashboard/meals" type="button" class="btn btn-primary">Overzicht</a>
    <a href="/dashboard/meals/today" type="button" class="btn btn-primary">Vandaag</a>
</div>

<div class="btn-group btn-group-lg" role="group" aria-label="...">
    <a href="/dashboard/meals/today" type="button" class="btn btn-secundary"><span class="fa fa-qrcode"></span> Scan QR</a>
</div>

@if(Auth::user()->admin == 1 && Auth::user()->isApproved == 1)
    <div class="btn-group btn-group-xs" role="group" aria-label="...">
        <a href="/dashboard/meals/create" type="button" class="btn btn-success"><span class="fa fa-plus"></span> Maaltijd toevoegen</a>
    </div>
@endif