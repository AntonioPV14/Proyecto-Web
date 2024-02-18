function calculateLoan($amount, $interestRate, $numPayments, $paymentAmount) {
    $interest = $amount * ($interestRate / 100);
    $totalPayments = $numPayments * $paymentAmount;
    $remainingBalance = $amount + $interest - $totalPayments;

    return [
        'interest' => $interest,
        'total_payments' => $totalPayments,
        'remaining_balance' => $remainingBalance
    ];
}

$loan = calculateLoan(5000, 10, 4, 1875);
print_r($loan);