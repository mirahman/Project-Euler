// Project Euler #15: Lattice paths
// https://www.hackerrank.com/contests/projecteuler/challenges/euler015/problem

import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;
import java.math.BigInteger;

public class Solution {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int a,b,n,d,r;
        a = in.nextInt();
        for(int i =0;i<a;i++)
        {
            b = in.nextInt();   
            d = in.nextInt();
            n = b+d;
            r = Math.min(b,d);
            System.out.println(binomial(n,r));
        }
    }
    
    public static BigInteger binomial(final int N, final int K) {
        BigInteger ret = BigInteger.ONE;
        for (int k = 0; k < K; k++) {
            ret = ret.multiply(BigInteger.valueOf(N-k)).divide(BigInteger.valueOf(k+1));
        }
        return ret.mod(BigInteger.valueOf(1000000007));
   }
}