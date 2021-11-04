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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商户风险信息
 *
 * @method integer getRiskLevel() 获取恶意注册等级，0-9级，9级最高
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(integer $RiskLevel) 设置恶意注册等级，0-9级，9级最高
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskTypes() 获取恶意注册代码，代码以|分割，如"G001|T002"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskTypes(string $RiskTypes) 设置恶意注册代码，代码以|分割，如"G001|T002"
注意：此字段可能返回 null，表示取不到有效值。
 */
class MerchantRiskInfo extends AbstractModel
{
    /**
     * @var integer 恶意注册等级，0-9级，9级最高
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var string 恶意注册代码，代码以|分割，如"G001|T002"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskTypes;

    /**
     * @param integer $RiskLevel 恶意注册等级，0-9级，9级最高
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskTypes 恶意注册代码，代码以|分割，如"G001|T002"
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
        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskTypes",$param) and $param["RiskTypes"] !== null) {
            $this->RiskTypes = $param["RiskTypes"];
        }
    }
}
