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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名信息
 *
 * @method string getDomain() 获取<p>域名名称。</p>
 * @method void setDomain(string $Domain) 设置<p>域名名称。</p>
 * @method array getAccelerateAreaInfos() 获取<p>加速地区信息。</p>
 * @method void setAccelerateAreaInfos(array $AccelerateAreaInfos) 设置<p>加速地区信息。</p>
 * @method string getDeployStatus() 获取<p>部署状态，取值有：</p><li>Online：上线；</li><li>Deploying：部署中；</li><li>Locked: 锁定中，出现该状态时，无法对该域名进行部署变更。</li>
 * @method void setDeployStatus(string $DeployStatus) 设置<p>部署状态，取值有：</p><li>Online：上线；</li><li>Deploying：部署中；</li><li>Locked: 锁定中，出现该状态时，无法对该域名进行部署变更。</li>
 * @method DomainHTTPSConfig getHTTPSConfig() 获取<p>HTTPS 配置信息。</p>
 * @method void setHTTPSConfig(DomainHTTPSConfig $HTTPSConfig) 设置<p>HTTPS 配置信息。</p>
 * @method UrlSignatureAuthPolicy getUrlSignatureAuthPolicy() 获取<p><a href="https://cloud.tencent.com/document/product/266/14047">Key 防盗链</a>配置信息。</p>
 * @method void setUrlSignatureAuthPolicy(UrlSignatureAuthPolicy $UrlSignatureAuthPolicy) 设置<p><a href="https://cloud.tencent.com/document/product/266/14047">Key 防盗链</a>配置信息。</p>
 * @method RefererAuthPolicy getRefererAuthPolicy() 获取<p><a href="https://cloud.tencent.com/document/product/266/14046">Referer 防盗链</a>配置信息。</p>
 * @method void setRefererAuthPolicy(RefererAuthPolicy $RefererAuthPolicy) 设置<p><a href="https://cloud.tencent.com/document/product/266/14046">Referer 防盗链</a>配置信息。</p>
 * @method string getCreateTime() 获取<p>域名添加到腾讯云点播系统中的时间。<li>格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></p>
 * @method void setCreateTime(string $CreateTime) 设置<p>域名添加到腾讯云点播系统中的时间。<li>格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></p>
 * @method DomainQUICConfig getQUICConfig() 获取<p>域名 QUIC 配置信息。</p>
 * @method void setQUICConfig(DomainQUICConfig $QUICConfig) 设置<p>域名 QUIC 配置信息。</p>
 * @method IPFilterPolicy getIPFilterPolicy() 获取<p>IP 访问限制配置信息。</p>
 * @method void setIPFilterPolicy(IPFilterPolicy $IPFilterPolicy) 设置<p>IP 访问限制配置信息。</p>
 * @method string getType() 获取<p>域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li></p>
 * @method void setType(string $Type) 设置<p>域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li></p>
 */
class DomainDetailInfo extends AbstractModel
{
    /**
     * @var string <p>域名名称。</p>
     */
    public $Domain;

    /**
     * @var array <p>加速地区信息。</p>
     */
    public $AccelerateAreaInfos;

    /**
     * @var string <p>部署状态，取值有：</p><li>Online：上线；</li><li>Deploying：部署中；</li><li>Locked: 锁定中，出现该状态时，无法对该域名进行部署变更。</li>
     */
    public $DeployStatus;

    /**
     * @var DomainHTTPSConfig <p>HTTPS 配置信息。</p>
     */
    public $HTTPSConfig;

    /**
     * @var UrlSignatureAuthPolicy <p><a href="https://cloud.tencent.com/document/product/266/14047">Key 防盗链</a>配置信息。</p>
     */
    public $UrlSignatureAuthPolicy;

    /**
     * @var RefererAuthPolicy <p><a href="https://cloud.tencent.com/document/product/266/14046">Referer 防盗链</a>配置信息。</p>
     */
    public $RefererAuthPolicy;

    /**
     * @var string <p>域名添加到腾讯云点播系统中的时间。<li>格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></p>
     */
    public $CreateTime;

    /**
     * @var DomainQUICConfig <p>域名 QUIC 配置信息。</p>
     */
    public $QUICConfig;

    /**
     * @var IPFilterPolicy <p>IP 访问限制配置信息。</p>
     */
    public $IPFilterPolicy;

    /**
     * @var string <p>域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li></p>
     */
    public $Type;

    /**
     * @param string $Domain <p>域名名称。</p>
     * @param array $AccelerateAreaInfos <p>加速地区信息。</p>
     * @param string $DeployStatus <p>部署状态，取值有：</p><li>Online：上线；</li><li>Deploying：部署中；</li><li>Locked: 锁定中，出现该状态时，无法对该域名进行部署变更。</li>
     * @param DomainHTTPSConfig $HTTPSConfig <p>HTTPS 配置信息。</p>
     * @param UrlSignatureAuthPolicy $UrlSignatureAuthPolicy <p><a href="https://cloud.tencent.com/document/product/266/14047">Key 防盗链</a>配置信息。</p>
     * @param RefererAuthPolicy $RefererAuthPolicy <p><a href="https://cloud.tencent.com/document/product/266/14046">Referer 防盗链</a>配置信息。</p>
     * @param string $CreateTime <p>域名添加到腾讯云点播系统中的时间。<li>格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></p>
     * @param DomainQUICConfig $QUICConfig <p>域名 QUIC 配置信息。</p>
     * @param IPFilterPolicy $IPFilterPolicy <p>IP 访问限制配置信息。</p>
     * @param string $Type <p>域名类型，取值有： <li>VOD：使用 VOD 产品分发的域名；</li> <li>EdgeOne：使用 EdgeOne 产品分发的域名。</li></p>
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
