// Test ES6. Les lignes ci-dessous seront converties en ES5
const httpOptions = { timeout: 2000, isCache: true };
const { timeout: httpTimeout, isCache: httpCache } = httpOptions;
let name = "Bob", time = "today";
console.log(`Hello ${name}, how are you ${time}?`);
/*
EQUIVALENCE ES5
var httpOptions = { timeout: 2000, isCache: true };
var httpTimeout = httpOptions.timeout;
var httpCache = httpOptions.isCache;
*/

// Test TypeScript sera convertie en ES6 puis ES5
let monTestStr: string = 'une chaine';
monTestStr = '1';
//monTestStr = 1; // Fera planter

import "./script1.ts";
import "./script2.ts";


