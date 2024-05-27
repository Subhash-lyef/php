#include <graphics.h>

int main()
{
    int g = DETECT, d;
    initgraph(&g, &d, (char *)"");
    circle(100, 100, 50);

    closegraph();
    return 0;
}