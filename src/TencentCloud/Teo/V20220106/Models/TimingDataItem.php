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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统计曲线数据项
 *
 * @method integer getTimestamp() 获取返回数据对应时间点，采用unix秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置返回数据对应时间点，采用unix秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValue() 获取具体数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(integer $Value) 设置具体数值
注意：此字段可能返回 null，表示取不到有效值。
 */
class TimingDataItem extends AbstractModel
{
    /**
     * @var integer 返回数据对应时间点，采用unix秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var integer 具体数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param integer $Timestamp 返回数据对应时间点，采用unix秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Value 具体数值
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
