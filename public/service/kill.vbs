Set objShell = CreateObject("WScript.Shell")
objShell.Run ".\SSD_Server-s.vbs", 0, False
MsgBox "Server has force Shutdown", vbInformation + vbOKOnly, "SSD Automation"
