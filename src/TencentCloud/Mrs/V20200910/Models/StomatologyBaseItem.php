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
 * 体检报告-口腔科
 *
 * @method StomatologyToothDecay getToothDecay() 获取龋齿
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToothDecay(StomatologyToothDecay $ToothDecay) 设置龋齿
注意：此字段可能返回 null，表示取不到有效值。
 * @method StomatologyGingiva getGingiva() 获取牙龈
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGingiva(StomatologyGingiva $Gingiva) 设置牙龈
注意：此字段可能返回 null，表示取不到有效值。
 * @method StomatologyPeriodontics getPeriodontics() 获取牙周
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodontics(StomatologyPeriodontics $Periodontics) 设置牙周
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOthers() 获取口腔其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthers(array $Others) 设置口腔其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method StomatologyBriefSummary getBriefSummary() 获取小结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBriefSummary(StomatologyBriefSummary $BriefSummary) 设置小结
注意：此字段可能返回 null，表示取不到有效值。
 */
class StomatologyBaseItem extends AbstractModel
{
    /**
     * @var StomatologyToothDecay 龋齿
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToothDecay;

    /**
     * @var StomatologyGingiva 牙龈
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gingiva;

    /**
     * @var StomatologyPeriodontics 牙周
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Periodontics;

    /**
     * @var array 口腔其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Others;

    /**
     * @var StomatologyBriefSummary 小结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BriefSummary;

    /**
     * @param StomatologyToothDecay $ToothDecay 龋齿
注意：此字段可能返回 null，表示取不到有效值。
     * @param StomatologyGingiva $Gingiva 牙龈
注意：此字段可能返回 null，表示取不到有效值。
     * @param StomatologyPeriodontics $Periodontics 牙周
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Others 口腔其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param StomatologyBriefSummary $BriefSummary 小结
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
        if (array_key_exists("ToothDecay",$param) and $param["ToothDecay"] !== null) {
            $this->ToothDecay = new StomatologyToothDecay();
            $this->ToothDecay->deserialize($param["ToothDecay"]);
        }

        if (array_key_exists("Gingiva",$param) and $param["Gingiva"] !== null) {
            $this->Gingiva = new StomatologyGingiva();
            $this->Gingiva->deserialize($param["Gingiva"]);
        }

        if (array_key_exists("Periodontics",$param) and $param["Periodontics"] !== null) {
            $this->Periodontics = new StomatologyPeriodontics();
            $this->Periodontics->deserialize($param["Periodontics"]);
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
            $this->BriefSummary = new StomatologyBriefSummary();
            $this->BriefSummary->deserialize($param["BriefSummary"]);
        }
    }
}
