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
 * 体检报告-一般检测信息
 *
 * @method GeneralExaminationVitalSign getVitalSign() 获取生命体征
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVitalSign(GeneralExaminationVitalSign $VitalSign) 设置生命体征
注意：此字段可能返回 null，表示取不到有效值。
 * @method GeneralExaminationOthers getOthers() 获取其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthers(GeneralExaminationOthers $Others) 设置其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method GeneralExaminationBriefSummary getBriefSummary() 获取小结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBriefSummary(GeneralExaminationBriefSummary $BriefSummary) 设置小结
注意：此字段可能返回 null，表示取不到有效值。
 */
class GeneralExaminationBaseItem extends AbstractModel
{
    /**
     * @var GeneralExaminationVitalSign 生命体征
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VitalSign;

    /**
     * @var GeneralExaminationOthers 其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Others;

    /**
     * @var GeneralExaminationBriefSummary 小结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BriefSummary;

    /**
     * @param GeneralExaminationVitalSign $VitalSign 生命体征
注意：此字段可能返回 null，表示取不到有效值。
     * @param GeneralExaminationOthers $Others 其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param GeneralExaminationBriefSummary $BriefSummary 小结
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
        if (array_key_exists("VitalSign",$param) and $param["VitalSign"] !== null) {
            $this->VitalSign = new GeneralExaminationVitalSign();
            $this->VitalSign->deserialize($param["VitalSign"]);
        }

        if (array_key_exists("Others",$param) and $param["Others"] !== null) {
            $this->Others = new GeneralExaminationOthers();
            $this->Others->deserialize($param["Others"]);
        }

        if (array_key_exists("BriefSummary",$param) and $param["BriefSummary"] !== null) {
            $this->BriefSummary = new GeneralExaminationBriefSummary();
            $this->BriefSummary->deserialize($param["BriefSummary"]);
        }
    }
}
