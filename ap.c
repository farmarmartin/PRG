#include <stdio.h>
#include <stdlib.h>

void generuj(int a1, int d, int n){
    int i;
    
    for(i = 2; i <= n; i++){    //cyklus kazdym krokem vypise updatnutou hodnotu a1
        a1 = a1 + d;
        printf("%d  ", a1);
    }
}

int An(int a1, int d, int n){
    int an, c;
    c = n - 1;
    an = a1 + c * d;    //vypocet n-teho clenu podle an = a1 + (n-1) * d
    printf("A%d = %d", n, an);
    return 0;
}

int main() {
    int a1, d, n;
    
    printf("zadejte a1, d, n:");
    scanf("%d %d %d", &a1, &d, &n);
    
    generuj(a1, d, n);
    printf("\n");
    An(a1, d, n);
    return 0;
}