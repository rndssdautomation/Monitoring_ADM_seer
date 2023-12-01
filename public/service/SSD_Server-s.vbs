Set objWMIService = GetObject("winmgmts:\\.\root\cimv2")

Set colProcesses = objWMIService.ExecQuery("Select * from Win32_Process Where Name = 'php.exe'")

For Each objProcess in colProcesses
    objProcess.Terminate()
Next