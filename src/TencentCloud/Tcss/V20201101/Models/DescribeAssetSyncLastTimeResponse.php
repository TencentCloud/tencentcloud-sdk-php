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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetSyncLastTime返回参数结构体
 *
 * @method string getAssetSyncLastTime() 获取资产最近同步时间
 * @method void setAssetSyncLastTime(string $AssetSyncLastTime) 设置资产最近同步时间
 * @method string getTaskStatus() 获取任务状态
PENDING:待处理
PROCESSING:处理中
PROCESSED:已完成
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态
PENDING:待处理
PROCESSING:处理中
PROCESSED:已完成
 * @method integer getTaskProcess() 获取任务进度(百分比)
 * @method void setTaskProcess(integer $TaskProcess) 设置任务进度(百分比)
 * @method integer getFailedHostCount() 获取失败主机数
 * @method void setFailedHostCount(integer $FailedHostCount) 设置失败主机数
 * @method integer getTaskId() 获取任务id
 * @method void setTaskId(integer $TaskId) 设置任务id
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetSyncLastTimeResponse extends AbstractModel
{
    /**
     * @var string 资产最近同步时间
     */
    public $AssetSyncLastTime;

    /**
     * @var string 任务状态
PENDING:待处理
PROCESSING:处理中
PROCESSED:已完成
     */
    public $TaskStatus;

    /**
     * @var integer 任务进度(百分比)
     */
    public $TaskProcess;

    /**
     * @var integer 失败主机数
     */
    public $FailedHostCount;

    /**
     * @var integer 任务id
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AssetSyncLastTime 资产最近同步时间
     * @param string $TaskStatus 任务状态
PENDING:待处理
PROCESSING:处理中
PROCESSED:已完成
     * @param integer $TaskProcess 任务进度(百分比)
     * @param integer $FailedHostCount 失败主机数
     * @param integer $TaskId 任务id
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
        if (array_key_exists("AssetSyncLastTime",$param) and $param["AssetSyncLastTime"] !== null) {
            $this->AssetSyncLastTime = $param["AssetSyncLastTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskProcess",$param) and $param["TaskProcess"] !== null) {
            $this->TaskProcess = $param["TaskProcess"];
        }

        if (array_key_exists("FailedHostCount",$param) and $param["FailedHostCount"] !== null) {
            $this->FailedHostCount = $param["FailedHostCount"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
