$to=$email;

$subject="Manuscript Submitted";

$message="
Dear Author,

Your manuscript has been received successfully.

Regards,
IJPR Editorial Office
";

mail(
$to,
$subject,
$message
);