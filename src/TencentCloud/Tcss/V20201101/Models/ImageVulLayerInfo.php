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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞列表中的层信息
 *
 * @method string getLayerId() 获取层id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLayerId(string $LayerId) 设置层id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLayerCmd() 获取层cmd
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLayerCmd(string $LayerCmd) 设置层cmd
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageVulLayerInfo extends AbstractModel
{
    /**
     * @var string 层id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LayerId;

    /**
     * @var string 层cmd
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LayerCmd;

    /**
     * @param string $LayerId 层id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LayerCmd 层cmd
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("LayerId",$param) and $param["LayerId"] !== null) {
            $this->LayerId = $param["LayerId"];
        }

        if (array_key_exists("LayerCmd",$param) and $param["LayerCmd"] !== null) {
            $this->LayerCmd = $param["LayerCmd"];
        }
    }
}
