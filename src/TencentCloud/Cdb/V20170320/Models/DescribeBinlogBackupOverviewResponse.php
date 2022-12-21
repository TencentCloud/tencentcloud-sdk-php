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
 * @method integer getBinlogArchiveVolume() 获取归档日志备份容量（单位为字节）。
 * @method void setBinlogArchiveVolume(integer $BinlogArchiveVolume) 设置归档日志备份容量（单位为字节）。
 * @method integer getBinlogArchiveCount() 获取归档日志备份个数。
 * @method void setBinlogArchiveCount(integer $BinlogArchiveCount) 设置归档日志备份个数。
 * @method integer getBinlogStandbyVolume() 获取标准存储日志备份容量（单位为字节）。
 * @method void setBinlogStandbyVolume(integer $BinlogStandbyVolume) 设置标准存储日志备份容量（单位为字节）。
 * @method integer getBinlogStandbyCount() 获取标准存储日志备份个数。
 * @method void setBinlogStandbyCount(integer $BinlogStandbyCount) 设置标准存储日志备份个数。
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
     * @var integer 归档日志备份容量（单位为字节）。
     */
    public $BinlogArchiveVolume;

    /**
     * @var integer 归档日志备份个数。
     */
    public $BinlogArchiveCount;

    /**
     * @var integer 标准存储日志备份容量（单位为字节）。
     */
    public $BinlogStandbyVolume;

    /**
     * @var integer 标准存储日志备份个数。
     */
    public $BinlogStandbyCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BinlogBackupVolume 总的日志备份容量，包含异地日志备份（单位为字节）。
     * @param integer $BinlogBackupCount 总的日志备份个数，包含异地日志备份。
     * @param integer $RemoteBinlogVolume 异地日志备份容量（单位为字节）。
     * @param integer $RemoteBinlogCount 异地日志备份个数。
     * @param integer $BinlogArchiveVolume 归档日志备份容量（单位为字节）。
     * @param integer $BinlogArchiveCount 归档日志备份个数。
     * @param integer $BinlogStandbyVolume 标准存储日志备份容量（单位为字节）。
     * @param integer $BinlogStandbyCount 标准存储日志备份个数。
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

        if (array_key_exists("BinlogArchiveVolume",$param) and $param["BinlogArchiveVolume"] !== null) {
            $this->BinlogArchiveVolume = $param["BinlogArchiveVolume"];
        }

        if (array_key_exists("BinlogArchiveCount",$param) and $param["BinlogArchiveCount"] !== null) {
            $this->BinlogArchiveCount = $param["BinlogArchiveCount"];
        }

        if (array_key_exists("BinlogStandbyVolume",$param) and $param["BinlogStandbyVolume"] !== null) {
            $this->BinlogStandbyVolume = $param["BinlogStandbyVolume"];
        }

        if (array_key_exists("BinlogStandbyCount",$param) and $param["BinlogStandbyCount"] !== null) {
            $this->BinlogStandbyCount = $param["BinlogStandbyCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
