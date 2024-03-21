import playGuitar from "./guitar.js"
import { shredding,plucking } from "./guitar.js";
import User from "./user.js";
const me=new User("email@email.com","Dave");
console.log(me);
console.log(me.greeting());
//console.log("test");
console.log(playGuitar());
console.log(shredding());
console.log(plucking());
