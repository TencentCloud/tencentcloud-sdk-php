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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGatewayService请求参数结构体
 *
 * @method string getGatewayId() 获取网关ID
 * @method void setGatewayId(string $GatewayId) 设置网关ID
 * @method string getName() 获取服务名称
 * @method void setName(string $Name) 设置服务名称
 * @method string getProtocol() 获取请求协议：
- https
- http
- tcp
- udp
 * @method void setProtocol(string $Protocol) 设置请求协议：
- https
- http
- tcp
- udp
 * @method string getPath() 获取请求路径
 * @method void setPath(string $Path) 设置请求路径
 * @method integer getTimeout() 获取超时时间，单位ms
 * @method void setTimeout(integer $Timeout) 设置超时时间，单位ms
 * @method integer getRetries() 获取重试次数
 * @method void setRetries(integer $Retries) 设置重试次数
 * @method string getUpstreamType() 获取服务类型: 
- Kubernetes 
- Registry
- IPList
- HostIP
- Scf	
 * @method void setUpstreamType(string $UpstreamType) 设置服务类型: 
- Kubernetes 
- Registry
- IPList
- HostIP
- Scf	
 * @method KongUpstreamInfo getUpstreamInfo() 获取服务配置信息
 * @method void setUpstreamInfo(KongUpstreamInfo $UpstreamInfo) 设置服务配置信息
 */
class CreateCloudNativeAPIGatewayServiceRequest extends AbstractModel
{
    /**
     * @var string 网关ID
     */
    public $GatewayId;

    /**
     * @var string 服务名称
     */
    public $Name;

    /**
     * @var string 请求协议：
- https
- http
- tcp
- udp
     */
    public $Protocol;

    /**
     * @var string 请求路径
     */
    public $Path;

    /**
     * @var integer 超时时间，单位ms
     */
    public $Timeout;

    /**
     * @var integer 重试次数
     */
    public $Retries;

    /**
     * @var string 服务类型: 
- Kubernetes 
- Registry
- IPList
- HostIP
- Scf	
     */
    public $UpstreamType;

    /**
     * @var KongUpstreamInfo 服务配置信息
     */
    public $UpstreamInfo;

    /**
     * @param string $GatewayId 网关ID
     * @param string $Name 服务名称
     * @param string $Protocol 请求协议：
- https
- http
- tcp
- udp
     * @param string $Path 请求路径
     * @param integer $Timeout 超时时间，单位ms
     * @param integer $Retries 重试次数
     * @param string $UpstreamType 服务类型: 
- Kubernetes 
- Registry
- IPList
- HostIP
- Scf	
     * @param KongUpstreamInfo $UpstreamInfo 服务配置信息
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Retries",$param) and $param["Retries"] !== null) {
            $this->Retries = $param["Retries"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("UpstreamInfo",$param) and $param["UpstreamInfo"] !== null) {
            $this->UpstreamInfo = new KongUpstreamInfo();
            $this->UpstreamInfo->deserialize($param["UpstreamInfo"]);
        }
    }
}
