const WebSocket = require("ws");

const wss = new WebSocket.Server({ port: 3000 });

console.log("server started!");

wss.on("connection", ws => {
    console.log("new client connected");

    ws.on("message", data => {
        console.log("client has sent us: " + data.toString().split(","));
        let logininfo = data.toString().split(",")
        if (logininfo[0] === "hello", logininfo[1] === "12345") {

        }
        ws.send(data);
    })


    ws.on("close", () => {
        console.log("client has disconnected");
    });
});