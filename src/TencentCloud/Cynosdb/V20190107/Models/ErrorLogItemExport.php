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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 错误日志导出格式
 *
 * @method string getTimestamp() 获取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevel() 获取日志等级，可选值note, warning，error
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(string $Level) 设置日志等级，可选值note, warning，error
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取日志内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置日志内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class ErrorLogItemExport extends AbstractModel
{
    /**
     * @var string 时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string 日志等级，可选值note, warning，error
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 日志内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @param string $Timestamp 时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Level 日志等级，可选值note, warning，error
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 日志内容
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
