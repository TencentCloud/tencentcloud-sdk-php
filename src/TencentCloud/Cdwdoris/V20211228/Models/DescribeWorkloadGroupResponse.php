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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkloadGroup返回参数结构体
 *
 * @method array getWorkloadGroups() 获取<p>资源组信息</p>
 * @method void setWorkloadGroups(array $WorkloadGroups) 设置<p>资源组信息</p>
 * @method string getStatus() 获取<p>是否开启资源组：开启-open、关闭-close</p>
 * @method void setStatus(string $Status) 设置<p>是否开启资源组：开启-open、关闭-close</p>
 * @method string getErrorMsg() 获取<p>错误信息</p>
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>错误信息</p>
 * @method integer getMonitorStatus() 获取<p>是否开启监控，0：未开启，1：开启</p>
 * @method void setMonitorStatus(integer $MonitorStatus) 设置<p>是否开启监控，0：未开启，1：开启</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWorkloadGroupResponse extends AbstractModel
{
    /**
     * @var array <p>资源组信息</p>
     */
    public $WorkloadGroups;

    /**
     * @var string <p>是否开启资源组：开启-open、关闭-close</p>
     */
    public $Status;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrorMsg;

    /**
     * @var integer <p>是否开启监控，0：未开启，1：开启</p>
     */
    public $MonitorStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $WorkloadGroups <p>资源组信息</p>
     * @param string $Status <p>是否开启资源组：开启-open、关闭-close</p>
     * @param string $ErrorMsg <p>错误信息</p>
     * @param integer $MonitorStatus <p>是否开启监控，0：未开启，1：开启</p>
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
        if (array_key_exists("WorkloadGroups",$param) and $param["WorkloadGroups"] !== null) {
            $this->WorkloadGroups = [];
            foreach ($param["WorkloadGroups"] as $key => $value){
                $obj = new WorkloadGroupConfig();
                $obj->deserialize($value);
                array_push($this->WorkloadGroups, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
