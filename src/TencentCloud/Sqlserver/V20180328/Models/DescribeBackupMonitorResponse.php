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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupMonitor返回参数结构体
 *
 * @method array getTimeStamp() 获取备份趋势图时间轴
 * @method void setTimeStamp(array $TimeStamp) 设置备份趋势图时间轴
 * @method array getFreeSpace() 获取免费备份空间
 * @method void setFreeSpace(array $FreeSpace) 设置免费备份空间
 * @method array getActualUsedSpace() 获取实际总备份空间
 * @method void setActualUsedSpace(array $ActualUsedSpace) 设置实际总备份空间
 * @method array getLogBackupSpace() 获取日志备份空间
 * @method void setLogBackupSpace(array $LogBackupSpace) 设置日志备份空间
 * @method array getDataBackupSpace() 获取数据备份空间
 * @method void setDataBackupSpace(array $DataBackupSpace) 设置数据备份空间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupMonitorResponse extends AbstractModel
{
    /**
     * @var array 备份趋势图时间轴
     */
    public $TimeStamp;

    /**
     * @var array 免费备份空间
     */
    public $FreeSpace;

    /**
     * @var array 实际总备份空间
     */
    public $ActualUsedSpace;

    /**
     * @var array 日志备份空间
     */
    public $LogBackupSpace;

    /**
     * @var array 数据备份空间
     */
    public $DataBackupSpace;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TimeStamp 备份趋势图时间轴
     * @param array $FreeSpace 免费备份空间
     * @param array $ActualUsedSpace 实际总备份空间
     * @param array $LogBackupSpace 日志备份空间
     * @param array $DataBackupSpace 数据备份空间
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
        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }

        if (array_key_exists("FreeSpace",$param) and $param["FreeSpace"] !== null) {
            $this->FreeSpace = $param["FreeSpace"];
        }

        if (array_key_exists("ActualUsedSpace",$param) and $param["ActualUsedSpace"] !== null) {
            $this->ActualUsedSpace = $param["ActualUsedSpace"];
        }

        if (array_key_exists("LogBackupSpace",$param) and $param["LogBackupSpace"] !== null) {
            $this->LogBackupSpace = $param["LogBackupSpace"];
        }

        if (array_key_exists("DataBackupSpace",$param) and $param["DataBackupSpace"] !== null) {
            $this->DataBackupSpace = $param["DataBackupSpace"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
