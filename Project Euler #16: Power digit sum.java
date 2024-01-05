// Project Euler #16: Power digit sum
// https://www.hackerrank.com/contests/projecteuler/challenges/euler016/problem

import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;
import java.math.BigInteger;

public class Solution {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int a,b;
        a = in.nextInt();
        
        for(int i =0;i<a;i++)
        {
            b = in.nextInt();   
            BigInteger big = BigInteger.valueOf(2).pow(b);
            String digits = big.toString();
            int sum = 0;

            for(int j = 0; j < digits.length(); j++) {
                int digit = (int) (digits.charAt(j) - '0');
                sum = sum + digit;
            }
            System.out.println(sum);
        }  
    }
}