<?php
$expenses = [
    'Uang' => 100000,
    'Makan' => 10000,
    'Parkir' => 5000,
];
$total = array_sum($expenses);

function formatRupiah(int $amount): string
{
    return 'Rp ' . number_format($amount, 0, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Pengeluaran</title>
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
            background: linear-gradient(135deg, #eafaf1, #dfeeff);
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 480px;
            padding: 30px 28px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(15, 76, 92, 0.15);
        }

        h1 {
            margin: 0 0 8px;
            color: #1d3557;
            font-size: 26px;
            text-align: center;
        }

        .description {
            margin: 0 0 22px;
            color: #64748b;
            text-align: center;
        }

        .expense-list {
            margin: 0;
        }

        .expense-item,
        .total {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            padding: 14px 0;
        }

        .expense-item {
            border-bottom: 1px solid #e2e8f0;
            color: #334e68;
        }

        .expense-item dt,
        .expense-item dd,
        .total dt,
        .total dd {
            margin: 0;
        }

        .expense-item dd,
        .total dd {
            font-weight: 700;
            text-align: right;
            white-space: nowrap;
        }

        .total {
            margin-top: 4px;
            color: #1d3557;
            font-size: 18px;
        }

        .actions {
            margin-top: 20px;
            text-align: center;
        }

        .btn-back {
            display: inline-block;
            padding: 12px 18px;
            border-radius: 10px;
            background: #10b981;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
        }

        .btn-back:hover {
            background: #059669;
        }
    </style>
</head>
<body>
    <main class="card">
        <h1>Rincian Pengeluaran</h1>
        <p class="description">Contoh perhitungan total pengeluaran.</p>

        <dl class="expense-list">
            <?php foreach ($expenses as $item => $amount): ?>
                <div class="expense-item">
                    <dt><?php echo htmlspecialchars($item, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></dt>
                    <dd><?php echo formatRupiah($amount); ?></dd>
                </div>
            <?php endforeach; ?>
            <div class="total">
                <dt>Total</dt>
                <dd><?php echo formatRupiah($total); ?></dd>
            </div>
        </dl>

        <div class="actions">
            <a href="index.php" class="btn-back">Kembali ke Form</a>
        </div>
    </main>
</body>
</html>
