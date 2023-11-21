<div class="card bg-primary border-0 border-radius-0 custom-box-shadow-1" id="form">
    <div class="card-body">
        <h3 class="text-transform-none text-color-light font-weight-bold mb-5">HIZLI İLETİŞİM FORMU</h3>
        <form class="contact-form custom-form-style-1 form-errors-light" action="{{ route('form') }}" method="POST">
            @csrf

            <div class="row">
                <div class="form-group col mb-3">
                    <input type="text" value="{{ old('name') }}" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" placeholder="Adınız Soyadınız *">
                    @if($errors->has('name'))
                        <div class="invalid-feedback">{{$errors->first('name')}}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col mb-3">
                    <input type="email" value="{{ old('email') }}"  class="@if($errors->has('email')) is-invalid @endif form-control" name="email" placeholder="E-mail *">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">{{$errors->first('email')}}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col mb-3">
                    <input type="text" value="{{ old('phone') }}" class="@if($errors->has('phone')) is-invalid @endif form-control" name="phone"  placeholder="Telefon *">
                    @if($errors->has('phone'))
                        <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col mb-3">
                    <input type="text" value="{{ old('subject') }}" class="form-control" name="subject"  placeholder="Konu">
                </div>
            </div>
            <div class="row">
                <div class="form-group col mb-4">
                    <textarea rows="3" class="@if($errors->has('message')) is-invalid @endif form-control" name="message" placeholder="Mesajınız *">{{ old('message') }}</textarea>
                    @if($errors->has('message'))
                        <div class="invalid-feedback">{{$errors->first('message')}}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col text-lg-end mb-0">
                    <button type="submit" class="btn custom-btn-primary-darken font-weight-bold btn-px-5 btn-py-3 text-white">MESAJI GÖNDER</button>
                </div>
            </div>
        </form>
    </div>
</div>
