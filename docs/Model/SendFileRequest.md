# SendFileRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone** | **int** | **Required if chatId is not set**  A phone number starting with the country code. You do not need to add your number.   USA example: 17472822486. | [optional] 
**body** | **string** | HTTP link *https://upload.wikimedia.org/wikipedia/ru/3/33/NatureCover2001.jpg*  Or base64-encoded file with mime data, for example *data:image/jpeg;base64,/9j/4AAQSkZJRgABAQ...*   File in form-data input field | 
**filename** | **string** | File name, for *example 1.jpg* or *hello.xlsx* | 
**caption** | **string** | Text under the file | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

