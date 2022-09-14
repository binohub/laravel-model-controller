<div class="card col-2 m-4">
    <img class="card-img-top mb-2" src="https://media4.giphy.com/media/3oEjI6SIIHBdRxXI40/200.gif"
        alt="Not Disponible Image Of {{ $train->azienda }}">
    <div class="card-body">
        <h5 class="card-title">{{ $train->azienda }}</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $train->stazione_di_partenza }}</li>
        <li class="list-group-item">{{ $train->codice_treno }}</li>
    </ul>
</div>
