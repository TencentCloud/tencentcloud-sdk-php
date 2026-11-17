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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储策略
 *
 * @method string getRetentionType() 获取存储策略类型。取值：
- standard：标准存储
- tiered：分级存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionType(string $RetentionType) 设置存储策略类型。取值：
- standard：标准存储
- tiered：分级存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetentionPeriod() 获取备份保留天数，取值范围为 7 - 3650。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionPeriod(integer $RetentionPeriod) 设置备份保留天数，取值范围为 7 - 3650。
注意：此字段可能返回 null，表示取不到有效值。
 * @method StorageTieredStrategy getTieredStrategy() 获取分级存储策略。RetentionType 为 tiered 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTieredStrategy(StorageTieredStrategy $TieredStrategy) 设置分级存储策略。RetentionType 为 tiered 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class StorageStrategySingle extends AbstractModel
{
    /**
     * @var string 存储策略类型。取值：
- standard：标准存储
- tiered：分级存储
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionType;

    /**
     * @var integer 备份保留天数，取值范围为 7 - 3650。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionPeriod;

    /**
     * @var StorageTieredStrategy 分级存储策略。RetentionType 为 tiered 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TieredStrategy;

    /**
     * @param string $RetentionType 存储策略类型。取值：
- standard：标准存储
- tiered：分级存储
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetentionPeriod 备份保留天数，取值范围为 7 - 3650。
注意：此字段可能返回 null，表示取不到有效值。
     * @param StorageTieredStrategy $TieredStrategy 分级存储策略。RetentionType 为 tiered 时有效。
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
        if (array_key_exists("RetentionType",$param) and $param["RetentionType"] !== null) {
            $this->RetentionType = $param["RetentionType"];
        }

        if (array_key_exists("RetentionPeriod",$param) and $param["RetentionPeriod"] !== null) {
            $this->RetentionPeriod = $param["RetentionPeriod"];
        }

        if (array_key_exists("TieredStrategy",$param) and $param["TieredStrategy"] !== null) {
            $this->TieredStrategy = new StorageTieredStrategy();
            $this->TieredStrategy->deserialize($param["TieredStrategy"]);
        }
    }
}
