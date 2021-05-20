Try this with customsTypeManual null in DB.

```graphql
{
  greetings {
    edges {
      node {
        id
        name
        customsTypeManual
      }
    }
  }
}
```
