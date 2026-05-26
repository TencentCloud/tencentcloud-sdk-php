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
 * 备份统计对象
 *
 * @method integer getAverageSizePerDay() 获取<p>总备份每天平均大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverageSizePerDay(integer $AverageSizePerDay) 设置<p>总备份每天平均大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataBackupSize() 获取<p>数据备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataBackupSize(integer $DataBackupSize) 设置<p>数据备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogBackupSize() 获取<p>日志备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogBackupSize(integer $LogBackupSize) 设置<p>日志备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取<p>总备份集个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置<p>总备份集个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalSize() 获取<p>总备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSize(integer $TotalSize) 设置<p>总备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupStatisticsModel extends AbstractModel
{
    /**
     * @var integer <p>总备份每天平均大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AverageSizePerDay;

    /**
     * @var integer <p>数据备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataBackupSize;

    /**
     * @var integer <p>日志备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogBackupSize;

    /**
     * @var integer <p>总备份集个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer <p>总备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSize;

    /**
     * @param integer $AverageSizePerDay <p>总备份每天平均大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataBackupSize <p>数据备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogBackupSize <p>日志备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount <p>总备份集个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalSize <p>总备份大小，单位Byte</p>
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
        if (array_key_exists("AverageSizePerDay",$param) and $param["AverageSizePerDay"] !== null) {
            $this->AverageSizePerDay = $param["AverageSizePerDay"];
        }

        if (array_key_exists("DataBackupSize",$param) and $param["DataBackupSize"] !== null) {
            $this->DataBackupSize = $param["DataBackupSize"];
        }

        if (array_key_exists("LogBackupSize",$param) and $param["LogBackupSize"] !== null) {
            $this->LogBackupSize = $param["LogBackupSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
