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
 * IP溯源配置
 *
 * @method boolean getEnableRequest() 获取请求溯源开关
 * @method void setEnableRequest(boolean $EnableRequest) 设置请求溯源开关
 * @method boolean getEnableResponse() 获取返回溯源开关
 * @method void setEnableResponse(boolean $EnableResponse) 设置返回溯源开关
 * @method boolean getEnableRequestBody() 获取请求消息体溯源开关
 * @method void setEnableRequestBody(boolean $EnableRequestBody) 设置请求消息体溯源开关
 * @method boolean getEnableResponseBody() 获取返回消息体溯源开关
 * @method void setEnableResponseBody(boolean $EnableResponseBody) 设置返回消息体溯源开关
 * @method array getRemoteIpInclude() 获取排除IP
 * @method void setRemoteIpInclude(array $RemoteIpInclude) 设置排除IP
 * @method array getRemoteIpExclude() 获取包含IP
 * @method void setRemoteIpExclude(array $RemoteIpExclude) 设置包含IP
 * @method array getUriInclude() 获取排除uri
 * @method void setUriInclude(array $UriInclude) 设置排除uri
 * @method array getUriExclude() 获取包含uri
 * @method void setUriExclude(array $UriExclude) 设置包含uri
 */
class IpTraceConfig extends AbstractModel
{
    /**
     * @var boolean 请求溯源开关
     */
    public $EnableRequest;

    /**
     * @var boolean 返回溯源开关
     */
    public $EnableResponse;

    /**
     * @var boolean 请求消息体溯源开关
     */
    public $EnableRequestBody;

    /**
     * @var boolean 返回消息体溯源开关
     */
    public $EnableResponseBody;

    /**
     * @var array 排除IP
     */
    public $RemoteIpInclude;

    /**
     * @var array 包含IP
     */
    public $RemoteIpExclude;

    /**
     * @var array 排除uri
     */
    public $UriInclude;

    /**
     * @var array 包含uri
     */
    public $UriExclude;

    /**
     * @param boolean $EnableRequest 请求溯源开关
     * @param boolean $EnableResponse 返回溯源开关
     * @param boolean $EnableRequestBody 请求消息体溯源开关
     * @param boolean $EnableResponseBody 返回消息体溯源开关
     * @param array $RemoteIpInclude 排除IP
     * @param array $RemoteIpExclude 包含IP
     * @param array $UriInclude 排除uri
     * @param array $UriExclude 包含uri
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
        if (array_key_exists("EnableRequest",$param) and $param["EnableRequest"] !== null) {
            $this->EnableRequest = $param["EnableRequest"];
        }

        if (array_key_exists("EnableResponse",$param) and $param["EnableResponse"] !== null) {
            $this->EnableResponse = $param["EnableResponse"];
        }

        if (array_key_exists("EnableRequestBody",$param) and $param["EnableRequestBody"] !== null) {
            $this->EnableRequestBody = $param["EnableRequestBody"];
        }

        if (array_key_exists("EnableResponseBody",$param) and $param["EnableResponseBody"] !== null) {
            $this->EnableResponseBody = $param["EnableResponseBody"];
        }

        if (array_key_exists("RemoteIpInclude",$param) and $param["RemoteIpInclude"] !== null) {
            $this->RemoteIpInclude = $param["RemoteIpInclude"];
        }

        if (array_key_exists("RemoteIpExclude",$param) and $param["RemoteIpExclude"] !== null) {
            $this->RemoteIpExclude = $param["RemoteIpExclude"];
        }

        if (array_key_exists("UriInclude",$param) and $param["UriInclude"] !== null) {
            $this->UriInclude = $param["UriInclude"];
        }

        if (array_key_exists("UriExclude",$param) and $param["UriExclude"] !== null) {
            $this->UriExclude = $param["UriExclude"];
        }
    }
}
