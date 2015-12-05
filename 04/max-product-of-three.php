function solution($A) {
    sort($A);
    
    return max(end($A) * prev($A) * prev($A), reset($A)* next($A)* end($A));
    
}