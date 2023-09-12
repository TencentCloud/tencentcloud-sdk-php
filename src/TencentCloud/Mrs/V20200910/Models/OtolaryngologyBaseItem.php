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
 * 体检报告-耳鼻喉科
 *
 * @method OtolaryngologyEar getEar() 获取耳朵
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEar(OtolaryngologyEar $Ear) 设置耳朵
注意：此字段可能返回 null，表示取不到有效值。
 * @method OtolaryngologyNose getNose() 获取鼻
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNose(OtolaryngologyNose $Nose) 设置鼻
注意：此字段可能返回 null，表示取不到有效值。
 * @method OtolaryngologyLarynx getLarynx() 获取喉
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLarynx(OtolaryngologyLarynx $Larynx) 设置喉
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOthers() 获取耳鼻喉其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthers(array $Others) 设置耳鼻喉其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method OtolaryngologyBriefSummary getBriefSummary() 获取小结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBriefSummary(OtolaryngologyBriefSummary $BriefSummary) 设置小结
注意：此字段可能返回 null，表示取不到有效值。
 */
class OtolaryngologyBaseItem extends AbstractModel
{
    /**
     * @var OtolaryngologyEar 耳朵
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ear;

    /**
     * @var OtolaryngologyNose 鼻
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nose;

    /**
     * @var OtolaryngologyLarynx 喉
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Larynx;

    /**
     * @var array 耳鼻喉其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Others;

    /**
     * @var OtolaryngologyBriefSummary 小结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BriefSummary;

    /**
     * @param OtolaryngologyEar $Ear 耳朵
注意：此字段可能返回 null，表示取不到有效值。
     * @param OtolaryngologyNose $Nose 鼻
注意：此字段可能返回 null，表示取不到有效值。
     * @param OtolaryngologyLarynx $Larynx 喉
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Others 耳鼻喉其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param OtolaryngologyBriefSummary $BriefSummary 小结
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
        if (array_key_exists("Ear",$param) and $param["Ear"] !== null) {
            $this->Ear = new OtolaryngologyEar();
            $this->Ear->deserialize($param["Ear"]);
        }

        if (array_key_exists("Nose",$param) and $param["Nose"] !== null) {
            $this->Nose = new OtolaryngologyNose();
            $this->Nose->deserialize($param["Nose"]);
        }

        if (array_key_exists("Larynx",$param) and $param["Larynx"] !== null) {
            $this->Larynx = new OtolaryngologyLarynx();
            $this->Larynx->deserialize($param["Larynx"]);
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
            $this->BriefSummary = new OtolaryngologyBriefSummary();
            $this->BriefSummary->deserialize($param["BriefSummary"]);
        }
    }
}
