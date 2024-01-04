// Project Euler #13: Large sum
// https://www.hackerrank.com/contests/projecteuler/challenges/euler013/problem

import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;
import java.math.BigInteger;

public class Solution {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int a;
        a = in.nextInt();
        BigInteger total = new BigInteger("0");
        for(int i = 0;i<a;i++)
        {
             total = total.add(new BigInteger(in.next()));
        }
        System.out.println(total.toString().substring(0,10));
    }
}
