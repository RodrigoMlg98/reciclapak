function formatName(user) {
    return user.firstName + ' ' + user.lastName;
}
const user = {
    firstName: 'Harper',
    lastName: 'Perez',
};
const element = <h1>Hello, {formatName(user)}!</h1>;
ReactDOM.render(element, document.getElementById('formulario'));

const domContainer = document.querySelector('#like_button_container');
ReactDOM.render(e(LikeButton), domContainer);