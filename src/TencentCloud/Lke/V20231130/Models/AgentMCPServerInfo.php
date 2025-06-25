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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mcp的服务信息
 *
 * @method string getMcpServerUrl() 获取mcp server URL地址
 * @method void setMcpServerUrl(string $McpServerUrl) 设置mcp server URL地址
 * @method array getHeaders() 获取mcp server header信息
 * @method void setHeaders(array $Headers) 设置mcp server header信息
 * @method integer getTimeout() 获取超时时间，单位秒
 * @method void setTimeout(integer $Timeout) 设置超时时间，单位秒
 * @method integer getSseReadTimeout() 获取sse服务超时时间，单位秒
 * @method void setSseReadTimeout(integer $SseReadTimeout) 设置sse服务超时时间，单位秒
 */
class AgentMCPServerInfo extends AbstractModel
{
    /**
     * @var string mcp server URL地址
     */
    public $McpServerUrl;

    /**
     * @var array mcp server header信息
     */
    public $Headers;

    /**
     * @var integer 超时时间，单位秒
     */
    public $Timeout;

    /**
     * @var integer sse服务超时时间，单位秒
     */
    public $SseReadTimeout;

    /**
     * @param string $McpServerUrl mcp server URL地址
     * @param array $Headers mcp server header信息
     * @param integer $Timeout 超时时间，单位秒
     * @param integer $SseReadTimeout sse服务超时时间，单位秒
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
        if (array_key_exists("McpServerUrl",$param) and $param["McpServerUrl"] !== null) {
            $this->McpServerUrl = $param["McpServerUrl"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new AgentPluginHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("SseReadTimeout",$param) and $param["SseReadTimeout"] !== null) {
            $this->SseReadTimeout = $param["SseReadTimeout"];
        }
    }
}
