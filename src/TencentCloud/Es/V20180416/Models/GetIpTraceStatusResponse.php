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
 * @method boolean getOpenIpTrace() 获取<p>是否开启IP溯源</p>
 * @method void setOpenIpTrace(boolean $OpenIpTrace) 设置<p>是否开启IP溯源</p>
 * @method integer getDurationTime() 获取<p>IP溯源开启持续时间，单位：秒</p>
 * @method void setDurationTime(integer $DurationTime) 设置<p>IP溯源开启持续时间，单位：秒</p>
 * @method IpTraceConfig getIpTraceConfig() 获取<p>IP溯源配置</p>
 * @method void setIpTraceConfig(IpTraceConfig $IpTraceConfig) 设置<p>IP溯源配置</p>
 * @method string getLastStartTime() 获取<p>上次执行时间</p>
 * @method void setLastStartTime(string $LastStartTime) 设置<p>上次执行时间</p>
 * @method string getLastEndTime() 获取<p>上次关闭时间</p>
 * @method void setLastEndTime(string $LastEndTime) 设置<p>上次关闭时间</p>
 * @method boolean getFilterKibanaIp() 获取<p>是否过滤Kibana节点IP</p>
 * @method void setFilterKibanaIp(boolean $FilterKibanaIp) 设置<p>是否过滤Kibana节点IP</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetIpTraceStatusResponse extends AbstractModel
{
    /**
     * @var boolean <p>是否开启IP溯源</p>
     */
    public $OpenIpTrace;

    /**
     * @var integer <p>IP溯源开启持续时间，单位：秒</p>
     */
    public $DurationTime;

    /**
     * @var IpTraceConfig <p>IP溯源配置</p>
     */
    public $IpTraceConfig;

    /**
     * @var string <p>上次执行时间</p>
     */
    public $LastStartTime;

    /**
     * @var string <p>上次关闭时间</p>
     */
    public $LastEndTime;

    /**
     * @var boolean <p>是否过滤Kibana节点IP</p>
     */
    public $FilterKibanaIp;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $OpenIpTrace <p>是否开启IP溯源</p>
     * @param integer $DurationTime <p>IP溯源开启持续时间，单位：秒</p>
     * @param IpTraceConfig $IpTraceConfig <p>IP溯源配置</p>
     * @param string $LastStartTime <p>上次执行时间</p>
     * @param string $LastEndTime <p>上次关闭时间</p>
     * @param boolean $FilterKibanaIp <p>是否过滤Kibana节点IP</p>
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
