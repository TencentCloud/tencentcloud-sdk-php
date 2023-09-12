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
 * 体检报告-眼科
 *
 * @method OphthalmologyBareEyeSight getBareEyeSight() 获取裸眼视力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBareEyeSight(OphthalmologyBareEyeSight $BareEyeSight) 设置裸眼视力
注意：此字段可能返回 null，表示取不到有效值。
 * @method OphthalmologyCorrectedVisualAcuity getCorrectedVisualAcuity() 获取矫正视力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorrectedVisualAcuity(OphthalmologyCorrectedVisualAcuity $CorrectedVisualAcuity) 设置矫正视力
注意：此字段可能返回 null，表示取不到有效值。
 * @method OphthalmologyColourVision getColourVision() 获取色觉
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColourVision(OphthalmologyColourVision $ColourVision) 设置色觉
注意：此字段可能返回 null，表示取不到有效值。
 * @method OphthalmologyFundoscopy getFundoscopy() 获取眼底
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFundoscopy(OphthalmologyFundoscopy $Fundoscopy) 设置眼底
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOthers() 获取眼科其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthers(array $Others) 设置眼科其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method OphthalmologyBriefSummary getBriefSummary() 获取眼科小结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBriefSummary(OphthalmologyBriefSummary $BriefSummary) 设置眼科小结
注意：此字段可能返回 null，表示取不到有效值。
 */
class OphthalmologyBaseItem extends AbstractModel
{
    /**
     * @var OphthalmologyBareEyeSight 裸眼视力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BareEyeSight;

    /**
     * @var OphthalmologyCorrectedVisualAcuity 矫正视力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorrectedVisualAcuity;

    /**
     * @var OphthalmologyColourVision 色觉
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColourVision;

    /**
     * @var OphthalmologyFundoscopy 眼底
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fundoscopy;

    /**
     * @var array 眼科其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Others;

    /**
     * @var OphthalmologyBriefSummary 眼科小结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BriefSummary;

    /**
     * @param OphthalmologyBareEyeSight $BareEyeSight 裸眼视力
注意：此字段可能返回 null，表示取不到有效值。
     * @param OphthalmologyCorrectedVisualAcuity $CorrectedVisualAcuity 矫正视力
注意：此字段可能返回 null，表示取不到有效值。
     * @param OphthalmologyColourVision $ColourVision 色觉
注意：此字段可能返回 null，表示取不到有效值。
     * @param OphthalmologyFundoscopy $Fundoscopy 眼底
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Others 眼科其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param OphthalmologyBriefSummary $BriefSummary 眼科小结
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
        if (array_key_exists("BareEyeSight",$param) and $param["BareEyeSight"] !== null) {
            $this->BareEyeSight = new OphthalmologyBareEyeSight();
            $this->BareEyeSight->deserialize($param["BareEyeSight"]);
        }

        if (array_key_exists("CorrectedVisualAcuity",$param) and $param["CorrectedVisualAcuity"] !== null) {
            $this->CorrectedVisualAcuity = new OphthalmologyCorrectedVisualAcuity();
            $this->CorrectedVisualAcuity->deserialize($param["CorrectedVisualAcuity"]);
        }

        if (array_key_exists("ColourVision",$param) and $param["ColourVision"] !== null) {
            $this->ColourVision = new OphthalmologyColourVision();
            $this->ColourVision->deserialize($param["ColourVision"]);
        }

        if (array_key_exists("Fundoscopy",$param) and $param["Fundoscopy"] !== null) {
            $this->Fundoscopy = new OphthalmologyFundoscopy();
            $this->Fundoscopy->deserialize($param["Fundoscopy"]);
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
            $this->BriefSummary = new OphthalmologyBriefSummary();
            $this->BriefSummary->deserialize($param["BriefSummary"]);
        }
    }
}
