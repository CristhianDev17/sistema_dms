@extends('auth.layouts.app')
@section('title', 'Dashboard')

@section('content')
    <!-- Panel de Control -->
    <div class="container-xxl">
        <div class="row">
            <div class="col-12">
                <h4 class="fw-bold py-3">Panel de Control</h4>
                <p class="text-muted">Bienvenido al Sistema de Gestión Documental Municipal</p>
            </div>
        </div>

        <!-- Cards row -->
        <div class="row mb-4">
            <!-- Pendientes -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title mb-0">Pendientes</h5>
                                <h2 class="fw-bold mb-0">24</h2>
                                <p class="card-text text-muted small">Documentos en espera</p>
                                <span class="text-warning">+5 hoy</span>
                            </div>
                            <div class="avatar bg-label-warning p-2">
                                <i class="bx bx-time text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- En Proceso -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title mb-0">En Proceso</h5>
                                <h2 class="fw-bold mb-0">18</h2>
                                <p class="card-text text-muted small">Documentos en trámite</p>
                                <span class="text-info">+3 hoy</span>
                            </div>
                            <div class="avatar bg-label-info p-2">
                                <i class="bx bx-loader text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Completados -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title mb-0">Completados</h5>
                                <h2 class="fw-bold mb-0">156</h2>
                                <p class="card-text text-muted small">Documentos finalizados</p>
                                <span class="text-success">+12 esta semana</span>
                            </div>
                            <div class="avatar bg-label-success p-2">
                                <i class="bx bx-check-circle text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Observados -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title mb-0">Observados</h5>
                                <h2 class="fw-bold mb-0">7</h2>
                                <p class="card-text text-muted small">Requieren atención</p>
                                <span class="text-danger">-2 hoy</span>
                            </div>
                            <div class="avatar bg-label-danger p-2">
                                <i class="bx bx-error-circle text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Flujo Documental and Aprobaciones Pendientes Section -->
        <div class="row mb-4">
            <!-- Flujo Documental Section -->
            <div class="col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Flujo Documental</h5>
                        <p class="text-muted mb-0">Seguimiento de trámites en proceso</p>
                    </div>
                    <div class="card-body">
                        <!-- Tab buttons -->
                        <div class="mb-3">
                            <button type="button" class="btn btn-sm btn-dark me-2">Solicitud de licencia</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary me-2">Permiso de
                                construcción</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Reclamo vecinal</button>
                        </div>

                        <!-- Workflow content -->
                        <div class="mt-4">
                            <h6 class="fw-semibold">Solicitud de licencia</h6>
                            <p class="text-muted small">Solicitud • Etapa 3 de 4</p>

                            <!-- Stepper -->
                            <div class="mt-4">
                                <ul class="progress-indicator">
                                    <li class="completed">
                                        <span class="bullet">1</span>
                                        <div class="step-info">
                                            <span class="step-title">Recepción</span>
                                            <span class="text-muted small">Mesa de Partes</span>
                                        </div>
                                    </li>
                                    <li class="completed">
                                        <span class="bullet">2</span>
                                        <div class="step-info">
                                            <span class="step-title">Evaluación</span>
                                            <span class="text-muted small">Secretaría</span>
                                        </div>
                                    </li>
                                    <li class="active">
                                        <span class="bullet">3</span>
                                        <div class="step-info">
                                            <span class="step-title">Dictamen</span>
                                            <span class="text-muted small">Gerencia Legal</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="bullet">4</span>
                                        <div class="step-info">
                                            <span class="step-title">Resolución</span>
                                            <span class="text-muted small">Alcaldía</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aprobaciones Pendientes Section -->
            <div class="col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Aprobaciones Pendientes</h5>
                        <p class="text-muted mb-0">Documentos que requieren tu acción</p>
                    </div>
                    <div class="card-body">
                        <ul class="p-0" style="list-style: none;">
                            <!-- Approval Item 1 -->
                            <li class="border rounded p-3 mb-3">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-file me-2"></i>
                                            <h6 class="mb-0">Resolución de licencia #2023-0458</h6>
                                            <span class="badge bg-danger ms-2">Urgente</span>
                                        </div>
                                        <div class="text-muted small mt-1">
                                            <span>Resolución</span>
                                            <span class="mx-1">•</span>
                                            <span>Gerencia Legal</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-muted small">
                                        <i class="bx bx-time-five me-1"></i>
                                        <span>Hoy, 17:00</span>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-sm btn-outline-secondary me-2">Rechazar</button>
                                        <button type="button" class="btn btn-sm btn-dark">Aprobar</button>
                                    </div>
                                </div>
                            </li>

                            <!-- Approval Item 2 -->
                            <li class="border rounded p-3">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-file me-2"></i>
                                            <h6 class="mb-0">Dictamen técnico para obra municipal</h6>
                                        </div>
                                        <div class="text-muted small mt-1">
                                            <span>Dictamen</span>
                                            <span class="mx-1">•</span>
                                            <span>Obras Públicas</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-muted small">
                                        <i class="bx bx-time-five me-1"></i>
                                        <span>Mañana, 12:00</span>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-sm btn-outline-secondary me-2">Rechazar</button>
                                        <button type="button" class="btn btn-sm btn-dark">Aprobar</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actividad Reciente Section -->
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Actividad Reciente</h5>
                        <p class="text-muted mb-0">Últimas acciones en el sistema</p>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0" style="list-style: none;">
                            <!-- Activity 1 -->
                            <li class="d-flex align-items-center mb-4">
                                <div class="avatar avatar-sm me-3">
                                    <div class="avatar-initial rounded-circle bg-label-light">
                                        CM
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-2">Carlos Mendoza</h6>
                                            <span class="badge bg-label-success">Aprobó</span>
                                        </div>
                                        <p class="mb-0 text-primary fw-semibold">Resolución de licencia #2023-0458</p>
                                        <div class="d-flex align-items-center text-muted small">
                                            <span>Hace 10 minutos</span>
                                            <span class="mx-1">•</span>
                                            <span>Gerencia Legal</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Activity 2 -->
                            <li class="d-flex align-items-center mb-4">
                                <div class="avatar avatar-sm me-3">
                                    <div class="avatar-initial rounded-circle bg-label-light">
                                        AF
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-2">Ana Flores</h6>
                                            <span class="badge bg-label-primary">Derivó</span>
                                        </div>
                                        <p class="mb-0 text-primary fw-semibold">Solicitud de permiso #2023-0789</p>
                                        <div class="d-flex align-items-center text-muted small">
                                            <span>Hace 25 minutos</span>
                                            <span class="mx-1">•</span>
                                            <span>Secretaría General > Obras Públicas</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Activity 3 -->
                            <li class="d-flex align-items-center mb-4">
                                <div class="avatar avatar-sm me-3">
                                    <div class="avatar-initial rounded-circle bg-label-light">
                                        RD
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-2">Roberto Díaz</h6>
                                            <span class="badge bg-label-warning">Observó</span>
                                        </div>
                                        <p class="mb-0 text-primary fw-semibold">Expediente técnico de obra</p>
                                        <div class="d-flex align-items-center text-muted small">
                                            <span>Hace 1 hora</span>
                                            <span class="mx-1">•</span>
                                            <span>Obras Públicas</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Activity 4 -->
                            <li class="d-flex align-items-center mb-4">
                                <div class="avatar avatar-sm me-3">
                                    <div class="avatar-initial rounded-circle bg-label-light">
                                        MG
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-2">María García</h6>
                                            <span class="badge bg-label-info">Registró</span>
                                        </div>
                                        <p class="mb-0 text-primary fw-semibold">Nuevo reclamo vecinal #2023-0123</p>
                                        <div class="d-flex align-items-center text-muted small">
                                            <span>Hace 2 horas</span>
                                            <span class="mx-1">•</span>
                                            <span>Mesa de Partes</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Activity 5 -->
                            <li class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-3">
                                    <div class="avatar-initial rounded-circle bg-label-light">
                                        JP
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 me-2">Juan Pérez</h6>
                                            <span class="badge bg-label-success">Firmó</span>
                                        </div>
                                        <p class="mb-0 text-primary fw-semibold">Decreto de alcaldía #045-2023</p>
                                        <div class="d-flex align-items-center text-muted small">
                                            <span>Hace 3 horas</span>
                                            <span class="mx-1">•</span>
                                            <span>Alcaldía</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
