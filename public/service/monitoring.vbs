dim NIC1, Nic, StrIP
Set NIC1 = GetObject("winmgmts:").InstancesOf("Win32_NetworkAdapterConfiguration")

For Each Nic in NIC1
    if Nic.IPEnabled then
        StrIP = "192.168.127.98"
        Set WshShell = WScript.CreateObject("WScript.Shell")
        WshShell.Run "http://" & StrIP & ":8081"
        
        wscript.quit
    End if
Next
