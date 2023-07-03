import mysql from "mysql"
import dotenv from "dotenv"

dotenv.config({path:"./.env"})

export const db = mysql.createConnection ({
    host: process.env.DB.host,
    user: process.env.DB.USER,
    password: process.env.DB.PASS,
    database: process.env.DB
});