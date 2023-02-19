# Consultar DB en componente Livewire

Al crear un componente livewire se crean dos archivos, uno para la vista y otro para tipo controlador.

Considerando el controlador:

```php
    public function render()
    {
        // Consultar la DB
        $salario = Salario::all();
        return view('livewire.crear-vacante',[
            'salarios' => $salario,
        ]);
    }
```

Considerando la vista:

```php
    //La variable se encuentra disponible
    <option>-- Seleccione --</option>
    @foreach ($salarios as $salario)
        <option value="{{$salario->id}}">{{$salario->salario}}</option>
    @endforeach
```