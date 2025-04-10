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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单条日志数据结构
 *
 * @method string getId() 获取单条日志的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置单条日志的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取单条日志的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置单条日志的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取这条日志对应的Pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置这条日志对应的Pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimestamp() 获取日志的时间戳（RFC3339格式的时间字符串）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置日志的时间戳（RFC3339格式的时间字符串）
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogIdentity extends AbstractModel
{
    /**
     * @var string 单条日志的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 单条日志的内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 这条日志对应的Pod名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string 日志的时间戳（RFC3339格式的时间字符串）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @param string $Id 单条日志的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 单条日志的内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName 这条日志对应的Pod名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Timestamp 日志的时间戳（RFC3339格式的时间字符串）
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
