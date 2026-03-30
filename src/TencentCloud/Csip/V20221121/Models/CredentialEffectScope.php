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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生效机器范围，用于指定凭证在哪些机器上生效
 *
 * @method integer getExclude() 获取是否排除模式
枚举值：
0：包含模式（仅Instances中的机器生效），此时Instances必填
1：排除模式（Instances中的机器不生效，其余机器生效），此时Instances可选（空列表表示全部机器生效）
 * @method void setExclude(integer $Exclude) 设置是否排除模式
枚举值：
0：包含模式（仅Instances中的机器生效），此时Instances必填
1：排除模式（Instances中的机器不生效，其余机器生效），此时Instances可选（空列表表示全部机器生效）
 * @method array getInstances() 获取机器实例ID列表。Exclude为0时必填，表示仅这些机器可访问凭证；Exclude为1时可选，表示这些机器不可访问凭证（空列表表示全部机器生效）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstances(array $Instances) 设置机器实例ID列表。Exclude为0时必填，表示仅这些机器可访问凭证；Exclude为1时可选，表示这些机器不可访问凭证（空列表表示全部机器生效）
注意：此字段可能返回 null，表示取不到有效值。
 */
class CredentialEffectScope extends AbstractModel
{
    /**
     * @var integer 是否排除模式
枚举值：
0：包含模式（仅Instances中的机器生效），此时Instances必填
1：排除模式（Instances中的机器不生效，其余机器生效），此时Instances可选（空列表表示全部机器生效）
     */
    public $Exclude;

    /**
     * @var array 机器实例ID列表。Exclude为0时必填，表示仅这些机器可访问凭证；Exclude为1时可选，表示这些机器不可访问凭证（空列表表示全部机器生效）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instances;

    /**
     * @param integer $Exclude 是否排除模式
枚举值：
0：包含模式（仅Instances中的机器生效），此时Instances必填
1：排除模式（Instances中的机器不生效，其余机器生效），此时Instances可选（空列表表示全部机器生效）
     * @param array $Instances 机器实例ID列表。Exclude为0时必填，表示仅这些机器可访问凭证；Exclude为1时可选，表示这些机器不可访问凭证（空列表表示全部机器生效）
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
        if (array_key_exists("Exclude",$param) and $param["Exclude"] !== null) {
            $this->Exclude = $param["Exclude"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = $param["Instances"];
        }
    }
}
