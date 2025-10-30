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
 * DescribeAssetImageScanTask返回参数结构体
 *
 * @method string getTaskID() 获取任务id
 * @method void setTaskID(string $TaskID) 设置任务id
 * @method string getLastScanTime() 获取最近扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最近扫描时间
 * @method string getStatus() 获取扫描状态(READY:准备 SCANNING:扫描中 END:完成)
 * @method void setStatus(string $Status) 设置扫描状态(READY:准备 SCANNING:扫描中 END:完成)
 * @method string getSubStatus() 获取扫描子状态(Success:成功 Timeout:超时 Cancel:取消 Error:错误)
 * @method void setSubStatus(string $SubStatus) 设置扫描子状态(Success:成功 Timeout:超时 Cancel:取消 Error:错误)
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetImageScanTaskResponse extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskID;

    /**
     * @var string 最近扫描时间
     */
    public $LastScanTime;

    /**
     * @var string 扫描状态(READY:准备 SCANNING:扫描中 END:完成)
     */
    public $Status;

    /**
     * @var string 扫描子状态(Success:成功 Timeout:超时 Cancel:取消 Error:错误)
     */
    public $SubStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskID 任务id
     * @param string $LastScanTime 最近扫描时间
     * @param string $Status 扫描状态(READY:准备 SCANNING:扫描中 END:完成)
     * @param string $SubStatus 扫描子状态(Success:成功 Timeout:超时 Cancel:取消 Error:错误)
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
