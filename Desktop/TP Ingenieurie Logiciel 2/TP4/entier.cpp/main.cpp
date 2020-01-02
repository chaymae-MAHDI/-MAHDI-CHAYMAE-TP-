#include <iostream>

using namespace std;
    public class entier
{
    private int x;
    private long y;
    private short z;

public void setx(int val)
{
    this.x=val;
}
public void sety(long val)
{
    this.y=val;
}
public void setz(short val)
{
    this.z=val;
}
public int getx()
{
    return x;
}
public long gety()
{
    return y;
}
public short getz()
{
    return z;
}


}
int main()
{
    cout << "Hello world!" << endl;
    return 0;
}
