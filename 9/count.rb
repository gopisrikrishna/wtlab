print("Enter Name of the file :")
name=gets.chomp
if File.open(name, "r")
ary = IO.readlines(name)
print("#{ary.length} lines in the file.")
end