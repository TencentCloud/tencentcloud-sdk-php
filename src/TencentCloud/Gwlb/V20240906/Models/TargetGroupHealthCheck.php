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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组健康检查详情
 *
 * @method boolean getHealthSwitch() 获取是否开启健康检查。
 * @method void setHealthSwitch(boolean $HealthSwitch) 设置是否开启健康检查。
 * @method string getProtocol() 获取健康检查使用的协议。支持ping和tcp，默认为ping。

- PING: icmp
- TCP: tcp
 * @method void setProtocol(string $Protocol) 设置健康检查使用的协议。支持ping和tcp，默认为ping。

- PING: icmp
- TCP: tcp
 * @method integer getPort() 获取健康检查端口，探测协议未tcp时，该参数必填。

 * @method void setPort(integer $Port) 设置健康检查端口，探测协议未tcp时，该参数必填。

 * @method integer getTimeout() 获取健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。
 * @method void setTimeout(integer $Timeout) 设置健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。
 * @method integer getIntervalTime() 获取检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。
 * @method void setIntervalTime(integer $IntervalTime) 设置检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。
 * @method integer getHealthNum() 获取检测健康阈值。 默认为3秒。 可配置范围：2 - 10次。
 * @method void setHealthNum(integer $HealthNum) 设置检测健康阈值。 默认为3秒。 可配置范围：2 - 10次。
 * @method integer getUnHealthNum() 获取检测不健康阈值。 默认为3秒。 可配置范围：2 - 10次。
 * @method void setUnHealthNum(integer $UnHealthNum) 设置检测不健康阈值。 默认为3秒。 可配置范围：2 - 10次。
 */
class TargetGroupHealthCheck extends AbstractModel
{
    /**
     * @var boolean 是否开启健康检查。
     */
    public $HealthSwitch;

    /**
     * @var string 健康检查使用的协议。支持ping和tcp，默认为ping。

- PING: icmp
- TCP: tcp
     */
    public $Protocol;

    /**
     * @var integer 健康检查端口，探测协议未tcp时，该参数必填。

     */
    public $Port;

    /**
     * @var integer 健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。
     */
    public $Timeout;

    /**
     * @var integer 检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。
     */
    public $IntervalTime;

    /**
     * @var integer 检测健康阈值。 默认为3秒。 可配置范围：2 - 10次。
     */
    public $HealthNum;

    /**
     * @var integer 检测不健康阈值。 默认为3秒。 可配置范围：2 - 10次。
     */
    public $UnHealthNum;

    /**
     * @param boolean $HealthSwitch 是否开启健康检查。
     * @param string $Protocol 健康检查使用的协议。支持ping和tcp，默认为ping。

- PING: icmp
- TCP: tcp
     * @param integer $Port 健康检查端口，探测协议未tcp时，该参数必填。

     * @param integer $Timeout 健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。
     * @param integer $IntervalTime 检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。
     * @param integer $HealthNum 检测健康阈值。 默认为3秒。 可配置范围：2 - 10次。
     * @param integer $UnHealthNum 检测不健康阈值。 默认为3秒。 可配置范围：2 - 10次。
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
        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnHealthNum",$param) and $param["UnHealthNum"] !== null) {
            $this->UnHealthNum = $param["UnHealthNum"];
        }
    }
}
