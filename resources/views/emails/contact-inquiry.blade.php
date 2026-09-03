<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Inquiry</title>
</head>
<body style="margin:0; padding:0; background:#f4f8ff; font-family:Arial, sans-serif; color:#0f172a;">
    <div style="max-width:640px; margin:0 auto; padding:32px 20px;">
        <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:20px; overflow:hidden;">
            <div style="background:linear-gradient(135deg,#0f63e0,#1d4ed8); padding:24px 28px; color:#ffffff;">
                <h1 style="margin:0; font-size:28px; line-height:1.2;">New contact inquiry</h1>
            </div>
            <div style="padding:28px;">
                <p style="margin:0 0 16px; font-size:16px; line-height:1.6; color:#334155;">
                    You have received a new message from the MediqCare contact form.
                </p>

                <table role="presentation" cellpadding="0" cellspacing="0" style="width:100%; border-collapse:collapse; margin:20px 0;">
                    <tr>
                        <td style="padding:10px 0; font-weight:bold; color:#0f172a; width:120px;">Name</td>
                        <td style="padding:10px 0; color:#334155;">{{ $contactMessage->name }}</td>
                    </tr>
                    <tr>
                        <td style="padding:10px 0; font-weight:bold; color:#0f172a;">Email</td>
                        <td style="padding:10px 0; color:#334155;">{{ $contactMessage->email }}</td>
                    </tr>
                    @if($contactMessage->phone)
                        <tr>
                            <td style="padding:10px 0; font-weight:bold; color:#0f172a;">Phone</td>
                            <td style="padding:10px 0; color:#334155;">{{ $contactMessage->phone }}</td>
                        </tr>
                    @endif
                    @if($contactMessage->subject)
                        <tr>
                            <td style="padding:10px 0; font-weight:bold; color:#0f172a;">Subject</td>
                            <td style="padding:10px 0; color:#334155;">{{ $contactMessage->subject }}</td>
                        </tr>
                    @endif
                </table>

                <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:14px; padding:18px; margin-top:20px;">
                    <p style="margin:0 0 8px; font-weight:bold; color:#0f172a;">Message</p>
                    <p style="margin:0; white-space:pre-wrap; color:#334155; line-height:1.7;">{{ $contactMessage->message }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
