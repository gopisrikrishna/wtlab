print("Enter size:\n")
n = gets.to_i
arr=[]
print("Enter #{n} elements:\n")
for i in 0..n-1
arr.push(gets.to_i)
end
sum=0
for i in 0..n-1
sum=sum+arr[i]
end
print("Sum of array elements is #{sum}")

print("Array is #{arr}")