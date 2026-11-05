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
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-weight: 600;
            font-size: 14px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #4cae4c;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #5cb85c;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Form Data Diri</h2>
    <form method="get" action="tampil.php"> 
        <div class="form-group">
            <label>Masukkan Nama</label>
            <input type="text" name="nama" placeholder="Contoh: Arfa" required>
        </div>
        
        <div class="form-group">
            <label>Masukkan Alamat</label>
            <input type="text" name="alamat" placeholder="Contoh: Banten" required>
        </div>
        
        <div class="form-group">
            <label>Masukkan No. WA</label>
            <input type="text" name="nowa" placeholder="Contoh: 0812xxxxxxxx" required>
        </div>
        
        <div class="form-group">
            <label>Masukkan Status</label>
            <input type="text" name="status" placeholder="Contoh: Mahasiswa" required>
        </div>
        
        <input type="submit" value="Kirim Data"> 
    </form>
</div>

</body>
</html>