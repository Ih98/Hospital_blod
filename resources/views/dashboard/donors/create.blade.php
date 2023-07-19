@extends('dashboard.layouts.app')

@section('content')
    <form method="POST" action="{{ route('dashboard.donors.store') }}">
        @csrf
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-2">
            <label class="required form-label">الإسم</label>
            <input type="text" class="form-control form-control-solid" name="nom" value="{{ old('nom') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">اللقب</label>
            <input type="text" class="form-control form-control-solid" name="prenom" value="{{ old('prenom') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">العنوان</label>
            <input type="text" class="form-control form-control-solid" name="adresse" value="{{ old('adresse') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">الهاتف</label>
            <input type="text" class="form-control form-control-solid" name="telephone" value="{{ old('telephone') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">زمرة الدم</label>
            <select name="groupage" class="form-select">
                <option value="A+" {{ old('groupage') == 'A+' ? 'selected' : '' }}>A+</option>
                <option value="A-" {{ old('groupage') == 'A-' ? 'selected' : '' }}>A-</option>
                <option value="B+" {{ old('groupage') == 'B+' ? 'selected' : '' }}>B+</option>
                <option value="B-" {{ old('groupage') == 'B-' ? 'selected' : '' }}>B-</option>
                <option value="AB+" {{ old('groupage') == 'AB+' ? 'selected' : '' }}>AB+</option>
                <option value="AB-" {{ old('groupage') == 'AB-' ? 'selected' : '' }}>AB-</option>
                <option value="O+" {{ old('groupage') == 'O+' ? 'selected' : '' }}>O+</option>
                <option value="O-" {{ old('groupage') == 'O-' ? 'selected' : '' }}>O-</option>
            </select>            
        </div>
        <div class="mb-2">
            <label class="required form-label">تاريخ الميلاد</label>
            <input type="date" class="form-control form-control-solid" name="date_naissance" value="{{ old('date_naissance') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">مكان الميلاد</label>
            <input type="text" class="form-control form-control-solid" name="lieu_naissance" value="{{ old('lieu_naissance') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">الجنس</label>
            <select name="sexe" class="form-select">
                <option value="ذكر" {{ old('sexe') == 'ذكر' ? 'selected' : '' }}>ذكر</option>
                <option value="أنثى" {{ old('sexe') == 'أنثى' ? 'selected' : '' }}>أنثى</option>
            </select>
        </div>
        <div class="mb-2">
            <label class="required form-label">النوع</label>
            <select name="type" class="form-select">
                <option value="Régulier" {{ old('type') == 'Régulier' ? 'selected' : '' }}>منتظم</option>
                <option value="Irrégulier" {{ old('type') == 'Irrégulier' ? 'selected' : '' }}>غير منتظم</option>
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">إضافة</button>
        </div>
    </form>
@endsection