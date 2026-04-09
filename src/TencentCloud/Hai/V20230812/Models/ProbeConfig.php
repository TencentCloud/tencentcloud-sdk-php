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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 探针配置信息
 *
 * @method HttpConfig getHttpGet() 获取<p>HTTP GET请求进行健康检查</p>
 * @method void setHttpGet(HttpConfig $HttpGet) 设置<p>HTTP GET请求进行健康检查</p>
 * @method integer getInitialDelaySeconds() 获取<p>容器启动后，等待多少秒开始第一次探测</p>
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置<p>容器启动后，等待多少秒开始第一次探测</p>
 * @method integer getPeriodSeconds() 获取<p>每次执行探测的间隔时间（秒）</p>
 * @method void setPeriodSeconds(integer $PeriodSeconds) 设置<p>每次执行探测的间隔时间（秒）</p>
 * @method integer getTimeoutSeconds() 获取<p>每次探测等待响应的超时时间（秒）</p>
 * @method void setTimeoutSeconds(integer $TimeoutSeconds) 设置<p>每次探测等待响应的超时时间（秒）</p>
 * @method integer getSuccessThreshold() 获取<p>探测失败后，最小连续成功次数才被认为成功</p>
 * @method void setSuccessThreshold(integer $SuccessThreshold) 设置<p>探测失败后，最小连续成功次数才被认为成功</p>
 * @method integer getFailureThreshold() 获取<p>探测失败后，Kubernetes的重试次数</p>
 * @method void setFailureThreshold(integer $FailureThreshold) 设置<p>探测失败后，Kubernetes的重试次数</p>
 */
class ProbeConfig extends AbstractModel
{
    /**
     * @var HttpConfig <p>HTTP GET请求进行健康检查</p>
     */
    public $HttpGet;

    /**
     * @var integer <p>容器启动后，等待多少秒开始第一次探测</p>
     */
    public $InitialDelaySeconds;

    /**
     * @var integer <p>每次执行探测的间隔时间（秒）</p>
     */
    public $PeriodSeconds;

    /**
     * @var integer <p>每次探测等待响应的超时时间（秒）</p>
     */
    public $TimeoutSeconds;

    /**
     * @var integer <p>探测失败后，最小连续成功次数才被认为成功</p>
     */
    public $SuccessThreshold;

    /**
     * @var integer <p>探测失败后，Kubernetes的重试次数</p>
     */
    public $FailureThreshold;

    /**
     * @param HttpConfig $HttpGet <p>HTTP GET请求进行健康检查</p>
     * @param integer $InitialDelaySeconds <p>容器启动后，等待多少秒开始第一次探测</p>
     * @param integer $PeriodSeconds <p>每次执行探测的间隔时间（秒）</p>
     * @param integer $TimeoutSeconds <p>每次探测等待响应的超时时间（秒）</p>
     * @param integer $SuccessThreshold <p>探测失败后，最小连续成功次数才被认为成功</p>
     * @param integer $FailureThreshold <p>探测失败后，Kubernetes的重试次数</p>
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
        if (array_key_exists("HttpGet",$param) and $param["HttpGet"] !== null) {
            $this->HttpGet = new HttpConfig();
            $this->HttpGet->deserialize($param["HttpGet"]);
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("PeriodSeconds",$param) and $param["PeriodSeconds"] !== null) {
            $this->PeriodSeconds = $param["PeriodSeconds"];
        }

        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            $this->TimeoutSeconds = $param["TimeoutSeconds"];
        }

        if (array_key_exists("SuccessThreshold",$param) and $param["SuccessThreshold"] !== null) {
            $this->SuccessThreshold = $param["SuccessThreshold"];
        }

        if (array_key_exists("FailureThreshold",$param) and $param["FailureThreshold"] !== null) {
            $this->FailureThreshold = $param["FailureThreshold"];
        }
    }
}
