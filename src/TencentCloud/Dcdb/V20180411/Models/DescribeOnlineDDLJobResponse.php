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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOnlineDDLJob返回参数结构体
 *
 * @method integer getStatus() 获取任务状态。0：成功；1：失败；大于1：进行中
 * @method void setStatus(integer $Status) 设置任务状态。0：成功；1：失败；大于1：进行中
 * @method integer getProcess() 获取任务进度百分比
 * @method void setProcess(integer $Process) 设置任务进度百分比
 * @method string getErrorMessage() 获取错误信息或提示信息
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息或提示信息
 * @method array getDDLDetails() 获取各分片DDL执行详情
 * @method void setDDLDetails(array $DDLDetails) 设置各分片DDL执行详情
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOnlineDDLJobResponse extends AbstractModel
{
    /**
     * @var integer 任务状态。0：成功；1：失败；大于1：进行中
     */
    public $Status;

    /**
     * @var integer 任务进度百分比
     */
    public $Process;

    /**
     * @var string 错误信息或提示信息
     */
    public $ErrorMessage;

    /**
     * @var array 各分片DDL执行详情
     */
    public $DDLDetails;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 任务状态。0：成功；1：失败；大于1：进行中
     * @param integer $Process 任务进度百分比
     * @param string $ErrorMessage 错误信息或提示信息
     * @param array $DDLDetails 各分片DDL执行详情
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = $param["Process"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("DDLDetails",$param) and $param["DDLDetails"] !== null) {
            $this->DDLDetails = [];
            foreach ($param["DDLDetails"] as $key => $value){
                $obj = new DDLDetail();
                $obj->deserialize($value);
                array_push($this->DDLDetails, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
