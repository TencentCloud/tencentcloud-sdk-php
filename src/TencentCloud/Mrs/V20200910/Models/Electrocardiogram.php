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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 心电图
 *
 * @method EcgDescription getEcgDescription() 获取心电图详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEcgDescription(EcgDescription $EcgDescription) 设置心电图详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method EcgDiagnosis getEcgDiagnosis() 获取心电图诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEcgDiagnosis(EcgDiagnosis $EcgDiagnosis) 设置心电图诊断
注意：此字段可能返回 null，表示取不到有效值。
 */
class Electrocardiogram extends AbstractModel
{
    /**
     * @var EcgDescription 心电图详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EcgDescription;

    /**
     * @var EcgDiagnosis 心电图诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EcgDiagnosis;

    /**
     * @param EcgDescription $EcgDescription 心电图详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param EcgDiagnosis $EcgDiagnosis 心电图诊断
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
        if (array_key_exists("EcgDescription",$param) and $param["EcgDescription"] !== null) {
            $this->EcgDescription = new EcgDescription();
            $this->EcgDescription->deserialize($param["EcgDescription"]);
        }

        if (array_key_exists("EcgDiagnosis",$param) and $param["EcgDiagnosis"] !== null) {
            $this->EcgDiagnosis = new EcgDiagnosis();
            $this->EcgDiagnosis->deserialize($param["EcgDiagnosis"]);
        }
    }
}
