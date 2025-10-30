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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneConfigImportResult返回参数结构体
 *
 * @method string getStatus() 获取本次导入任务的导入状态。取值有：  <li>success：表示配置项导入成功；</li> <li>failure：表示配置项导入失败；</li> <li>doing：表示配置项正在导入中。</li>
 * @method void setStatus(string $Status) 设置本次导入任务的导入状态。取值有：  <li>success：表示配置项导入成功；</li> <li>failure：表示配置项导入失败；</li> <li>doing：表示配置项正在导入中。</li>
 * @method string getMessage() 获取本次导入任务的状态的提示信息。当配置项导入失败时，可通过本字段查看失败原因。
 * @method void setMessage(string $Message) 设置本次导入任务的状态的提示信息。当配置项导入失败时，可通过本字段查看失败原因。
 * @method string getContent() 获取本次导入任务的配置内容。
 * @method void setContent(string $Content) 设置本次导入任务的配置内容。
 * @method string getImportTime() 获取本次导入任务的开始时间。
 * @method void setImportTime(string $ImportTime) 设置本次导入任务的开始时间。
 * @method string getFinishTime() 获取本次导入任务的结束时间。
 * @method void setFinishTime(string $FinishTime) 设置本次导入任务的结束时间。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeZoneConfigImportResultResponse extends AbstractModel
{
    /**
     * @var string 本次导入任务的导入状态。取值有：  <li>success：表示配置项导入成功；</li> <li>failure：表示配置项导入失败；</li> <li>doing：表示配置项正在导入中。</li>
     */
    public $Status;

    /**
     * @var string 本次导入任务的状态的提示信息。当配置项导入失败时，可通过本字段查看失败原因。
     */
    public $Message;

    /**
     * @var string 本次导入任务的配置内容。
     */
    public $Content;

    /**
     * @var string 本次导入任务的开始时间。
     */
    public $ImportTime;

    /**
     * @var string 本次导入任务的结束时间。
     */
    public $FinishTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 本次导入任务的导入状态。取值有：  <li>success：表示配置项导入成功；</li> <li>failure：表示配置项导入失败；</li> <li>doing：表示配置项正在导入中。</li>
     * @param string $Message 本次导入任务的状态的提示信息。当配置项导入失败时，可通过本字段查看失败原因。
     * @param string $Content 本次导入任务的配置内容。
     * @param string $ImportTime 本次导入任务的开始时间。
     * @param string $FinishTime 本次导入任务的结束时间。
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ImportTime",$param) and $param["ImportTime"] !== null) {
            $this->ImportTime = $param["ImportTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
