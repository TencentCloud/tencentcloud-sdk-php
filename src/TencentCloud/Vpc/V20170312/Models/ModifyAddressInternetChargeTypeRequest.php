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
 * ModifyAddressInternetChargeType请求参数结构体
 *
 * @method string getAddressId() 获取弹性公网IP的唯一ID，形如eip-xxx，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
 * @method void setAddressId(string $AddressId) 设置弹性公网IP的唯一ID，形如eip-xxx，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
 * @method string getInternetChargeType() 获取弹性公网IP调整目标计费模式，支持：
BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费
TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费
BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费
 * @method void setInternetChargeType(string $InternetChargeType) 设置弹性公网IP调整目标计费模式，支持：
BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费
TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费
BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费
 * @method integer getInternetMaxBandwidthOut() 获取弹性公网IP调整目标带宽值，可调整的带宽上限值参考产品文档[带宽上限](https://cloud.tencent.com/document/product/1199/48333)。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置弹性公网IP调整目标带宽值，可调整的带宽上限值参考产品文档[带宽上限](https://cloud.tencent.com/document/product/1199/48333)。
 * @method AddressChargePrepaid getAddressChargePrepaid() 获取包月带宽网络计费模式参数。弹性公网IP的调整目标计费模式是 BANDWIDTH_PREPAID_BY_MONTH（包月按带宽预付费）时，必传该参数。
 * @method void setAddressChargePrepaid(AddressChargePrepaid $AddressChargePrepaid) 设置包月带宽网络计费模式参数。弹性公网IP的调整目标计费模式是 BANDWIDTH_PREPAID_BY_MONTH（包月按带宽预付费）时，必传该参数。
 */
class ModifyAddressInternetChargeTypeRequest extends AbstractModel
{
    /**
     * @var string 弹性公网IP的唯一ID，形如eip-xxx，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
     */
    public $AddressId;

    /**
     * @var string 弹性公网IP调整目标计费模式，支持：
BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费
TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费
BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费
     */
    public $InternetChargeType;

    /**
     * @var integer 弹性公网IP调整目标带宽值，可调整的带宽上限值参考产品文档[带宽上限](https://cloud.tencent.com/document/product/1199/48333)。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var AddressChargePrepaid 包月带宽网络计费模式参数。弹性公网IP的调整目标计费模式是 BANDWIDTH_PREPAID_BY_MONTH（包月按带宽预付费）时，必传该参数。
     */
    public $AddressChargePrepaid;

    /**
     * @param string $AddressId 弹性公网IP的唯一ID，形如eip-xxx，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
     * @param string $InternetChargeType 弹性公网IP调整目标计费模式，支持：
BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费
TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费
BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费
     * @param integer $InternetMaxBandwidthOut 弹性公网IP调整目标带宽值，可调整的带宽上限值参考产品文档[带宽上限](https://cloud.tencent.com/document/product/1199/48333)。
     * @param AddressChargePrepaid $AddressChargePrepaid 包月带宽网络计费模式参数。弹性公网IP的调整目标计费模式是 BANDWIDTH_PREPAID_BY_MONTH（包月按带宽预付费）时，必传该参数。
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
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
    }
}
