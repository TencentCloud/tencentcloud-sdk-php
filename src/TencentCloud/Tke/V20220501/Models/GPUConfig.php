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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机型名称与GPU相关的参数，包括驱动版本，CUDA版本，cuDNN版本，是否开启MIG以及是否开启Fabric等相关配置信息
 *
 * @method string getInstanceType() 获取机型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置机型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method GPUParams getGPUParams() 获取GPU相关的参数，包括驱动版本，CUDA版本，cuDNN版本，是否开启MIG以及是否开启Fabric等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPUParams(GPUParams $GPUParams) 设置GPU相关的参数，包括驱动版本，CUDA版本，cuDNN版本，是否开启MIG以及是否开启Fabric等
注意：此字段可能返回 null，表示取不到有效值。
 */
class GPUConfig extends AbstractModel
{
    /**
     * @var string 机型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var GPUParams GPU相关的参数，包括驱动版本，CUDA版本，cuDNN版本，是否开启MIG以及是否开启Fabric等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPUParams;

    /**
     * @param string $InstanceType 机型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param GPUParams $GPUParams GPU相关的参数，包括驱动版本，CUDA版本，cuDNN版本，是否开启MIG以及是否开启Fabric等
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("GPUParams",$param) and $param["GPUParams"] !== null) {
            $this->GPUParams = new GPUParams();
            $this->GPUParams->deserialize($param["GPUParams"]);
        }
    }
}
