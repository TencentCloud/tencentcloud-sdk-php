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
 * 体检报告-内科
 *
 * @method InternalMedicineAbdomen getAbdomen() 获取体检报告-内科-腹部
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbdomen(InternalMedicineAbdomen $Abdomen) 设置体检报告-内科-腹部
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternalMedicineHeart getHeart() 获取体检报告-内科-心脏
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeart(InternalMedicineHeart $Heart) 设置体检报告-内科-心脏
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternalMedicineVessel getVessel() 获取体检报告-内科-血管
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVessel(InternalMedicineVessel $Vessel) 设置体检报告-内科-血管
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternalMedicineRespiratorySystem getRespiratorySystem() 获取体检报告-内科-呼吸系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRespiratorySystem(InternalMedicineRespiratorySystem $RespiratorySystem) 设置体检报告-内科-呼吸系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOthers() 获取体检报告-内科-内科其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthers(array $Others) 设置体检报告-内科-内科其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternalMedicineBriefSummary getBriefSummary() 获取体检报告-内科-小结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBriefSummary(InternalMedicineBriefSummary $BriefSummary) 设置体检报告-内科-小结
注意：此字段可能返回 null，表示取不到有效值。
 */
class InternalMedicineBaseItem extends AbstractModel
{
    /**
     * @var InternalMedicineAbdomen 体检报告-内科-腹部
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Abdomen;

    /**
     * @var InternalMedicineHeart 体检报告-内科-心脏
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Heart;

    /**
     * @var InternalMedicineVessel 体检报告-内科-血管
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vessel;

    /**
     * @var InternalMedicineRespiratorySystem 体检报告-内科-呼吸系统
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RespiratorySystem;

    /**
     * @var array 体检报告-内科-内科其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Others;

    /**
     * @var InternalMedicineBriefSummary 体检报告-内科-小结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BriefSummary;

    /**
     * @param InternalMedicineAbdomen $Abdomen 体检报告-内科-腹部
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternalMedicineHeart $Heart 体检报告-内科-心脏
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternalMedicineVessel $Vessel 体检报告-内科-血管
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternalMedicineRespiratorySystem $RespiratorySystem 体检报告-内科-呼吸系统
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Others 体检报告-内科-内科其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternalMedicineBriefSummary $BriefSummary 体检报告-内科-小结
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
        if (array_key_exists("Abdomen",$param) and $param["Abdomen"] !== null) {
            $this->Abdomen = new InternalMedicineAbdomen();
            $this->Abdomen->deserialize($param["Abdomen"]);
        }

        if (array_key_exists("Heart",$param) and $param["Heart"] !== null) {
            $this->Heart = new InternalMedicineHeart();
            $this->Heart->deserialize($param["Heart"]);
        }

        if (array_key_exists("Vessel",$param) and $param["Vessel"] !== null) {
            $this->Vessel = new InternalMedicineVessel();
            $this->Vessel->deserialize($param["Vessel"]);
        }

        if (array_key_exists("RespiratorySystem",$param) and $param["RespiratorySystem"] !== null) {
            $this->RespiratorySystem = new InternalMedicineRespiratorySystem();
            $this->RespiratorySystem->deserialize($param["RespiratorySystem"]);
        }

        if (array_key_exists("Others",$param) and $param["Others"] !== null) {
            $this->Others = [];
            foreach ($param["Others"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->Others, $obj);
            }
        }

        if (array_key_exists("BriefSummary",$param) and $param["BriefSummary"] !== null) {
            $this->BriefSummary = new InternalMedicineBriefSummary();
            $this->BriefSummary->deserialize($param["BriefSummary"]);
        }
    }
}
