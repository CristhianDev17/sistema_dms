@extends('guest.layouts.app')
@section('title', 'Login')

@section('content')
    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row mt-lg-5">
            <!-- Imagen de decoración / Lado izquierdo -->
            <div class="d-none d-lg-flex col-lg-5 p-0 mt-lg-4">
                <div class="auth-cover-bg d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" alt="Login Background"
                        class="auth-illustration">
                </div>
            </div>

            <!-- Formulario de login / Lado derecho -->
            <div class="d-flex col-12 col-lg-5 align-items-center">
                <div class="w-px-400 mx-auto mt-lg-5">
                    <!-- Logo -->
                    <div class="app-brand mb-4">
                        <a href="#" class="app-brand-link gap-2">
                            <span class="app-brand-logo">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M10 6L22 16L10 26V6Z" fill="currentColor" />
                                </svg>
                            </span>
                            <span class="app-brand-text fw-bold">Tu Empresa</span>
                        </a>
                    </div>

                    <!-- Textos de bienvenida -->
                    <h3 class="mb-1">¡Bienvenido! 👋</h3>
                    <p class="mb-4">Por favor, ingresa tus credenciales para continuar</p>

                    <!-- Formulario -->
                    <form class="mb-3" action="{{route('login.attempt')}}" method="POST">
						@csrf
                        <div class="mb-3 position-relative">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <label for="usuario" class="form-label mb-0">Usuario
                                    <i class="bx bx-user"></i>
                                </label>
                            </div>
                            <input type="text" class="form-control" id="usuario" name="usu_usuario"
                                placeholder="Ingresa tu usuario" required autofocus>
                        </div>

                        <div class="mb-3 form-password-toggle position-relative">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Contraseña</label>
                                {{-- <a href="forgot-password.html" class="text-decoration-none">
									<small>¿Olvidaste tu contraseña?</small>
								</a> --}}
                            </div>
                            <div class="input-group">
                                <input type="password" id="password" class="form-control" name="usu_contra"
                                    placeholder="············" required>
                                <button class="btn btn-outline-primary" type="button" id="togglePassword">
                                    <i class="bx bx-hide"></i>
                                </button>
                            </div>
                        </div>

                        {{-- <div class="mb-3">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="remember-me">
								<label class="form-check-label" for="remember-me">Recordarme</label>
							</div>
						</div> --}}

                        <button class="btn btn-primary d-grid w-100" type="submit">Iniciar sesión</button>
                    </form>

                    <!-- Separador -->
                    {{-- <div class="divider my-4">
						<div class="divider-text">o</div>
					</div> --}}

                    <!-- Botones de redes sociales -->
                    {{-- <div class="d-flex justify-content-center gap-2">
						<button type="button" class="btn btn-icon btn-outline-secondary">
							<i class="bx bxl-google"></i>
						</button>
						<button type="button" class="btn btn-icon btn-outline-secondary">
							<i class="bx bxl-facebook"></i>
						</button>
						<button type="button" class="btn btn-icon btn-outline-secondary">
							<i class="bx bxl-twitter"></i>
						</button>
					</div> --}}

                    <!-- Enlace de registro -->
                    {{-- <p class="text-center mt-4">
						<span>¿Nuevo en la plataforma?</span>
						<a href="register.html">
							<span>Crear una cuenta</span>
						</a>
					</p> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Script para alternar visibilidad de la contraseña -->
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.replace('ti-eye-off', 'ti-eye');
            } else {
                passwordInput.type = 'password';
                icon.classList.replace('ti-eye', 'ti-eye-off');
            }
        });
    </script>
@endsection
