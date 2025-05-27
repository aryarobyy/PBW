import express, { Request, Response } from 'express';
import dotenv from 'dotenv';
import { createServer } from "http";
import userRoute from './routes/user.route';
import cors from 'cors';

dotenv.config();

const app = express();
const httpServer = createServer(app);
const port = process.env.PORT || 3000;

app.use(express.json());

app.get('/', (req: Request, res: Response) => {
  res.send('Hello World!');
});

app.use(
  cors({
    origin: 'http://localhost:5173',
    methods: ['GET','POST','PUT','DELETE','OPTIONS'],
    credentials: true, 
  })
);

app.use('/user', userRoute)

httpServer.listen(port, () => {
  console.log(`Server running on http://localhost:${port}`);
})