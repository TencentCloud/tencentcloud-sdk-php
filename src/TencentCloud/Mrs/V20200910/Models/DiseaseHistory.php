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
 * 病史
 *
 * @method string getAllergy() 获取过敏史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllergy(string $Allergy) 设置过敏史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInfect() 获取传染疾病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfect(string $Infect) 设置传染疾病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMainDisease() 获取主要病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainDisease(string $MainDisease) 设置主要病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperation() 获取手术外伤史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperation(string $Operation) 设置手术外伤史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransfusion() 获取输血史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransfusion(string $Transfusion) 设置输血史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisease() 获取疾病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisease(string $Disease) 设置疾病史
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiseaseHistory extends AbstractModel
{
    /**
     * @var string 过敏史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Allergy;

    /**
     * @var string 传染疾病史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Infect;

    /**
     * @var string 主要病史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainDisease;

    /**
     * @var string 手术外伤史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operation;

    /**
     * @var string 输血史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Transfusion;

    /**
     * @var string 疾病史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disease;

    /**
     * @param string $Allergy 过敏史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Infect 传染疾病史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MainDisease 主要病史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operation 手术外伤史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Transfusion 输血史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Disease 疾病史
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
        if (array_key_exists("Allergy",$param) and $param["Allergy"] !== null) {
            $this->Allergy = $param["Allergy"];
        }

        if (array_key_exists("Infect",$param) and $param["Infect"] !== null) {
            $this->Infect = $param["Infect"];
        }

        if (array_key_exists("MainDisease",$param) and $param["MainDisease"] !== null) {
            $this->MainDisease = $param["MainDisease"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Transfusion",$param) and $param["Transfusion"] !== null) {
            $this->Transfusion = $param["Transfusion"];
        }

        if (array_key_exists("Disease",$param) and $param["Disease"] !== null) {
            $this->Disease = $param["Disease"];
        }
    }
}
