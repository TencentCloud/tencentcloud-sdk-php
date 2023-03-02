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
 * 病案首页
 *
 * @method array getDischargeDiagnosis() 获取出入院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeDiagnosis(array $DischargeDiagnosis) 设置出入院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getPathologicalDiagnosis() 获取病理诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathologicalDiagnosis(BlockInfo $PathologicalDiagnosis) 设置病理诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getClinicalDiagnosis() 获取临床诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClinicalDiagnosis(BlockInfo $ClinicalDiagnosis) 设置临床诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfoV2 getDamagePoi() 获取受伤中毒的外部原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDamagePoi(BlockInfoV2 $DamagePoi) 设置受伤中毒的外部原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFp2NdItems() 获取病案首页第二页
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFp2NdItems(array $Fp2NdItems) 设置病案首页第二页
注意：此字段可能返回 null，表示取不到有效值。
 */
class FirstPage extends AbstractModel
{
    /**
     * @var array 出入院诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeDiagnosis;

    /**
     * @var BlockInfo 病理诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathologicalDiagnosis;

    /**
     * @var BlockInfo 临床诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClinicalDiagnosis;

    /**
     * @var BlockInfoV2 受伤中毒的外部原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DamagePoi;

    /**
     * @var array 病案首页第二页
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fp2NdItems;

    /**
     * @param array $DischargeDiagnosis 出入院诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $PathologicalDiagnosis 病理诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $ClinicalDiagnosis 临床诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfoV2 $DamagePoi 受伤中毒的外部原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Fp2NdItems 病案首页第二页
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
        if (array_key_exists("DischargeDiagnosis",$param) and $param["DischargeDiagnosis"] !== null) {
            $this->DischargeDiagnosis = [];
            foreach ($param["DischargeDiagnosis"] as $key => $value){
                $obj = new DischargeDiagnosis();
                $obj->deserialize($value);
                array_push($this->DischargeDiagnosis, $obj);
            }
        }

        if (array_key_exists("PathologicalDiagnosis",$param) and $param["PathologicalDiagnosis"] !== null) {
            $this->PathologicalDiagnosis = new BlockInfo();
            $this->PathologicalDiagnosis->deserialize($param["PathologicalDiagnosis"]);
        }

        if (array_key_exists("ClinicalDiagnosis",$param) and $param["ClinicalDiagnosis"] !== null) {
            $this->ClinicalDiagnosis = new BlockInfo();
            $this->ClinicalDiagnosis->deserialize($param["ClinicalDiagnosis"]);
        }

        if (array_key_exists("DamagePoi",$param) and $param["DamagePoi"] !== null) {
            $this->DamagePoi = new BlockInfoV2();
            $this->DamagePoi->deserialize($param["DamagePoi"]);
        }

        if (array_key_exists("Fp2NdItems",$param) and $param["Fp2NdItems"] !== null) {
            $this->Fp2NdItems = [];
            foreach ($param["Fp2NdItems"] as $key => $value){
                $obj = new Fp2NdItem();
                $obj->deserialize($value);
                array_push($this->Fp2NdItems, $obj);
            }
        }
    }
}
