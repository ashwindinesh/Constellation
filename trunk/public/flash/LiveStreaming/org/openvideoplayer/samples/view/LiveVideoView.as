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
package org.openvideoplayer.samples.view
{
	import org.openvideoplayer.components.ui.controlbar.ControlBar;
	import org.openvideoplayer.components.ui.controlbar.view.FlexibleSpacer;
	import org.openvideoplayer.components.ui.controlbar.view.FullscreenButton;
	import org.openvideoplayer.components.ui.controlbar.view.PlayPauseButton;
	import org.openvideoplayer.components.ui.controlbar.view.SingleTimeCodeDisplay;
	import org.openvideoplayer.components.ui.controlbar.view.VolumeControl;

	import com.zeusprod.Log;
	
	public class LiveVideoView extends CaptionVideoView
	{
		private var vidWidth:Number;
		
		public function LiveVideoView(vidWidth:Number, vidHeight:Number)
		{
			//Log.traceMsg ("LiveVideoView size is " + vidWidth + " x " + vidHeight, Log.LOG_TO_CONSOLE);
			this.vidWidth = vidWidth;	// For setting controller bar width
			super (vidWidth, vidHeight);
		}
		
		override protected function getControlBar():ControlBar
		{
			var controlBar:ControlBar = new ControlBar();
			controlBar.width = vidWidth;
			controlBar.addControls([new PlayPauseButton(), new SingleTimeCodeDisplay(), new FlexibleSpacer(),  new VolumeControl(), new FullscreenButton()]);
			return controlBar;
		}
	}
}
