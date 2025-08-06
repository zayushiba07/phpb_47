<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Operations Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm" style="max-width: 400px; margin: auto;">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Math Operations Calculator</h5>
            </div>
            <div class="card-body">
                <form action="submit/maths.php" method="post">
                    <div class="mb-3">
                        <label for="number1" class="form-label">First Number</label>
                        <input type="number" class="form-control" id="number1" placeholder="Enter first number" 
                        name="num1" required>
                    </div>
                    <div class="mb-3">
                        <label for="number2" class="form-label">Second Number</label>
                        <input type="number" class="form-control" id="number2" name="num2" placeholder="Enter second number" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Operation</label>
                        <div class="d-flex flex-column">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operation" id="add" value="add" checked>
                                <label class="form-check-label" for="add">Addition (+)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operation"  id="subtract" value="sub">
                                <label class="form-check-label" for="subtract">Subtraction (-)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"  name="operation" id="multiply" value="mul">
                                <label class="form-check-label" for="multiply">Multiplication (×)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operation" id="divide" value="div"  >
                                <label class="form-check-label" for="divide">Division (÷)</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100" name="submit">Calculate</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>