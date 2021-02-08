List = []
listForZeros = []
values = True

print("Sayı Giriniz\n"
			"q işlemi ile sonlandırınız")

while values:
		numbers = input()
		if numbers == "q" :
               
				break
		else:
				List.append((int)(numbers))

print("Before sorting : \t", List)

for zeros in List:
		if zeros == 0:
				listForZeros.append(zeros)
				List.remove(zeros)

List = listForZeros + List
print("After sorting : \t", List)
