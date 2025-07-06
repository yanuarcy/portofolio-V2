<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Website</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .container {
            max-width: 650px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        .content {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }
        .content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
        }
        .logo {
            max-width: 120px;
            margin-bottom: 30px;
        }
        .header {
            color: #2d3748;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            text-align: center;
        }
        .sub-header {
            color: #718096;
            font-size: 16px;
            text-align: center;
            margin-bottom: 35px;
        }
        .info-card {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
            position: relative;
            transition: transform 0.2s ease;
        }
        .info-card:hover {
            transform: translateY(-2px);
        }
        .info-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(180deg, #667eea, #764ba2);
            border-radius: 2px;
        }
        .label {
            font-weight: 600;
            color: #4a5568;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .value {
            color: #2d3748;
            font-size: 16px;
            font-weight: 500;
        }
        .message-card {
            background: linear-gradient(135deg, #fff5f5 0%, #fed7d7 100%);
            border: 1px solid #feb2b2;
            border-radius: 12px;
            padding: 25px;
            margin: 25px 0;
            position: relative;
        }
        .message-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(180deg, #f56565, #e53e3e);
            border-radius: 2px;
        }
        .message-content {
            color: #2d3748;
            font-size: 16px;
            line-height: 1.7;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .time-stamp {
            background: linear-gradient(135deg, #e6fffa 0%, #b2f5ea 100%);
            border: 1px solid #81e6d9;
            border-radius: 8px;
            padding: 12px 16px;
            text-align: center;
            color: #234e52;
            font-weight: 500;
            margin: 25px 0;
        }
        .action-section {
            text-align: center;
            margin: 30px 0;
        }
        .reply-btn {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        .reply-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #e2e8f0;
        }
        .footer-text {
            font-size: 13px;
            color: #718096;
            line-height: 1.5;
        }
        .footer-brand {
            color: #4a5568;
            font-weight: 600;
            margin-top: 15px;
        }
        @media (max-width: 600px) {
            .container {
                padding: 20px 10px;
            }
            .content {
                padding: 25px;
            }
            .header {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="header">💌 Pesan Baru dari Website</div>
            <div class="sub-header">Anda menerima pesan baru dari form kontak portofolio</div>

            <div class="info-card">
                <div class="label">👤 Nama Lengkap</div>
                <div class="value"><?php echo e($contactData['fullname']); ?></div>
            </div>

            <div class="info-card">
                <div class="label">📧 Alamat Email</div>
                <div class="value"><?php echo e($contactData['email']); ?></div>
            </div>

            <div class="message-card">
                <div class="label">💬 Pesan</div>
                <div class="message-content"><?php echo e($contactData['message']); ?></div>
            </div>

            <div class="time-stamp">
                📅 Diterima pada <?php echo e(now()->format('d F Y')); ?> pukul <?php echo e(now()->format('H:i')); ?> WIB
            </div>

            <div class="action-section">
                <a href="mailto:<?php echo e($contactData['email']); ?>?subject=Re: Pesan dari Website&body=Halo <?php echo e($contactData['fullname']); ?>, %0D%0A%0D%0ATerima kasih atas pesan Anda." class="reply-btn">
                    Balas Pesan
                </a>
            </div>
        </div>

        <div class="footer">
            <div class="footer-text">
                Email ini dikirim secara otomatis dari sistem contact form website portofolio.<br>
                Jangan balas langsung ke email ini, gunakan tombol "Balas Pesan" di atas.
            </div>
            <div class="footer-brand">
                © 2024 Portofolio Yanuar • Hak cipta dilindungi undang-undang
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\Code\VS Code\00- Template\src\Laravel\Portofolio V2\admin\resources\views/emails/contact.blade.php ENDPATH**/ ?>