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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method integer getPort() 获取监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
 * @method void setPort(integer $Port) 设置监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
 * @method string getCertificateId() 获取服务器证书ID
 * @method void setCertificateId(string $CertificateId) 设置服务器证书ID
 * @method string getForwardProtocol() 获取加速通道转发到源站的协议类型：HTTP | HTTPS
 * @method void setForwardProtocol(string $ForwardProtocol) 设置加速通道转发到源站的协议类型：HTTP | HTTPS
 * @method string getProxyId() 获取通道ID
 * @method void setProxyId(string $ProxyId) 设置通道ID
 * @method integer getAuthType() 获取认证类型，其中：
0，单向认证；
1，双向认证。
默认使用单向认证。
 * @method void setAuthType(integer $AuthType) 设置认证类型，其中：
0，单向认证；
1，双向认证。
默认使用单向认证。
 * @method string getClientCertificateId() 获取客户端CA证书ID，仅当双向认证时设置该参数。
 * @method void setClientCertificateId(string $ClientCertificateId) 设置客户端CA证书ID，仅当双向认证时设置该参数。
 */

/**
 *CreateHTTPSListener请求参数结构体
 */
class CreateHTTPSListenerRequest extends AbstractModel
{
    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var integer 监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
     */
    public $Port;

    /**
     * @var string 服务器证书ID
     */
    public $CertificateId;

    /**
     * @var string 加速通道转发到源站的协议类型：HTTP | HTTPS
     */
    public $ForwardProtocol;

    /**
     * @var string 通道ID
     */
    public $ProxyId;

    /**
     * @var integer 认证类型，其中：
0，单向认证；
1，双向认证。
默认使用单向认证。
     */
    public $AuthType;

    /**
     * @var string 客户端CA证书ID，仅当双向认证时设置该参数。
     */
    public $ClientCertificateId;
    /**
     * @param string $ListenerName 监听器名称
     * @param integer $Port 监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复
     * @param string $CertificateId 服务器证书ID
     * @param string $ForwardProtocol 加速通道转发到源站的协议类型：HTTP | HTTPS
     * @param string $ProxyId 通道ID
     * @param integer $AuthType 认证类型，其中：
0，单向认证；
1，双向认证。
默认使用单向认证。
     * @param string $ClientCertificateId 客户端CA证书ID，仅当双向认证时设置该参数。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }
    }
}
