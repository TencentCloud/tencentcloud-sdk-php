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
 * CreateNatGateway请求参数结构体
 *
 * @method string getNatGatewayName() 获取NAT网关名称
 * @method void setNatGatewayName(string $NatGatewayName) 设置NAT网关名称
 * @method string getVpcId() 获取VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method integer getInternetMaxBandwidthOut() 获取NAT网关最大外网出带宽(单位：Mbps)，支持的参数值：20, 50, 100, 200, 500, 1000, 2000, 5000，默认: 100Mbps。  当以下NatProductVersion参数值为2即标准型时，此参数无需填写，默认为5000Mbps。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置NAT网关最大外网出带宽(单位：Mbps)，支持的参数值：20, 50, 100, 200, 500, 1000, 2000, 5000，默认: 100Mbps。  当以下NatProductVersion参数值为2即标准型时，此参数无需填写，默认为5000Mbps。
 * @method integer getMaxConcurrentConnection() 获取NAT网关并发连接数上限，支持参数值：1000000、3000000、10000000，默认值为100000。  当以下NatProductVersion参数值为2即标准型时，此参数无需填写，默认为2000000。
 * @method void setMaxConcurrentConnection(integer $MaxConcurrentConnection) 设置NAT网关并发连接数上限，支持参数值：1000000、3000000、10000000，默认值为100000。  当以下NatProductVersion参数值为2即标准型时，此参数无需填写，默认为2000000。
 * @method integer getAddressCount() 获取新建弹性公网IP个数，系统会按您的要求创建对应数量的弹性公网IP，其中AddressCount和PublicAddresses两个参数至少填写一个。
 * @method void setAddressCount(integer $AddressCount) 设置新建弹性公网IP个数，系统会按您的要求创建对应数量的弹性公网IP，其中AddressCount和PublicAddresses两个参数至少填写一个。
 * @method array getPublicIpAddresses() 获取绑定NAT网关的已有弹性公网IP数组，其中AddressCount和PublicAddresses两个参数至少填写一个。 示例值：["139.199.232.119"]
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置绑定NAT网关的已有弹性公网IP数组，其中AddressCount和PublicAddresses两个参数至少填写一个。 示例值：["139.199.232.119"]
 * @method string getZone() 获取可用区，形如：`ap-guangzhou-1`。
 * @method void setZone(string $Zone) 设置可用区，形如：`ap-guangzhou-1`。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method string getSubnetId() 获取NAT网关所属子网，已废弃
 * @method void setSubnetId(string $SubnetId) 设置NAT网关所属子网，已废弃
 * @method integer getStockPublicIpAddressesBandwidthOut() 获取绑定NAT网关的弹性公网IP带宽值（单位：Mbps）。不填写此参数时：则该参数默认为弹性公网IP的带宽值，部分用户默认为该用户类型的弹性公网IP的带宽上限。
 * @method void setStockPublicIpAddressesBandwidthOut(integer $StockPublicIpAddressesBandwidthOut) 设置绑定NAT网关的弹性公网IP带宽值（单位：Mbps）。不填写此参数时：则该参数默认为弹性公网IP的带宽值，部分用户默认为该用户类型的弹性公网IP的带宽上限。
 * @method integer getPublicIpAddressesBandwidthOut() 获取需要申请公网IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
 * @method void setPublicIpAddressesBandwidthOut(integer $PublicIpAddressesBandwidthOut) 设置需要申请公网IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
 * @method boolean getPublicIpFromSameZone() 获取公网IP是否强制与NAT网关来自同可用区，true表示需要与NAT网关同可用区；false表示可与NAT网关不是同一个可用区。此参数只有当参数Zone存在时才能生效。
 * @method void setPublicIpFromSameZone(boolean $PublicIpFromSameZone) 设置公网IP是否强制与NAT网关来自同可用区，true表示需要与NAT网关同可用区；false表示可与NAT网关不是同一个可用区。此参数只有当参数Zone存在时才能生效。
 * @method integer getNatProductVersion() 获取NAT网关类型，1表示传统型NAT网关，2表示标准型NAT网关，默认值是1。
 * @method void setNatProductVersion(integer $NatProductVersion) 设置NAT网关类型，1表示传统型NAT网关，2表示标准型NAT网关，默认值是1。
 */
class CreateNatGatewayRequest extends AbstractModel
{
    /**
     * @var string NAT网关名称
     */
    public $NatGatewayName;

    /**
     * @var string VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     */
    public $VpcId;

    /**
     * @var integer NAT网关最大外网出带宽(单位：Mbps)，支持的参数值：20, 50, 100, 200, 500, 1000, 2000, 5000，默认: 100Mbps。  当以下NatProductVersion参数值为2即标准型时，此参数无需填写，默认为5000Mbps。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var integer NAT网关并发连接数上限，支持参数值：1000000、3000000、10000000，默认值为100000。  当以下NatProductVersion参数值为2即标准型时，此参数无需填写，默认为2000000。
     */
    public $MaxConcurrentConnection;

    /**
     * @var integer 新建弹性公网IP个数，系统会按您的要求创建对应数量的弹性公网IP，其中AddressCount和PublicAddresses两个参数至少填写一个。
     */
    public $AddressCount;

    /**
     * @var array 绑定NAT网关的已有弹性公网IP数组，其中AddressCount和PublicAddresses两个参数至少填写一个。 示例值：["139.199.232.119"]
     */
    public $PublicIpAddresses;

    /**
     * @var string 可用区，形如：`ap-guangzhou-1`。
     */
    public $Zone;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @var string NAT网关所属子网，已废弃
     * @deprecated
     */
    public $SubnetId;

    /**
     * @var integer 绑定NAT网关的弹性公网IP带宽值（单位：Mbps）。不填写此参数时：则该参数默认为弹性公网IP的带宽值，部分用户默认为该用户类型的弹性公网IP的带宽上限。
     */
    public $StockPublicIpAddressesBandwidthOut;

    /**
     * @var integer 需要申请公网IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
     */
    public $PublicIpAddressesBandwidthOut;

    /**
     * @var boolean 公网IP是否强制与NAT网关来自同可用区，true表示需要与NAT网关同可用区；false表示可与NAT网关不是同一个可用区。此参数只有当参数Zone存在时才能生效。
     */
    public $PublicIpFromSameZone;

    /**
     * @var integer NAT网关类型，1表示传统型NAT网关，2表示标准型NAT网关，默认值是1。
     */
    public $NatProductVersion;

    /**
     * @param string $NatGatewayName NAT网关名称
     * @param string $VpcId VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     * @param integer $InternetMaxBandwidthOut NAT网关最大外网出带宽(单位：Mbps)，支持的参数值：20, 50, 100, 200, 500, 1000, 2000, 5000，默认: 100Mbps。  当以下NatProductVersion参数值为2即标准型时，此参数无需填写，默认为5000Mbps。
     * @param integer $MaxConcurrentConnection NAT网关并发连接数上限，支持参数值：1000000、3000000、10000000，默认值为100000。  当以下NatProductVersion参数值为2即标准型时，此参数无需填写，默认为2000000。
     * @param integer $AddressCount 新建弹性公网IP个数，系统会按您的要求创建对应数量的弹性公网IP，其中AddressCount和PublicAddresses两个参数至少填写一个。
     * @param array $PublicIpAddresses 绑定NAT网关的已有弹性公网IP数组，其中AddressCount和PublicAddresses两个参数至少填写一个。 示例值：["139.199.232.119"]
     * @param string $Zone 可用区，形如：`ap-guangzhou-1`。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     * @param string $SubnetId NAT网关所属子网，已废弃
     * @param integer $StockPublicIpAddressesBandwidthOut 绑定NAT网关的弹性公网IP带宽值（单位：Mbps）。不填写此参数时：则该参数默认为弹性公网IP的带宽值，部分用户默认为该用户类型的弹性公网IP的带宽上限。
     * @param integer $PublicIpAddressesBandwidthOut 需要申请公网IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
     * @param boolean $PublicIpFromSameZone 公网IP是否强制与NAT网关来自同可用区，true表示需要与NAT网关同可用区；false表示可与NAT网关不是同一个可用区。此参数只有当参数Zone存在时才能生效。
     * @param integer $NatProductVersion NAT网关类型，1表示传统型NAT网关，2表示标准型NAT网关，默认值是1。
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
        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("MaxConcurrentConnection",$param) and $param["MaxConcurrentConnection"] !== null) {
            $this->MaxConcurrentConnection = $param["MaxConcurrentConnection"];
        }

        if (array_key_exists("AddressCount",$param) and $param["AddressCount"] !== null) {
            $this->AddressCount = $param["AddressCount"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("StockPublicIpAddressesBandwidthOut",$param) and $param["StockPublicIpAddressesBandwidthOut"] !== null) {
            $this->StockPublicIpAddressesBandwidthOut = $param["StockPublicIpAddressesBandwidthOut"];
        }

        if (array_key_exists("PublicIpAddressesBandwidthOut",$param) and $param["PublicIpAddressesBandwidthOut"] !== null) {
            $this->PublicIpAddressesBandwidthOut = $param["PublicIpAddressesBandwidthOut"];
        }

        if (array_key_exists("PublicIpFromSameZone",$param) and $param["PublicIpFromSameZone"] !== null) {
            $this->PublicIpFromSameZone = $param["PublicIpFromSameZone"];
        }

        if (array_key_exists("NatProductVersion",$param) and $param["NatProductVersion"] !== null) {
            $this->NatProductVersion = $param["NatProductVersion"];
        }
    }
}
