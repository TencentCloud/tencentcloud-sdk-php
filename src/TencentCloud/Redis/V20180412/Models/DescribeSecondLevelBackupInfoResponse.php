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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecondLevelBackupInfo返回参数结构体
 *
 * @method string getBackupId() 获取备份记录ID 
 * @method void setBackupId(string $BackupId) 设置备份记录ID 
 * @method integer getBackupTimestamp() 获取备份时间戳
 * @method void setBackupTimestamp(integer $BackupTimestamp) 设置备份时间戳
 * @method array getMissingTimestamps() 获取备份不存在的时间戳范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMissingTimestamps(array $MissingTimestamps) 设置备份不存在的时间戳范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTimestamp() 获取实例开启秒级备份的时间戳
 * @method void setStartTimestamp(integer $StartTimestamp) 设置实例开启秒级备份的时间戳
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecondLevelBackupInfoResponse extends AbstractModel
{
    /**
     * @var string 备份记录ID 
     */
    public $BackupId;

    /**
     * @var integer 备份时间戳
     */
    public $BackupTimestamp;

    /**
     * @var array 备份不存在的时间戳范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MissingTimestamps;

    /**
     * @var integer 实例开启秒级备份的时间戳
     */
    public $StartTimestamp;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BackupId 备份记录ID 
     * @param integer $BackupTimestamp 备份时间戳
     * @param array $MissingTimestamps 备份不存在的时间戳范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTimestamp 实例开启秒级备份的时间戳
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("BackupTimestamp",$param) and $param["BackupTimestamp"] !== null) {
            $this->BackupTimestamp = $param["BackupTimestamp"];
        }

        if (array_key_exists("MissingTimestamps",$param) and $param["MissingTimestamps"] !== null) {
            $this->MissingTimestamps = [];
            foreach ($param["MissingTimestamps"] as $key => $value){
                $obj = new SecondLevelBackupMissingTimestamps();
                $obj->deserialize($value);
                array_push($this->MissingTimestamps, $obj);
            }
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
