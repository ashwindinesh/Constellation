/*
Copyright 2007-2009 WebDriver committers
Copyright 2007-2009 Google Inc.
Portions copyright 2011 Software Freedom Conservatory

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
 */

package org.openqa.selenium.environment;

import org.openqa.selenium.environment.webserver.AppServer;
import org.openqa.selenium.environment.webserver.Jetty7AppServer;

public class InProcessTestEnvironment implements TestEnvironment {

  private AppServer appServer;

  public InProcessTestEnvironment() {
    appServer = new Jetty7AppServer();
    appServer.start();
  }

  public AppServer getAppServer() {
    return appServer;
  }

  public void stop() {
    appServer.stop();
  }

  public static void main(String[] args) {
    new InProcessTestEnvironment();
  }
}
