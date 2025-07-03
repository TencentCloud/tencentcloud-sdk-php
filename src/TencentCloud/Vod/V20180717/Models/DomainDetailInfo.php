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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名信息
 *
 * @method string getDomain() 获取域名名称。
 * @method void setDomain(string $Domain) 设置域名名称。
 * @method array getAccelerateAreaInfos() 获取加速地区信息。
 * @method void setAccelerateAreaInfos(array $AccelerateAreaInfos) 设置加速地区信息。
 * @method string getDeployStatus() 获取部署状态，取值有：
<li>Online：上线；</li>
<li>Deploying：部署中；</li>
<li>Locked: 锁定中，出现该状态时，无法对该域名进行部署变更。</li>
 * @method void setDeployStatus(string $DeployStatus) 设置部署状态，取值有：
<li>Online：上线；</li>
<li>Deploying：部署中；</li>
<li>Locked: 锁定中，出现该状态时，无法对该域名进行部署变更。</li>
 * @method DomainHTTPSConfig getHTTPSConfig() 获取HTTPS 配置信息。
 * @method void setHTTPSConfig(DomainHTTPSConfig $HTTPSConfig) 设置HTTPS 配置信息。
 * @method UrlSignatureAuthPolicy getUrlSignatureAuthPolicy() 获取[Key 防盗链](https://cloud.tencent.com/document/product/266/14047)配置信息。
 * @method void setUrlSignatureAuthPolicy(UrlSignatureAuthPolicy $UrlSignatureAuthPolicy) 设置[Key 防盗链](https://cloud.tencent.com/document/product/266/14047)配置信息。
 * @method RefererAuthPolicy getRefererAuthPolicy() 获取[Referer 防盗链](https://cloud.tencent.com/document/product/266/14046)配置信息。
 * @method void setRefererAuthPolicy(RefererAuthPolicy $RefererAuthPolicy) 设置[Referer 防盗链](https://cloud.tencent.com/document/product/266/14046)配置信息。
 * @method string getCreateTime() 获取域名添加到腾讯云点播系统中的时间。
<li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
 * @method void setCreateTime(string $CreateTime) 设置域名添加到腾讯云点播系统中的时间。
<li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
 * @method DomainQUICConfig getQUICConfig() 获取域名 QUIC 配置信息。
 * @method void setQUICConfig(DomainQUICConfig $QUICConfig) 设置域名 QUIC 配置信息。
 * @method IPFilterPolicy getIPFilterPolicy() 获取IP 访问限制配置信息。
 * @method void setIPFilterPolicy(IPFilterPolicy $IPFilterPolicy) 设置IP 访问限制配置信息。
 * @method string getType() 获取域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li>
 * @method void setType(string $Type) 设置域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li>
 */
class DomainDetailInfo extends AbstractModel
{
    /**
     * @var string 域名名称。
     */
    public $Domain;

    /**
     * @var array 加速地区信息。
     */
    public $AccelerateAreaInfos;

    /**
     * @var string 部署状态，取值有：
<li>Online：上线；</li>
<li>Deploying：部署中；</li>
<li>Locked: 锁定中，出现该状态时，无法对该域名进行部署变更。</li>
     */
    public $DeployStatus;

    /**
     * @var DomainHTTPSConfig HTTPS 配置信息。
     */
    public $HTTPSConfig;

    /**
     * @var UrlSignatureAuthPolicy [Key 防盗链](https://cloud.tencent.com/document/product/266/14047)配置信息。
     */
    public $UrlSignatureAuthPolicy;

    /**
     * @var RefererAuthPolicy [Referer 防盗链](https://cloud.tencent.com/document/product/266/14046)配置信息。
     */
    public $RefererAuthPolicy;

    /**
     * @var string 域名添加到腾讯云点播系统中的时间。
<li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
     */
    public $CreateTime;

    /**
     * @var DomainQUICConfig 域名 QUIC 配置信息。
     */
    public $QUICConfig;

    /**
     * @var IPFilterPolicy IP 访问限制配置信息。
     */
    public $IPFilterPolicy;

    /**
     * @var string 域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li>
     */
    public $Type;

    /**
     * @param string $Domain 域名名称。
     * @param array $AccelerateAreaInfos 加速地区信息。
     * @param string $DeployStatus 部署状态，取值有：
<li>Online：上线；</li>
<li>Deploying：部署中；</li>
<li>Locked: 锁定中，出现该状态时，无法对该域名进行部署变更。</li>
     * @param DomainHTTPSConfig $HTTPSConfig HTTPS 配置信息。
     * @param UrlSignatureAuthPolicy $UrlSignatureAuthPolicy [Key 防盗链](https://cloud.tencent.com/document/product/266/14047)配置信息。
     * @param RefererAuthPolicy $RefererAuthPolicy [Referer 防盗链](https://cloud.tencent.com/document/product/266/14046)配置信息。
     * @param string $CreateTime 域名添加到腾讯云点播系统中的时间。
<li>格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。</li>
     * @param DomainQUICConfig $QUICConfig 域名 QUIC 配置信息。
     * @param IPFilterPolicy $IPFilterPolicy IP 访问限制配置信息。
     * @param string $Type 域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li>
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

        if (array_key_exists("AccelerateAreaInfos",$param) and $param["AccelerateAreaInfos"] !== null) {
            $this->AccelerateAreaInfos = [];
            foreach ($param["AccelerateAreaInfos"] as $key => $value){
                $obj = new AccelerateAreaInfo();
                $obj->deserialize($value);
                array_push($this->AccelerateAreaInfos, $obj);
            }
        }

        if (array_key_exists("DeployStatus",$param) and $param["DeployStatus"] !== null) {
            $this->DeployStatus = $param["DeployStatus"];
        }

        if (array_key_exists("HTTPSConfig",$param) and $param["HTTPSConfig"] !== null) {
            $this->HTTPSConfig = new DomainHTTPSConfig();
            $this->HTTPSConfig->deserialize($param["HTTPSConfig"]);
        }

        if (array_key_exists("UrlSignatureAuthPolicy",$param) and $param["UrlSignatureAuthPolicy"] !== null) {
            $this->UrlSignatureAuthPolicy = new UrlSignatureAuthPolicy();
            $this->UrlSignatureAuthPolicy->deserialize($param["UrlSignatureAuthPolicy"]);
        }

        if (array_key_exists("RefererAuthPolicy",$param) and $param["RefererAuthPolicy"] !== null) {
            $this->RefererAuthPolicy = new RefererAuthPolicy();
            $this->RefererAuthPolicy->deserialize($param["RefererAuthPolicy"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("QUICConfig",$param) and $param["QUICConfig"] !== null) {
            $this->QUICConfig = new DomainQUICConfig();
            $this->QUICConfig->deserialize($param["QUICConfig"]);
        }

        if (array_key_exists("IPFilterPolicy",$param) and $param["IPFilterPolicy"] !== null) {
            $this->IPFilterPolicy = new IPFilterPolicy();
            $this->IPFilterPolicy->deserialize($param["IPFilterPolicy"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
