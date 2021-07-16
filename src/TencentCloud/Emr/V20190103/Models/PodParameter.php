<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * POD自定义权限和自定义参数
 *
 * @method string getClusterId() 获取TKE或EKS集群ID
 * @method void setClusterId(string $ClusterId) 设置TKE或EKS集群ID
 * @method string getConfig() 获取自定义权限
如：
{
  "apiVersion": "v1",
  "clusters": [
    {
      "cluster": {
        "certificate-authority-data": "xxxxxx==",
        "server": "https://xxxxx.com"
      },
      "name": "cls-xxxxx"
    }
  ],
  "contexts": [
    {
      "context": {
        "cluster": "cls-xxxxx",
        "user": "100014xxxxx"
      },
      "name": "cls-a44yhcxxxxxxxxxx"
    }
  ],
  "current-context": "cls-a4xxxx-context-default",
  "kind": "Config",
  "preferences": {},
  "users": [
    {
      "name": "100014xxxxx",
      "user": {
        "client-certificate-data": "xxxxxx",
        "client-key-data": "xxxxxx"
      }
    }
  ]
}
 * @method void setConfig(string $Config) 设置自定义权限
如：
{
  "apiVersion": "v1",
  "clusters": [
    {
      "cluster": {
        "certificate-authority-data": "xxxxxx==",
        "server": "https://xxxxx.com"
      },
      "name": "cls-xxxxx"
    }
  ],
  "contexts": [
    {
      "context": {
        "cluster": "cls-xxxxx",
        "user": "100014xxxxx"
      },
      "name": "cls-a44yhcxxxxxxxxxx"
    }
  ],
  "current-context": "cls-a4xxxx-context-default",
  "kind": "Config",
  "preferences": {},
  "users": [
    {
      "name": "100014xxxxx",
      "user": {
        "client-certificate-data": "xxxxxx",
        "client-key-data": "xxxxxx"
      }
    }
  ]
}
 * @method string getParameter() 获取自定义参数
如：
{
    "apiVersion": "apps/v1",
    "kind": "Deployment",
    "metadata": {
      "name": "test-deployment",
      "labels": {
        "app": "test"
      }
    },
    "spec": {
      "replicas": 3,
      "selector": {
        "matchLabels": {
          "app": "test-app"
        }
      },
      "template": {
        "metadata": {
          "annotations": {
            "your-organization.com/department-v1": "test-example-v1",
            "your-organization.com/department-v2": "test-example-v2"
          },
          "labels": {
            "app": "test-app",
            "environment": "production"
          }
        },
        "spec": {
          "nodeSelector": {
            "your-organization/node-test": "test-node"
          },
          "containers": [
            {
              "name": "nginx",
              "image": "nginx:1.14.2",
              "ports": [
                {
                  "containerPort": 80
                }
              ]
            }
          ],
          "affinity": {
            "nodeAffinity": {
              "requiredDuringSchedulingIgnoredDuringExecution": {
                "nodeSelectorTerms": [
                  {
                    "matchExpressions": [
                      {
                        "key": "disk-type",
                        "operator": "In",
                        "values": [
                          "ssd",
                          "sas"
                        ]
                      },
                      {
                        "key": "cpu-num",
                        "operator": "Gt",
                        "values": [
                          "6"
                        ]
                      }
                    ]
                  }
                ]
              }
            }
          }
        }
      }
    }
  }
 * @method void setParameter(string $Parameter) 设置自定义参数
如：
{
    "apiVersion": "apps/v1",
    "kind": "Deployment",
    "metadata": {
      "name": "test-deployment",
      "labels": {
        "app": "test"
      }
    },
    "spec": {
      "replicas": 3,
      "selector": {
        "matchLabels": {
          "app": "test-app"
        }
      },
      "template": {
        "metadata": {
          "annotations": {
            "your-organization.com/department-v1": "test-example-v1",
            "your-organization.com/department-v2": "test-example-v2"
          },
          "labels": {
            "app": "test-app",
            "environment": "production"
          }
        },
        "spec": {
          "nodeSelector": {
            "your-organization/node-test": "test-node"
          },
          "containers": [
            {
              "name": "nginx",
              "image": "nginx:1.14.2",
              "ports": [
                {
                  "containerPort": 80
                }
              ]
            }
          ],
          "affinity": {
            "nodeAffinity": {
              "requiredDuringSchedulingIgnoredDuringExecution": {
                "nodeSelectorTerms": [
                  {
                    "matchExpressions": [
                      {
                        "key": "disk-type",
                        "operator": "In",
                        "values": [
                          "ssd",
                          "sas"
                        ]
                      },
                      {
                        "key": "cpu-num",
                        "operator": "Gt",
                        "values": [
                          "6"
                        ]
                      }
                    ]
                  }
                ]
              }
            }
          }
        }
      }
    }
  }
 */
class PodParameter extends AbstractModel
{
    /**
     * @var string TKE或EKS集群ID
     */
    public $ClusterId;

    /**
     * @var string 自定义权限
如：
{
  "apiVersion": "v1",
  "clusters": [
    {
      "cluster": {
        "certificate-authority-data": "xxxxxx==",
        "server": "https://xxxxx.com"
      },
      "name": "cls-xxxxx"
    }
  ],
  "contexts": [
    {
      "context": {
        "cluster": "cls-xxxxx",
        "user": "100014xxxxx"
      },
      "name": "cls-a44yhcxxxxxxxxxx"
    }
  ],
  "current-context": "cls-a4xxxx-context-default",
  "kind": "Config",
  "preferences": {},
  "users": [
    {
      "name": "100014xxxxx",
      "user": {
        "client-certificate-data": "xxxxxx",
        "client-key-data": "xxxxxx"
      }
    }
  ]
}
     */
    public $Config;

    /**
     * @var string 自定义参数
如：
{
    "apiVersion": "apps/v1",
    "kind": "Deployment",
    "metadata": {
      "name": "test-deployment",
      "labels": {
        "app": "test"
      }
    },
    "spec": {
      "replicas": 3,
      "selector": {
        "matchLabels": {
          "app": "test-app"
        }
      },
      "template": {
        "metadata": {
          "annotations": {
            "your-organization.com/department-v1": "test-example-v1",
            "your-organization.com/department-v2": "test-example-v2"
          },
          "labels": {
            "app": "test-app",
            "environment": "production"
          }
        },
        "spec": {
          "nodeSelector": {
            "your-organization/node-test": "test-node"
          },
          "containers": [
            {
              "name": "nginx",
              "image": "nginx:1.14.2",
              "ports": [
                {
                  "containerPort": 80
                }
              ]
            }
          ],
          "affinity": {
            "nodeAffinity": {
              "requiredDuringSchedulingIgnoredDuringExecution": {
                "nodeSelectorTerms": [
                  {
                    "matchExpressions": [
                      {
                        "key": "disk-type",
                        "operator": "In",
                        "values": [
                          "ssd",
                          "sas"
                        ]
                      },
                      {
                        "key": "cpu-num",
                        "operator": "Gt",
                        "values": [
                          "6"
                        ]
                      }
                    ]
                  }
                ]
              }
            }
          }
        }
      }
    }
  }
     */
    public $Parameter;

    /**
     * @param string $ClusterId TKE或EKS集群ID
     * @param string $Config 自定义权限
如：
{
  "apiVersion": "v1",
  "clusters": [
    {
      "cluster": {
        "certificate-authority-data": "xxxxxx==",
        "server": "https://xxxxx.com"
      },
      "name": "cls-xxxxx"
    }
  ],
  "contexts": [
    {
      "context": {
        "cluster": "cls-xxxxx",
        "user": "100014xxxxx"
      },
      "name": "cls-a44yhcxxxxxxxxxx"
    }
  ],
  "current-context": "cls-a4xxxx-context-default",
  "kind": "Config",
  "preferences": {},
  "users": [
    {
      "name": "100014xxxxx",
      "user": {
        "client-certificate-data": "xxxxxx",
        "client-key-data": "xxxxxx"
      }
    }
  ]
}
     * @param string $Parameter 自定义参数
如：
{
    "apiVersion": "apps/v1",
    "kind": "Deployment",
    "metadata": {
      "name": "test-deployment",
      "labels": {
        "app": "test"
      }
    },
    "spec": {
      "replicas": 3,
      "selector": {
        "matchLabels": {
          "app": "test-app"
        }
      },
      "template": {
        "metadata": {
          "annotations": {
            "your-organization.com/department-v1": "test-example-v1",
            "your-organization.com/department-v2": "test-example-v2"
          },
          "labels": {
            "app": "test-app",
            "environment": "production"
          }
        },
        "spec": {
          "nodeSelector": {
            "your-organization/node-test": "test-node"
          },
          "containers": [
            {
              "name": "nginx",
              "image": "nginx:1.14.2",
              "ports": [
                {
                  "containerPort": 80
                }
              ]
            }
          ],
          "affinity": {
            "nodeAffinity": {
              "requiredDuringSchedulingIgnoredDuringExecution": {
                "nodeSelectorTerms": [
                  {
                    "matchExpressions": [
                      {
                        "key": "disk-type",
                        "operator": "In",
                        "values": [
                          "ssd",
                          "sas"
                        ]
                      },
                      {
                        "key": "cpu-num",
                        "operator": "Gt",
                        "values": [
                          "6"
                        ]
                      }
                    ]
                  }
                ]
              }
            }
          }
        }
      }
    }
  }
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Parameter",$param) and $param["Parameter"] !== null) {
            $this->Parameter = $param["Parameter"];
        }
    }
}
