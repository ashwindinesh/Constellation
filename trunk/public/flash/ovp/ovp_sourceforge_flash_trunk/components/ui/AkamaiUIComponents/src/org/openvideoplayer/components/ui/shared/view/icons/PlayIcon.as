//
// Copyright (c) 2009-2011, the Open Video Player authors. All rights reserved.
//
// Redistribution and use in source and binary forms, with or without 
// modification, are permitted provided that the following conditions are 
// met:
//
//    * Redistributions of source code must retain the above copyright 
//		notice, this list of conditions and the following disclaimer.
//    * Redistributions in binary form must reproduce the above 
//		copyright notice, this list of conditions and the following 
//		disclaimer in the documentation and/or other materials provided 
//		with the distribution.
//    * Neither the name of the openvideoplayer.org nor the names of its 
//		contributors may be used to endorse or promote products derived 
//		from this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS 
// "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT 
// LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR 
// A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT 
// OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, 
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT 
// LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, 
// DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY 
// THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT 
// (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE 
// OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//
package org.openvideoplayer.components.ui.shared.view.icons
{
	import flash.display.Shape;
	import org.openvideoplayer.components.ui.controlbar.view.icons.BaseIcon;
	
	[ExcludeClass]

	/**
	 * @author Akamai Technologies, Inc 2011
	 */	
	public class PlayIcon extends BaseIcon
	{
		private static const iconPadding:int = 2;
		
		public function PlayIcon(h:Number)
		{
			var iconWidth:Number = (h*.3)-iconPadding;
			graphics.beginFill(controlBarPropertyModel.controlIconColor, controlBarPropertyModel.controlIconAlpha);
			graphics.moveTo(iconWidth,0);
			graphics.lineTo(-iconWidth,(h*.4)-iconPadding);
			graphics.lineTo(-iconWidth,((h*.4)-iconPadding)*-1);
			graphics.lineTo(iconWidth,0);
			graphics.endFill();
		}
	}
}