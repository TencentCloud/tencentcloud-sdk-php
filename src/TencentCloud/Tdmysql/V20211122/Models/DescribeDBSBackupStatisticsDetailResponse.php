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
 * DescribeDBSBackupStatisticsDetail返回参数结构体
 *
 * @method BackupMethodStatisticsOutPut getBackupMethodStatistics() 获取<p>按备份方式统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupMethodStatistics(BackupMethodStatisticsOutPut $BackupMethodStatistics) 设置<p>按备份方式统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackupTime() 获取<p>备份时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupTime(array $BackupTime) 设置<p>备份时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BackupTypeStatisticsModel getBackupTypeStatistics() 获取<p>按备份数据类型统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupTypeStatistics(BackupTypeStatisticsModel $BackupTypeStatistics) 设置<p>按备份数据类型统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBSBackupStatisticsDetailResponse extends AbstractModel
{
    /**
     * @var BackupMethodStatisticsOutPut <p>按备份方式统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupMethodStatistics;

    /**
     * @var array <p>备份时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupTime;

    /**
     * @var BackupTypeStatisticsModel <p>按备份数据类型统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupTypeStatistics;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param BackupMethodStatisticsOutPut $BackupMethodStatistics <p>按备份方式统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackupTime <p>备份时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BackupTypeStatisticsModel $BackupTypeStatistics <p>按备份数据类型统计</p>
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
            $this->BackupMethodStatistics = new BackupMethodStatisticsOutPut();
            $this->BackupMethodStatistics->deserialize($param["BackupMethodStatistics"]);
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("BackupTypeStatistics",$param) and $param["BackupTypeStatistics"] !== null) {
            $this->BackupTypeStatistics = new BackupTypeStatisticsModel();
            $this->BackupTypeStatistics->deserialize($param["BackupTypeStatistics"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
