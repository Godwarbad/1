rom flask import Flask, request
import html

app = Flask(__name__)

@app.route('/', methods=['POST'])
def register():
    name = html.escape(request.form.get('name', ''))
    email = html.escape(request.form.get('email', ''))
    freefire_id = html.escape(request.form.get('freefire_id', ''))
    phone = html.escape(request.form.get('phone', ''))
    
    data = f"Name: {name}, Email: {email}, Free Fire ID: {freefire_id}, Phone: {phone}\n"
    
    with open("data.txt", "a") as file:
        file.write(data)
    
    return "Registration Successful!"

if __name__ == '__main__':
    app.run(debug=True)
