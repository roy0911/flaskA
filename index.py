from flask import Flask, render_template,request

from datetime import datetime
app = Flask(__name__)

@app.route("/123")
def index():
  return "Hello 邱建勳"

@app.route("/mis")
def course():
  return "<h1>資訊管理導論</h1>"

@app.route("/today")
def today():
  now = datetime.now()
  return render_template("today.html", datetime = str(now))

@app.route("/about")
def about():
  return render_template("rwd.html")

@app.route("/welcome", methods=["GET"])
def welcome():
  user = request.values.get("nick")
  w = request.values.get("work")
  return render_template("welcome.html", name=user,work=w)

@app.route("/account", methods=["GET", "POST"])
def account():
  if request.method == "POST":
    user = request.form["user"]
    pwd = request.form["pwd"]
    result = "您輸入的帳號是：" + user + "; 密碼為：" + pwd
    return result
  else:
      return render_template("account.html")

if __name__ == "__main__":
  app.run()