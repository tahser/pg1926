class Okul:
		def __init__(self, isim, yil, puan, sehir, okulnumarasi):
				self.isim = isim
				self.yil = yil
				self.puan = puan
				self.sehir = sehir
				self.okulnumarasi = okulnumarasi
				print("Okul ismi \t\t\t\t:\t", isim,
							"\nOkul kuruluş yılı \t:\t", yil,
							"\nOkul puanı \t\t\t\t:\t", puan, "\nOkul is in", sehir,
							"\nOkul da", okulnumarasi, "öğrenci.")


class PrimaryOkul(Okul):
		def __init__(self, isim, yil, puan, sehir, okulnumarasi, femaleStudents):
				super().__init__(isim, yil, puan, sehir, okulnumarasi)
				self.femaleStudents = femaleStudents
				print("Okul da", femaleStudents, "kız öğrenci.")


class HighOkul(Okul):
		def __init__(self, isim, yil, puan, sehir, okulnumarasi, mathClasses):
				super().__init__(isim, yil, puan, sehir, okulnumarasi)
				self.mathClasses = mathClasses
				print("Okul has", mathClasses, "Sayısal bölümü.")


ogü = Okul("Eskişehir Osmangazi Üniversitesi", 1975, 518, "Eskişehir", 80489)
print("# " + "=" * 78 + " #")
kars = PrimaryOkul("Kılıç Arslan İlköğretim", 1992, 785, "Mersin", 900, 248)
print("# " + "=" * 78 + " #")
cumcum = HighOkul("Cumhuriyet Lisesi", 1963, 358, "Aydın", 1800, 28)
