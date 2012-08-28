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
package org.openvideoplayer.components.ui.controlbar.view
{
	import flash.display.Sprite;
	import flash.events.MouseEvent;
	
	import org.openvideoplayer.components.ui.shared.ControlType;
	import org.openvideoplayer.components.ui.shared.event.ControlEvent;
	import org.openvideoplayer.components.ui.shared.view.icons.PlayIcon;
	import org.openvideoplayer.components.ui.shared.view.ButtonView;
	
	/**
	 *  @author Akamai Technologies, Inc 2011
	 */	
	public class FastForwardButton extends ButtonView
	{
		
		/**
		 * @Constructor 
		 */		
		public function FastForwardButton()
		{
			super(ControlType.FAST_FORWARD_BUTTON);
			this.addEventListener(MouseEvent.MOUSE_DOWN, onMouseDown);
			addIcons();
		}

		override protected function onMouseClick(event:MouseEvent):void
		{
		}
		
		private function onMouseDown(event:MouseEvent):void
		{
			stage.addEventListener(MouseEvent.MOUSE_UP, onStageMouseClick);
			dispatchEvent(new ControlEvent(ControlEvent.FAST_FORWARD_DOWN));
		}

		private function onStageMouseClick(event:MouseEvent):void
		{
			stage.removeEventListener(MouseEvent.MOUSE_UP, onStageMouseClick);
			dispatchEvent(new ControlEvent(ControlEvent.FAST_FORWARD_UP));
		}
		
		private function addIcons():void
		{
			var container:Sprite = new Sprite();
			var arrow1:PlayIcon = new PlayIcon(buttonHeight);
			var arrow2:PlayIcon = new PlayIcon(buttonHeight);
			container.addChild(arrow1);
			container.addChild(arrow2);
			arrow1.x -= arrow1.width/3;
			arrow2.x += arrow1.width/3;
			centerIcon(container);
			addChild(container);
		}
		
		private function centerIcon(icon:Sprite):void
		{
			icon.x = (this.width/2);
			icon.y = (this.height/2);
		}
	}
}