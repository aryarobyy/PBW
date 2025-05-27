import { Router } from "express";
import { deleteUser, getAllUser, getUserByEmail, getUserById, loginUser, registerUser, updateUser } from "../controller/user.controller";

const userRoute = Router();

userRoute.post('/', registerUser)
userRoute.post('/login', loginUser)
userRoute.get('/:id', getUserById)
userRoute.get('/email/:email', getUserByEmail)
userRoute.get('/', getAllUser)
userRoute.put('/:id', updateUser)
userRoute.delete("/:id", deleteUser)

export default userRoute