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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述配额信息
 *
 * @method string getQuotaId() 获取配额名称，取值范围：
- `TOTAL_EIP_QUOTA`：用户当前地域下EIP的配额数；
- `DAILY_EIP_APPLY`：用户当前地域下今日申购次数；
- `DAILY_PUBLIC_IP_ASSIGN`：用户当前地域下，重新分配公网 IP次数；
- `TOTAL_EIP6_QUOTA`：用户当前地域下，传统弹性公网IPv6的配额数；
- `BGP_EIPv6_QUOTA`：用户当前地域下，可申请的 BGP 弹性公网IPv6 的配额数；
- `SINGLEISP_EIPv6_QUOTA`：用户当前地域下，可申请的静态单线弹性公网IPv6 的配额数；
- `TOTAL_BANDWIDTHPKG_QUOTA`：用户当前地域下，可申请的带宽包总配额；
- `PRIMARY_TRAFFIC_SINGLE_BWP_QUOTA`：用户当前地域下，可申请的静态单线主流量带宽包配额数；
- `PRIMARY_TRAFFIC_BGP_BWP_QUOTA`：用户当前地域下，可申请的BGP主流量带宽包配额数；
- `BandwidthGuaranteedRatio`：用户当前地域下，保底带宽包默认保底比例；
- `TezBandwidthGuaranteedRatio`：用户当前地域下，边缘可用区保底带宽包默认保底比例；
 * @method void setQuotaId(string $QuotaId) 设置配额名称，取值范围：
- `TOTAL_EIP_QUOTA`：用户当前地域下EIP的配额数；
- `DAILY_EIP_APPLY`：用户当前地域下今日申购次数；
- `DAILY_PUBLIC_IP_ASSIGN`：用户当前地域下，重新分配公网 IP次数；
- `TOTAL_EIP6_QUOTA`：用户当前地域下，传统弹性公网IPv6的配额数；
- `BGP_EIPv6_QUOTA`：用户当前地域下，可申请的 BGP 弹性公网IPv6 的配额数；
- `SINGLEISP_EIPv6_QUOTA`：用户当前地域下，可申请的静态单线弹性公网IPv6 的配额数；
- `TOTAL_BANDWIDTHPKG_QUOTA`：用户当前地域下，可申请的带宽包总配额；
- `PRIMARY_TRAFFIC_SINGLE_BWP_QUOTA`：用户当前地域下，可申请的静态单线主流量带宽包配额数；
- `PRIMARY_TRAFFIC_BGP_BWP_QUOTA`：用户当前地域下，可申请的BGP主流量带宽包配额数；
- `BandwidthGuaranteedRatio`：用户当前地域下，保底带宽包默认保底比例；
- `TezBandwidthGuaranteedRatio`：用户当前地域下，边缘可用区保底带宽包默认保底比例；
 * @method integer getQuotaCurrent() 获取当前数量
 * @method void setQuotaCurrent(integer $QuotaCurrent) 设置当前数量
 * @method integer getQuotaLimit() 获取配额数量
 * @method void setQuotaLimit(integer $QuotaLimit) 设置配额数量
 * @method string getQuotaGroup() 获取配额所属的网络组
 * @method void setQuotaGroup(string $QuotaGroup) 设置配额所属的网络组
 */
class Quota extends AbstractModel
{
    /**
     * @var string 配额名称，取值范围：
- `TOTAL_EIP_QUOTA`：用户当前地域下EIP的配额数；
- `DAILY_EIP_APPLY`：用户当前地域下今日申购次数；
- `DAILY_PUBLIC_IP_ASSIGN`：用户当前地域下，重新分配公网 IP次数；
- `TOTAL_EIP6_QUOTA`：用户当前地域下，传统弹性公网IPv6的配额数；
- `BGP_EIPv6_QUOTA`：用户当前地域下，可申请的 BGP 弹性公网IPv6 的配额数；
- `SINGLEISP_EIPv6_QUOTA`：用户当前地域下，可申请的静态单线弹性公网IPv6 的配额数；
- `TOTAL_BANDWIDTHPKG_QUOTA`：用户当前地域下，可申请的带宽包总配额；
- `PRIMARY_TRAFFIC_SINGLE_BWP_QUOTA`：用户当前地域下，可申请的静态单线主流量带宽包配额数；
- `PRIMARY_TRAFFIC_BGP_BWP_QUOTA`：用户当前地域下，可申请的BGP主流量带宽包配额数；
- `BandwidthGuaranteedRatio`：用户当前地域下，保底带宽包默认保底比例；
- `TezBandwidthGuaranteedRatio`：用户当前地域下，边缘可用区保底带宽包默认保底比例；
     */
    public $QuotaId;

    /**
     * @var integer 当前数量
     */
    public $QuotaCurrent;

    /**
     * @var integer 配额数量
     */
    public $QuotaLimit;

    /**
     * @var string 配额所属的网络组
     */
    public $QuotaGroup;

    /**
     * @param string $QuotaId 配额名称，取值范围：
- `TOTAL_EIP_QUOTA`：用户当前地域下EIP的配额数；
- `DAILY_EIP_APPLY`：用户当前地域下今日申购次数；
- `DAILY_PUBLIC_IP_ASSIGN`：用户当前地域下，重新分配公网 IP次数；
- `TOTAL_EIP6_QUOTA`：用户当前地域下，传统弹性公网IPv6的配额数；
- `BGP_EIPv6_QUOTA`：用户当前地域下，可申请的 BGP 弹性公网IPv6 的配额数；
- `SINGLEISP_EIPv6_QUOTA`：用户当前地域下，可申请的静态单线弹性公网IPv6 的配额数；
- `TOTAL_BANDWIDTHPKG_QUOTA`：用户当前地域下，可申请的带宽包总配额；
- `PRIMARY_TRAFFIC_SINGLE_BWP_QUOTA`：用户当前地域下，可申请的静态单线主流量带宽包配额数；
- `PRIMARY_TRAFFIC_BGP_BWP_QUOTA`：用户当前地域下，可申请的BGP主流量带宽包配额数；
- `BandwidthGuaranteedRatio`：用户当前地域下，保底带宽包默认保底比例；
- `TezBandwidthGuaranteedRatio`：用户当前地域下，边缘可用区保底带宽包默认保底比例；
     * @param integer $QuotaCurrent 当前数量
     * @param integer $QuotaLimit 配额数量
     * @param string $QuotaGroup 配额所属的网络组
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
        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("QuotaCurrent",$param) and $param["QuotaCurrent"] !== null) {
            $this->QuotaCurrent = $param["QuotaCurrent"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }

        if (array_key_exists("QuotaGroup",$param) and $param["QuotaGroup"] !== null) {
            $this->QuotaGroup = $param["QuotaGroup"];
        }
    }
}
