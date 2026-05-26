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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据备份统计对象
 *
 * @method integer getAutoBackupCount() 获取自动备份个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoBackupCount(integer $AutoBackupCount) 设置自动备份个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoBackupSize() 获取自动备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoBackupSize(integer $AutoBackupSize) 设置自动备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAverageSizePerBackup() 获取平均每个备份大小,单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverageSizePerBackup(integer $AverageSizePerBackup) 设置平均每个备份大小,单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAverageSizePerDay() 获取平均每天备份大小,单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverageSizePerDay(integer $AverageSizePerDay) 设置平均每天备份大小,单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getManualBackupCount() 获取手工备份个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManualBackupCount(integer $ManualBackupCount) 设置手工备份个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getManualBackupSize() 获取手工备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManualBackupSize(integer $ManualBackupSize) 设置手工备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取数据备份个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置数据备份个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalSize() 获取数据备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSize(integer $TotalSize) 设置数据备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataBackupStatisticsModel extends AbstractModel
{
    /**
     * @var integer 自动备份个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoBackupCount;

    /**
     * @var integer 自动备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoBackupSize;

    /**
     * @var integer 平均每个备份大小,单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AverageSizePerBackup;

    /**
     * @var integer 平均每天备份大小,单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AverageSizePerDay;

    /**
     * @var integer 手工备份个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManualBackupCount;

    /**
     * @var integer 手工备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManualBackupSize;

    /**
     * @var integer 数据备份个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 数据备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSize;

    /**
     * @param integer $AutoBackupCount 自动备份个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoBackupSize 自动备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AverageSizePerBackup 平均每个备份大小,单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AverageSizePerDay 平均每天备份大小,单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ManualBackupCount 手工备份个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ManualBackupSize 手工备份大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 数据备份个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalSize 数据备份大小，单位Byte
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
        if (array_key_exists("AutoBackupCount",$param) and $param["AutoBackupCount"] !== null) {
            $this->AutoBackupCount = $param["AutoBackupCount"];
        }

        if (array_key_exists("AutoBackupSize",$param) and $param["AutoBackupSize"] !== null) {
            $this->AutoBackupSize = $param["AutoBackupSize"];
        }

        if (array_key_exists("AverageSizePerBackup",$param) and $param["AverageSizePerBackup"] !== null) {
            $this->AverageSizePerBackup = $param["AverageSizePerBackup"];
        }

        if (array_key_exists("AverageSizePerDay",$param) and $param["AverageSizePerDay"] !== null) {
            $this->AverageSizePerDay = $param["AverageSizePerDay"];
        }

        if (array_key_exists("ManualBackupCount",$param) and $param["ManualBackupCount"] !== null) {
            $this->ManualBackupCount = $param["ManualBackupCount"];
        }

        if (array_key_exists("ManualBackupSize",$param) and $param["ManualBackupSize"] !== null) {
            $this->ManualBackupSize = $param["ManualBackupSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
