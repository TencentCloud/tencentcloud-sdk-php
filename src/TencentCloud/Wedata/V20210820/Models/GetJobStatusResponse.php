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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetJobStatus返回参数结构体
 *
 * @method string getJobId() 获取异步任务id
 * @method void setJobId(string $JobId) 设置异步任务id
 * @method boolean getCompleted() 获取是否已完成
 * @method void setCompleted(boolean $Completed) 设置是否已完成
 * @method string getStatus() 获取任务状态,Success:成功,Fail:失败,Cancel:取消,Running:运行中
 * @method void setStatus(string $Status) 设置任务状态,Success:成功,Fail:失败,Cancel:取消,Running:运行中
 * @method string getCreateTime() 获取创建时间时间戳,单位毫秒
 * @method void setCreateTime(string $CreateTime) 设置创建时间时间戳,单位毫秒
 * @method string getErrorMessage() 获取错误信息
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetJobStatusResponse extends AbstractModel
{
    /**
     * @var string 异步任务id
     */
    public $JobId;

    /**
     * @var boolean 是否已完成
     */
    public $Completed;

    /**
     * @var string 任务状态,Success:成功,Fail:失败,Cancel:取消,Running:运行中
     */
    public $Status;

    /**
     * @var string 创建时间时间戳,单位毫秒
     */
    public $CreateTime;

    /**
     * @var string 错误信息
     */
    public $ErrorMessage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobId 异步任务id
     * @param boolean $Completed 是否已完成
     * @param string $Status 任务状态,Success:成功,Fail:失败,Cancel:取消,Running:运行中
     * @param string $CreateTime 创建时间时间戳,单位毫秒
     * @param string $ErrorMessage 错误信息
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Completed",$param) and $param["Completed"] !== null) {
            $this->Completed = $param["Completed"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
