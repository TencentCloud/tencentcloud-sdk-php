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
 * CreateVpnGateway请求参数结构体
 *
 * @method string getVpcId() 获取<p>VPC实例ID。可通过<a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>。接口返回值中的VpcId获取</p><p>入参限制：当Type为CCN/SSL_CCN 类型时传 &quot;&quot;，IPSEC/SSL 类型必须传对应VPC实例ID。</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC实例ID。可通过<a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>。接口返回值中的VpcId获取</p><p>入参限制：当Type为CCN/SSL_CCN 类型时传 &quot;&quot;，IPSEC/SSL 类型必须传对应VPC实例ID。</p>
 * @method string getVpnGatewayName() 获取<p>VPN网关名称，最大长度不能超过60个字节。</p>
 * @method void setVpnGatewayName(string $VpnGatewayName) 设置<p>VPN网关名称，最大长度不能超过60个字节。</p>
 * @method integer getInternetMaxBandwidthOut() 获取<p>公网带宽设置。可选带宽规格：5, 10, 20, 50, 100, 200, 500, 1000, 3000；单位：Mbps。</p>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置<p>公网带宽设置。可选带宽规格：5, 10, 20, 50, 100, 200, 500, 1000, 3000；单位：Mbps。</p>
 * @method string getInstanceChargeType() 获取<p>VPN网关计费模式，PREPAID：表示预付费，即包年包月，POSTPAID_BY_HOUR：表示后付费，即按量计费。默认：POSTPAID_BY_HOUR，如果指定预付费模式，参数InstanceChargePrepaid必填。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>VPN网关计费模式，PREPAID：表示预付费，即包年包月，POSTPAID_BY_HOUR：表示后付费，即按量计费。默认：POSTPAID_BY_HOUR，如果指定预付费模式，参数InstanceChargePrepaid必填。</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method string getZone() 获取<p>可用区，如：ap-guangzhou-2。</p>
 * @method void setZone(string $Zone) 设置<p>可用区，如：ap-guangzhou-2。</p>
 * @method string getType() 获取<p>VPN网关类型，默认为IPSEC。值“IPSEC”为VPC型IPSEC VPN网关，值“SSL”为VPC型SSL VPN网关，值“CCN”为云联网型IPSEC VPN网关，值“SSL_CCN”为云联网型SSL VPN网关。</p>
 * @method void setType(string $Type) 设置<p>VPN网关类型，默认为IPSEC。值“IPSEC”为VPC型IPSEC VPN网关，值“SSL”为VPC型SSL VPN网关，值“CCN”为云联网型IPSEC VPN网关，值“SSL_CCN”为云联网型SSL VPN网关。</p>
 * @method array getTags() 获取<p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
 * @method void setTags(array $Tags) 设置<p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
 * @method string getCdcId() 获取<p>CDC实例ID。</p>
 * @method void setCdcId(string $CdcId) 设置<p>CDC实例ID。</p>
 * @method integer getMaxConnection() 获取<p>SSL VPN连接数设置，可选规格：5, 10, 20, 50, 100, 200, 500, 1000；</p><p>单位：个</p><p>默认值：5</p><p>仅 SSL / SSL_CCN 类型需要填这个参数。</p>
 * @method void setMaxConnection(integer $MaxConnection) 设置<p>SSL VPN连接数设置，可选规格：5, 10, 20, 50, 100, 200, 500, 1000；</p><p>单位：个</p><p>默认值：5</p><p>仅 SSL / SSL_CCN 类型需要填这个参数。</p>
 * @method integer getBgpAsn() 获取<p>BGP ASN。</p>
 * @method void setBgpAsn(integer $BgpAsn) 设置<p>BGP ASN。</p>
 */
class CreateVpnGatewayRequest extends AbstractModel
{
    /**
     * @var string <p>VPC实例ID。可通过<a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>。接口返回值中的VpcId获取</p><p>入参限制：当Type为CCN/SSL_CCN 类型时传 &quot;&quot;，IPSEC/SSL 类型必须传对应VPC实例ID。</p>
     */
    public $VpcId;

    /**
     * @var string <p>VPN网关名称，最大长度不能超过60个字节。</p>
     */
    public $VpnGatewayName;

    /**
     * @var integer <p>公网带宽设置。可选带宽规格：5, 10, 20, 50, 100, 200, 500, 1000, 3000；单位：Mbps。</p>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string <p>VPN网关计费模式，PREPAID：表示预付费，即包年包月，POSTPAID_BY_HOUR：表示后付费，即按量计费。默认：POSTPAID_BY_HOUR，如果指定预付费模式，参数InstanceChargePrepaid必填。</p>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var string <p>可用区，如：ap-guangzhou-2。</p>
     */
    public $Zone;

    /**
     * @var string <p>VPN网关类型，默认为IPSEC。值“IPSEC”为VPC型IPSEC VPN网关，值“SSL”为VPC型SSL VPN网关，值“CCN”为云联网型IPSEC VPN网关，值“SSL_CCN”为云联网型SSL VPN网关。</p>
     */
    public $Type;

    /**
     * @var array <p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
     */
    public $Tags;

    /**
     * @var string <p>CDC实例ID。</p>
     */
    public $CdcId;

    /**
     * @var integer <p>SSL VPN连接数设置，可选规格：5, 10, 20, 50, 100, 200, 500, 1000；</p><p>单位：个</p><p>默认值：5</p><p>仅 SSL / SSL_CCN 类型需要填这个参数。</p>
     */
    public $MaxConnection;

    /**
     * @var integer <p>BGP ASN。</p>
     */
    public $BgpAsn;

    /**
     * @param string $VpcId <p>VPC实例ID。可通过<a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>。接口返回值中的VpcId获取</p><p>入参限制：当Type为CCN/SSL_CCN 类型时传 &quot;&quot;，IPSEC/SSL 类型必须传对应VPC实例ID。</p>
     * @param string $VpnGatewayName <p>VPN网关名称，最大长度不能超过60个字节。</p>
     * @param integer $InternetMaxBandwidthOut <p>公网带宽设置。可选带宽规格：5, 10, 20, 50, 100, 200, 500, 1000, 3000；单位：Mbps。</p>
     * @param string $InstanceChargeType <p>VPN网关计费模式，PREPAID：表示预付费，即包年包月，POSTPAID_BY_HOUR：表示后付费，即按量计费。默认：POSTPAID_BY_HOUR，如果指定预付费模式，参数InstanceChargePrepaid必填。</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     * @param string $Zone <p>可用区，如：ap-guangzhou-2。</p>
     * @param string $Type <p>VPN网关类型，默认为IPSEC。值“IPSEC”为VPC型IPSEC VPN网关，值“SSL”为VPC型SSL VPN网关，值“CCN”为云联网型IPSEC VPN网关，值“SSL_CCN”为云联网型SSL VPN网关。</p>
     * @param array $Tags <p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
     * @param string $CdcId <p>CDC实例ID。</p>
     * @param integer $MaxConnection <p>SSL VPN连接数设置，可选规格：5, 10, 20, 50, 100, 200, 500, 1000；</p><p>单位：个</p><p>默认值：5</p><p>仅 SSL / SSL_CCN 类型需要填这个参数。</p>
     * @param integer $BgpAsn <p>BGP ASN。</p>
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpnGatewayName",$param) and $param["VpnGatewayName"] !== null) {
            $this->VpnGatewayName = $param["VpnGatewayName"];
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("MaxConnection",$param) and $param["MaxConnection"] !== null) {
            $this->MaxConnection = $param["MaxConnection"];
        }

        if (array_key_exists("BgpAsn",$param) and $param["BgpAsn"] !== null) {
            $this->BgpAsn = $param["BgpAsn"];
        }
    }
}
