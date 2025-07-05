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
 * ModifyDomainAttributes请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
 * @method string getListenerId() 获取负载均衡监听器ID，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器ID，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
 * @method string getDomain() 获取域名（必须是已经创建的转发规则下的域名），如果是多域名，可以指定多域名列表中的任意一个，可以通过[DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
 * @method void setDomain(string $Domain) 设置域名（必须是已经创建的转发规则下的域名），如果是多域名，可以指定多域名列表中的任意一个，可以通过[DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
 * @method string getNewDomain() 获取要修改的新域名。NewDomain和NewDomains只能传一个。
 * @method void setNewDomain(string $NewDomain) 设置要修改的新域名。NewDomain和NewDomains只能传一个。
 * @method CertificateInput getCertificate() 获取域名相关的证书信息，注意，仅对启用SNI的监听器适用，不可和MultiCertInfo 同时传入。
 * @method void setCertificate(CertificateInput $Certificate) 设置域名相关的证书信息，注意，仅对启用SNI的监听器适用，不可和MultiCertInfo 同时传入。
 * @method boolean getHttp2() 获取是否开启HTTP2，注意，只有HTTPS域名才能开启HTTP2。
True: 开启HTTP2，Fasle: 不开启HTTP2。
 * @method void setHttp2(boolean $Http2) 设置是否开启HTTP2，注意，只有HTTPS域名才能开启HTTP2。
True: 开启HTTP2，Fasle: 不开启HTTP2。
 * @method boolean getDefaultServer() 获取是否设为默认域名，注意，一个监听器下只能设置一个默认域名。
True: 设为默认域名，Fasle: 不设置为默认域名。
 * @method void setDefaultServer(boolean $DefaultServer) 设置是否设为默认域名，注意，一个监听器下只能设置一个默认域名。
True: 设为默认域名，Fasle: 不设置为默认域名。
 * @method boolean getQuic() 获取是否开启 QUIC，注意，只有 HTTPS 域名才能开启 QUIC。
True: 开启 QUIC，False: 不开启QUIC。
 * @method void setQuic(boolean $Quic) 设置是否开启 QUIC，注意，只有 HTTPS 域名才能开启 QUIC。
True: 开启 QUIC，False: 不开启QUIC。
 * @method string getNewDefaultServerDomain() 获取监听器下必须配置一个默认域名，若要关闭原默认域名，必须同时指定另一个域名作为新的默认域名，如果新的默认域名是多域名，可以指定多域名列表中的任意一个。
 * @method void setNewDefaultServerDomain(string $NewDefaultServerDomain) 设置监听器下必须配置一个默认域名，若要关闭原默认域名，必须同时指定另一个域名作为新的默认域名，如果新的默认域名是多域名，可以指定多域名列表中的任意一个。
 * @method array getNewDomains() 获取要修改的新域名列表。NewDomain和NewDomains只能传一个。
 * @method void setNewDomains(array $NewDomains) 设置要修改的新域名列表。NewDomain和NewDomains只能传一个。
 * @method MultiCertInfo getMultiCertInfo() 获取域名相关的证书信息，注意，仅对启用SNI的监听器适用；支持同时传入多本算法类型不同的服务器证书，不可和Certificate 同时传入。
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) 设置域名相关的证书信息，注意，仅对启用SNI的监听器适用；支持同时传入多本算法类型不同的服务器证书，不可和Certificate 同时传入。
 */
class ModifyDomainAttributesRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡监听器ID，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
     */
    public $ListenerId;

    /**
     * @var string 域名（必须是已经创建的转发规则下的域名），如果是多域名，可以指定多域名列表中的任意一个，可以通过[DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
     */
    public $Domain;

    /**
     * @var string 要修改的新域名。NewDomain和NewDomains只能传一个。
     */
    public $NewDomain;

    /**
     * @var CertificateInput 域名相关的证书信息，注意，仅对启用SNI的监听器适用，不可和MultiCertInfo 同时传入。
     */
    public $Certificate;

    /**
     * @var boolean 是否开启HTTP2，注意，只有HTTPS域名才能开启HTTP2。
True: 开启HTTP2，Fasle: 不开启HTTP2。
     */
    public $Http2;

    /**
     * @var boolean 是否设为默认域名，注意，一个监听器下只能设置一个默认域名。
True: 设为默认域名，Fasle: 不设置为默认域名。
     */
    public $DefaultServer;

    /**
     * @var boolean 是否开启 QUIC，注意，只有 HTTPS 域名才能开启 QUIC。
True: 开启 QUIC，False: 不开启QUIC。
     */
    public $Quic;

    /**
     * @var string 监听器下必须配置一个默认域名，若要关闭原默认域名，必须同时指定另一个域名作为新的默认域名，如果新的默认域名是多域名，可以指定多域名列表中的任意一个。
     */
    public $NewDefaultServerDomain;

    /**
     * @var array 要修改的新域名列表。NewDomain和NewDomains只能传一个。
     */
    public $NewDomains;

    /**
     * @var MultiCertInfo 域名相关的证书信息，注意，仅对启用SNI的监听器适用；支持同时传入多本算法类型不同的服务器证书，不可和Certificate 同时传入。
     */
    public $MultiCertInfo;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
     * @param string $ListenerId 负载均衡监听器ID，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
     * @param string $Domain 域名（必须是已经创建的转发规则下的域名），如果是多域名，可以指定多域名列表中的任意一个，可以通过[DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
     * @param string $NewDomain 要修改的新域名。NewDomain和NewDomains只能传一个。
     * @param CertificateInput $Certificate 域名相关的证书信息，注意，仅对启用SNI的监听器适用，不可和MultiCertInfo 同时传入。
     * @param boolean $Http2 是否开启HTTP2，注意，只有HTTPS域名才能开启HTTP2。
True: 开启HTTP2，Fasle: 不开启HTTP2。
     * @param boolean $DefaultServer 是否设为默认域名，注意，一个监听器下只能设置一个默认域名。
True: 设为默认域名，Fasle: 不设置为默认域名。
     * @param boolean $Quic 是否开启 QUIC，注意，只有 HTTPS 域名才能开启 QUIC。
True: 开启 QUIC，False: 不开启QUIC。
     * @param string $NewDefaultServerDomain 监听器下必须配置一个默认域名，若要关闭原默认域名，必须同时指定另一个域名作为新的默认域名，如果新的默认域名是多域名，可以指定多域名列表中的任意一个。
     * @param array $NewDomains 要修改的新域名列表。NewDomain和NewDomains只能传一个。
     * @param MultiCertInfo $MultiCertInfo 域名相关的证书信息，注意，仅对启用SNI的监听器适用；支持同时传入多本算法类型不同的服务器证书，不可和Certificate 同时传入。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("NewDomain",$param) and $param["NewDomain"] !== null) {
            $this->NewDomain = $param["NewDomain"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("DefaultServer",$param) and $param["DefaultServer"] !== null) {
            $this->DefaultServer = $param["DefaultServer"];
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = $param["Quic"];
        }

        if (array_key_exists("NewDefaultServerDomain",$param) and $param["NewDefaultServerDomain"] !== null) {
            $this->NewDefaultServerDomain = $param["NewDefaultServerDomain"];
        }

        if (array_key_exists("NewDomains",$param) and $param["NewDomains"] !== null) {
            $this->NewDomains = $param["NewDomains"];
        }

        if (array_key_exists("MultiCertInfo",$param) and $param["MultiCertInfo"] !== null) {
            $this->MultiCertInfo = new MultiCertInfo();
            $this->MultiCertInfo->deserialize($param["MultiCertInfo"]);
        }
    }
}
