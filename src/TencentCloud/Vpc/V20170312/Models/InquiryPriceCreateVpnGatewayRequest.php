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
 * InquiryPriceCreateVpnGateway请求参数结构体
 *
 * @method integer getInternetMaxBandwidthOut() 获取公网带宽设置。可选带宽规格：5, 10, 20, 50, 100；单位：Mbps。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网带宽设置。可选带宽规格：5, 10, 20, 50, 100；单位：Mbps。
 * @method string getInstanceChargeType() 获取VPN网关计费模式，PREPAID：表示预付费，即包年包月，POSTPAID_BY_HOUR：表示后付费，即按量计费。默认：POSTPAID_BY_HOUR，如果指定预付费模式，参数InstanceChargePrepaid必填。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置VPN网关计费模式，PREPAID：表示预付费，即包年包月，POSTPAID_BY_HOUR：表示后付费，即按量计费。默认：POSTPAID_BY_HOUR，如果指定预付费模式，参数InstanceChargePrepaid必填。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method integer getMaxConnection() 获取SSL VPN连接数设置，可选规格：5, 10, 20, 50, 100；单位：个。
 * @method void setMaxConnection(integer $MaxConnection) 设置SSL VPN连接数设置，可选规格：5, 10, 20, 50, 100；单位：个。
 * @method string getType() 获取查询的VPN类型，支持IPSEC和SSL两种类型，为SSL类型时，MaxConnection参数必传。
 * @method void setType(string $Type) 设置查询的VPN类型，支持IPSEC和SSL两种类型，为SSL类型时，MaxConnection参数必传。
 */
class InquiryPriceCreateVpnGatewayRequest extends AbstractModel
{
    /**
     * @var integer 公网带宽设置。可选带宽规格：5, 10, 20, 50, 100；单位：Mbps。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string VPN网关计费模式，PREPAID：表示预付费，即包年包月，POSTPAID_BY_HOUR：表示后付费，即按量计费。默认：POSTPAID_BY_HOUR，如果指定预付费模式，参数InstanceChargePrepaid必填。
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $InstanceChargePrepaid;

    /**
     * @var integer SSL VPN连接数设置，可选规格：5, 10, 20, 50, 100；单位：个。
     */
    public $MaxConnection;

    /**
     * @var string 查询的VPN类型，支持IPSEC和SSL两种类型，为SSL类型时，MaxConnection参数必传。
     */
    public $Type;

    /**
     * @param integer $InternetMaxBandwidthOut 公网带宽设置。可选带宽规格：5, 10, 20, 50, 100；单位：Mbps。
     * @param string $InstanceChargeType VPN网关计费模式，PREPAID：表示预付费，即包年包月，POSTPAID_BY_HOUR：表示后付费，即按量计费。默认：POSTPAID_BY_HOUR，如果指定预付费模式，参数InstanceChargePrepaid必填。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     * @param integer $MaxConnection SSL VPN连接数设置，可选规格：5, 10, 20, 50, 100；单位：个。
     * @param string $Type 查询的VPN类型，支持IPSEC和SSL两种类型，为SSL类型时，MaxConnection参数必传。
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
        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("MaxConnection",$param) and $param["MaxConnection"] !== null) {
            $this->MaxConnection = $param["MaxConnection"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
