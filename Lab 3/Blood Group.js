const form = document.createElement('form');

form.innerHTML = `
    <fieldset>
        Blood Group  
        <select id="bloodSelect">
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <br>
        <p id="errorMsg" style="color: red;"></p>
        <hr>
        <input type="submit" value="Submit"/>
    </fieldset>
`;

document.body.appendChild(form);

form.addEventListener('submit', function(event) {
    event.preventDefault();
    
    let blood = document.getElementById('bloodSelect').value;
    let error = document.getElementById('errorMsg');
    
    if (blood === "") {
        error.innerHTML = "Please select a blood group";
    } else {
        error.innerHTML = "";
        alert("Selected: " + blood);
    }
});