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
 * AllocateIp6AddressesBandwidth请求参数结构体
 *
 * @method array getIp6Addresses() 获取需要开通公网访问能力的IPv6地址，可以使用[DescribeIp6Addresses](https://cloud.tencent.com/document/product/215/40089)接口查询Ip6Addresses。

 * @method void setIp6Addresses(array $Ip6Addresses) 设置需要开通公网访问能力的IPv6地址，可以使用[DescribeIp6Addresses](https://cloud.tencent.com/document/product/215/40089)接口查询Ip6Addresses。

 * @method integer getInternetMaxBandwidthOut() 获取带宽上限，单位Mbps。可调整的带宽上限值参考产品文档中[IPv6 计费限制说明](https://cloud.tencent.com/document/product/1142/38369#IPv6)。
默认值：1Mbps
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置带宽上限，单位Mbps。可调整的带宽上限值参考产品文档中[IPv6 计费限制说明](https://cloud.tencent.com/document/product/1142/38369#IPv6)。
默认值：1Mbps
 * @method string getInternetChargeType() 获取网络计费模式。IPv6当前支持：<li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li><li>BANDWIDTH_PACKAGE：共享带宽包付费</li>
默认值：TRAFFIC_POSTPAID_BY_HOUR
 * @method void setInternetChargeType(string $InternetChargeType) 设置网络计费模式。IPv6当前支持：<li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li><li>BANDWIDTH_PACKAGE：共享带宽包付费</li>
默认值：TRAFFIC_POSTPAID_BY_HOUR
 * @method string getBandwidthPackageId() 获取带宽包id，设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的IPv6加入该带宽包并采用带宽包计费。可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包id，设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的IPv6加入该带宽包并采用带宽包计费。可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
 * @method array getTags() 获取需要关联的标签列表。	
 * @method void setTags(array $Tags) 设置需要关联的标签列表。	
 */
class AllocateIp6AddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var array 需要开通公网访问能力的IPv6地址，可以使用[DescribeIp6Addresses](https://cloud.tencent.com/document/product/215/40089)接口查询Ip6Addresses。

     */
    public $Ip6Addresses;

    /**
     * @var integer 带宽上限，单位Mbps。可调整的带宽上限值参考产品文档中[IPv6 计费限制说明](https://cloud.tencent.com/document/product/1142/38369#IPv6)。
默认值：1Mbps
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 网络计费模式。IPv6当前支持：<li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li><li>BANDWIDTH_PACKAGE：共享带宽包付费</li>
默认值：TRAFFIC_POSTPAID_BY_HOUR
     */
    public $InternetChargeType;

    /**
     * @var string 带宽包id，设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的IPv6加入该带宽包并采用带宽包计费。可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
     */
    public $BandwidthPackageId;

    /**
     * @var array 需要关联的标签列表。	
     */
    public $Tags;

    /**
     * @param array $Ip6Addresses 需要开通公网访问能力的IPv6地址，可以使用[DescribeIp6Addresses](https://cloud.tencent.com/document/product/215/40089)接口查询Ip6Addresses。

     * @param integer $InternetMaxBandwidthOut 带宽上限，单位Mbps。可调整的带宽上限值参考产品文档中[IPv6 计费限制说明](https://cloud.tencent.com/document/product/1142/38369#IPv6)。
默认值：1Mbps
     * @param string $InternetChargeType 网络计费模式。IPv6当前支持：<li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li><li>BANDWIDTH_PACKAGE：共享带宽包付费</li>
默认值：TRAFFIC_POSTPAID_BY_HOUR
     * @param string $BandwidthPackageId 带宽包id，设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的IPv6加入该带宽包并采用带宽包计费。可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
     * @param array $Tags 需要关联的标签列表。	
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
        if (array_key_exists("Ip6Addresses",$param) and $param["Ip6Addresses"] !== null) {
            $this->Ip6Addresses = $param["Ip6Addresses"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
