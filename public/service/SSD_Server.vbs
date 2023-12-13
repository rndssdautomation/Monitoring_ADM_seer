dim NIC1, Nic, StrIP
Set NIC1 = GetObject("winmgmts:").InstancesOf("Win32_NetworkAdapterConfiguration")

For Each Nic in NIC1
    if Nic.IPEnabled then
        StrIP = "192.168.127.98"
	Set objShell = CreateObject("WScript.Shell")
	strCurrentPath = objShell.CurrentDirectory
	Set objFSO = CreateObject("Scripting.FileSystemObject")
	strParentPath = objFSO.GetParentFolderName(objFSO.GetParentFolderName(strCurrentPath))
	strCommand = "php spark serve --host " & StrIP & " -host 8081"
	objShell.CurrentDirectory = strParentPath
	objShell.Run strCommand, 0, True
	wscript.quit
    End if
Next



