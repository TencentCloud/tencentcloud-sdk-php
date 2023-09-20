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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceCreateLoadBalancer请求参数结构体
 *
 * @method string getLoadBalancerType() 获取询价的负载均衡类型，OPEN为公网类型，INTERNAL为内网类型
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置询价的负载均衡类型，OPEN为公网类型，INTERNAL为内网类型
 * @method string getLoadBalancerChargeType() 获取询价的收费类型，POSTPAID为按量计费，"PREPAID"为预付费包年包月
 * @method void setLoadBalancerChargeType(string $LoadBalancerChargeType) 设置询价的收费类型，POSTPAID为按量计费，"PREPAID"为预付费包年包月
 * @method LBChargePrepaid getLoadBalancerChargePrepaid() 获取询价的收费周期
 * @method void setLoadBalancerChargePrepaid(LBChargePrepaid $LoadBalancerChargePrepaid) 设置询价的收费周期
 * @method InternetAccessible getInternetAccessible() 获取询价的网络计费方式
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置询价的网络计费方式
 * @method integer getGoodsNum() 获取询价的负载均衡实例个数，默认为1
 * @method void setGoodsNum(integer $GoodsNum) 设置询价的负载均衡实例个数，默认为1
 * @method string getZoneId() 获取指定可用区询价。如：ap-guangzhou-1
 * @method void setZoneId(string $ZoneId) 设置指定可用区询价。如：ap-guangzhou-1
 * @method string getSlaType() 获取包年包月询价时传性能容量型规格，如：clb.c3.small。按量付费询价时传SLA
 * @method void setSlaType(string $SlaType) 设置包年包月询价时传性能容量型规格，如：clb.c3.small。按量付费询价时传SLA
 * @method string getAddressIPVersion() 获取IP版本，可取值：IPV4、IPV6、IPv6FullChain，不区分大小写，默认值 IPV4。说明：取值为IPV6表示为IPV6 NAT64版本；取值为IPv6FullChain，表示为IPv6版本。
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置IP版本，可取值：IPV4、IPV6、IPv6FullChain，不区分大小写，默认值 IPV4。说明：取值为IPV6表示为IPV6 NAT64版本；取值为IPv6FullChain，表示为IPv6版本。
 * @method string getVipIsp() 获取仅适用于公网负载均衡。CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。
 * @method void setVipIsp(string $VipIsp) 设置仅适用于公网负载均衡。CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。
 */
class InquiryPriceCreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 询价的负载均衡类型，OPEN为公网类型，INTERNAL为内网类型
     */
    public $LoadBalancerType;

    /**
     * @var string 询价的收费类型，POSTPAID为按量计费，"PREPAID"为预付费包年包月
     */
    public $LoadBalancerChargeType;

    /**
     * @var LBChargePrepaid 询价的收费周期
     */
    public $LoadBalancerChargePrepaid;

    /**
     * @var InternetAccessible 询价的网络计费方式
     */
    public $InternetAccessible;

    /**
     * @var integer 询价的负载均衡实例个数，默认为1
     */
    public $GoodsNum;

    /**
     * @var string 指定可用区询价。如：ap-guangzhou-1
     */
    public $ZoneId;

    /**
     * @var string 包年包月询价时传性能容量型规格，如：clb.c3.small。按量付费询价时传SLA
     */
    public $SlaType;

    /**
     * @var string IP版本，可取值：IPV4、IPV6、IPv6FullChain，不区分大小写，默认值 IPV4。说明：取值为IPV6表示为IPV6 NAT64版本；取值为IPv6FullChain，表示为IPv6版本。
     */
    public $AddressIPVersion;

    /**
     * @var string 仅适用于公网负载均衡。CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。
     */
    public $VipIsp;

    /**
     * @param string $LoadBalancerType 询价的负载均衡类型，OPEN为公网类型，INTERNAL为内网类型
     * @param string $LoadBalancerChargeType 询价的收费类型，POSTPAID为按量计费，"PREPAID"为预付费包年包月
     * @param LBChargePrepaid $LoadBalancerChargePrepaid 询价的收费周期
     * @param InternetAccessible $InternetAccessible 询价的网络计费方式
     * @param integer $GoodsNum 询价的负载均衡实例个数，默认为1
     * @param string $ZoneId 指定可用区询价。如：ap-guangzhou-1
     * @param string $SlaType 包年包月询价时传性能容量型规格，如：clb.c3.small。按量付费询价时传SLA
     * @param string $AddressIPVersion IP版本，可取值：IPV4、IPV6、IPv6FullChain，不区分大小写，默认值 IPV4。说明：取值为IPV6表示为IPV6 NAT64版本；取值为IPv6FullChain，表示为IPv6版本。
     * @param string $VipIsp 仅适用于公网负载均衡。CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。
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
        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("LoadBalancerChargeType",$param) and $param["LoadBalancerChargeType"] !== null) {
            $this->LoadBalancerChargeType = $param["LoadBalancerChargeType"];
        }

        if (array_key_exists("LoadBalancerChargePrepaid",$param) and $param["LoadBalancerChargePrepaid"] !== null) {
            $this->LoadBalancerChargePrepaid = new LBChargePrepaid();
            $this->LoadBalancerChargePrepaid->deserialize($param["LoadBalancerChargePrepaid"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }
    }
}
