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
 * 体检报告综合信息
 *
 * @method GeneralExaminationBaseItem getGeneralExamination() 获取一般检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGeneralExamination(GeneralExaminationBaseItem $GeneralExamination) 设置一般检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternalMedicineBaseItem getInternalMedicine() 获取内科
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalMedicine(InternalMedicineBaseItem $InternalMedicine) 设置内科
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryBaseItem getSurgery() 获取外科
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurgery(SurgeryBaseItem $Surgery) 设置外科
注意：此字段可能返回 null，表示取不到有效值。
 * @method StomatologyBaseItem getStomatology() 获取口腔科
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStomatology(StomatologyBaseItem $Stomatology) 设置口腔科
注意：此字段可能返回 null，表示取不到有效值。
 * @method OphthalmologyBaseItem getOphthalmology() 获取眼科
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOphthalmology(OphthalmologyBaseItem $Ophthalmology) 设置眼科
注意：此字段可能返回 null，表示取不到有效值。
 * @method OtolaryngologyBaseItem getOtolaryngology() 获取耳鼻喉科
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtolaryngology(OtolaryngologyBaseItem $Otolaryngology) 设置耳鼻喉科
注意：此字段可能返回 null，表示取不到有效值。
 * @method GynaecologyBaseItem getGynaecology() 获取妇科
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGynaecology(GynaecologyBaseItem $Gynaecology) 设置妇科
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUnclassified() 获取未标准化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnclassified(array $Unclassified) 设置未标准化
注意：此字段可能返回 null，表示取不到有效值。
 */
class PhysicalExamination extends AbstractModel
{
    /**
     * @var GeneralExaminationBaseItem 一般检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GeneralExamination;

    /**
     * @var InternalMedicineBaseItem 内科
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalMedicine;

    /**
     * @var SurgeryBaseItem 外科
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Surgery;

    /**
     * @var StomatologyBaseItem 口腔科
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stomatology;

    /**
     * @var OphthalmologyBaseItem 眼科
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ophthalmology;

    /**
     * @var OtolaryngologyBaseItem 耳鼻喉科
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Otolaryngology;

    /**
     * @var GynaecologyBaseItem 妇科
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gynaecology;

    /**
     * @var array 未标准化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unclassified;

    /**
     * @param GeneralExaminationBaseItem $GeneralExamination 一般检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternalMedicineBaseItem $InternalMedicine 内科
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryBaseItem $Surgery 外科
注意：此字段可能返回 null，表示取不到有效值。
     * @param StomatologyBaseItem $Stomatology 口腔科
注意：此字段可能返回 null，表示取不到有效值。
     * @param OphthalmologyBaseItem $Ophthalmology 眼科
注意：此字段可能返回 null，表示取不到有效值。
     * @param OtolaryngologyBaseItem $Otolaryngology 耳鼻喉科
注意：此字段可能返回 null，表示取不到有效值。
     * @param GynaecologyBaseItem $Gynaecology 妇科
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Unclassified 未标准化
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
        if (array_key_exists("GeneralExamination",$param) and $param["GeneralExamination"] !== null) {
            $this->GeneralExamination = new GeneralExaminationBaseItem();
            $this->GeneralExamination->deserialize($param["GeneralExamination"]);
        }

        if (array_key_exists("InternalMedicine",$param) and $param["InternalMedicine"] !== null) {
            $this->InternalMedicine = new InternalMedicineBaseItem();
            $this->InternalMedicine->deserialize($param["InternalMedicine"]);
        }

        if (array_key_exists("Surgery",$param) and $param["Surgery"] !== null) {
            $this->Surgery = new SurgeryBaseItem();
            $this->Surgery->deserialize($param["Surgery"]);
        }

        if (array_key_exists("Stomatology",$param) and $param["Stomatology"] !== null) {
            $this->Stomatology = new StomatologyBaseItem();
            $this->Stomatology->deserialize($param["Stomatology"]);
        }

        if (array_key_exists("Ophthalmology",$param) and $param["Ophthalmology"] !== null) {
            $this->Ophthalmology = new OphthalmologyBaseItem();
            $this->Ophthalmology->deserialize($param["Ophthalmology"]);
        }

        if (array_key_exists("Otolaryngology",$param) and $param["Otolaryngology"] !== null) {
            $this->Otolaryngology = new OtolaryngologyBaseItem();
            $this->Otolaryngology->deserialize($param["Otolaryngology"]);
        }

        if (array_key_exists("Gynaecology",$param) and $param["Gynaecology"] !== null) {
            $this->Gynaecology = new GynaecologyBaseItem();
            $this->Gynaecology->deserialize($param["Gynaecology"]);
        }

        if (array_key_exists("Unclassified",$param) and $param["Unclassified"] !== null) {
            $this->Unclassified = [];
            foreach ($param["Unclassified"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->Unclassified, $obj);
            }
        }
    }
}
