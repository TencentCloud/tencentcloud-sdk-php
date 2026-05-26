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
 * 日志备份统计对象
 *
 * @method integer getAverageSizePerBackup() 获取<p>平均每个日志备份大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverageSizePerBackup(integer $AverageSizePerBackup) 设置<p>平均每个日志备份大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAverageSizePerDay() 获取<p>平均每天日志备份大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverageSizePerDay(integer $AverageSizePerDay) 设置<p>平均每天日志备份大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取<p>日志备份个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置<p>日志备份个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalSize() 获取<p>日志备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSize(integer $TotalSize) 设置<p>日志备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogBackupStatisticsModel extends AbstractModel
{
    /**
     * @var integer <p>平均每个日志备份大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AverageSizePerBackup;

    /**
     * @var integer <p>平均每天日志备份大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AverageSizePerDay;

    /**
     * @var integer <p>日志备份个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer <p>日志备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSize;

    /**
     * @param integer $AverageSizePerBackup <p>平均每个日志备份大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AverageSizePerDay <p>平均每天日志备份大小,单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount <p>日志备份个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalSize <p>日志备份大小，单位Byte</p>
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
        if (array_key_exists("AverageSizePerBackup",$param) and $param["AverageSizePerBackup"] !== null) {
            $this->AverageSizePerBackup = $param["AverageSizePerBackup"];
        }

        if (array_key_exists("AverageSizePerDay",$param) and $param["AverageSizePerDay"] !== null) {
            $this->AverageSizePerDay = $param["AverageSizePerDay"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
