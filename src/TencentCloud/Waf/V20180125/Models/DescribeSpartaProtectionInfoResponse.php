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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSpartaProtectionInfo返回参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainId() 获取域名ID
 * @method void setDomainId(string $DomainId) 设置域名ID
 * @method string getCname() 获取cname取值
 * @method void setCname(string $Cname) 设置cname取值
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method array getSrcList() 获取源IP地址列表
 * @method void setSrcList(array $SrcList) 设置源IP地址列表
 * @method string getCertType() 获取证书类型
 * @method void setCertType(string $CertType) 设置证书类型
 * @method string getCert() 获取证书
 * @method void setCert(string $Cert) 设置证书
 * @method string getPrivateKey() 获取私有密钥
 * @method void setPrivateKey(string $PrivateKey) 设置私有密钥
 * @method string getSslid() 获取ssl的id
 * @method void setSslid(string $Sslid) 设置ssl的id
 * @method string getIsCdn() 获取是否是cdn
 * @method void setIsCdn(string $IsCdn) 设置是否是cdn
 * @method array getGrayAreas() 获取灰度区域列表
 * @method void setGrayAreas(array $GrayAreas) 设置灰度区域列表
 * @method string getEngine() 获取引擎
 * @method void setEngine(string $Engine) 设置引擎
 * @method string getHttpsRewrite() 获取HTTPS重写
 * @method void setHttpsRewrite(string $HttpsRewrite) 设置HTTPS重写
 * @method string getUpstreamType() 获取upstreamType取值
 * @method void setUpstreamType(string $UpstreamType) 设置upstreamType取值
 * @method string getUpstreamDomain() 获取upstreamDomain取值
 * @method void setUpstreamDomain(string $UpstreamDomain) 设置upstreamDomain取值
 * @method string getUpstreamScheme() 获取upstreamScheme取值
 * @method void setUpstreamScheme(string $UpstreamScheme) 设置upstreamScheme取值
 * @method string getIsHttp2() 获取是否是HTTP2
 * @method void setIsHttp2(string $IsHttp2) 设置是否是HTTP2
 * @method string getIsWebsocket() 获取是否含有websocket
 * @method void setIsWebsocket(string $IsWebsocket) 设置是否含有websocket
 * @method string getLoadBalance() 获取loadBalance信息
 * @method void setLoadBalance(string $LoadBalance) 设置loadBalance信息
 * @method string getHttpsUpstreamPort() 获取httpsUpstreamPort取值
 * @method void setHttpsUpstreamPort(string $HttpsUpstreamPort) 设置httpsUpstreamPort取值
 * @method array getPorts() 获取port信息
 * @method void setPorts(array $Ports) 设置port信息
 * @method string getIsGray() 获取是否灰度
 * @method void setIsGray(string $IsGray) 设置是否灰度
 * @method string getMode() 获取模式
 * @method void setMode(string $Mode) 设置模式
 * @method string getLevel() 获取防御等级,100,200,300
 * @method void setLevel(string $Level) 设置防御等级,100,200,300
 * @method string getIsKeepAlive() 获取与源站是否保持长连接
 * @method void setIsKeepAlive(string $IsKeepAlive) 设置与源站是否保持长连接
 * @method string getAnycast() 获取0：BGP 1：Anycast
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnycast(string $Anycast) 设置0：BGP 1：Anycast
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSpartaProtectionInfoResponse extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名ID
     */
    public $DomainId;

    /**
     * @var string cname取值
     */
    public $Cname;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var array 源IP地址列表
     */
    public $SrcList;

    /**
     * @var string 证书类型
     */
    public $CertType;

    /**
     * @var string 证书
     */
    public $Cert;

    /**
     * @var string 私有密钥
     */
    public $PrivateKey;

    /**
     * @var string ssl的id
     */
    public $Sslid;

    /**
     * @var string 是否是cdn
     */
    public $IsCdn;

    /**
     * @var array 灰度区域列表
     */
    public $GrayAreas;

    /**
     * @var string 引擎
     */
    public $Engine;

    /**
     * @var string HTTPS重写
     */
    public $HttpsRewrite;

    /**
     * @var string upstreamType取值
     */
    public $UpstreamType;

    /**
     * @var string upstreamDomain取值
     */
    public $UpstreamDomain;

    /**
     * @var string upstreamScheme取值
     */
    public $UpstreamScheme;

    /**
     * @var string 是否是HTTP2
     */
    public $IsHttp2;

    /**
     * @var string 是否含有websocket
     */
    public $IsWebsocket;

    /**
     * @var string loadBalance信息
     */
    public $LoadBalance;

    /**
     * @var string httpsUpstreamPort取值
     */
    public $HttpsUpstreamPort;

    /**
     * @var array port信息
     */
    public $Ports;

    /**
     * @var string 是否灰度
     */
    public $IsGray;

    /**
     * @var string 模式
     */
    public $Mode;

    /**
     * @var string 防御等级,100,200,300
     */
    public $Level;

    /**
     * @var string 与源站是否保持长连接
     */
    public $IsKeepAlive;

    /**
     * @var string 0：BGP 1：Anycast
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Anycast;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 域名
     * @param string $DomainId 域名ID
     * @param string $Cname cname取值
     * @param string $Status 状态
     * @param array $SrcList 源IP地址列表
     * @param string $CertType 证书类型
     * @param string $Cert 证书
     * @param string $PrivateKey 私有密钥
     * @param string $Sslid ssl的id
     * @param string $IsCdn 是否是cdn
     * @param array $GrayAreas 灰度区域列表
     * @param string $Engine 引擎
     * @param string $HttpsRewrite HTTPS重写
     * @param string $UpstreamType upstreamType取值
     * @param string $UpstreamDomain upstreamDomain取值
     * @param string $UpstreamScheme upstreamScheme取值
     * @param string $IsHttp2 是否是HTTP2
     * @param string $IsWebsocket 是否含有websocket
     * @param string $LoadBalance loadBalance信息
     * @param string $HttpsUpstreamPort httpsUpstreamPort取值
     * @param array $Ports port信息
     * @param string $IsGray 是否灰度
     * @param string $Mode 模式
     * @param string $Level 防御等级,100,200,300
     * @param string $IsKeepAlive 与源站是否保持长连接
     * @param string $Anycast 0：BGP 1：Anycast
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SrcList",$param) and $param["SrcList"] !== null) {
            $this->SrcList = $param["SrcList"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("Sslid",$param) and $param["Sslid"] !== null) {
            $this->Sslid = $param["Sslid"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("GrayAreas",$param) and $param["GrayAreas"] !== null) {
            $this->GrayAreas = $param["GrayAreas"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("HttpsRewrite",$param) and $param["HttpsRewrite"] !== null) {
            $this->HttpsRewrite = $param["HttpsRewrite"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("UpstreamDomain",$param) and $param["UpstreamDomain"] !== null) {
            $this->UpstreamDomain = $param["UpstreamDomain"];
        }

        if (array_key_exists("UpstreamScheme",$param) and $param["UpstreamScheme"] !== null) {
            $this->UpstreamScheme = $param["UpstreamScheme"];
        }

        if (array_key_exists("IsHttp2",$param) and $param["IsHttp2"] !== null) {
            $this->IsHttp2 = $param["IsHttp2"];
        }

        if (array_key_exists("IsWebsocket",$param) and $param["IsWebsocket"] !== null) {
            $this->IsWebsocket = $param["IsWebsocket"];
        }

        if (array_key_exists("LoadBalance",$param) and $param["LoadBalance"] !== null) {
            $this->LoadBalance = $param["LoadBalance"];
        }

        if (array_key_exists("HttpsUpstreamPort",$param) and $param["HttpsUpstreamPort"] !== null) {
            $this->HttpsUpstreamPort = $param["HttpsUpstreamPort"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortItem();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("IsGray",$param) and $param["IsGray"] !== null) {
            $this->IsGray = $param["IsGray"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("IsKeepAlive",$param) and $param["IsKeepAlive"] !== null) {
            $this->IsKeepAlive = $param["IsKeepAlive"];
        }

        if (array_key_exists("Anycast",$param) and $param["Anycast"] !== null) {
            $this->Anycast = $param["Anycast"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
