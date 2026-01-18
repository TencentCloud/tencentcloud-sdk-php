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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHTTPSListener请求参数结构体
 *
 * @method string getListenerName() 获取<p>监听器名称</p>
 * @method void setListenerName(string $ListenerName) 设置<p>监听器名称</p>
 * @method integer getPort() 获取<p>监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复</p>
 * @method void setPort(integer $Port) 设置<p>监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复</p>
 * @method string getCertificateId() 获取<p>服务器证书ID</p>
 * @method void setCertificateId(string $CertificateId) 设置<p>服务器证书ID</p>
 * @method string getForwardProtocol() 获取<p>加速通道转发到源站的协议类型：HTTP | HTTPS</p>
 * @method void setForwardProtocol(string $ForwardProtocol) 设置<p>加速通道转发到源站的协议类型：HTTP | HTTPS</p>
 * @method string getProxyId() 获取<p>通道ID，与GroupId之间只能设置一个。表示创建通道的监听器。</p>
 * @method void setProxyId(string $ProxyId) 设置<p>通道ID，与GroupId之间只能设置一个。表示创建通道的监听器。</p>
 * @method integer getAuthType() 获取<p>认证类型，其中：0，单向认证；1，双向认证。默认使用单向认证。</p>
 * @method void setAuthType(integer $AuthType) 设置<p>认证类型，其中：0，单向认证；1，双向认证。默认使用单向认证。</p>
 * @method string getClientCertificateId() 获取<p>客户端CA单证书ID，仅当双向认证时设置该参数或PolyClientCertificateIds参数</p>
 * @method void setClientCertificateId(string $ClientCertificateId) 设置<p>客户端CA单证书ID，仅当双向认证时设置该参数或PolyClientCertificateIds参数</p>
 * @method array getPolyClientCertificateIds() 获取<p>新的客户端多CA证书ID，仅当双向认证时设置该参数或设置ClientCertificateId参数</p>
 * @method void setPolyClientCertificateIds(array $PolyClientCertificateIds) 设置<p>新的客户端多CA证书ID，仅当双向认证时设置该参数或设置ClientCertificateId参数</p>
 * @method string getGroupId() 获取<p>通道组ID，与ProxyId之间只能设置一个。表示创建通道组的监听器。</p>
 * @method void setGroupId(string $GroupId) 设置<p>通道组ID，与ProxyId之间只能设置一个。表示创建通道组的监听器。</p>
 * @method integer getHttp3Supported() 获取<p>支持Http3的开关，其中：0，表示不需要支持Http3接入；1，表示需要支持Http3接入。注意：如果支持了Http3的功能，那么该监听器会占用对应的UDP接入端口，不可再创建相同端口的UDP监听器。该功能的启停无法在监听器创建完毕后再修改。</p>
 * @method void setHttp3Supported(integer $Http3Supported) 设置<p>支持Http3的开关，其中：0，表示不需要支持Http3接入；1，表示需要支持Http3接入。注意：如果支持了Http3的功能，那么该监听器会占用对应的UDP接入端口，不可再创建相同端口的UDP监听器。该功能的启停无法在监听器创建完毕后再修改。</p>
 */
class CreateHTTPSListenerRequest extends AbstractModel
{
    /**
     * @var string <p>监听器名称</p>
     */
    public $ListenerName;

    /**
     * @var integer <p>监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复</p>
     */
    public $Port;

    /**
     * @var string <p>服务器证书ID</p>
     */
    public $CertificateId;

    /**
     * @var string <p>加速通道转发到源站的协议类型：HTTP | HTTPS</p>
     */
    public $ForwardProtocol;

    /**
     * @var string <p>通道ID，与GroupId之间只能设置一个。表示创建通道的监听器。</p>
     */
    public $ProxyId;

    /**
     * @var integer <p>认证类型，其中：0，单向认证；1，双向认证。默认使用单向认证。</p>
     */
    public $AuthType;

    /**
     * @var string <p>客户端CA单证书ID，仅当双向认证时设置该参数或PolyClientCertificateIds参数</p>
     */
    public $ClientCertificateId;

    /**
     * @var array <p>新的客户端多CA证书ID，仅当双向认证时设置该参数或设置ClientCertificateId参数</p>
     */
    public $PolyClientCertificateIds;

    /**
     * @var string <p>通道组ID，与ProxyId之间只能设置一个。表示创建通道组的监听器。</p>
     */
    public $GroupId;

    /**
     * @var integer <p>支持Http3的开关，其中：0，表示不需要支持Http3接入；1，表示需要支持Http3接入。注意：如果支持了Http3的功能，那么该监听器会占用对应的UDP接入端口，不可再创建相同端口的UDP监听器。该功能的启停无法在监听器创建完毕后再修改。</p>
     */
    public $Http3Supported;

    /**
     * @param string $ListenerName <p>监听器名称</p>
     * @param integer $Port <p>监听器端口，基于同种传输层协议（TCP 或 UDP）的监听器，端口不可重复</p>
     * @param string $CertificateId <p>服务器证书ID</p>
     * @param string $ForwardProtocol <p>加速通道转发到源站的协议类型：HTTP | HTTPS</p>
     * @param string $ProxyId <p>通道ID，与GroupId之间只能设置一个。表示创建通道的监听器。</p>
     * @param integer $AuthType <p>认证类型，其中：0，单向认证；1，双向认证。默认使用单向认证。</p>
     * @param string $ClientCertificateId <p>客户端CA单证书ID，仅当双向认证时设置该参数或PolyClientCertificateIds参数</p>
     * @param array $PolyClientCertificateIds <p>新的客户端多CA证书ID，仅当双向认证时设置该参数或设置ClientCertificateId参数</p>
     * @param string $GroupId <p>通道组ID，与ProxyId之间只能设置一个。表示创建通道组的监听器。</p>
     * @param integer $Http3Supported <p>支持Http3的开关，其中：0，表示不需要支持Http3接入；1，表示需要支持Http3接入。注意：如果支持了Http3的功能，那么该监听器会占用对应的UDP接入端口，不可再创建相同端口的UDP监听器。该功能的启停无法在监听器创建完毕后再修改。</p>
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

        if (array_key_exists("PolyClientCertificateIds",$param) and $param["PolyClientCertificateIds"] !== null) {
            $this->PolyClientCertificateIds = $param["PolyClientCertificateIds"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Http3Supported",$param) and $param["Http3Supported"] !== null) {
            $this->Http3Supported = $param["Http3Supported"];
        }
    }
}
