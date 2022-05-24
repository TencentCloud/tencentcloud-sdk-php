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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引自治字段
 *
 * @method string getExpireMaxAge() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireMaxAge(string $ExpireMaxAge) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireMaxSize() 获取过期大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireMaxSize(string $ExpireMaxSize) 设置过期大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRolloverMaxAge() 获取滚动周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRolloverMaxAge(string $RolloverMaxAge) 设置滚动周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRolloverDynamic() 获取是否开启动态滚动
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRolloverDynamic(string $RolloverDynamic) 设置是否开启动态滚动
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShardNumDynamic() 获取是否开启动态分片
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardNumDynamic(string $ShardNumDynamic) 设置是否开启动态分片
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimestampField() 获取时间分区字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestampField(string $TimestampField) 设置时间分区字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWriteMode() 获取写入模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWriteMode(string $WriteMode) 设置写入模式
注意：此字段可能返回 null，表示取不到有效值。
 */
class IndexOptionsField extends AbstractModel
{
    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireMaxAge;

    /**
     * @var string 过期大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireMaxSize;

    /**
     * @var string 滚动周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RolloverMaxAge;

    /**
     * @var string 是否开启动态滚动
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RolloverDynamic;

    /**
     * @var string 是否开启动态分片
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardNumDynamic;

    /**
     * @var string 时间分区字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimestampField;

    /**
     * @var string 写入模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WriteMode;

    /**
     * @param string $ExpireMaxAge 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireMaxSize 过期大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RolloverMaxAge 滚动周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RolloverDynamic 是否开启动态滚动
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShardNumDynamic 是否开启动态分片
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimestampField 时间分区字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WriteMode 写入模式
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

        if (array_key_exists("ExpireMaxSize",$param) and $param["ExpireMaxSize"] !== null) {
            $this->ExpireMaxSize = $param["ExpireMaxSize"];
        }

        if (array_key_exists("RolloverMaxAge",$param) and $param["RolloverMaxAge"] !== null) {
            $this->RolloverMaxAge = $param["RolloverMaxAge"];
        }

        if (array_key_exists("RolloverDynamic",$param) and $param["RolloverDynamic"] !== null) {
            $this->RolloverDynamic = $param["RolloverDynamic"];
        }

        if (array_key_exists("ShardNumDynamic",$param) and $param["ShardNumDynamic"] !== null) {
            $this->ShardNumDynamic = $param["ShardNumDynamic"];
        }

        if (array_key_exists("TimestampField",$param) and $param["TimestampField"] !== null) {
            $this->TimestampField = $param["TimestampField"];
        }

        if (array_key_exists("WriteMode",$param) and $param["WriteMode"] !== null) {
            $this->WriteMode = $param["WriteMode"];
        }
    }
}
