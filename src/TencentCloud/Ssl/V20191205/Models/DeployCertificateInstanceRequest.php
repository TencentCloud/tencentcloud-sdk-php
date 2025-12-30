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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeployCertificateInstance请求参数结构体
 *
 * @method string getCertificateId() 获取待部署的证书ID
 * @method void setCertificateId(string $CertificateId) 设置待部署的证书ID
 * @method array getInstanceIdList() 获取证书部署的实例列表，不同云资源类型如下
- clb：若监听器开启了SNI，则需要指定到域名LoadBalancerId|ListenerId|Domain，例：["lb-bid2fs4g|lbl-a8af11gs|tencent.com"]，若监听器未开启SNI或者为四层监听器，则指定到监听器，例：["lb-bid2fs4g|lbl-1c6rp5eo"]
- cdn：Domain|计费开关，例：["cdn2.tencent.com|off", "cdn.tencent.com|on"]
- ddos：InsId|Domain|VirtualPort，例：["bgpip-000001ms|tencent.com|443"]
- live：Domain，例：["live1.tencent.com", "live2.tencent.com"]
- vod：Domain， 例：["vod1.tencent.com", "vod2.tencent.com"]
- waf：Domain， 例：["waf1.tencent.com", "waf2.tencent.com"]
- apigateway：ServiceId|Domain， 例：["service-8sk7cqmd|apigw1.tencent.com", "service-8sk7cqmd|apigw2.minghuang.online"]
- teo：Domain， 例：["edgeone1.tencent.com", "edgeone2.tencent.com"]
- tke：ClusterId|NameSpace|SecretName， 例：["cls-42sa0ae0|default|test-tencent"]
- cos：Region|Bucket|Domain， 例：["ap-hongkong|ssl-server-1251810746|tencent.com"]
- lighthouse：Region|InstanceId|Domain， 例：["ap-shanghai|lhins-nh7lql34|tencent.com"]
- tse：GatewayId|CertificateId， 例：["gateway-s1da9151|fa61bc05-cc54-4eea-c932-24de52577372"]
- tcb：Type|Region|EnvId|Domain， 例：["AccessService|ap-shanghai|ceshi-4s5h0ymg11c839c7|tencent.com"]
- mqtt: InstanceId|CertId, 例：["mqtt-rdnwp7kb|gehs6jsx"]
- gaap: InstanceId|ListenerId 例：["ga-a3e4z3ae|lsr-a73amjob"]

 * @method void setInstanceIdList(array $InstanceIdList) 设置证书部署的实例列表，不同云资源类型如下
- clb：若监听器开启了SNI，则需要指定到域名LoadBalancerId|ListenerId|Domain，例：["lb-bid2fs4g|lbl-a8af11gs|tencent.com"]，若监听器未开启SNI或者为四层监听器，则指定到监听器，例：["lb-bid2fs4g|lbl-1c6rp5eo"]
- cdn：Domain|计费开关，例：["cdn2.tencent.com|off", "cdn.tencent.com|on"]
- ddos：InsId|Domain|VirtualPort，例：["bgpip-000001ms|tencent.com|443"]
- live：Domain，例：["live1.tencent.com", "live2.tencent.com"]
- vod：Domain， 例：["vod1.tencent.com", "vod2.tencent.com"]
- waf：Domain， 例：["waf1.tencent.com", "waf2.tencent.com"]
- apigateway：ServiceId|Domain， 例：["service-8sk7cqmd|apigw1.tencent.com", "service-8sk7cqmd|apigw2.minghuang.online"]
- teo：Domain， 例：["edgeone1.tencent.com", "edgeone2.tencent.com"]
- tke：ClusterId|NameSpace|SecretName， 例：["cls-42sa0ae0|default|test-tencent"]
- cos：Region|Bucket|Domain， 例：["ap-hongkong|ssl-server-1251810746|tencent.com"]
- lighthouse：Region|InstanceId|Domain， 例：["ap-shanghai|lhins-nh7lql34|tencent.com"]
- tse：GatewayId|CertificateId， 例：["gateway-s1da9151|fa61bc05-cc54-4eea-c932-24de52577372"]
- tcb：Type|Region|EnvId|Domain， 例：["AccessService|ap-shanghai|ceshi-4s5h0ymg11c839c7|tencent.com"]
- mqtt: InstanceId|CertId, 例：["mqtt-rdnwp7kb|gehs6jsx"]
- gaap: InstanceId|ListenerId 例：["ga-a3e4z3ae|lsr-a73amjob"]

 * @method string getResourceType() 获取证书部署云资源支持的云资源类型， 不传则默认部署clb：
- clb
- cdn
- ddos
- live
- vod
- waf
- apigateway
- teo
- tke
- cos
- lighthouse
- tse
- tcb
- mqtt
<dx-alert infotype="explain" title="">当云资源类型传入clb、waf、apigateway、cos、lighthouse、tke、tse、tcb、mqtt 时，公共参数Region必传。</dx-alert>
 * @method void setResourceType(string $ResourceType) 设置证书部署云资源支持的云资源类型， 不传则默认部署clb：
- clb
- cdn
- ddos
- live
- vod
- waf
- apigateway
- teo
- tke
- cos
- lighthouse
- tse
- tcb
- mqtt
<dx-alert infotype="explain" title="">当云资源类型传入clb、waf、apigateway、cos、lighthouse、tke、tse、tcb、mqtt 时，公共参数Region必传。</dx-alert>
 * @method integer getStatus() 获取部署云资源状态：
云直播：
-1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
 * @method void setStatus(integer $Status) 设置部署云资源状态：
云直播：
-1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
 * @method integer getIsCache() 获取是否查询缓存，1：是； 0：否， 默认为查询缓存，默认缓存半小时
 * @method void setIsCache(integer $IsCache) 设置是否查询缓存，1：是； 0：否， 默认为查询缓存，默认缓存半小时
 */
class DeployCertificateInstanceRequest extends AbstractModel
{
    /**
     * @var string 待部署的证书ID
     */
    public $CertificateId;

    /**
     * @var array 证书部署的实例列表，不同云资源类型如下
- clb：若监听器开启了SNI，则需要指定到域名LoadBalancerId|ListenerId|Domain，例：["lb-bid2fs4g|lbl-a8af11gs|tencent.com"]，若监听器未开启SNI或者为四层监听器，则指定到监听器，例：["lb-bid2fs4g|lbl-1c6rp5eo"]
- cdn：Domain|计费开关，例：["cdn2.tencent.com|off", "cdn.tencent.com|on"]
- ddos：InsId|Domain|VirtualPort，例：["bgpip-000001ms|tencent.com|443"]
- live：Domain，例：["live1.tencent.com", "live2.tencent.com"]
- vod：Domain， 例：["vod1.tencent.com", "vod2.tencent.com"]
- waf：Domain， 例：["waf1.tencent.com", "waf2.tencent.com"]
- apigateway：ServiceId|Domain， 例：["service-8sk7cqmd|apigw1.tencent.com", "service-8sk7cqmd|apigw2.minghuang.online"]
- teo：Domain， 例：["edgeone1.tencent.com", "edgeone2.tencent.com"]
- tke：ClusterId|NameSpace|SecretName， 例：["cls-42sa0ae0|default|test-tencent"]
- cos：Region|Bucket|Domain， 例：["ap-hongkong|ssl-server-1251810746|tencent.com"]
- lighthouse：Region|InstanceId|Domain， 例：["ap-shanghai|lhins-nh7lql34|tencent.com"]
- tse：GatewayId|CertificateId， 例：["gateway-s1da9151|fa61bc05-cc54-4eea-c932-24de52577372"]
- tcb：Type|Region|EnvId|Domain， 例：["AccessService|ap-shanghai|ceshi-4s5h0ymg11c839c7|tencent.com"]
- mqtt: InstanceId|CertId, 例：["mqtt-rdnwp7kb|gehs6jsx"]
- gaap: InstanceId|ListenerId 例：["ga-a3e4z3ae|lsr-a73amjob"]

     */
    public $InstanceIdList;

    /**
     * @var string 证书部署云资源支持的云资源类型， 不传则默认部署clb：
- clb
- cdn
- ddos
- live
- vod
- waf
- apigateway
- teo
- tke
- cos
- lighthouse
- tse
- tcb
- mqtt
<dx-alert infotype="explain" title="">当云资源类型传入clb、waf、apigateway、cos、lighthouse、tke、tse、tcb、mqtt 时，公共参数Region必传。</dx-alert>
     */
    public $ResourceType;

    /**
     * @var integer 部署云资源状态：
云直播：
-1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
     */
    public $Status;

    /**
     * @var integer 是否查询缓存，1：是； 0：否， 默认为查询缓存，默认缓存半小时
     */
    public $IsCache;

    /**
     * @param string $CertificateId 待部署的证书ID
     * @param array $InstanceIdList 证书部署的实例列表，不同云资源类型如下
- clb：若监听器开启了SNI，则需要指定到域名LoadBalancerId|ListenerId|Domain，例：["lb-bid2fs4g|lbl-a8af11gs|tencent.com"]，若监听器未开启SNI或者为四层监听器，则指定到监听器，例：["lb-bid2fs4g|lbl-1c6rp5eo"]
- cdn：Domain|计费开关，例：["cdn2.tencent.com|off", "cdn.tencent.com|on"]
- ddos：InsId|Domain|VirtualPort，例：["bgpip-000001ms|tencent.com|443"]
- live：Domain，例：["live1.tencent.com", "live2.tencent.com"]
- vod：Domain， 例：["vod1.tencent.com", "vod2.tencent.com"]
- waf：Domain， 例：["waf1.tencent.com", "waf2.tencent.com"]
- apigateway：ServiceId|Domain， 例：["service-8sk7cqmd|apigw1.tencent.com", "service-8sk7cqmd|apigw2.minghuang.online"]
- teo：Domain， 例：["edgeone1.tencent.com", "edgeone2.tencent.com"]
- tke：ClusterId|NameSpace|SecretName， 例：["cls-42sa0ae0|default|test-tencent"]
- cos：Region|Bucket|Domain， 例：["ap-hongkong|ssl-server-1251810746|tencent.com"]
- lighthouse：Region|InstanceId|Domain， 例：["ap-shanghai|lhins-nh7lql34|tencent.com"]
- tse：GatewayId|CertificateId， 例：["gateway-s1da9151|fa61bc05-cc54-4eea-c932-24de52577372"]
- tcb：Type|Region|EnvId|Domain， 例：["AccessService|ap-shanghai|ceshi-4s5h0ymg11c839c7|tencent.com"]
- mqtt: InstanceId|CertId, 例：["mqtt-rdnwp7kb|gehs6jsx"]
- gaap: InstanceId|ListenerId 例：["ga-a3e4z3ae|lsr-a73amjob"]

     * @param string $ResourceType 证书部署云资源支持的云资源类型， 不传则默认部署clb：
- clb
- cdn
- ddos
- live
- vod
- waf
- apigateway
- teo
- tke
- cos
- lighthouse
- tse
- tcb
- mqtt
<dx-alert infotype="explain" title="">当云资源类型传入clb、waf、apigateway、cos、lighthouse、tke、tse、tcb、mqtt 时，公共参数Region必传。</dx-alert>
     * @param integer $Status 部署云资源状态：
云直播：
-1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
     * @param integer $IsCache 是否查询缓存，1：是； 0：否， 默认为查询缓存，默认缓存半小时
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsCache",$param) and $param["IsCache"] !== null) {
            $this->IsCache = $param["IsCache"];
        }
    }
}
