<?xml version="1.0" encoding="utf-8"?>
<!--
/*****************************************************
*  
*  Copyright 2009 Adobe Systems Incorporated.  All Rights Reserved.
*  
*****************************************************
*  The contents of this file are subject to the Mozilla Public License
*  Version 1.1 (the "License"); you may not use this file except in
*  compliance with the License. You may obtain a copy of the License at
*  http://www.mozilla.org/MPL/
*   
*  Software distributed under the License is distributed on an "AS IS"
*  basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
*  License for the specific language governing rights and limitations
*  under the License.
*   
*  
*  The Initial Developer of the Original Code is Adobe Systems Incorporated.
*  Portions created by Adobe Systems Incorporated are Copyright (C) 2009 Adobe Systems 
*  Incorporated. All Rights Reserved. 
*  
*****************************************************/
-->
<mx:Application
	xmlns:mx			="http://www.adobe.com/2006/mxml" 
	layout				="absolute" 
	creationComplete	="onComplete()">
	
	<mx:Script>
		<![CDATA[
			import org.osmf.OSMFTests;
			import flexunit.framework.TestSuite;
			import flexunit.junit.JUnitTestRunner;
		
			private var _suite:TestSuite;
		
			private function onComplete():void
			{
				var runner:JUnitTestRunner = new JUnitTestRunner();
				runner.run(new OSMFTests(), onTestComplete);
			}
		
			private function onTestComplete():void
			{
				fscommand("quit");
			}
		]]>
	</mx:Script>
  	
</mx:Application>
