Set objShell = CreateObject("WScript.Shell")
objShell.Run ".\SSD_Server.vbs", 0, False
MsgBox "Server Alive", vbInformation + vbOKOnly, "SSD Automation"
