# Php-Licence-Generator-Offical
Generator php Licence. You can make Licence key and Serial Number key with your self

# Useage

      require_once __DIR__.'/Lincence.Class.php';
    
      $Generator = new licence;
      
      var_dump($Generator->random(20)); //string(20) "CDT2BZQDSVENHUPFDYG3"

      var_dump($Generator->newSerial(4, 8)); //string(35) "XZCQS36H-ZZY863CL-CKKK43ZQ-33N6UAWB"

      var_dump($Generator->customFormat('J*O*H*N-R*I*P')); //string(13) "JLOJHKN-RGIXP"
      
