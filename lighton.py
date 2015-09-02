import pylights

  # Create a PLM object that controls lights.
  # p = pylights.plm(5) # Opens COM5
  # p = pylights.plm('COM5') # Alternate usage
p = pylights.plm('/dev/ttyUSB0') # Linux style
  # p = pylights.plm() # Scans for PLM automatically (Windows only)
  # p = pylights.plm(5,verbose=True) # Prints Insteon hex messages to screen.

  # Specify either name or shortName from the XML file and the desired level
  # in percent.
p.setLevel('Living Room', 100)
  
  # Alternatively, give the address in hex list format.
  #p.getLevel([0x12,0x5F,0x5E])
  
  # ...or use dotted hex.
  #p.fadeOut('12.5F.5E')
  
  # Close the PLM object to release the serial port.
p.close()
