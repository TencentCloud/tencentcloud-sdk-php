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
 * 体检报告-耳鼻喉科-耳朵
 *
 * @method KeyValueItem getText() 获取耳总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(KeyValueItem $Text) 设置耳总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method HearingItem getHearing() 获取听力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHearing(HearingItem $Hearing) 设置听力
注意：此字段可能返回 null，表示取不到有效值。
 */
class OtolaryngologyEar extends AbstractModel
{
    /**
     * @var KeyValueItem 耳总体描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var HearingItem 听力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hearing;

    /**
     * @param KeyValueItem $Text 耳总体描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param HearingItem $Hearing 听力
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

        if (array_key_exists("Hearing",$param) and $param["Hearing"] !== null) {
            $this->Hearing = new HearingItem();
            $this->Hearing->deserialize($param["Hearing"]);
        }
    }
}
