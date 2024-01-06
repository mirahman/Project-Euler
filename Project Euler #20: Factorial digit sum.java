// Project Euler #20: Factorial digit sum
// https://www.hackerrank.com/contests/projecteuler/challenges/euler020/problem

import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;
import java.math.BigInteger;

public class Solution {

    public static void main(String[] args) {
        /* Enter your code here. Read input from STDIN. Print output to STDOUT. Your class should be named Solution. */
        Scanner in = new Scanner(System.in);
        int a,b;
        a = in.nextInt();
        
        for(int i =0;i<a;i++)
        {
            b = in.nextInt();   

            if(b == 0) System.out.println("1");
            else {
            String digits = factorial(b);
            int sum = 0;

for(int j = 0; j < digits.length(); j++) {
    int digit = (int) (digits.charAt(j) - '0');
    sum = sum + digit;
}

System.out.println(sum);
            }
        }
            
    }
    
    public static String factorial(int n) {
       BigInteger fact = new BigInteger("1");
       for (int i = 1; i <= n; i++) {
           fact = fact.multiply(new BigInteger(i + ""));
       }
       return fact.toString();
   }
}