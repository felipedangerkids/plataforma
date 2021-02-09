<x-guest-layout>

    <div class="container-fluid">
        <div class="row ">
            <!-- logo -->
            <div class="container">
                <div class="inicio mx-auto">
                    <div class="logo">
                        <img src="{{ asset('front/images/logo1.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="d-flex flex-column justify-content-center segundo">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <!-- email -->
                        <div class="mb-3">
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" placeholder="E-MAIL:">
                                @if($errors->any)
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <!-- senha -->
                        <div class="mb-3 ">
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" placeholder="SENHA:">
                                @if($errors->any)
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                        <!-- cadastrar -->
                        <div class="text-center">
                            <div>
                                <button type="submit" class="btn btn-altered">ACESSAR</button>
                            </div>
                        </div>
                    </form>
                    <div class="botoes">
                        <div>
                            <div class="esqueceu">
                                <a href="#">Esqueceu a senha?</a>
                            </div>
                        </div>
                        <!-- botoes -->

                        <div class="text-center">
                            <div class="cadastre">
                                <span>OU ENTRE COM</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around mt-2 text-center">
                            <button class="face"><i class="fab fa-facebook-f"></i> FACEBOOK</i></button>
                            <button class="google"><i class="fab fa-google"></i> GOOGLE</i></button>
                        </div>
                        <div class="text-center">
                            <div class="conta">
                                <span>NÃO TEM CONTA?</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('/register') }}"> <button class="entrar">CADASTRAR</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
        </script>
    </div>

</x-guest-layout>