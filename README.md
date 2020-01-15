### Features

- Generator key
- Generator Licence
- Random string


# Editor.md

![](https://pbs.twimg.com/profile_images/1098844883471790080/CwQH3Z6I_400x400.png)

![](https://img.shields.io/github/stars/pandao/editor.md.svg) ![](https://img.shields.io/github/forks/pandao/editor.md.svg) ![](https://img.shields.io/github/tag/pandao/editor.md.svg) ![](https://img.shields.io/github/release/pandao/editor.md.svg) ![](https://img.shields.io/github/issues/pandao/editor.md.svg) ![](https://img.shields.io/bower/v/editor.md.svg)

# Usage

**Step 1** Require Lincence.Class.php first


    require_once __DIR__.'/Lincence.Class.php';

    
**Step 2** Create Parameter

    $Generator = new licence;
    
**Step 3** Function

		var_dump($Generator->random_number(20)); 
		//string(20) "CDT2BZQDSVENHUPFDYG3"

		var_dump($Generator->random_Serial(4, 8)); 
		//string(35) "XZCQS36H-ZZY863CL-CKKK43ZQ-33N6UAWB"

	 	var_dump($Generator->random_customFormat('J*O*H*N-R*I*P')); 
		//string(13) "JLOJHKN-RGIXP"
