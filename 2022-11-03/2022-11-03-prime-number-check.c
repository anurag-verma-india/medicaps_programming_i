// Not in manual
#include <stdio.h>

void checkPrimeNumber();
int main() {
    checkPrimeNumber();
    return 0;
}

void checkPrimeNumber()
{
    int n, i, flag = 0;
    printf("Enter a number: ");
    scanf("%d", n);
    if (n == 0 || n == 1) {
        flag = 1;
    }
    for (i = 2; i<= n/2; ++i)
     {
        if (n % i == 0)
        {
            flag = 1;
            break;
        }
     }
    if (flag = 1) { printf("%d is not prime number", n); }
    else { printf("%d is a prime number", n); }