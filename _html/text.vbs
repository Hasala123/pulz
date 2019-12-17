Dim message, naya,a
while a=0
message=InputBox("Enter Your Text","Converter")
Set naya=CreateObject("sapi.spvoice")
naya.Speak message
if message = "x" Then
a = 1
End if
Wend


