## API Endpoint
* GET /weight/: Retrieve weight, default to last 30 days
* GET /weight/{date}: Retrieve the weight of particular date
* POST /weight: Update weight for the current date
* PUT /weight/{date} : Update weight for particular date
* DELETE /weight/{date}: Delete the weight for particular date

Note: Date is given as DDMMYYYY, for example 17092018 for 17 September 2018

## Note
1. The request should have the following header in order to get json error response: Accept: application/json
