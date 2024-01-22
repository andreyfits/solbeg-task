## Create a project with Laravel
1. Should contain 1 model (Item):
   - id: int autoincrement
   - name: string not null unique
   - url: string

2. Migration for creating a table
3. Seed on 10 items (any data)
4. A route - /api/items list of items with paging (with caching in Redis)
5. docker-compose should include all necessary services for the start

- Laravel v10
- Postgres
- Redis
- docker-compose
