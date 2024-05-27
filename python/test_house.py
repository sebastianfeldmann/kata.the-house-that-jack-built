import unittest

from house import House

class HouseTest(unittest.TestCase):
    def test_recite(self):
        house = House()
        self.assertEqual("This is the house", house.recite())

if __name__ == '__main__':
    unittest.main()
