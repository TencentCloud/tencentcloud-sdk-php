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
 * AllocateIPv6Addresses请求参数结构体
 *
 * @method string getAddressName() 获取<p>EIP名称，用于申请EIP时用户自定义该EIP的个性化名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。<br>默认值：未命名</p>
 * @method void setAddressName(string $AddressName) 设置<p>EIP名称，用于申请EIP时用户自定义该EIP的个性化名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。<br>默认值：未命名</p>
 * @method string getAddressType() 获取<p>弹性公网IPv6类型，可选值：</p><ul><li>EIPv6：弹性公网IPv6</li><li>HighQualityEIPv6：精品BGP线路弹性公网IPv6<br>注意：弹性公网IPv6产品需开白才能使用，其中精品BGP线路仅在中国香港支持。</li></ul><p>默认值：EIPv6</p>
 * @method void setAddressType(string $AddressType) 设置<p>弹性公网IPv6类型，可选值：</p><ul><li>EIPv6：弹性公网IPv6</li><li>HighQualityEIPv6：精品BGP线路弹性公网IPv6<br>注意：弹性公网IPv6产品需开白才能使用，其中精品BGP线路仅在中国香港支持。</li></ul><p>默认值：EIPv6</p>
 * @method integer getAddressCount() 获取<p>申请的弹性公网IPv6数量。单次最多可以申请20个弹性公网IPv6实例，总配额请参见<a href="https://cloud.tencent.com/document/product/1142/38369">弹性公网 IPv6 配额说明</a>。</p><p>默认值：1</p>
 * @method void setAddressCount(integer $AddressCount) 设置<p>申请的弹性公网IPv6数量。单次最多可以申请20个弹性公网IPv6实例，总配额请参见<a href="https://cloud.tencent.com/document/product/1142/38369">弹性公网 IPv6 配额说明</a>。</p><p>默认值：1</p>
 * @method string getInternetChargeType() 获取<p>弹性公网IPv6计费方式，可选值：</p><ul><li>BANDWIDTH_PACKAGE：<a href="https://cloud.tencent.com/document/product/684/15255">共享带宽包</a>付费</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li></ul><p>默认值：TRAFFIC_POSTPAID_BY_HOUR</p>
 * @method void setInternetChargeType(string $InternetChargeType) 设置<p>弹性公网IPv6计费方式，可选值：</p><ul><li>BANDWIDTH_PACKAGE：<a href="https://cloud.tencent.com/document/product/684/15255">共享带宽包</a>付费</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li></ul><p>默认值：TRAFFIC_POSTPAID_BY_HOUR</p>
 * @method string getInternetServiceProvider() 获取<p>弹性公网IPv6线路类型，默认值：BGP。</p><p>已开通静态单线IP白名单的用户，可选值：</p><ul><li>CMCC：中国移动</li><li>CTCC：中国电信</li><li>CUCC：中国联通<br>注意：仅部分地域支持静态单线IP。具体请以控制台购买页展示为准。</li></ul>
 * @method void setInternetServiceProvider(string $InternetServiceProvider) 设置<p>弹性公网IPv6线路类型，默认值：BGP。</p><p>已开通静态单线IP白名单的用户，可选值：</p><ul><li>CMCC：中国移动</li><li>CTCC：中国电信</li><li>CUCC：中国联通<br>注意：仅部分地域支持静态单线IP。具体请以控制台购买页展示为准。</li></ul>
 * @method integer getInternetMaxBandwidthOut() 获取<p>弹性公网IPv6带宽上限，单位：Mbps。</p><p>可选值范围取决于EIP计费方式：</p><ul><li>BANDWIDTH_PACKAGE（共享带宽包付费）：1 Mbps 至 2000 Mbps</li><li>TRAFFIC_POSTPAID_BY_HOUR（流量按小时后付费）：1 Mbps 至 200 Mbps</li></ul><p>默认值：1</p>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置<p>弹性公网IPv6带宽上限，单位：Mbps。</p><p>可选值范围取决于EIP计费方式：</p><ul><li>BANDWIDTH_PACKAGE（共享带宽包付费）：1 Mbps 至 2000 Mbps</li><li>TRAFFIC_POSTPAID_BY_HOUR（流量按小时后付费）：1 Mbps 至 200 Mbps</li></ul><p>默认值：1</p>
 * @method string getBandwidthPackageId() 获取<p>带宽包唯一ID参数。可以使用<a href="https://cloud.tencent.com/document/product/215/19209">DescribeBandwidthPackages</a>接口查询BandwidthPackageId。<br>设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费。</p>
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置<p>带宽包唯一ID参数。可以使用<a href="https://cloud.tencent.com/document/product/215/19209">DescribeBandwidthPackages</a>接口查询BandwidthPackageId。<br>设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费。</p>
 * @method array getTags() 获取<p>需要关联的标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>需要关联的标签列表。</p>
 * @method string getEgress() 获取<p>弹性公网IPv6网络出口，可选值：</p><ul><li>CENTER_EGRESS_1：中心出口一</li><li>CENTER_EGRESS_2：中心出口二<br>注意：不同地域支持的线路类型、网络出口略有差异，请以控制台展示为准。</li></ul><p>默认值：CENTER_EGRESS_1</p>
 * @method void setEgress(string $Egress) 设置<p>弹性公网IPv6网络出口，可选值：</p><ul><li>CENTER_EGRESS_1：中心出口一</li><li>CENTER_EGRESS_2：中心出口二<br>注意：不同地域支持的线路类型、网络出口略有差异，请以控制台展示为准。</li></ul><p>默认值：CENTER_EGRESS_1</p>
 */
class AllocateIPv6AddressesRequest extends AbstractModel
{
    /**
     * @var string <p>EIP名称，用于申请EIP时用户自定义该EIP的个性化名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。<br>默认值：未命名</p>
     */
    public $AddressName;

    /**
     * @var string <p>弹性公网IPv6类型，可选值：</p><ul><li>EIPv6：弹性公网IPv6</li><li>HighQualityEIPv6：精品BGP线路弹性公网IPv6<br>注意：弹性公网IPv6产品需开白才能使用，其中精品BGP线路仅在中国香港支持。</li></ul><p>默认值：EIPv6</p>
     */
    public $AddressType;

    /**
     * @var integer <p>申请的弹性公网IPv6数量。单次最多可以申请20个弹性公网IPv6实例，总配额请参见<a href="https://cloud.tencent.com/document/product/1142/38369">弹性公网 IPv6 配额说明</a>。</p><p>默认值：1</p>
     */
    public $AddressCount;

    /**
     * @var string <p>弹性公网IPv6计费方式，可选值：</p><ul><li>BANDWIDTH_PACKAGE：<a href="https://cloud.tencent.com/document/product/684/15255">共享带宽包</a>付费</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li></ul><p>默认值：TRAFFIC_POSTPAID_BY_HOUR</p>
     */
    public $InternetChargeType;

    /**
     * @var string <p>弹性公网IPv6线路类型，默认值：BGP。</p><p>已开通静态单线IP白名单的用户，可选值：</p><ul><li>CMCC：中国移动</li><li>CTCC：中国电信</li><li>CUCC：中国联通<br>注意：仅部分地域支持静态单线IP。具体请以控制台购买页展示为准。</li></ul>
     */
    public $InternetServiceProvider;

    /**
     * @var integer <p>弹性公网IPv6带宽上限，单位：Mbps。</p><p>可选值范围取决于EIP计费方式：</p><ul><li>BANDWIDTH_PACKAGE（共享带宽包付费）：1 Mbps 至 2000 Mbps</li><li>TRAFFIC_POSTPAID_BY_HOUR（流量按小时后付费）：1 Mbps 至 200 Mbps</li></ul><p>默认值：1</p>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string <p>带宽包唯一ID参数。可以使用<a href="https://cloud.tencent.com/document/product/215/19209">DescribeBandwidthPackages</a>接口查询BandwidthPackageId。<br>设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费。</p>
     */
    public $BandwidthPackageId;

    /**
     * @var array <p>需要关联的标签列表。</p>
     */
    public $Tags;

    /**
     * @var string <p>弹性公网IPv6网络出口，可选值：</p><ul><li>CENTER_EGRESS_1：中心出口一</li><li>CENTER_EGRESS_2：中心出口二<br>注意：不同地域支持的线路类型、网络出口略有差异，请以控制台展示为准。</li></ul><p>默认值：CENTER_EGRESS_1</p>
     */
    public $Egress;

    /**
     * @param string $AddressName <p>EIP名称，用于申请EIP时用户自定义该EIP的个性化名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。<br>默认值：未命名</p>
     * @param string $AddressType <p>弹性公网IPv6类型，可选值：</p><ul><li>EIPv6：弹性公网IPv6</li><li>HighQualityEIPv6：精品BGP线路弹性公网IPv6<br>注意：弹性公网IPv6产品需开白才能使用，其中精品BGP线路仅在中国香港支持。</li></ul><p>默认值：EIPv6</p>
     * @param integer $AddressCount <p>申请的弹性公网IPv6数量。单次最多可以申请20个弹性公网IPv6实例，总配额请参见<a href="https://cloud.tencent.com/document/product/1142/38369">弹性公网 IPv6 配额说明</a>。</p><p>默认值：1</p>
     * @param string $InternetChargeType <p>弹性公网IPv6计费方式，可选值：</p><ul><li>BANDWIDTH_PACKAGE：<a href="https://cloud.tencent.com/document/product/684/15255">共享带宽包</a>付费</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li></ul><p>默认值：TRAFFIC_POSTPAID_BY_HOUR</p>
     * @param string $InternetServiceProvider <p>弹性公网IPv6线路类型，默认值：BGP。</p><p>已开通静态单线IP白名单的用户，可选值：</p><ul><li>CMCC：中国移动</li><li>CTCC：中国电信</li><li>CUCC：中国联通<br>注意：仅部分地域支持静态单线IP。具体请以控制台购买页展示为准。</li></ul>
     * @param integer $InternetMaxBandwidthOut <p>弹性公网IPv6带宽上限，单位：Mbps。</p><p>可选值范围取决于EIP计费方式：</p><ul><li>BANDWIDTH_PACKAGE（共享带宽包付费）：1 Mbps 至 2000 Mbps</li><li>TRAFFIC_POSTPAID_BY_HOUR（流量按小时后付费）：1 Mbps 至 200 Mbps</li></ul><p>默认值：1</p>
     * @param string $BandwidthPackageId <p>带宽包唯一ID参数。可以使用<a href="https://cloud.tencent.com/document/product/215/19209">DescribeBandwidthPackages</a>接口查询BandwidthPackageId。<br>设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费。</p>
     * @param array $Tags <p>需要关联的标签列表。</p>
     * @param string $Egress <p>弹性公网IPv6网络出口，可选值：</p><ul><li>CENTER_EGRESS_1：中心出口一</li><li>CENTER_EGRESS_2：中心出口二<br>注意：不同地域支持的线路类型、网络出口略有差异，请以控制台展示为准。</li></ul><p>默认值：CENTER_EGRESS_1</p>
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
