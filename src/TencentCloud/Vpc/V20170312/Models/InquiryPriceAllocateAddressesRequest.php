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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceAllocateAddresses请求参数结构体
 *
 * @method string getInternetChargeType() 获取EIP计费方式。
<ul style="margin:0"><li>账号为标准账户类型的用户，可选值：<ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li>
<li>BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费</li>
<li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li>
</ul></li>
</ul>
 * @method void setInternetChargeType(string $InternetChargeType) 设置EIP计费方式。
<ul style="margin:0"><li>账号为标准账户类型的用户，可选值：<ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li>
<li>BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费</li>
<li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li>
</ul></li>
</ul>
 * @method integer getInternetMaxBandwidthOut() 获取EIP出带宽上限，单位：Mbps。
<ul style="margin:0"><li>账号为标准账户类型的用户，可选值范围取决于EIP计费方式：<ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li>
<li>BANDWIDTH_PREPAID_BY_MONTH：1 Mbps 至 200 Mbps</li>
<li>TRAFFIC_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li></ul>默认值：1 Mbps。</li>
<li>账号为传统账户类型的用户，EIP出带宽上限取决于与其绑定的实例的公网出带宽上限，无需传递此参数。</li></ul>

 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置EIP出带宽上限，单位：Mbps。
<ul style="margin:0"><li>账号为标准账户类型的用户，可选值范围取决于EIP计费方式：<ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li>
<li>BANDWIDTH_PREPAID_BY_MONTH：1 Mbps 至 200 Mbps</li>
<li>TRAFFIC_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li></ul>默认值：1 Mbps。</li>
<li>账号为传统账户类型的用户，EIP出带宽上限取决于与其绑定的实例的公网出带宽上限，无需传递此参数。</li></ul>

 * @method AddressChargePrepaid getAddressChargePrepaid() 获取包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递
 * @method void setAddressChargePrepaid(AddressChargePrepaid $AddressChargePrepaid) 设置包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递
 * @method string getAddressType() 获取EIP类型。默认值：EIP。
<ul style="margin:0"><li>弹性公网IP，可选值：<ul><li>EIP：弹性公网IP</li></ul></li></ul>
<ul style="margin:0"><li>精品IP，可选值：<ul><li>HighQualityEIP：精品IP</li></ul>注意：仅新加坡和中国香港支持精品IP。</li></ul>
<ul style="margin:0"><li>高防IP，可选值：<ul><li>AntiDDoSEIP：高防IP</li></ul>注意：仅部分地域支持高防IP，详情可见弹性公网IP[产品概述](https://cloud.tencent.com/document/product/1199/41646)。</li></ul>
 * @method void setAddressType(string $AddressType) 设置EIP类型。默认值：EIP。
<ul style="margin:0"><li>弹性公网IP，可选值：<ul><li>EIP：弹性公网IP</li></ul></li></ul>
<ul style="margin:0"><li>精品IP，可选值：<ul><li>HighQualityEIP：精品IP</li></ul>注意：仅新加坡和中国香港支持精品IP。</li></ul>
<ul style="margin:0"><li>高防IP，可选值：<ul><li>AntiDDoSEIP：高防IP</li></ul>注意：仅部分地域支持高防IP，详情可见弹性公网IP[产品概述](https://cloud.tencent.com/document/product/1199/41646)。</li></ul>
 */
class InquiryPriceAllocateAddressesRequest extends AbstractModel
{
    /**
     * @var string EIP计费方式。
<ul style="margin:0"><li>账号为标准账户类型的用户，可选值：<ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li>
<li>BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费</li>
<li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li>
</ul></li>
</ul>
     */
    public $InternetChargeType;

    /**
     * @var integer EIP出带宽上限，单位：Mbps。
<ul style="margin:0"><li>账号为标准账户类型的用户，可选值范围取决于EIP计费方式：<ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li>
<li>BANDWIDTH_PREPAID_BY_MONTH：1 Mbps 至 200 Mbps</li>
<li>TRAFFIC_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li></ul>默认值：1 Mbps。</li>
<li>账号为传统账户类型的用户，EIP出带宽上限取决于与其绑定的实例的公网出带宽上限，无需传递此参数。</li></ul>

     */
    public $InternetMaxBandwidthOut;

    /**
     * @var AddressChargePrepaid 包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递
     */
    public $AddressChargePrepaid;

    /**
     * @var string EIP类型。默认值：EIP。
<ul style="margin:0"><li>弹性公网IP，可选值：<ul><li>EIP：弹性公网IP</li></ul></li></ul>
<ul style="margin:0"><li>精品IP，可选值：<ul><li>HighQualityEIP：精品IP</li></ul>注意：仅新加坡和中国香港支持精品IP。</li></ul>
<ul style="margin:0"><li>高防IP，可选值：<ul><li>AntiDDoSEIP：高防IP</li></ul>注意：仅部分地域支持高防IP，详情可见弹性公网IP[产品概述](https://cloud.tencent.com/document/product/1199/41646)。</li></ul>
     */
    public $AddressType;

    /**
     * @param string $InternetChargeType EIP计费方式。
<ul style="margin:0"><li>账号为标准账户类型的用户，可选值：<ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li>
<li>BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费</li>
<li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li>
</ul></li>
</ul>
     * @param integer $InternetMaxBandwidthOut EIP出带宽上限，单位：Mbps。
<ul style="margin:0"><li>账号为标准账户类型的用户，可选值范围取决于EIP计费方式：<ul>
<li>BANDWIDTH_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li>
<li>BANDWIDTH_PREPAID_BY_MONTH：1 Mbps 至 200 Mbps</li>
<li>TRAFFIC_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li></ul>默认值：1 Mbps。</li>
<li>账号为传统账户类型的用户，EIP出带宽上限取决于与其绑定的实例的公网出带宽上限，无需传递此参数。</li></ul>

     * @param AddressChargePrepaid $AddressChargePrepaid 包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递
     * @param string $AddressType EIP类型。默认值：EIP。
<ul style="margin:0"><li>弹性公网IP，可选值：<ul><li>EIP：弹性公网IP</li></ul></li></ul>
<ul style="margin:0"><li>精品IP，可选值：<ul><li>HighQualityEIP：精品IP</li></ul>注意：仅新加坡和中国香港支持精品IP。</li></ul>
<ul style="margin:0"><li>高防IP，可选值：<ul><li>AntiDDoSEIP：高防IP</li></ul>注意：仅部分地域支持高防IP，详情可见弹性公网IP[产品概述](https://cloud.tencent.com/document/product/1199/41646)。</li></ul>
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
        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("AddressChargePrepaid",$param) and $param["AddressChargePrepaid"] !== null) {
            $this->AddressChargePrepaid = new AddressChargePrepaid();
            $this->AddressChargePrepaid->deserialize($param["AddressChargePrepaid"]);
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }
    }
}
