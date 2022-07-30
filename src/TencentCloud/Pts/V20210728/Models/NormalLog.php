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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用日志
 *
 * @method string getTimestamp() 获取毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeverityText() 获取日志级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeverityText(string $SeverityText) 设置日志级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBody() 获取日志输出内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBody(string $Body) 设置日志输出内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class NormalLog extends AbstractModel
{
    /**
     * @var string 毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string 日志级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SeverityText;

    /**
     * @var string 日志输出内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Body;

    /**
     * @param string $Timestamp 毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SeverityText 日志级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Body 日志输出内容
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

        if (array_key_exists("SeverityText",$param) and $param["SeverityText"] !== null) {
            $this->SeverityText = $param["SeverityText"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }
    }
}
