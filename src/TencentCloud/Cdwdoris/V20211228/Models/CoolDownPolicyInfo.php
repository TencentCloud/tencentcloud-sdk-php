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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 冷热分层策略
 *
 * @method string getPolicyName() 获取策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCooldownDatetime() 获取cooldown_ttl
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCooldownDatetime(string $CooldownDatetime) 设置cooldown_ttl
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCooldownTtl() 获取cooldown_datetime
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCooldownTtl(string $CooldownTtl) 设置cooldown_datetime
注意：此字段可能返回 null，表示取不到有效值。
 */
class CoolDownPolicyInfo extends AbstractModel
{
    /**
     * @var string 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var string cooldown_ttl
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CooldownDatetime;

    /**
     * @var string cooldown_datetime
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CooldownTtl;

    /**
     * @param string $PolicyName 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CooldownDatetime cooldown_ttl
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CooldownTtl cooldown_datetime
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("CooldownDatetime",$param) and $param["CooldownDatetime"] !== null) {
            $this->CooldownDatetime = $param["CooldownDatetime"];
        }

        if (array_key_exists("CooldownTtl",$param) and $param["CooldownTtl"] !== null) {
            $this->CooldownTtl = $param["CooldownTtl"];
        }
    }
}
