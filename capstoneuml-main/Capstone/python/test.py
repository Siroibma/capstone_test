try:
    conn = mariadb.connect(
        user="alora1",
        password="Haehoo3i",
        host="weblab.cs.uml.edu",
        port=3306,
        database="alora1"

    )
except mariadb.Error as e:
    print(f"Error connecting to MariaDB Platform: {e}")
    sys.exit(1)