@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Información del contacto</div>

          <div class="card-body">

            <div class="d-flex justify-content-center">
              <img class="profile-picture"
                src="{{ Storage::url($contact->profile_picture) }}">
            </div>
            <p>Nombre: {{ $contact->name }}</p>
            <p>Email: <a href="mailto:{{ $contact->email }}">
                {{ $contact->email }}
              </a>
            </p>
            <p>Edad: {{ $contact->age }}</p>
            <p>Número de teléfono: <a href="tel:{{ $contact->phone_number }}">
                {{ $contact->phone_number }}
              </a>
            </p>
            <p>Creado: {{ $contact->created_at }}</p>
            <p>Última actualización: {{ $contact->updated_at }}</p>

            <div class="d-flex justify-content-center">
              <a href="{{ route('contacts.edit', $contact->id) }}"
                class="btn btn-secondary mb-2 me-2">Editar Contacto</a>
              <form action="{{ route('contacts.destroy', $contact->id) }}"
                method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger mb-2">Borrar
                  Contacto</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
