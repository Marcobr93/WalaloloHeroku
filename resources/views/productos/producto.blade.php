@if($productos->isEmpty())
    <p>No hay productos para mostrar.</p>
@endif

@foreach($productos->chunk(3) as $chunk)
    <div class="card-group row course-set courses__row producto">
    @foreach($chunk as $producto)
                <div class="card col-md-4">
                    <div class="card-header bg-transparent border-primary">
                        <a href="/productos/show/{{ $producto['id'] }}">{{ $producto['titulo'] }} </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a class="btn pull-right"  href="/user/{{ $producto->user->slug }}">
                                {{ $producto->user->name }}
                            </a>
                        </h5>
                        <h5 class="card-img">
                            <a href="/productos/show/{{ $producto['id'] }}">
                                <img class="img-responsive img-fluid img-portfolio img-hover mb-3" src="{{ $producto['foto'] }}" alt="Foto del producto." />
                            </a>
                        </h5>
                        <p class="card-text">{{ $producto['descripcion'] }}</p>
                    </div>
                    <div class="card-footer bg-transparent border-primary">
                        <h4 class="price ng">
                            Precio: {{ $producto['precio'] }} €
                        </h4>
                    </div>
                </div>
        @endforeach
    </div>
@endforeach