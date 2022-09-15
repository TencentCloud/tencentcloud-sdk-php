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
 * DescribeBinlogBackupOverview返回参数结构体
 *
 * @method integer getBinlogBackupVolume() 获取总的日志备份容量，包含异地日志备份（单位为字节）。
 * @method void setBinlogBackupVolume(integer $BinlogBackupVolume) 设置总的日志备份容量，包含异地日志备份（单位为字节）。
 * @method integer getBinlogBackupCount() 获取总的日志备份个数，包含异地日志备份。
 * @method void setBinlogBackupCount(integer $BinlogBackupCount) 设置总的日志备份个数，包含异地日志备份。
 * @method integer getRemoteBinlogVolume() 获取异地日志备份容量（单位为字节）。
 * @method void setRemoteBinlogVolume(integer $RemoteBinlogVolume) 设置异地日志备份容量（单位为字节）。
 * @method integer getRemoteBinlogCount() 获取异地日志备份个数。
 * @method void setRemoteBinlogCount(integer $RemoteBinlogCount) 设置异地日志备份个数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBinlogBackupOverviewResponse extends AbstractModel
{
    /**
     * @var integer 总的日志备份容量，包含异地日志备份（单位为字节）。
     */
    public $BinlogBackupVolume;

    /**
     * @var integer 总的日志备份个数，包含异地日志备份。
     */
    public $BinlogBackupCount;

    /**
     * @var integer 异地日志备份容量（单位为字节）。
     */
    public $RemoteBinlogVolume;

    /**
     * @var integer 异地日志备份个数。
     */
    public $RemoteBinlogCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BinlogBackupVolume 总的日志备份容量，包含异地日志备份（单位为字节）。
     * @param integer $BinlogBackupCount 总的日志备份个数，包含异地日志备份。
     * @param integer $RemoteBinlogVolume 异地日志备份容量（单位为字节）。
     * @param integer $RemoteBinlogCount 异地日志备份个数。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BinlogBackupVolume",$param) and $param["BinlogBackupVolume"] !== null) {
            $this->BinlogBackupVolume = $param["BinlogBackupVolume"];
        }

        if (array_key_exists("BinlogBackupCount",$param) and $param["BinlogBackupCount"] !== null) {
            $this->BinlogBackupCount = $param["BinlogBackupCount"];
        }

        if (array_key_exists("RemoteBinlogVolume",$param) and $param["RemoteBinlogVolume"] !== null) {
            $this->RemoteBinlogVolume = $param["RemoteBinlogVolume"];
        }

        if (array_key_exists("RemoteBinlogCount",$param) and $param["RemoteBinlogCount"] !== null) {
            $this->RemoteBinlogCount = $param["RemoteBinlogCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
