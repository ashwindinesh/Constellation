<?php
// auto-generated by sfRoutingConfigHandler
// date: 2012/04/22 17:20:36
$this->routes['homepage'] = unserialize('C:7:"sfRoute":1062:{a:10:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:3:{i:0;s:9:"separator";i:1;s:1:"/";i:2;s:1:"/";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:2:"on";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:2:"on";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:1:"/";i:4;s:0:"";i:5;s:6:"#^/$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:7:"default";s:6:"action";s:5:"index";}i:8;a:0:{}i:9;s:1:"/";}}');
$this->routes['smil'] = unserialize('C:7:"sfRoute":1791:{a:10:{i:0;a:10:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"services";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:9:"Tokenizer";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:4:":map";i:3;s:3:"map";}i:8;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:9;a:4:{i:0;s:4:"text";i:1;s:1:".";i:2;s:4:"smil";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:2:"on";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:2:"on";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:33:"/services/Tokenizer/:id/:map.smil";i:4;s:19:"/services/Tokenizer";i:5;s:63:"#^/services/Tokenizer/(?P<id>[^/\\.]+)/(?P<map>[^/\\.]+)\\.smil$#x";i:6;a:2:{s:2:"id";s:3:":id";s:3:"map";s:4:":map";}i:7;a:3:{s:6:"module";s:7:"default";s:6:"action";s:8:"services";s:2:"op";s:9:"Tokenizer";}i:8;a:2:{s:2:"id";s:7:"[^/\\.]+";s:3:"map";s:7:"[^/\\.]+";}i:9;s:0:"";}}');
$this->routes['default_index'] = unserialize('C:7:"sfRoute":1978:{a:10:{i:0;a:10:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":action";i:3;s:6:"action";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":op";i:3;s:2:"op";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:3:":id";i:3;s:2:"id";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:4:":rev";i:3;s:3:"rev";}i:8;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:9;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:1:"*";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:2:"on";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:2:"on";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:23:"/:action/:op/:id/:rev/*";i:4;s:0:"";i:5;s:140:"#^/?(?:/(?P<action>[^/\\.]+) (?:/(?P<op>[^/\\.]+)  (?:/(?P<id>[^/\\.]+)   (?:/(?P<rev>[^/\\.]+)    (?:(?:/(?P<_star>.*))?    )?   )?  )? )?)?$#x";i:6;a:4:{s:6:"action";s:7:":action";s:2:"op";s:3:":op";s:2:"id";s:3:":id";s:3:"rev";s:4:":rev";}i:7;a:5:{s:6:"module";s:7:"default";s:6:"action";s:5:"index";s:2:"op";s:4:"list";s:2:"id";s:1:"0";s:3:"rev";s:1:"0";}i:8;a:4:{s:6:"action";s:7:"[^/\\.]+";s:2:"op";s:7:"[^/\\.]+";s:2:"id";s:7:"[^/\\.]+";s:3:"rev";s:7:"[^/\\.]+";}i:9;s:0:"";}}');
$this->routes['default'] = unserialize('C:7:"sfRoute":1470:{a:10:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":module";i:3;s:6:"module";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":action";i:3;s:6:"action";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:1:"*";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:2:"on";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:2:"on";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:18:"/:module/:action/*";i:4;s:0:"";i:5;s:69:"#^/(?P<module>[^/\\.]+)/(?P<action>[^/\\.]+)(?:(?:/(?P<_star>.*))?)?$#x";i:6;a:2:{s:6:"module";s:7:":module";s:6:"action";s:7:":action";}i:7;a:0:{}i:8;a:2:{s:6:"module";s:7:"[^/\\.]+";s:6:"action";s:7:"[^/\\.]+";}i:9;s:0:"";}}');
