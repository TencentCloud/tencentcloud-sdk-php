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
 * UpdateIpTraceStatus请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群ID。该字段为必填字段。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群ID。该字段为必填字段。</p>
 * @method boolean getOpenIpTrace() 获取<p>IP溯源配置开关。该字段为必填字段。</p>
 * @method void setOpenIpTrace(boolean $OpenIpTrace) 设置<p>IP溯源配置开关。该字段为必填字段。</p>
 * @method integer getDurationTime() 获取<p>IP溯源开启持续时间，单位：秒。该字段为必填字段。</p>
 * @method void setDurationTime(integer $DurationTime) 设置<p>IP溯源开启持续时间，单位：秒。该字段为必填字段。</p>
 * @method IpTraceConfig getIpTraceConfig() 获取<p>IP溯源配置。该字段为必填字段。</p>
 * @method void setIpTraceConfig(IpTraceConfig $IpTraceConfig) 设置<p>IP溯源配置。该字段为必填字段。</p>
 * @method boolean getFilterKibanaIp() 获取<p>是否过滤kibana节点IP。</p>
 * @method void setFilterKibanaIp(boolean $FilterKibanaIp) 设置<p>是否过滤kibana节点IP。</p>
 */
class UpdateIpTraceStatusRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID。该字段为必填字段。</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>IP溯源配置开关。该字段为必填字段。</p>
     */
    public $OpenIpTrace;

    /**
     * @var integer <p>IP溯源开启持续时间，单位：秒。该字段为必填字段。</p>
     */
    public $DurationTime;

    /**
     * @var IpTraceConfig <p>IP溯源配置。该字段为必填字段。</p>
     */
    public $IpTraceConfig;

    /**
     * @var boolean <p>是否过滤kibana节点IP。</p>
     */
    public $FilterKibanaIp;

    /**
     * @param string $InstanceId <p>集群ID。该字段为必填字段。</p>
     * @param boolean $OpenIpTrace <p>IP溯源配置开关。该字段为必填字段。</p>
     * @param integer $DurationTime <p>IP溯源开启持续时间，单位：秒。该字段为必填字段。</p>
     * @param IpTraceConfig $IpTraceConfig <p>IP溯源配置。该字段为必填字段。</p>
     * @param boolean $FilterKibanaIp <p>是否过滤kibana节点IP。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("FilterKibanaIp",$param) and $param["FilterKibanaIp"] !== null) {
            $this->FilterKibanaIp = $param["FilterKibanaIp"];
        }
    }
}
