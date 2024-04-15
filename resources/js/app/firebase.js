// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-auth.js"
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries
// import { } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-auth.js"
// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyD3KHU4omjwTDfIXa16xpy8g9Wgcy-m9r0",
    authDomain: "moda-luz.firebaseapp.com",
    projectId: "moda-luz",
    storageBucket: "moda-luz.appspot.com",
    messagingSenderId: "286952246906",
    appId: "1:286952246906:web:136405ffcbf162ff37b5c3"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const auth = getAuth()
console.log(app)