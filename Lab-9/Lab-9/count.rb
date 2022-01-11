p = File.open("countLines.rb", "r")
if p
ary = IO.readlines("countLines.rb")
print("#{ary.length} lines in the file.")
else
print("File does not exists.")
end