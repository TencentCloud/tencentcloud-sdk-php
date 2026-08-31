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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康检查配置
 *
 * @method boolean getHealthCheckEnabled() 获取<p>是否开启健康检查</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method void setHealthCheckEnabled(boolean $HealthCheckEnabled) 设置<p>是否开启健康检查</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
 * @method integer getHealthCheckInterval() 获取<p>健康检查间隔。支持以300s为步长配置。</p><p>取值范围：[300, 14400]</p><p>单位：s</p><p>默认值：300</p>
 * @method void setHealthCheckInterval(integer $HealthCheckInterval) 设置<p>健康检查间隔。支持以300s为步长配置。</p><p>取值范围：[300, 14400]</p><p>单位：s</p><p>默认值：300</p>
 * @method integer getHealthCheckUnhealthyThreshold() 获取<p>不健康阈值。表示当模型连续多少次不健康时认为该模型不健康。</p><p>取值范围：[1, 10]</p>
 * @method void setHealthCheckUnhealthyThreshold(integer $HealthCheckUnhealthyThreshold) 设置<p>不健康阈值。表示当模型连续多少次不健康时认为该模型不健康。</p><p>取值范围：[1, 10]</p>
 * @method integer getHealthCheckMaxTokens() 获取<p>健康检查使用的最大Token数量。部分模型如gpt系列可能仅支持大于等于16。</p><p>取值范围：[1, 1024]</p><p>默认值：1</p>
 * @method void setHealthCheckMaxTokens(integer $HealthCheckMaxTokens) 设置<p>健康检查使用的最大Token数量。部分模型如gpt系列可能仅支持大于等于16。</p><p>取值范围：[1, 1024]</p><p>默认值：1</p>
 * @method string getHealthCheckProtocol() 获取<p>健康检查协议</p><p>枚举值：</p><ul><li>chat： 表示/chat/completion协议</li><li>messages： 表示/v1/messages协议</li><li>responses： 表示/v1/messages协议</li></ul>
 * @method void setHealthCheckProtocol(string $HealthCheckProtocol) 设置<p>健康检查协议</p><p>枚举值：</p><ul><li>chat： 表示/chat/completion协议</li><li>messages： 表示/v1/messages协议</li><li>responses： 表示/v1/messages协议</li></ul>
 */
class ServiceProviderHealthCheckConfigItemInput extends AbstractModel
{
    /**
     * @var boolean <p>是否开启健康检查</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     */
    public $HealthCheckEnabled;

    /**
     * @var integer <p>健康检查间隔。支持以300s为步长配置。</p><p>取值范围：[300, 14400]</p><p>单位：s</p><p>默认值：300</p>
     */
    public $HealthCheckInterval;

    /**
     * @var integer <p>不健康阈值。表示当模型连续多少次不健康时认为该模型不健康。</p><p>取值范围：[1, 10]</p>
     */
    public $HealthCheckUnhealthyThreshold;

    /**
     * @var integer <p>健康检查使用的最大Token数量。部分模型如gpt系列可能仅支持大于等于16。</p><p>取值范围：[1, 1024]</p><p>默认值：1</p>
     */
    public $HealthCheckMaxTokens;

    /**
     * @var string <p>健康检查协议</p><p>枚举值：</p><ul><li>chat： 表示/chat/completion协议</li><li>messages： 表示/v1/messages协议</li><li>responses： 表示/v1/messages协议</li></ul>
     */
    public $HealthCheckProtocol;

    /**
     * @param boolean $HealthCheckEnabled <p>是否开启健康检查</p><p>枚举值：</p><ul><li>true： 是</li><li>false： 否</li></ul>
     * @param integer $HealthCheckInterval <p>健康检查间隔。支持以300s为步长配置。</p><p>取值范围：[300, 14400]</p><p>单位：s</p><p>默认值：300</p>
     * @param integer $HealthCheckUnhealthyThreshold <p>不健康阈值。表示当模型连续多少次不健康时认为该模型不健康。</p><p>取值范围：[1, 10]</p>
     * @param integer $HealthCheckMaxTokens <p>健康检查使用的最大Token数量。部分模型如gpt系列可能仅支持大于等于16。</p><p>取值范围：[1, 1024]</p><p>默认值：1</p>
     * @param string $HealthCheckProtocol <p>健康检查协议</p><p>枚举值：</p><ul><li>chat： 表示/chat/completion协议</li><li>messages： 表示/v1/messages协议</li><li>responses： 表示/v1/messages协议</li></ul>
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
        if (array_key_exists("HealthCheckEnabled",$param) and $param["HealthCheckEnabled"] !== null) {
            $this->HealthCheckEnabled = $param["HealthCheckEnabled"];
        }

        if (array_key_exists("HealthCheckInterval",$param) and $param["HealthCheckInterval"] !== null) {
            $this->HealthCheckInterval = $param["HealthCheckInterval"];
        }

        if (array_key_exists("HealthCheckUnhealthyThreshold",$param) and $param["HealthCheckUnhealthyThreshold"] !== null) {
            $this->HealthCheckUnhealthyThreshold = $param["HealthCheckUnhealthyThreshold"];
        }

        if (array_key_exists("HealthCheckMaxTokens",$param) and $param["HealthCheckMaxTokens"] !== null) {
            $this->HealthCheckMaxTokens = $param["HealthCheckMaxTokens"];
        }

        if (array_key_exists("HealthCheckProtocol",$param) and $param["HealthCheckProtocol"] !== null) {
            $this->HealthCheckProtocol = $param["HealthCheckProtocol"];
        }
    }
}
