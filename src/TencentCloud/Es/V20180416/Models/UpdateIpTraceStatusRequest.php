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
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method boolean getOpenIpTrace() 获取IP溯源配置开关
 * @method void setOpenIpTrace(boolean $OpenIpTrace) 设置IP溯源配置开关
 * @method integer getDurationTime() 获取IP溯源开启持续时间，单位：秒
 * @method void setDurationTime(integer $DurationTime) 设置IP溯源开启持续时间，单位：秒
 * @method IpTraceConfig getIpTraceConfig() 获取IP溯源配置
 * @method void setIpTraceConfig(IpTraceConfig $IpTraceConfig) 设置IP溯源配置
 * @method boolean getFilterKibanaIp() 获取是否过滤kibana节点IP
 * @method void setFilterKibanaIp(boolean $FilterKibanaIp) 设置是否过滤kibana节点IP
 */
class UpdateIpTraceStatusRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var boolean IP溯源配置开关
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
     * @var boolean 是否过滤kibana节点IP
     */
    public $FilterKibanaIp;

    /**
     * @param string $InstanceId 集群ID
     * @param boolean $OpenIpTrace IP溯源配置开关
     * @param integer $DurationTime IP溯源开启持续时间，单位：秒
     * @param IpTraceConfig $IpTraceConfig IP溯源配置
     * @param boolean $FilterKibanaIp 是否过滤kibana节点IP
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
