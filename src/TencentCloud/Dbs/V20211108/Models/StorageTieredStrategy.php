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
 * 分级存储策略
 *
 * @method integer getDayToLowFrequency() 获取低频存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDayToLowFrequency(integer $DayToLowFrequency) 设置低频存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDayToArchive() 获取归档存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDayToArchive(integer $DayToArchive) 设置归档存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDayToDeepArchive() 获取深度归档存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDayToDeepArchive(integer $DayToDeepArchive) 设置深度归档存储
注意：此字段可能返回 null，表示取不到有效值。
 */
class StorageTieredStrategy extends AbstractModel
{
    /**
     * @var integer 低频存储
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DayToLowFrequency;

    /**
     * @var integer 归档存储
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DayToArchive;

    /**
     * @var integer 深度归档存储
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DayToDeepArchive;

    /**
     * @param integer $DayToLowFrequency 低频存储
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DayToArchive 归档存储
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DayToDeepArchive 深度归档存储
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
        if (array_key_exists("DayToLowFrequency",$param) and $param["DayToLowFrequency"] !== null) {
            $this->DayToLowFrequency = $param["DayToLowFrequency"];
        }

        if (array_key_exists("DayToArchive",$param) and $param["DayToArchive"] !== null) {
            $this->DayToArchive = $param["DayToArchive"];
        }

        if (array_key_exists("DayToDeepArchive",$param) and $param["DayToDeepArchive"] !== null) {
            $this->DayToDeepArchive = $param["DayToDeepArchive"];
        }
    }
}
