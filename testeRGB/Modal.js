/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



const Modal = {
    open(){
        document
        .querySelector('.modal-overlay')
        .classList
        .add('active');
    },
    close(){
        document
        .querySelector('.modal-overlay')
        .classList
        .remove('active');
    }
}
