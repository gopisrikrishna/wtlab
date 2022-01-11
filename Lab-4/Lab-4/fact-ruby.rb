print("Enter number:\n")
n = gets.to_i
fact=1
for i in 1..n
fact = fact*i
end
print("Factorial of #{n} is #{fact}.")