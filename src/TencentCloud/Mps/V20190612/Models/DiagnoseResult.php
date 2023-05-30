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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 诊断结果项。
 *
 * @method string getCategory() 获取诊断出的异常类别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置诊断出的异常类别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取诊断出的具体异常类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置诊断出的具体异常类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimestamp() 获取诊断出异常开始的PTS时间戳。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(float $Timestamp) 设置诊断出异常开始的PTS时间戳。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取诊断出的异常描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置诊断出的异常描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDateTime() 获取诊断到异常的北京时间，采用 ISO 日期格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDateTime(string $DateTime) 设置诊断到异常的北京时间，采用 ISO 日期格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeverityLevel() 获取诊断出的异常级别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeverityLevel(string $SeverityLevel) 设置诊断出的异常级别。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiagnoseResult extends AbstractModel
{
    /**
     * @var string 诊断出的异常类别。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string 诊断出的具体异常类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var float 诊断出异常开始的PTS时间戳。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string 诊断出的异常描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 诊断到异常的北京时间，采用 ISO 日期格式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DateTime;

    /**
     * @var string 诊断出的异常级别。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SeverityLevel;

    /**
     * @param string $Category 诊断出的异常类别。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 诊断出的具体异常类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Timestamp 诊断出异常开始的PTS时间戳。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 诊断出的异常描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DateTime 诊断到异常的北京时间，采用 ISO 日期格式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SeverityLevel 诊断出的异常级别。
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DateTime",$param) and $param["DateTime"] !== null) {
            $this->DateTime = $param["DateTime"];
        }

        if (array_key_exists("SeverityLevel",$param) and $param["SeverityLevel"] !== null) {
            $this->SeverityLevel = $param["SeverityLevel"];
        }
    }
}
