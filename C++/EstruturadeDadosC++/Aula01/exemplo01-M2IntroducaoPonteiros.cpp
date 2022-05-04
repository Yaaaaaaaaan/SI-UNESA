#include <iostream>

int main() {
  int x=10;
  char ab;
  x=9;
  int*k;
  k=&x;

std::cout << "\n"<<*k;
std::cout << "\n"<<k; //O * equivale ao valor de k e sem o * equivale a localização na memória.

 x=50;
std::cout << "\n"<<*k;
 std::cout << "\n"<<k;
}