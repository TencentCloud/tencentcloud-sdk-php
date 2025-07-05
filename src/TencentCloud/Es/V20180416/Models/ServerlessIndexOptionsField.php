<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引自治字段
 *
 * @method string getExpireMaxAge() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireMaxAge(string $ExpireMaxAge) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimestampField() 获取时间分区字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestampField(string $TimestampField) 设置时间分区字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSinkCycleAge() 获取标准存储时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSinkCycleAge(string $SinkCycleAge) 设置标准存储时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStandardStorageAge() 获取标准存储时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandardStorageAge(string $StandardStorageAge) 设置标准存储时长
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServerlessIndexOptionsField extends AbstractModel
{
    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireMaxAge;

    /**
     * @var string 时间分区字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimestampField;

    /**
     * @var string 标准存储时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SinkCycleAge;

    /**
     * @var string 标准存储时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandardStorageAge;

    /**
     * @param string $ExpireMaxAge 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimestampField 时间分区字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SinkCycleAge 标准存储时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StandardStorageAge 标准存储时长
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
        if (array_key_exists("ExpireMaxAge",$param) and $param["ExpireMaxAge"] !== null) {
            $this->ExpireMaxAge = $param["ExpireMaxAge"];
        }

        if (array_key_exists("TimestampField",$param) and $param["TimestampField"] !== null) {
            $this->TimestampField = $param["TimestampField"];
        }

        if (array_key_exists("SinkCycleAge",$param) and $param["SinkCycleAge"] !== null) {
            $this->SinkCycleAge = $param["SinkCycleAge"];
        }

        if (array_key_exists("StandardStorageAge",$param) and $param["StandardStorageAge"] !== null) {
            $this->StandardStorageAge = $param["StandardStorageAge"];
        }
    }
}
