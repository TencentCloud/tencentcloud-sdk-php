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
 * 体检报告-内科-呼吸系统
 *
 * @method KeyValueItem getText() 获取呼吸系统总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(KeyValueItem $Text) 设置呼吸系统总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getThoracic() 获取胸廓
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThoracic(KeyValueItem $Thoracic) 设置胸廓
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getSputum() 获取痰量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSputum(KeyValueItem $Sputum) 设置痰量
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getLungPercussion() 获取肺部叩诊
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLungPercussion(KeyValueItem $LungPercussion) 设置肺部叩诊
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLungAuscultation() 获取肺部听诊其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLungAuscultation(array $LungAuscultation) 设置肺部听诊其他
注意：此字段可能返回 null，表示取不到有效值。
 */
class InternalMedicineRespiratorySystem extends AbstractModel
{
    /**
     * @var KeyValueItem 呼吸系统总体描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var KeyValueItem 胸廓
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Thoracic;

    /**
     * @var KeyValueItem 痰量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sputum;

    /**
     * @var KeyValueItem 肺部叩诊
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LungPercussion;

    /**
     * @var array 肺部听诊其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LungAuscultation;

    /**
     * @param KeyValueItem $Text 呼吸系统总体描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Thoracic 胸廓
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Sputum 痰量
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $LungPercussion 肺部叩诊
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LungAuscultation 肺部听诊其他
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new KeyValueItem();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("Thoracic",$param) and $param["Thoracic"] !== null) {
            $this->Thoracic = new KeyValueItem();
            $this->Thoracic->deserialize($param["Thoracic"]);
        }

        if (array_key_exists("Sputum",$param) and $param["Sputum"] !== null) {
            $this->Sputum = new KeyValueItem();
            $this->Sputum->deserialize($param["Sputum"]);
        }

        if (array_key_exists("LungPercussion",$param) and $param["LungPercussion"] !== null) {
            $this->LungPercussion = new KeyValueItem();
            $this->LungPercussion->deserialize($param["LungPercussion"]);
        }

        if (array_key_exists("LungAuscultation",$param) and $param["LungAuscultation"] !== null) {
            $this->LungAuscultation = [];
            foreach ($param["LungAuscultation"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->LungAuscultation, $obj);
            }
        }
    }
}
