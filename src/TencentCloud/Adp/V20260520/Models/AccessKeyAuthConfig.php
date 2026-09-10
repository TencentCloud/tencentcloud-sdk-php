<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AccessKey鉴权配置
 *
 * @method array getParamList() 获取<p>Access Key字段配置</p>
 * @method void setParamList(array $ParamList) 设置<p>Access Key字段配置</p>
 * @method AccessKeyPassThroughConfig getPassThroughConfig() 获取<p>Access Key透传配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassThroughConfig(AccessKeyPassThroughConfig $PassThroughConfig) 设置<p>Access Key透传配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsageMode() 获取<p>Access Key 使用模式</p><p>枚举值：</p><ul><li>1： Access Key透传</li></ul>
 * @method void setUsageMode(integer $UsageMode) 设置<p>Access Key 使用模式</p><p>枚举值：</p><ul><li>1： Access Key透传</li></ul>
 */
class AccessKeyAuthConfig extends AbstractModel
{
    /**
     * @var array <p>Access Key字段配置</p>
     */
    public $ParamList;

    /**
     * @var AccessKeyPassThroughConfig <p>Access Key透传配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassThroughConfig;

    /**
     * @var integer <p>Access Key 使用模式</p><p>枚举值：</p><ul><li>1： Access Key透传</li></ul>
     */
    public $UsageMode;

    /**
     * @param array $ParamList <p>Access Key字段配置</p>
     * @param AccessKeyPassThroughConfig $PassThroughConfig <p>Access Key透传配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UsageMode <p>Access Key 使用模式</p><p>枚举值：</p><ul><li>1： Access Key透传</li></ul>
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
        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new AccessKeyParamConfig();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("PassThroughConfig",$param) and $param["PassThroughConfig"] !== null) {
            $this->PassThroughConfig = new AccessKeyPassThroughConfig();
            $this->PassThroughConfig->deserialize($param["PassThroughConfig"]);
        }

        if (array_key_exists("UsageMode",$param) and $param["UsageMode"] !== null) {
            $this->UsageMode = $param["UsageMode"];
        }
    }
}
