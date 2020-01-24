@extends('template')

@section('titre')
Les articles
@endsection

@section('contenu')
<p>C'est l'article n° <?php echo $numero ?></p>
<!-- Utilisation de Blade => écriture simplifié -->
<p>C'est l'article n° {{ $numero }}</p>
@endsection
