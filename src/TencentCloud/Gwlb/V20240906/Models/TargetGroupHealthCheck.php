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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组健康检查详情
 *
 * @method boolean getHealthSwitch() 获取<p>是否开启健康检查。</p>
 * @method void setHealthSwitch(boolean $HealthSwitch) 设置<p>是否开启健康检查。</p>
 * @method string getProtocol() 获取<p>健康检查使用的协议。支持PING和TCP两种方式，默认为PING。</p><ul><li>icmp: 使用PING的方式进行健康检查</li><li>tcp: 使用TCP连接的方式进行健康检查</li></ul>
 * @method void setProtocol(string $Protocol) 设置<p>健康检查使用的协议。支持PING和TCP两种方式，默认为PING。</p><ul><li>icmp: 使用PING的方式进行健康检查</li><li>tcp: 使用TCP连接的方式进行健康检查</li></ul>
 * @method integer getPort() 获取<p>健康检查端口，探测协议为tcp时，该参数必填。</p>
 * @method void setPort(integer $Port) 设置<p>健康检查端口，探测协议为tcp时，该参数必填。</p>
 * @method integer getTimeout() 获取<p>健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。</p>
 * @method void setTimeout(integer $Timeout) 设置<p>健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。</p>
 * @method integer getIntervalTime() 获取<p>检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。</p>
 * @method void setIntervalTime(integer $IntervalTime) 设置<p>检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。</p>
 * @method integer getHealthNum() 获取<p>检测健康阈值。 默认为3次。 可配置范围：2 - 10次。</p>
 * @method void setHealthNum(integer $HealthNum) 设置<p>检测健康阈值。 默认为3次。 可配置范围：2 - 10次。</p>
 * @method integer getUnHealthNum() 获取<p>检测不健康阈值。 默认为3次。 可配置范围：2 - 10次。</p>
 * @method void setUnHealthNum(integer $UnHealthNum) 设置<p>检测不健康阈值。 默认为3次。 可配置范围：2 - 10次。</p>
 */
class TargetGroupHealthCheck extends AbstractModel
{
    /**
     * @var boolean <p>是否开启健康检查。</p>
     */
    public $HealthSwitch;

    /**
     * @var string <p>健康检查使用的协议。支持PING和TCP两种方式，默认为PING。</p><ul><li>icmp: 使用PING的方式进行健康检查</li><li>tcp: 使用TCP连接的方式进行健康检查</li></ul>
     */
    public $Protocol;

    /**
     * @var integer <p>健康检查端口，探测协议为tcp时，该参数必填。</p>
     */
    public $Port;

    /**
     * @var integer <p>健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。</p>
     */
    public $Timeout;

    /**
     * @var integer <p>检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。</p>
     */
    public $IntervalTime;

    /**
     * @var integer <p>检测健康阈值。 默认为3次。 可配置范围：2 - 10次。</p>
     */
    public $HealthNum;

    /**
     * @var integer <p>检测不健康阈值。 默认为3次。 可配置范围：2 - 10次。</p>
     */
    public $UnHealthNum;

    /**
     * @param boolean $HealthSwitch <p>是否开启健康检查。</p>
     * @param string $Protocol <p>健康检查使用的协议。支持PING和TCP两种方式，默认为PING。</p><ul><li>icmp: 使用PING的方式进行健康检查</li><li>tcp: 使用TCP连接的方式进行健康检查</li></ul>
     * @param integer $Port <p>健康检查端口，探测协议为tcp时，该参数必填。</p>
     * @param integer $Timeout <p>健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。</p>
     * @param integer $IntervalTime <p>检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。</p>
     * @param integer $HealthNum <p>检测健康阈值。 默认为3次。 可配置范围：2 - 10次。</p>
     * @param integer $UnHealthNum <p>检测不健康阈值。 默认为3次。 可配置范围：2 - 10次。</p>
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
