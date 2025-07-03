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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupOverview返回参数结构体
 *
 * @method integer getBackupCount() 获取用户在当前地域备份的总个数（包含数据备份和日志备份）。
 * @method void setBackupCount(integer $BackupCount) 设置用户在当前地域备份的总个数（包含数据备份和日志备份）。
 * @method integer getBackupVolume() 获取用户在当前地域备份的总容量
 * @method void setBackupVolume(integer $BackupVolume) 设置用户在当前地域备份的总容量
 * @method integer getBillingVolume() 获取用户在当前地域备份的计费容量，即超出赠送容量的部分。
 * @method void setBillingVolume(integer $BillingVolume) 设置用户在当前地域备份的计费容量，即超出赠送容量的部分。
 * @method integer getFreeVolume() 获取用户在当前地域获得的赠送备份容量。
 * @method void setFreeVolume(integer $FreeVolume) 设置用户在当前地域获得的赠送备份容量。
 * @method integer getRemoteBackupVolume() 获取用户在当前地域的异地备份总容量。
 * @method void setRemoteBackupVolume(integer $RemoteBackupVolume) 设置用户在当前地域的异地备份总容量。
 * @method integer getBackupArchiveVolume() 获取归档备份容量，包含数据备份以及日志备份。
 * @method void setBackupArchiveVolume(integer $BackupArchiveVolume) 设置归档备份容量，包含数据备份以及日志备份。
 * @method integer getBackupStandbyVolume() 获取标准存储备份容量，包含数据备份以及日志备份。
 * @method void setBackupStandbyVolume(integer $BackupStandbyVolume) 设置标准存储备份容量，包含数据备份以及日志备份。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupOverviewResponse extends AbstractModel
{
    /**
     * @var integer 用户在当前地域备份的总个数（包含数据备份和日志备份）。
     */
    public $BackupCount;

    /**
     * @var integer 用户在当前地域备份的总容量
     */
    public $BackupVolume;

    /**
     * @var integer 用户在当前地域备份的计费容量，即超出赠送容量的部分。
     */
    public $BillingVolume;

    /**
     * @var integer 用户在当前地域获得的赠送备份容量。
     */
    public $FreeVolume;

    /**
     * @var integer 用户在当前地域的异地备份总容量。
     */
    public $RemoteBackupVolume;

    /**
     * @var integer 归档备份容量，包含数据备份以及日志备份。
     */
    public $BackupArchiveVolume;

    /**
     * @var integer 标准存储备份容量，包含数据备份以及日志备份。
     */
    public $BackupStandbyVolume;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BackupCount 用户在当前地域备份的总个数（包含数据备份和日志备份）。
     * @param integer $BackupVolume 用户在当前地域备份的总容量
     * @param integer $BillingVolume 用户在当前地域备份的计费容量，即超出赠送容量的部分。
     * @param integer $FreeVolume 用户在当前地域获得的赠送备份容量。
     * @param integer $RemoteBackupVolume 用户在当前地域的异地备份总容量。
     * @param integer $BackupArchiveVolume 归档备份容量，包含数据备份以及日志备份。
     * @param integer $BackupStandbyVolume 标准存储备份容量，包含数据备份以及日志备份。
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
        if (array_key_exists("BackupCount",$param) and $param["BackupCount"] !== null) {
            $this->BackupCount = $param["BackupCount"];
        }

        if (array_key_exists("BackupVolume",$param) and $param["BackupVolume"] !== null) {
            $this->BackupVolume = $param["BackupVolume"];
        }

        if (array_key_exists("BillingVolume",$param) and $param["BillingVolume"] !== null) {
            $this->BillingVolume = $param["BillingVolume"];
        }

        if (array_key_exists("FreeVolume",$param) and $param["FreeVolume"] !== null) {
            $this->FreeVolume = $param["FreeVolume"];
        }

        if (array_key_exists("RemoteBackupVolume",$param) and $param["RemoteBackupVolume"] !== null) {
            $this->RemoteBackupVolume = $param["RemoteBackupVolume"];
        }

        if (array_key_exists("BackupArchiveVolume",$param) and $param["BackupArchiveVolume"] !== null) {
            $this->BackupArchiveVolume = $param["BackupArchiveVolume"];
        }

        if (array_key_exists("BackupStandbyVolume",$param) and $param["BackupStandbyVolume"] !== null) {
            $this->BackupStandbyVolume = $param["BackupStandbyVolume"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
