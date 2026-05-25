<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Petrikov Lumina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #0F0F1A;
            color: #F5F5F5;
            font-family: 'Outfit', -apple-system, sans-serif;
        }
        .navbar-dark-custom {
            background: rgba(15,15,26,0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .stats-card {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 1.25rem;
            padding: 1.5rem;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .stats-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }
        .stats-number {
            font-size: 2rem;
            font-weight: 700;
            color: #C9A961;
        }
        .section-card {
            background: rgba(255,255,255,0.02);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 1.25rem;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }
        .section-header {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .section-title {
            font-weight: 600;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .table-custom {
            margin-bottom: 0;
        }
        .table-custom thead th {
            background: rgba(201,169,97,0.12);
            color: #C9A961;
            border: none;
            padding: 0.75rem 1rem;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .table-custom tbody td {
            padding: 0.75rem 1rem;
            border-color: rgba(255,255,255,0.05);
            vertical-align: middle;
            font-size: 0.9rem;
        }
        .table-custom tbody tr:hover {
            background: rgba(201,169,97,0.05);
        }
        .badge-hadir { background: #10B981; color: white; }
        .badge-tidak { background: #6B7280; color: white; }
        .badge-pending { background: #F59E0B; color: #0F0F1A; }
        .badge-approved { background: #10B981; color: white; }
        .badge-rejected { background: #EF4444; color: white; }
        .text-muted-custom { color: #9CA3AF; }
        .avatar-circle {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(201,169,97,0.2);
            color: #C9A961;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.85rem;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fa-solid fa-crown text-warning me-2"></i>Admin Dashboard
            </a>
            <div class="d-flex align-items-center gap-3">
                <a href="/" class="small text-decoration-none text-muted-custom">
                    <i class="fa-solid fa-house me-1"></i>Beranda
                </a>
                <a href="{{ route('admin.logout') }}" class="btn btn-outline-danger btn-sm">
                    <i class="fa-solid fa-right-from-bracket me-1"></i>Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <!-- === STATS ROW 1: Orders === -->
        <h6 class="text-muted-custom mb-3"><i class="fa-solid fa-shopping-cart me-2"></i>Pesanan</h6>
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <i class="fa-solid fa-envelope mb-2" style="font-size: 1.5rem; color: #9CA3AF;"></i>
                    <div class="stats-number">{{ count($orders) }}</div>
                    <small class="text-muted-custom">Total Pesanan</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <i class="fa-solid fa-crown text-warning mb-2" style="font-size: 1.5rem;"></i>
                    <div class="stats-number">{{ count(array_filter($orders, fn($o) => $o->paket === 'gold')) }}</div>
                    <small class="text-muted-custom">Paket Gold</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <i class="fa-solid fa-star text-info mb-2" style="font-size: 1.5rem;"></i>
                    <div class="stats-number">{{ count(array_filter($orders, fn($o) => in_array($o->paket, ['premium','platinum']))) }}</div>
                    <small class="text-muted-custom">Premium & Platinum</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <i class="fa-solid fa-calendar mb-2" style="font-size: 1.5rem; color: #9CA3AF;"></i>
                    <div class="stats-number">{{ count($orders) > 0 ? $orders->first()->created_at->format('d/m') : '-' }}</div>
                    <small class="text-muted-custom">Pesanan Terbaru</small>
                </div>
            </div>
        </div>

        <!-- === STATS ROW 2: RSVP === -->
        <h6 class="text-muted-custom mb-3"><i class="fa-solid fa-check-circle me-2"></i>RSVP (Konfirmasi Kehadiran)</h6>
        <div class="row g-3 mb-4">
            <div class="col-md-2 col-6">
                <div class="stats-card text-center">
                    <i class="fa-solid fa-users mb-2" style="font-size: 1.5rem; color: #C9A961;"></i>
                    <div class="stats-number">{{ $rsvpTotal }}</div>
                    <small class="text-muted-custom">Total RSVP</small>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="stats-card text-center">
                    <i class="fa-solid fa-user-check mb-2" style="font-size: 1.5rem; color: #10B981;"></i>
                    <div class="stats-number">{{ $rsvpHadir }}</div>
                    <small class="text-muted-custom">Hadir</small>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="stats-card text-center">
                    <i class="fa-solid fa-user-times mb-2" style="font-size: 1.5rem; color: #6B7280;"></i>
                    <div class="stats-number">{{ $rsvpTidakHadir }}</div>
                    <small class="text-muted-custom">Tidak Hadir</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stats-card text-center">
                    <i class="fa-solid fa-people-group mb-2" style="font-size: 1.5rem; color: #8B5CF6;"></i>
                    <div class="stats-number">{{ $rsvpTotalGuests }}</div>
                    <small class="text-muted-custom">Total Tamu Hadir</small>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stats-card text-center">
                    <i class="fa-solid fa-message mb-2" style="font-size: 1.5rem; color: #F59E0B;"></i>
                    <div class="stats-number">{{ $commentsTotal }}</div>
                    <small class="text-muted-custom">Total Ucapan</small>
                </div>
            </div>
        </div>

        <!-- === RSVP TABLE === -->
        <div class="section-card">
            <div class="section-header">
                <h6 class="section-title"><i class="fa-solid fa-list text-muted-custom"></i> RSVP Terbaru</h6>
                <small class="text-muted-custom">{{ $rsvpTotal }} total</small>
            </div>
            <div class="table-responsive">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>WA</th>
                            <th>Kehadiran</th>
                            <th>Tamu</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rsvps as $rsvp)
                            <tr>
                                <td class="fw-medium">{{ $rsvp->name }}</td>
                                <td class="text-muted-custom">{{ $rsvp->phone ?: '-' }}</td>
                                <td>
                                    <span class="badge rounded-pill {{ $rsvp->presence === 'hadir' ? 'badge-hadir' : 'badge-tidak' }}">
                                        <i class="fa-solid {{ $rsvp->presence === 'hadir' ? 'fa-check' : 'fa-times' }} me-1"></i>
                                        {{ ucfirst(str_replace('_', ' ', $rsvp->presence)) }}
                                    </span>
                                </td>
                                <td>{{ $rsvp->guests }} orang</td>
                                <td>
                                    <span style="color: #9CA3AF; max-width: 200px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="{{ $rsvp->message }}">
                                        {{ $rsvp->message ?: '-' }}
                                    </span>
                                </td>
                                <td class="text-muted-custom" style="font-size: 0.85em;">
                                    {{ $rsvp->created_at->format('d M H:i') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted-custom">
                                    <i class="fa-solid fa-inbox me-2"></i>Belum ada RSVP
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- === COMMENTS TABLE === -->
        <div class="section-card">
            <div class="section-header">
                <h6 class="section-title"><i class="fa-solid fa-comments text-muted-custom"></i> Ucapan Terbaru</h6>
                <div>
                    <small class="text-muted-custom me-3">
                        <span class="badge-approved badge rounded-pill me-1">{{ $commentsApproved }}</span> Disetujui
                    </small>
                    @if($commentsPending > 0)
                        <small class="text-muted-custom">
                            <span class="badge-pending badge rounded-pill me-1">{{ $commentsPending }}</span> Menunggu
                        </small>
                    @endif
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Ucapan</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($comments as $comment)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar-circle">{{ strtoupper(substr($comment->name, 0, 1)) }}</span>
                                        <span class="fw-medium">{{ $comment->name }}</span>
                                    </div>
                                </td>
                                <td style="max-width: 350px;">
                                    <span style="color: #9CA3AF; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;" title="{{ $comment->message }}">
                                        {{ $comment->message }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge rounded-pill 
                                        {{ $comment->status === 'approved' ? 'badge-approved' : '' }}
                                        {{ $comment->status === 'pending' ? 'badge-pending' : '' }}
                                        {{ $comment->status === 'rejected' ? 'badge-rejected' : '' }}">
                                        {{ ucfirst($comment->status) }}
                                    </span>
                                </td>
                                <td class="text-muted-custom" style="font-size: 0.85em;">
                                    {{ $comment->created_at->format('d M H:i') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted-custom">
                                    <i class="fa-solid fa-inbox me-2"></i>Belum ada ucapan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- === ORDERS TABLE === -->
        <div class="section-card">
            <div class="section-header">
                <h6 class="section-title"><i class="fa-solid fa-file-invoice text-muted-custom"></i> Daftar Pesanan</h6>
                <small class="text-muted-custom">{{ count($orders) }} total</small>
            </div>
            <div class="table-responsive">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>WhatsApp</th>
                            <th>Paket</th>
                            <th>Template</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="fw-medium">{{ $order->nama }}</td>
                                <td class="text-muted-custom">{{ $order->whatsapp }}</td>
                                <td>
                                    <span class="badge rounded-pill badge-{{ $order->paket }}">
                                        {{ ucfirst($order->paket) }}
                                    </span>
                                </td>
                                <td>{{ $order->template ?: '-' }}</td>
                                <td>
                                    <span class="text-muted-custom" style="max-width: 200px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="{{ $order->keterangan }}">
                                        {{ $order->keterangan ?: '-' }}
                                    </span>
                                </td>
                                <td class="text-muted-custom" style="font-size: 0.85em;">
                                    {{ $order->created_at->format('d M Y, H:i') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted-custom">
                                    <i class="fa-solid fa-inbox me-2"></i>Belum ada pesanan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>