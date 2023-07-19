@extends('dashboard.layouts.app')

@section('content')
    <form method="POST" action="{{ route('dashboard.donations.store') }}">
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
            <label class="required form-label">المتبرع</label>
            <select name="donor_id" class="form-select" data-control="select2" data-placeholder="إختر متبرع">
                @foreach($donors as $donor)
                    <option value="{{ $donor->id }}" {{ old('donor_id') == $donor->id ? 'selected' : '' }}>{{ $donor->nom }} {{ $donor->prenom }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label class="required form-label">إسم الطبيب</label>
            <input type="text" class="form-control form-control-solid" name="doctor" value="{{ old('doctor') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">ضغط الدم</label>
            <input type="number" class="form-control form-control-solid" name="ta" value="{{ old('ta') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">نبضات القلب</label>
            <input type="number" class="form-control form-control-solid" name="pouls" value="{{ old('pouls') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">الوزن</label>
            <input type="number" class="form-control form-control-solid" name="points" value="{{ old('points') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">كمية الدم المتبرع به</label>
            <input type="number" class="form-control form-control-solid" name="vol_pre" value="{{ old('vol_pre') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">عدد الأكياس</label>
            <input type="number" class="form-control form-control-solid" name="bags" value="{{ old('bags') }}" />
        </div>
        <div class="mb-2">
            <label class="required form-label">ملاحظات</label>
            <textarea class="form-control form-control-solid" name="reaction">{{ old('reaction') }}</textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">إضافة</button>
        </div>
    </form>
@endsection