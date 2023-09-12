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
 * 体检报告-其他项
 *
 * @method KeyValueItem getCountenance() 获取面容与表情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountenance(KeyValueItem $Countenance) 设置面容与表情
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getMentalStatus() 获取精神状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMentalStatus(KeyValueItem $MentalStatus) 设置精神状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getDevelopmentCondition() 获取发育及营养状况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevelopmentCondition(KeyValueItem $DevelopmentCondition) 设置发育及营养状况
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getMemory() 获取记忆力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(KeyValueItem $Memory) 设置记忆力
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getHipline() 获取臀围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHipline(ValueUnitItem $Hipline) 设置臀围
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getWaistHipRatio() 获取腰臀比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaistHipRatio(ValueUnitItem $WaistHipRatio) 设置腰臀比
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getAddiction() 获取生活嗜好
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddiction(KeyValueItem $Addiction) 设置生活嗜好
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getAbilityOfLifeADL() 获取生活能力评定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbilityOfLifeADL(KeyValueItem $AbilityOfLifeADL) 设置生活能力评定
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOthers() 获取一般检查其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthers(array $Others) 设置一般检查其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChestCircumferenceItem getChestCircumference() 获取胸围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChestCircumference(ChestCircumferenceItem $ChestCircumference) 设置胸围
注意：此字段可能返回 null，表示取不到有效值。
 */
class GeneralExaminationOthers extends AbstractModel
{
    /**
     * @var KeyValueItem 面容与表情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Countenance;

    /**
     * @var KeyValueItem 精神状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MentalStatus;

    /**
     * @var KeyValueItem 发育及营养状况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevelopmentCondition;

    /**
     * @var KeyValueItem 记忆力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var ValueUnitItem 臀围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hipline;

    /**
     * @var ValueUnitItem 腰臀比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaistHipRatio;

    /**
     * @var KeyValueItem 生活嗜好
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Addiction;

    /**
     * @var KeyValueItem 生活能力评定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbilityOfLifeADL;

    /**
     * @var array 一般检查其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Others;

    /**
     * @var ChestCircumferenceItem 胸围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChestCircumference;

    /**
     * @param KeyValueItem $Countenance 面容与表情
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $MentalStatus 精神状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $DevelopmentCondition 发育及营养状况
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Memory 记忆力
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $Hipline 臀围
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $WaistHipRatio 腰臀比
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Addiction 生活嗜好
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $AbilityOfLifeADL 生活能力评定
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Others 一般检查其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChestCircumferenceItem $ChestCircumference 胸围
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
        if (array_key_exists("Countenance",$param) and $param["Countenance"] !== null) {
            $this->Countenance = new KeyValueItem();
            $this->Countenance->deserialize($param["Countenance"]);
        }

        if (array_key_exists("MentalStatus",$param) and $param["MentalStatus"] !== null) {
            $this->MentalStatus = new KeyValueItem();
            $this->MentalStatus->deserialize($param["MentalStatus"]);
        }

        if (array_key_exists("DevelopmentCondition",$param) and $param["DevelopmentCondition"] !== null) {
            $this->DevelopmentCondition = new KeyValueItem();
            $this->DevelopmentCondition->deserialize($param["DevelopmentCondition"]);
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = new KeyValueItem();
            $this->Memory->deserialize($param["Memory"]);
        }

        if (array_key_exists("Hipline",$param) and $param["Hipline"] !== null) {
            $this->Hipline = new ValueUnitItem();
            $this->Hipline->deserialize($param["Hipline"]);
        }

        if (array_key_exists("WaistHipRatio",$param) and $param["WaistHipRatio"] !== null) {
            $this->WaistHipRatio = new ValueUnitItem();
            $this->WaistHipRatio->deserialize($param["WaistHipRatio"]);
        }

        if (array_key_exists("Addiction",$param) and $param["Addiction"] !== null) {
            $this->Addiction = new KeyValueItem();
            $this->Addiction->deserialize($param["Addiction"]);
        }

        if (array_key_exists("AbilityOfLifeADL",$param) and $param["AbilityOfLifeADL"] !== null) {
            $this->AbilityOfLifeADL = new KeyValueItem();
            $this->AbilityOfLifeADL->deserialize($param["AbilityOfLifeADL"]);
        }

        if (array_key_exists("Others",$param) and $param["Others"] !== null) {
            $this->Others = [];
            foreach ($param["Others"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->Others, $obj);
            }
        }

        if (array_key_exists("ChestCircumference",$param) and $param["ChestCircumference"] !== null) {
            $this->ChestCircumference = new ChestCircumferenceItem();
            $this->ChestCircumference->deserialize($param["ChestCircumference"]);
        }
    }
}
