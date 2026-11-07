<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
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

        .form-container {
            width: 100%;
            max-width: 430px;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(15, 76, 92, 0.15);
            padding: 30px 28px;
        }

        .form-container h2 {
            margin: 0 0 20px;
            text-align: center;
            color: #1d3557;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #334e68;
            font-weight: 600;
            font-size: 14px;
        }

        input[type="text"],
        input[type="tel"] {
            width: 100%;
            padding: 12px 14px;
            font-size: 14px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            background: #f8fafc;
            transition: 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus {
            outline: none;
            border-color: #2f80ed;
            box-shadow: 0 0 0 4px rgba(47, 128, 237, 0.12);
            background: #fff;
        }

        .btn-submit {
            width: 100%;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #2f80ed, #1e88e5);
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            padding: 13px 16px;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 8px 18px rgba(47, 128, 237, 0.25);
        }

        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 22px rgba(47, 128, 237, 0.3);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Data Diri</h2>
        <form method="post" action="tampil.php">
            <div class="form-group">
                <label for="nama">Masukkan Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Contoh: Arfa" required>
            </div>

            <div class="form-group">
                <label for="alamat">Masukkan Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Contoh: Banten" required>
            </div>

            <div class="form-group">
                <label for="nowa">Masukkan No. WA</label>
                <input type="tel" id="nowa" name="nowa" placeholder="Contoh: 0812xxxxxxxx" required>
            </div>

            <div class="form-group">
                <label for="status">Masukkan Status</label>
                <input type="text" id="status" name="status" placeholder="Contoh: Mahasiswa" required>
            </div>

            <button type="submit" class="btn-submit">Kirim Data</button>
        </form>
    </div>
</body>
</html>
