package main

import (
	"database/sql"
		"fmt"
	_ "github.com/lib/pq"

)
const (
	DB_USER     = "postgres"
	DB_PASSWORD = "topperkruns@1998"
	DB_NAME     = "postgres"
)

var err error
type TodoItem struct {
    id int
	item string
	status bool
}
type TodoList struct {
	name string
	id int

}
func main() {
	dbinfo := fmt.Sprintf("user=%s password=%s dbname=%s sslmode=disable",
		DB_USER, DB_PASSWORD, DB_NAME)
	db, err := sql.Open("postgres", dbinfo)
	checkErr(err)

	//The above code is For connection with database



	defer db.Close()
	obj1:=TodoList{"grocery",1}                          //This is an object of TodoList
	obj2:=TodoList{"medical",2}
	obj3:=TodoList{"sports",3}
	add_a_todo_list(obj1,db) 			                            // This function adds a new List
	add_a_todo_list(obj2,db)
	add_a_todo_list(obj3,db)
    itemobj1:=TodoItem{1,"utensils",false} 			 //This is an object of TodoItem
	itemobj2:=TodoItem{2,"band_aid",false}
	itemobj3:=TodoItem{3,"bat",false}
	add_a_item_to_todo_list(itemobj1,db)                             // This function adds a item to particular list
	add_a_item_to_todo_list(itemobj2,db)
	add_a_item_to_todo_list(itemobj3,db)
	mark_a_to_do_complete(itemobj1,db)                              // This Function marks a item in todo list completed
	delete_a_to_do_item(itemobj1,db)
	get_all_list(db)
	get_items_from_list(2,db)
	delete_a_to_do(obj1,db)



}


func add_a_item_to_todo_list (obj TodoItem,db *sql.DB) {
	var lastInsertId int
	err = db.QueryRow("INSERT INTO to_do_list_item(todolistitem,todolistid,status) VALUES($1,$2,$3)returning todolistid;", obj.item, obj.id, obj.status).Scan(&lastInsertId)
	checkErr(err)
}
func add_a_todo_list (obj TodoList,db *sql.DB) {
	var lastInsertId int
	err = db.QueryRow("INSERT INTO to_do_list(todolistname,todolistid) VALUES($1,$2)returning todolistid;", obj.name, obj.id ).Scan(&lastInsertId)
	checkErr(err)

}
func mark_a_to_do_complete(obj TodoItem,db *sql.DB) {
	_, err := db.Exec("update to_do_list_item set status=$1 where todolistid=$2 and todolistitem=$3 ;","True",obj.id,obj.item)
	checkErr(err)



}

func delete_a_to_do_item(obj TodoItem,db *sql.DB) {

_,err := db.Exec("DELETE FROM to_do_list_item WHERE todolistid = $1 and todolistitem=$2 ;",obj.id,obj.item)
	checkErr(err)
}
func  get_all_list(db *sql.DB) {
	rows, err := db.Query("SELECT * FROM to_do_list ")
	checkErr(err)
	for rows.Next() {
		var todolistname string
        var todolistid int
		err = rows.Scan(&todolistname,&todolistid)
		checkErr(err)
		fmt.Println( todolistname)
	}
}
func get_items_from_list(id int,db *sql.DB) {

	rows, err := db.Query("SELECT * FROM to_do_list_item where todolistid=$1 ",id)
	checkErr(err)
	for rows.Next() {
		var todolistitem string
		var todolistid int
		var status string

		err = rows.Scan(&todolistitem,&todolistid,&status)
		checkErr(err)
		fmt.Println( todolistitem)
	}

}
func delete_a_to_do(obj TodoList,db *sql.DB ) {

	_,err := db.Exec("DELETE FROM to_do_list_item WHERE todolistid = $1 ;",obj.id)
	_,err = db.Exec("DELETE FROM to_do_list WHERE todolistid = $1 ;",obj.id,)
	checkErr(err)
}
func check(obj TodoList,db *sql.DB ) bool {


	_, err := db.Query("SELECT * FROM to_do_list where todolistid=$1 ;",obj.id)

	if err ==sql.ErrNoRows {
		return true
	}

		return false

}

func checkErr(err error) {
	if err != nil {
		panic(err)
	}
}

