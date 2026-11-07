<?php
$isPost = ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST';
$input = $isPost ? $_POST : [];
$nama = isset($input['nama']) && is_string($input['nama']) ? trim($input['nama']) : '';
$alamat = isset($input['alamat']) && is_string($input['alamat']) ? trim($input['alamat']) : '';
$nowa = isset($input['nowa']) && is_string($input['nowa']) ? trim($input['nowa']) : '';
$status = isset($input['status']) && is_string($input['status']) ? trim($input['status']) : '';

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data Diri</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #eef9f1, #edf3ff);
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(28, 61, 86, 0.15);
            padding: 30px 28px;
        }

        .card h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #1d3557;
            text-align: center;
        }

        .data-list {
            display: grid;
            gap: 14px;
            margin-bottom: 24px;
        }

        .data-item {
            padding: 12px 14px;
            background: #f8fafc;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
        }

        .label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            color: #64748b;
            margin-bottom: 6px;
        }

        .value {
            font-size: 16px;
            color: #1f2937;
        }

        .actions {
            text-align: center;
        }

        .btn-back {
            display: inline-block;
            text-decoration: none;
            background: #10b981;
            color: white;
            padding: 12px 18px;
            border-radius: 10px;
            font-weight: 700;
        }

        .warning {
            background: #fff3f3;
            border: 1px solid #fecaca;
            color: #b91c1c;
            padding: 14px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php if (!$isPost): ?>
            <div class="warning">Silakan isi dan kirim formulir terlebih dahulu.</div>
            <div class="actions">
                <a href="index.php" class="btn-back">Kembali ke Form</a>
            </div>
        <?php elseif ($nama === '' || $alamat === '' || $nowa === '' || $status === ''): ?>
            <div class="warning">Semua data harus diisi sebelum melanjutkan.</div>
            <div class="actions">
                <a href="index.php" class="btn-back">Kembali ke Form</a>
            </div>
        <?php else: ?>
            <h2>Hasil Data Diri</h2>
            <div class="data-list">
                <div class="data-item">
                    <span class="label">Nama</span>
                    <span class="value"><?php echo e($nama); ?></span>
                </div>
                <div class="data-item">
                    <span class="label">Alamat</span>
                    <span class="value"><?php echo e($alamat); ?></span>
                </div>
                <div class="data-item">
                    <span class="label">No. WA</span>
                    <span class="value"><?php echo e($nowa); ?></span>
                </div>
                <div class="data-item">
                    <span class="label">Status</span>
                    <span class="value"><?php echo e($status); ?></span>
                </div>
            </div>
            <div class="actions">
                <a href="index.php" class="btn-back">Isi Lagi</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
<?php
$isPost = ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST';
$input = $isPost ? $_POST : [];
$nama = isset($input['nama']) && is_string($input['nama']) ? trim($input['nama']) : '';
$alamat = isset($input['alamat']) && is_string($input['alamat']) ? trim($input['alamat']) : '';
$nowa = isset($input['nowa']) && is_string($input['nowa']) ? trim($input['nowa']) : '';
$status = isset($input['status']) && is_string($input['status']) ? trim($input['status']) : '';

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data Diri</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #eef9f1, #edf3ff);
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(28, 61, 86, 0.15);
            padding: 30px 28px;
        }

        .card h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #1d3557;
            text-align: center;
        }

        .data-list {
            display: grid;
            gap: 14px;
            margin-bottom: 24px;
        }

        .data-item {
            padding: 12px 14px;
            background: #f8fafc;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
        }

        .label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            color: #64748b;
            margin-bottom: 6px;
        }

        .value {
            font-size: 16px;
            color: #1f2937;
        }

        .actions {
            text-align: center;
        }

        .btn-back {
            display: inline-block;
            text-decoration: none;
            background: #10b981;
            color: white;
            padding: 12px 18px;
            border-radius: 10px;
            font-weight: 700;
        }

        .warning {
            background: #fff3f3;
            border: 1px solid #fecaca;
            color: #b91c1c;
            padding: 14px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php if (!$isPost): ?>
            <div class="warning">Silakan isi dan kirim formulir terlebih dahulu.</div>
            <div class="actions">
                <a href="index.php" class="btn-back">Kembali ke Form</a>
            </div>
        <?php elseif ($nama === '' || $alamat === '' || $nowa === '' || $status === ''): ?>
            <div class="warning">Semua data harus diisi sebelum melanjutkan.</div>
            <div class="actions">
                <a href="index.php" class="btn-back">Kembali ke Form</a>
            </div>
        <?php else: ?>
            <h2>Hasil Data Diri</h2>
            <div class="data-list">
                <div class="data-item">
                    <span class="label">Nama</span>
                    <span class="value"><?php echo e($nama); ?></span>
                </div>
                <div class="data-item">
                    <span class="label">Alamat</span>
                    <span class="value"><?php echo e($alamat); ?></span>
                </div>
                <div class="data-item">
                    <span class="label">No. WA</span>
                    <span class="value"><?php echo e($nowa); ?></span>
                </div>
                <div class="data-item">
                    <span class="label">Status</span>
                    <span class="value"><?php echo e($status); ?></span>
                </div>
            </div>
            <div class="actions">
                <a href="index.php" class="btn-back">Isi Lagi</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
