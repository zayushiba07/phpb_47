<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm" style="max-width: 400px; margin: auto;">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Simple Interest Calculator</h5>
            </div>
            <div class="card-body">
                <form action="submit/input.php" method="post">
                    <div class="mb-3">
                        <label for="amount" class="form-label">Principal Amount ($)</label>
                        <input type="text" class="form-control" name ="amount" id="amount" placeholder="Enter amount">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Time (Years)</label>
                        <input type="text" class="form-control" name ="year" id="year" placeholder="Enter years">
                    </div>
                    <div class="mb-3">
                        <label for="rate" class="form-label">Interest Rate (%)</label>
                        <input type="text" class="form-control" name="rate" id="rate" placeholder="Enter rate" step="0.01">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-100">Calculate</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>