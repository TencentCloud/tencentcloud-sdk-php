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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后端通道健康检查参数配置
 *
 * @method boolean getEnableActiveCheck() 获取标识是否开启主动健康检查。
 * @method void setEnableActiveCheck(boolean $EnableActiveCheck) 设置标识是否开启主动健康检查。
 * @method boolean getEnablePassiveCheck() 获取标识是否开启被动健康检查。
 * @method void setEnablePassiveCheck(boolean $EnablePassiveCheck) 设置标识是否开启被动健康检查。
 * @method string getHealthyHttpStatus() 获取健康检查时，判断为成功请求的 HTTP 状态码。
 * @method void setHealthyHttpStatus(string $HealthyHttpStatus) 设置健康检查时，判断为成功请求的 HTTP 状态码。
 * @method string getUnhealthyHttpStatus() 获取健康检查时，判断为失败请求的 HTTP 状态码。
 * @method void setUnhealthyHttpStatus(string $UnhealthyHttpStatus) 设置健康检查时，判断为失败请求的 HTTP 状态码。
 * @method integer getTcpFailureThreshold() 获取TCP连续错误阈值。0 表示禁用 TCP 检查。取值范围：[0, 254]。
 * @method void setTcpFailureThreshold(integer $TcpFailureThreshold) 设置TCP连续错误阈值。0 表示禁用 TCP 检查。取值范围：[0, 254]。
 * @method integer getTimeoutThreshold() 获取连续超时阈值。0 表示禁用超时检查。取值范围：[0, 254]。
 * @method void setTimeoutThreshold(integer $TimeoutThreshold) 设置连续超时阈值。0 表示禁用超时检查。取值范围：[0, 254]。
 * @method integer getHttpFailureThreshold() 获取HTTP连续错误阈值。0 表示禁用HTTP检查。取值范围：[0, 254]。
 * @method void setHttpFailureThreshold(integer $HttpFailureThreshold) 设置HTTP连续错误阈值。0 表示禁用HTTP检查。取值范围：[0, 254]。
 * @method string getActiveCheckHttpPath() 获取主动健康检查时探测请求的路径。默认为"/"。
 * @method void setActiveCheckHttpPath(string $ActiveCheckHttpPath) 设置主动健康检查时探测请求的路径。默认为"/"。
 * @method integer getActiveCheckTimeout() 获取主动健康检查的探测请求超时，单位秒。默认为5秒。
 * @method void setActiveCheckTimeout(integer $ActiveCheckTimeout) 设置主动健康检查的探测请求超时，单位秒。默认为5秒。
 * @method integer getActiveCheckInterval() 获取主动健康检查的时间间隔，默认5秒。
 * @method void setActiveCheckInterval(integer $ActiveCheckInterval) 设置主动健康检查的时间间隔，默认5秒。
 * @method array getActiveRequestHeader() 获取主动健康检查时探测请求的的请求头。
 * @method void setActiveRequestHeader(array $ActiveRequestHeader) 设置主动健康检查时探测请求的的请求头。
 * @method integer getUnhealthyTimeout() 获取异常节点的状态自动恢复时间，单位秒。当只开启被动检查的话，必须设置为 > 0 的值，否则被动异常节点将无法恢复。默认30秒。
 * @method void setUnhealthyTimeout(integer $UnhealthyTimeout) 设置异常节点的状态自动恢复时间，单位秒。当只开启被动检查的话，必须设置为 > 0 的值，否则被动异常节点将无法恢复。默认30秒。
 */
class UpstreamHealthChecker extends AbstractModel
{
    /**
     * @var boolean 标识是否开启主动健康检查。
     */
    public $EnableActiveCheck;

    /**
     * @var boolean 标识是否开启被动健康检查。
     */
    public $EnablePassiveCheck;

    /**
     * @var string 健康检查时，判断为成功请求的 HTTP 状态码。
     */
    public $HealthyHttpStatus;

    /**
     * @var string 健康检查时，判断为失败请求的 HTTP 状态码。
     */
    public $UnhealthyHttpStatus;

    /**
     * @var integer TCP连续错误阈值。0 表示禁用 TCP 检查。取值范围：[0, 254]。
     */
    public $TcpFailureThreshold;

    /**
     * @var integer 连续超时阈值。0 表示禁用超时检查。取值范围：[0, 254]。
     */
    public $TimeoutThreshold;

    /**
     * @var integer HTTP连续错误阈值。0 表示禁用HTTP检查。取值范围：[0, 254]。
     */
    public $HttpFailureThreshold;

    /**
     * @var string 主动健康检查时探测请求的路径。默认为"/"。
     */
    public $ActiveCheckHttpPath;

    /**
     * @var integer 主动健康检查的探测请求超时，单位秒。默认为5秒。
     */
    public $ActiveCheckTimeout;

    /**
     * @var integer 主动健康检查的时间间隔，默认5秒。
     */
    public $ActiveCheckInterval;

    /**
     * @var array 主动健康检查时探测请求的的请求头。
     */
    public $ActiveRequestHeader;

    /**
     * @var integer 异常节点的状态自动恢复时间，单位秒。当只开启被动检查的话，必须设置为 > 0 的值，否则被动异常节点将无法恢复。默认30秒。
     */
    public $UnhealthyTimeout;

    /**
     * @param boolean $EnableActiveCheck 标识是否开启主动健康检查。
     * @param boolean $EnablePassiveCheck 标识是否开启被动健康检查。
     * @param string $HealthyHttpStatus 健康检查时，判断为成功请求的 HTTP 状态码。
     * @param string $UnhealthyHttpStatus 健康检查时，判断为失败请求的 HTTP 状态码。
     * @param integer $TcpFailureThreshold TCP连续错误阈值。0 表示禁用 TCP 检查。取值范围：[0, 254]。
     * @param integer $TimeoutThreshold 连续超时阈值。0 表示禁用超时检查。取值范围：[0, 254]。
     * @param integer $HttpFailureThreshold HTTP连续错误阈值。0 表示禁用HTTP检查。取值范围：[0, 254]。
     * @param string $ActiveCheckHttpPath 主动健康检查时探测请求的路径。默认为"/"。
     * @param integer $ActiveCheckTimeout 主动健康检查的探测请求超时，单位秒。默认为5秒。
     * @param integer $ActiveCheckInterval 主动健康检查的时间间隔，默认5秒。
     * @param array $ActiveRequestHeader 主动健康检查时探测请求的的请求头。
     * @param integer $UnhealthyTimeout 异常节点的状态自动恢复时间，单位秒。当只开启被动检查的话，必须设置为 > 0 的值，否则被动异常节点将无法恢复。默认30秒。
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
        if (array_key_exists("EnableActiveCheck",$param) and $param["EnableActiveCheck"] !== null) {
            $this->EnableActiveCheck = $param["EnableActiveCheck"];
        }

        if (array_key_exists("EnablePassiveCheck",$param) and $param["EnablePassiveCheck"] !== null) {
            $this->EnablePassiveCheck = $param["EnablePassiveCheck"];
        }

        if (array_key_exists("HealthyHttpStatus",$param) and $param["HealthyHttpStatus"] !== null) {
            $this->HealthyHttpStatus = $param["HealthyHttpStatus"];
        }

        if (array_key_exists("UnhealthyHttpStatus",$param) and $param["UnhealthyHttpStatus"] !== null) {
            $this->UnhealthyHttpStatus = $param["UnhealthyHttpStatus"];
        }

        if (array_key_exists("TcpFailureThreshold",$param) and $param["TcpFailureThreshold"] !== null) {
            $this->TcpFailureThreshold = $param["TcpFailureThreshold"];
        }

        if (array_key_exists("TimeoutThreshold",$param) and $param["TimeoutThreshold"] !== null) {
            $this->TimeoutThreshold = $param["TimeoutThreshold"];
        }

        if (array_key_exists("HttpFailureThreshold",$param) and $param["HttpFailureThreshold"] !== null) {
            $this->HttpFailureThreshold = $param["HttpFailureThreshold"];
        }

        if (array_key_exists("ActiveCheckHttpPath",$param) and $param["ActiveCheckHttpPath"] !== null) {
            $this->ActiveCheckHttpPath = $param["ActiveCheckHttpPath"];
        }

        if (array_key_exists("ActiveCheckTimeout",$param) and $param["ActiveCheckTimeout"] !== null) {
            $this->ActiveCheckTimeout = $param["ActiveCheckTimeout"];
        }

        if (array_key_exists("ActiveCheckInterval",$param) and $param["ActiveCheckInterval"] !== null) {
            $this->ActiveCheckInterval = $param["ActiveCheckInterval"];
        }

        if (array_key_exists("ActiveRequestHeader",$param) and $param["ActiveRequestHeader"] !== null) {
            $this->ActiveRequestHeader = [];
            foreach ($param["ActiveRequestHeader"] as $key => $value){
                $obj = new UpstreamHealthCheckerReqHeaders();
                $obj->deserialize($value);
                array_push($this->ActiveRequestHeader, $obj);
            }
        }

        if (array_key_exists("UnhealthyTimeout",$param) and $param["UnhealthyTimeout"] !== null) {
            $this->UnhealthyTimeout = $param["UnhealthyTimeout"];
        }
    }
}
