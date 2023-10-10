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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SmartPolicyRequest
 *
 * @method SmartPolicyBaseInfo getBaseInfo() 获取基础信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaseInfo(SmartPolicyBaseInfo $BaseInfo) 设置基础信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartOptimizerPolicy getPolicy() 获取策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicy(SmartOptimizerPolicy $Policy) 设置策略描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartPolicy extends AbstractModel
{
    /**
     * @var SmartPolicyBaseInfo 基础信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaseInfo;

    /**
     * @var SmartOptimizerPolicy 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Policy;

    /**
     * @param SmartPolicyBaseInfo $BaseInfo 基础信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartOptimizerPolicy $Policy 策略描述
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
        if (array_key_exists("BaseInfo",$param) and $param["BaseInfo"] !== null) {
            $this->BaseInfo = new SmartPolicyBaseInfo();
            $this->BaseInfo->deserialize($param["BaseInfo"]);
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new SmartOptimizerPolicy();
            $this->Policy->deserialize($param["Policy"]);
        }
    }
}
