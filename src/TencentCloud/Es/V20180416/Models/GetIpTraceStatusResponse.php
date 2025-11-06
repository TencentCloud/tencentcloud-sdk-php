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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetIpTraceStatus返回参数结构体
 *
 * @method boolean getOpenIpTrace() 获取是否开启IP溯源
 * @method void setOpenIpTrace(boolean $OpenIpTrace) 设置是否开启IP溯源
 * @method integer getDurationTime() 获取IP溯源开启持续时间，单位：秒
 * @method void setDurationTime(integer $DurationTime) 设置IP溯源开启持续时间，单位：秒
 * @method IpTraceConfig getIpTraceConfig() 获取IP溯源配置
 * @method void setIpTraceConfig(IpTraceConfig $IpTraceConfig) 设置IP溯源配置
 * @method string getLastStartTime() 获取上次执行时间
 * @method void setLastStartTime(string $LastStartTime) 设置上次执行时间
 * @method string getLastEndTime() 获取上次关闭时间
 * @method void setLastEndTime(string $LastEndTime) 设置上次关闭时间
 * @method boolean getFilterKibanaIp() 获取是否过滤Kibana节点IP
 * @method void setFilterKibanaIp(boolean $FilterKibanaIp) 设置是否过滤Kibana节点IP
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetIpTraceStatusResponse extends AbstractModel
{
    /**
     * @var boolean 是否开启IP溯源
     */
    public $OpenIpTrace;

    /**
     * @var integer IP溯源开启持续时间，单位：秒
     */
    public $DurationTime;

    /**
     * @var IpTraceConfig IP溯源配置
     */
    public $IpTraceConfig;

    /**
     * @var string 上次执行时间
     */
    public $LastStartTime;

    /**
     * @var string 上次关闭时间
     */
    public $LastEndTime;

    /**
     * @var boolean 是否过滤Kibana节点IP
     */
    public $FilterKibanaIp;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $OpenIpTrace 是否开启IP溯源
     * @param integer $DurationTime IP溯源开启持续时间，单位：秒
     * @param IpTraceConfig $IpTraceConfig IP溯源配置
     * @param string $LastStartTime 上次执行时间
     * @param string $LastEndTime 上次关闭时间
     * @param boolean $FilterKibanaIp 是否过滤Kibana节点IP
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
        if (array_key_exists("OpenIpTrace",$param) and $param["OpenIpTrace"] !== null) {
            $this->OpenIpTrace = $param["OpenIpTrace"];
        }

        if (array_key_exists("DurationTime",$param) and $param["DurationTime"] !== null) {
            $this->DurationTime = $param["DurationTime"];
        }

        if (array_key_exists("IpTraceConfig",$param) and $param["IpTraceConfig"] !== null) {
            $this->IpTraceConfig = new IpTraceConfig();
            $this->IpTraceConfig->deserialize($param["IpTraceConfig"]);
        }

        if (array_key_exists("LastStartTime",$param) and $param["LastStartTime"] !== null) {
            $this->LastStartTime = $param["LastStartTime"];
        }

        if (array_key_exists("LastEndTime",$param) and $param["LastEndTime"] !== null) {
            $this->LastEndTime = $param["LastEndTime"];
        }

        if (array_key_exists("FilterKibanaIp",$param) and $param["FilterKibanaIp"] !== null) {
            $this->FilterKibanaIp = $param["FilterKibanaIp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
