<?php
$trelloFile['url']="https://drive.google.com/file/d/1tmZJ4SeX5W0wlJ1_2yF476eEopmJlpsb/view";

 if(strpos($trelloFile['url'], 'drive.google.com') !== false) {
                                $patterns = [
                                    '/\/file\/d\/([a-zA-Z0-9_-]+)/',
                                    '/id=([a-zA-Z0-9_-]+)/',
                                    '/folders\/([a-zA-Z0-9_-]+)/',
                                ];
                                
                                foreach ($patterns as $pattern) {
                                    if (preg_match($pattern, $trelloFile['url'], $matches)) {
                                        $fileId= $matches[1];
                                    }
                                }
                                echo $fileId;
                              }