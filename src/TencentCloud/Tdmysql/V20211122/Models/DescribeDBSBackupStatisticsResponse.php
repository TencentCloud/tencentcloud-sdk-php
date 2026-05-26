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
 * DescribeDBSBackupStatistics返回参数结构体
 *
 * @method BackupMethodStatisticsModel getBackupMethodStatistics() 获取<p>备份方式统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupMethodStatistics(BackupMethodStatisticsModel $BackupMethodStatistics) 设置<p>备份方式统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BackupStatisticsModel getBackupStatistics() 获取<p>总备份集统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupStatistics(BackupStatisticsModel $BackupStatistics) 设置<p>总备份集统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataBackupStatisticsModel getDataBackupStatistics() 获取<p>数据备份统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataBackupStatistics(DataBackupStatisticsModel $DataBackupStatistics) 设置<p>数据备份统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LogBackupStatisticsModel getLogBackupStatistics() 获取<p>日志备份统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogBackupStatistics(LogBackupStatisticsModel $LogBackupStatistics) 设置<p>日志备份统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBSBackupStatisticsResponse extends AbstractModel
{
    /**
     * @var BackupMethodStatisticsModel <p>备份方式统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupMethodStatistics;

    /**
     * @var BackupStatisticsModel <p>总备份集统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupStatistics;

    /**
     * @var DataBackupStatisticsModel <p>数据备份统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataBackupStatistics;

    /**
     * @var LogBackupStatisticsModel <p>日志备份统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogBackupStatistics;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param BackupMethodStatisticsModel $BackupMethodStatistics <p>备份方式统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BackupStatisticsModel $BackupStatistics <p>总备份集统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataBackupStatisticsModel $DataBackupStatistics <p>数据备份统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LogBackupStatisticsModel $LogBackupStatistics <p>日志备份统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BackupMethodStatistics",$param) and $param["BackupMethodStatistics"] !== null) {
            $this->BackupMethodStatistics = new BackupMethodStatisticsModel();
            $this->BackupMethodStatistics->deserialize($param["BackupMethodStatistics"]);
        }

        if (array_key_exists("BackupStatistics",$param) and $param["BackupStatistics"] !== null) {
            $this->BackupStatistics = new BackupStatisticsModel();
            $this->BackupStatistics->deserialize($param["BackupStatistics"]);
        }

        if (array_key_exists("DataBackupStatistics",$param) and $param["DataBackupStatistics"] !== null) {
            $this->DataBackupStatistics = new DataBackupStatisticsModel();
            $this->DataBackupStatistics->deserialize($param["DataBackupStatistics"]);
        }

        if (array_key_exists("LogBackupStatistics",$param) and $param["LogBackupStatistics"] !== null) {
            $this->LogBackupStatistics = new LogBackupStatisticsModel();
            $this->LogBackupStatistics->deserialize($param["LogBackupStatistics"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
