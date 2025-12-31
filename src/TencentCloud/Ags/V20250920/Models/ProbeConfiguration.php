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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康检查探针配置
 *
 * @method HttpGetAction getHttpGet() 获取HTTP GET 探测配置
 * @method void setHttpGet(HttpGetAction $HttpGet) 设置HTTP GET 探测配置
 * @method integer getReadyTimeoutMs() 获取健康检查就绪超时
 * @method void setReadyTimeoutMs(integer $ReadyTimeoutMs) 设置健康检查就绪超时
 * @method integer getProbeTimeoutMs() 获取健康检查单次探测超时
 * @method void setProbeTimeoutMs(integer $ProbeTimeoutMs) 设置健康检查单次探测超时
 * @method integer getProbePeriodMs() 获取健康检查间隔
 * @method void setProbePeriodMs(integer $ProbePeriodMs) 设置健康检查间隔
 * @method integer getSuccessThreshold() 获取健康检查成功阈值
 * @method void setSuccessThreshold(integer $SuccessThreshold) 设置健康检查成功阈值
 * @method integer getFailureThreshold() 获取健康检查失败阈值
 * @method void setFailureThreshold(integer $FailureThreshold) 设置健康检查失败阈值
 */
class ProbeConfiguration extends AbstractModel
{
    /**
     * @var HttpGetAction HTTP GET 探测配置
     */
    public $HttpGet;

    /**
     * @var integer 健康检查就绪超时
     */
    public $ReadyTimeoutMs;

    /**
     * @var integer 健康检查单次探测超时
     */
    public $ProbeTimeoutMs;

    /**
     * @var integer 健康检查间隔
     */
    public $ProbePeriodMs;

    /**
     * @var integer 健康检查成功阈值
     */
    public $SuccessThreshold;

    /**
     * @var integer 健康检查失败阈值
     */
    public $FailureThreshold;

    /**
     * @param HttpGetAction $HttpGet HTTP GET 探测配置
     * @param integer $ReadyTimeoutMs 健康检查就绪超时
     * @param integer $ProbeTimeoutMs 健康检查单次探测超时
     * @param integer $ProbePeriodMs 健康检查间隔
     * @param integer $SuccessThreshold 健康检查成功阈值
     * @param integer $FailureThreshold 健康检查失败阈值
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
            $this->HttpGet = new HttpGetAction();
            $this->HttpGet->deserialize($param["HttpGet"]);
        }

        if (array_key_exists("ReadyTimeoutMs",$param) and $param["ReadyTimeoutMs"] !== null) {
            $this->ReadyTimeoutMs = $param["ReadyTimeoutMs"];
        }

        if (array_key_exists("ProbeTimeoutMs",$param) and $param["ProbeTimeoutMs"] !== null) {
            $this->ProbeTimeoutMs = $param["ProbeTimeoutMs"];
        }

        if (array_key_exists("ProbePeriodMs",$param) and $param["ProbePeriodMs"] !== null) {
            $this->ProbePeriodMs = $param["ProbePeriodMs"];
        }

        if (array_key_exists("SuccessThreshold",$param) and $param["SuccessThreshold"] !== null) {
            $this->SuccessThreshold = $param["SuccessThreshold"];
        }

        if (array_key_exists("FailureThreshold",$param) and $param["FailureThreshold"] !== null) {
            $this->FailureThreshold = $param["FailureThreshold"];
        }
    }
}
