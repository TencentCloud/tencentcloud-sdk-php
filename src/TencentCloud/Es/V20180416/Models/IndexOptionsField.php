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
 * @method string getExpireMaxAge() 获取<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireMaxAge(string $ExpireMaxAge) 设置<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireMaxSize() 获取<p>过期大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireMaxSize(string $ExpireMaxSize) 设置<p>过期大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRolloverMaxAge() 获取<p>滚动周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRolloverMaxAge(string $RolloverMaxAge) 设置<p>滚动周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRolloverDynamic() 获取<p>是否开启动态滚动</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRolloverDynamic(string $RolloverDynamic) 设置<p>是否开启动态滚动</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShardNumDynamic() 获取<p>是否开启动态分片</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardNumDynamic(string $ShardNumDynamic) 设置<p>是否开启动态分片</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimestampField() 获取<p>时间分区字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestampField(string $TimestampField) 设置<p>时间分区字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWriteMode() 获取<p>写入模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWriteMode(string $WriteMode) 设置<p>写入模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullOffloadedEnable() 获取<p>是否开启完全卸载</p><p>枚举值：</p><ul><li>true： 开启完全卸载</li><li>false： 关闭完全卸载</li></ul>
 * @method void setFullOffloadedEnable(string $FullOffloadedEnable) 设置<p>是否开启完全卸载</p><p>枚举值：</p><ul><li>true： 开启完全卸载</li><li>false： 关闭完全卸载</li></ul>
 * @method string getFullOffloadedMaxAge() 获取<p>完全卸载生命周期</p>
 * @method void setFullOffloadedMaxAge(string $FullOffloadedMaxAge) 设置<p>完全卸载生命周期</p>
 * @method string getFullOffloadedRetrieveMaxAge() 获取<p>完全卸载后备索引取回后生命周期</p>
 * @method void setFullOffloadedRetrieveMaxAge(string $FullOffloadedRetrieveMaxAge) 设置<p>完全卸载后备索引取回后生命周期</p>
 */
class IndexOptionsField extends AbstractModel
{
    /**
     * @var string <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireMaxAge;

    /**
     * @var string <p>过期大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireMaxSize;

    /**
     * @var string <p>滚动周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RolloverMaxAge;

    /**
     * @var string <p>是否开启动态滚动</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RolloverDynamic;

    /**
     * @var string <p>是否开启动态分片</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardNumDynamic;

    /**
     * @var string <p>时间分区字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimestampField;

    /**
     * @var string <p>写入模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WriteMode;

    /**
     * @var string <p>是否开启完全卸载</p><p>枚举值：</p><ul><li>true： 开启完全卸载</li><li>false： 关闭完全卸载</li></ul>
     */
    public $FullOffloadedEnable;

    /**
     * @var string <p>完全卸载生命周期</p>
     */
    public $FullOffloadedMaxAge;

    /**
     * @var string <p>完全卸载后备索引取回后生命周期</p>
     */
    public $FullOffloadedRetrieveMaxAge;

    /**
     * @param string $ExpireMaxAge <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireMaxSize <p>过期大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RolloverMaxAge <p>滚动周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RolloverDynamic <p>是否开启动态滚动</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShardNumDynamic <p>是否开启动态分片</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimestampField <p>时间分区字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WriteMode <p>写入模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullOffloadedEnable <p>是否开启完全卸载</p><p>枚举值：</p><ul><li>true： 开启完全卸载</li><li>false： 关闭完全卸载</li></ul>
     * @param string $FullOffloadedMaxAge <p>完全卸载生命周期</p>
     * @param string $FullOffloadedRetrieveMaxAge <p>完全卸载后备索引取回后生命周期</p>
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

        if (array_key_exists("FullOffloadedEnable",$param) and $param["FullOffloadedEnable"] !== null) {
            $this->FullOffloadedEnable = $param["FullOffloadedEnable"];
        }

        if (array_key_exists("FullOffloadedMaxAge",$param) and $param["FullOffloadedMaxAge"] !== null) {
            $this->FullOffloadedMaxAge = $param["FullOffloadedMaxAge"];
        }

        if (array_key_exists("FullOffloadedRetrieveMaxAge",$param) and $param["FullOffloadedRetrieveMaxAge"] !== null) {
            $this->FullOffloadedRetrieveMaxAge = $param["FullOffloadedRetrieveMaxAge"];
        }
    }
}
