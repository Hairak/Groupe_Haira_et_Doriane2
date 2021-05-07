const path = require ('path'); 
const http = require ('http');
const express = require('express'); 
const socketio = require ('socket.io');
const formatMessage = require('messages');
const {userJoin, getCurrentUser, userLeave, getRoomUsers} = require('users');



const app = express (); 
const server = http.createServer(app); 
const io = socketio(server);



app.use(express.static(path.join(__dirname, 'public'))); 


const botName = 'Idiomas Bot';

// connection 

io.on('connection', socket => { 
  socket.on('joinRoom', ({username, room}) => {
    const user = userJoin(socket.id, username, room);

    socket.join(user.room);


    socket.emit('message', formatMessage(botName , 'Bienvenue sur Idiomas Chat'));

    socket.broadcast.to(user.room).emit('message', formatMessage(botName , `${user.username} a rejoint la session`)); 
  


    io.to(user.room).emit('roomUsers', {
      room: user.room,
      users: getRoomUsers(user.room)
    });

  });
  


  socket.on('disconnect', () => {
    const user = userLeave(socket.id); 

    if(user)
    {
      io.to(user.room).emit('message', formatMessage(botName ,  `${user.username} a quitté la session`));
      io.to(user.room).emit('roomUsers', {
        room: user.room,
        users: getRoomUsers(user.room)
      });
    }
  
  })

socket.on('chatMessage', (msg) => {
  const user = getCurrentUser(socket.id);
 io.to(user.room).emit('message', formatMessage(user.username, msg));
});

});

const PORT = 3000 || process.env.PORT;

server.listen(PORT, () => console.log(`Server running on port ${PORT}`));
