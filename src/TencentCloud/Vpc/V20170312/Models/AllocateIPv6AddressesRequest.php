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
 * AllocateIPv6Addresses请求参数结构体
 *
 * @method string getAddressName() 获取EIP名称，用于申请EIP时用户自定义该EIP的个性化名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"_"，不能包含空格。
默认值：未命名
 * @method void setAddressName(string $AddressName) 设置EIP名称，用于申请EIP时用户自定义该EIP的个性化名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"_"，不能包含空格。
默认值：未命名
 * @method string getAddressType() 获取弹性公网IPv6类型，可选值：

- EIPv6：弹性公网IPv6
- HighQualityEIPv6：精品BGP线路弹性公网IPv6
注意：弹性公网IPv6产品需开白才能使用，其中精品BGP线路仅在中国香港支持。

默认值：EIPv6
 * @method void setAddressType(string $AddressType) 设置弹性公网IPv6类型，可选值：

- EIPv6：弹性公网IPv6
- HighQualityEIPv6：精品BGP线路弹性公网IPv6
注意：弹性公网IPv6产品需开白才能使用，其中精品BGP线路仅在中国香港支持。

默认值：EIPv6
 * @method integer getAddressCount() 获取申请的弹性公网IPv6数量。单次最多可以申请20个弹性公网IPv6实例，总配额请参见[弹性公网 IPv6 配额说明](https://cloud.tencent.com/document/product/1142/38369)。

默认值：1
 * @method void setAddressCount(integer $AddressCount) 设置申请的弹性公网IPv6数量。单次最多可以申请20个弹性公网IPv6实例，总配额请参见[弹性公网 IPv6 配额说明](https://cloud.tencent.com/document/product/1142/38369)。

默认值：1
 * @method string getInternetChargeType() 获取弹性公网IPv6计费方式，可选值：

- BANDWIDTH_PACKAGE：[共享带宽包](https://cloud.tencent.com/document/product/684/15255)付费
- TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费

默认值：TRAFFIC_POSTPAID_BY_HOUR
 * @method void setInternetChargeType(string $InternetChargeType) 设置弹性公网IPv6计费方式，可选值：

- BANDWIDTH_PACKAGE：[共享带宽包](https://cloud.tencent.com/document/product/684/15255)付费
- TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费

默认值：TRAFFIC_POSTPAID_BY_HOUR
 * @method string getInternetServiceProvider() 获取弹性公网IPv6线路类型，默认值：BGP。

已开通静态单线IP白名单的用户，可选值：
- CMCC：中国移动
- CTCC：中国电信
- CUCC：中国联通
注意：仅部分地域支持静态单线IP。具体请以控制台购买页展示为准。
 * @method void setInternetServiceProvider(string $InternetServiceProvider) 设置弹性公网IPv6线路类型，默认值：BGP。

已开通静态单线IP白名单的用户，可选值：
- CMCC：中国移动
- CTCC：中国电信
- CUCC：中国联通
注意：仅部分地域支持静态单线IP。具体请以控制台购买页展示为准。
 * @method integer getInternetMaxBandwidthOut() 获取弹性公网IPv6带宽上限，单位：Mbps。

可选值范围取决于EIP计费方式：

- BANDWIDTH_PACKAGE（共享带宽包付费）：1 Mbps 至 2000 Mbps
- TRAFFIC_POSTPAID_BY_HOUR（流量按小时后付费）：1 Mbps 至 100 Mbps

默认值：1
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置弹性公网IPv6带宽上限，单位：Mbps。

可选值范围取决于EIP计费方式：

- BANDWIDTH_PACKAGE（共享带宽包付费）：1 Mbps 至 2000 Mbps
- TRAFFIC_POSTPAID_BY_HOUR（流量按小时后付费）：1 Mbps 至 100 Mbps

默认值：1
 * @method string getBandwidthPackageId() 获取带宽包唯一ID参数。可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包唯一ID参数。可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费。
 * @method array getTags() 获取需要关联的标签列表。
 * @method void setTags(array $Tags) 设置需要关联的标签列表。
 * @method string getEgress() 获取弹性公网IPv6网络出口，可选值：

- CENTER_EGRESS_1：中心出口一
- CENTER_EGRESS_2：中心出口二
注意：不同地域支持的线路类型、网络出口略有差异，请以控制台展示为准。

默认值：CENTER_EGRESS_1
 * @method void setEgress(string $Egress) 设置弹性公网IPv6网络出口，可选值：

- CENTER_EGRESS_1：中心出口一
- CENTER_EGRESS_2：中心出口二
注意：不同地域支持的线路类型、网络出口略有差异，请以控制台展示为准。

默认值：CENTER_EGRESS_1
 */
class AllocateIPv6AddressesRequest extends AbstractModel
{
    /**
     * @var string EIP名称，用于申请EIP时用户自定义该EIP的个性化名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"_"，不能包含空格。
默认值：未命名
     */
    public $AddressName;

    /**
     * @var string 弹性公网IPv6类型，可选值：

- EIPv6：弹性公网IPv6
- HighQualityEIPv6：精品BGP线路弹性公网IPv6
注意：弹性公网IPv6产品需开白才能使用，其中精品BGP线路仅在中国香港支持。

默认值：EIPv6
     */
    public $AddressType;

    /**
     * @var integer 申请的弹性公网IPv6数量。单次最多可以申请20个弹性公网IPv6实例，总配额请参见[弹性公网 IPv6 配额说明](https://cloud.tencent.com/document/product/1142/38369)。

默认值：1
     */
    public $AddressCount;

    /**
     * @var string 弹性公网IPv6计费方式，可选值：

- BANDWIDTH_PACKAGE：[共享带宽包](https://cloud.tencent.com/document/product/684/15255)付费
- TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费

默认值：TRAFFIC_POSTPAID_BY_HOUR
     */
    public $InternetChargeType;

    /**
     * @var string 弹性公网IPv6线路类型，默认值：BGP。

已开通静态单线IP白名单的用户，可选值：
- CMCC：中国移动
- CTCC：中国电信
- CUCC：中国联通
注意：仅部分地域支持静态单线IP。具体请以控制台购买页展示为准。
     */
    public $InternetServiceProvider;

    /**
     * @var integer 弹性公网IPv6带宽上限，单位：Mbps。

可选值范围取决于EIP计费方式：

- BANDWIDTH_PACKAGE（共享带宽包付费）：1 Mbps 至 2000 Mbps
- TRAFFIC_POSTPAID_BY_HOUR（流量按小时后付费）：1 Mbps 至 100 Mbps

默认值：1
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 带宽包唯一ID参数。可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费。
     */
    public $BandwidthPackageId;

    /**
     * @var array 需要关联的标签列表。
     */
    public $Tags;

    /**
     * @var string 弹性公网IPv6网络出口，可选值：

- CENTER_EGRESS_1：中心出口一
- CENTER_EGRESS_2：中心出口二
注意：不同地域支持的线路类型、网络出口略有差异，请以控制台展示为准。

默认值：CENTER_EGRESS_1
     */
    public $Egress;

    /**
     * @param string $AddressName EIP名称，用于申请EIP时用户自定义该EIP的个性化名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"_"，不能包含空格。
默认值：未命名
     * @param string $AddressType 弹性公网IPv6类型，可选值：

- EIPv6：弹性公网IPv6
- HighQualityEIPv6：精品BGP线路弹性公网IPv6
注意：弹性公网IPv6产品需开白才能使用，其中精品BGP线路仅在中国香港支持。

默认值：EIPv6
     * @param integer $AddressCount 申请的弹性公网IPv6数量。单次最多可以申请20个弹性公网IPv6实例，总配额请参见[弹性公网 IPv6 配额说明](https://cloud.tencent.com/document/product/1142/38369)。

默认值：1
     * @param string $InternetChargeType 弹性公网IPv6计费方式，可选值：

- BANDWIDTH_PACKAGE：[共享带宽包](https://cloud.tencent.com/document/product/684/15255)付费
- TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费

默认值：TRAFFIC_POSTPAID_BY_HOUR
     * @param string $InternetServiceProvider 弹性公网IPv6线路类型，默认值：BGP。

已开通静态单线IP白名单的用户，可选值：
- CMCC：中国移动
- CTCC：中国电信
- CUCC：中国联通
注意：仅部分地域支持静态单线IP。具体请以控制台购买页展示为准。
     * @param integer $InternetMaxBandwidthOut 弹性公网IPv6带宽上限，单位：Mbps。

可选值范围取决于EIP计费方式：

- BANDWIDTH_PACKAGE（共享带宽包付费）：1 Mbps 至 2000 Mbps
- TRAFFIC_POSTPAID_BY_HOUR（流量按小时后付费）：1 Mbps 至 100 Mbps

默认值：1
     * @param string $BandwidthPackageId 带宽包唯一ID参数。可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口查询BandwidthPackageId。
设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费。
     * @param array $Tags 需要关联的标签列表。
     * @param string $Egress 弹性公网IPv6网络出口，可选值：

- CENTER_EGRESS_1：中心出口一
- CENTER_EGRESS_2：中心出口二
注意：不同地域支持的线路类型、网络出口略有差异，请以控制台展示为准。

默认值：CENTER_EGRESS_1
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
        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("AddressCount",$param) and $param["AddressCount"] !== null) {
            $this->AddressCount = $param["AddressCount"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
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

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }
    }
}
