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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPN通道健康检查配置
 *
 * @method string getProbeType() 获取探测模式，默认值NQA，不可修改。
 * @method void setProbeType(string $ProbeType) 设置探测模式，默认值NQA，不可修改。
 * @method integer getProbeInterval() 获取探测间隔，腾讯云两次健康检查间隔时间，范围【1000-5000】，单位ms。
 * @method void setProbeInterval(integer $ProbeInterval) 设置探测间隔，腾讯云两次健康检查间隔时间，范围【1000-5000】，单位ms。
 * @method integer getProbeThreshold() 获取探测次数，连续N次健康检查失败后执行路由切换，范围【3-8】，单位次。
 * @method void setProbeThreshold(integer $ProbeThreshold) 设置探测次数，连续N次健康检查失败后执行路由切换，范围【3-8】，单位次。
 * @method integer getProbeTimeout() 获取探测超时时间，范围【10-5000】，单位ms。
 * @method void setProbeTimeout(integer $ProbeTimeout) 设置探测超时时间，范围【10-5000】，单位ms。
 */
class HealthCheckConfig extends AbstractModel
{
    /**
     * @var string 探测模式，默认值NQA，不可修改。
     */
    public $ProbeType;

    /**
     * @var integer 探测间隔，腾讯云两次健康检查间隔时间，范围【1000-5000】，单位ms。
     */
    public $ProbeInterval;

    /**
     * @var integer 探测次数，连续N次健康检查失败后执行路由切换，范围【3-8】，单位次。
     */
    public $ProbeThreshold;

    /**
     * @var integer 探测超时时间，范围【10-5000】，单位ms。
     */
    public $ProbeTimeout;

    /**
     * @param string $ProbeType 探测模式，默认值NQA，不可修改。
     * @param integer $ProbeInterval 探测间隔，腾讯云两次健康检查间隔时间，范围【1000-5000】，单位ms。
     * @param integer $ProbeThreshold 探测次数，连续N次健康检查失败后执行路由切换，范围【3-8】，单位次。
     * @param integer $ProbeTimeout 探测超时时间，范围【10-5000】，单位ms。
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
        if (array_key_exists("ProbeType",$param) and $param["ProbeType"] !== null) {
            $this->ProbeType = $param["ProbeType"];
        }

        if (array_key_exists("ProbeInterval",$param) and $param["ProbeInterval"] !== null) {
            $this->ProbeInterval = $param["ProbeInterval"];
        }

        if (array_key_exists("ProbeThreshold",$param) and $param["ProbeThreshold"] !== null) {
            $this->ProbeThreshold = $param["ProbeThreshold"];
        }

        if (array_key_exists("ProbeTimeout",$param) and $param["ProbeTimeout"] !== null) {
            $this->ProbeTimeout = $param["ProbeTimeout"];
        }
    }
}
