<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * CreateLoadBalancer请求参数结构体
 *
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method integer getForward() 获取负载均衡实例的类型。1：通用的负载均衡实例，目前只支持传入1
 * @method void setForward(integer $Forward) 设置负载均衡实例的类型。1：通用的负载均衡实例，目前只支持传入1
 * @method string getLoadBalancerName() 获取负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
 * @method string getVpcId() 获取负载均衡后端目标设备所属的网络 ID，如vpc-12345678，可以通过 DescribeVpcEx 接口获取。 不传此参数则默认为基础网络（'0'）。
 * @method void setVpcId(string $VpcId) 设置负载均衡后端目标设备所属的网络 ID，如vpc-12345678，可以通过 DescribeVpcEx 接口获取。 不传此参数则默认为基础网络（'0'）。
 * @method string getSubnetId() 获取在私有网络内购买内网负载均衡实例的情况下，必须指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。
 * @method void setSubnetId(string $SubnetId) 设置在私有网络内购买内网负载均衡实例的情况下，必须指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。
 * @method integer getProjectId() 获取负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。不传此参数则视为默认项目。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。不传此参数则视为默认项目。
 * @method string getAddressIPVersion() 获取仅适用于公网负载均衡。IP版本，可取值：IPV4、IPV6、IPv6FullChain，默认值 IPV4。
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置仅适用于公网负载均衡。IP版本，可取值：IPV4、IPV6、IPv6FullChain，默认值 IPV4。
 * @method integer getNumber() 获取创建负载均衡的个数，默认值 1。
 * @method void setNumber(integer $Number) 设置创建负载均衡的个数，默认值 1。
 * @method string getMasterZoneId() 获取仅适用于公网负载均衡。设置跨可用区容灾时的主可用区ID，例如 100001 或 ap-guangzhou-1
注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区，平台将为您自动选择最佳备可用区。可通过 DescribeMasterZones 接口查询一个地域的主可用区的列表。
 * @method void setMasterZoneId(string $MasterZoneId) 设置仅适用于公网负载均衡。设置跨可用区容灾时的主可用区ID，例如 100001 或 ap-guangzhou-1
注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区，平台将为您自动选择最佳备可用区。可通过 DescribeMasterZones 接口查询一个地域的主可用区的列表。
 * @method string getZoneId() 获取仅适用于公网负载均衡。可用区ID，指定可用区以创建负载均衡实例。如：ap-guangzhou-1
 * @method void setZoneId(string $ZoneId) 设置仅适用于公网负载均衡。可用区ID，指定可用区以创建负载均衡实例。如：ap-guangzhou-1
 * @method InternetAccessible getInternetAccessible() 获取仅适用于公网负载均衡。负载均衡的网络计费模式。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置仅适用于公网负载均衡。负载均衡的网络计费模式。
 * @method string getVipIsp() 获取仅适用于公网负载均衡。CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。
 * @method void setVipIsp(string $VipIsp) 设置仅适用于公网负载均衡。CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。
 * @method array getTags() 获取购买负载均衡同时，给负载均衡打上标签
 * @method void setTags(array $Tags) 设置购买负载均衡同时，给负载均衡打上标签
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     */
    public $LoadBalancerType;

    /**
     * @var integer 负载均衡实例的类型。1：通用的负载均衡实例，目前只支持传入1
     */
    public $Forward;

    /**
     * @var string 负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡后端目标设备所属的网络 ID，如vpc-12345678，可以通过 DescribeVpcEx 接口获取。 不传此参数则默认为基础网络（'0'）。
     */
    public $VpcId;

    /**
     * @var string 在私有网络内购买内网负载均衡实例的情况下，必须指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。
     */
    public $SubnetId;

    /**
     * @var integer 负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。不传此参数则视为默认项目。
     */
    public $ProjectId;

    /**
     * @var string 仅适用于公网负载均衡。IP版本，可取值：IPV4、IPV6、IPv6FullChain，默认值 IPV4。
     */
    public $AddressIPVersion;

    /**
     * @var integer 创建负载均衡的个数，默认值 1。
     */
    public $Number;

    /**
     * @var string 仅适用于公网负载均衡。设置跨可用区容灾时的主可用区ID，例如 100001 或 ap-guangzhou-1
注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区，平台将为您自动选择最佳备可用区。可通过 DescribeMasterZones 接口查询一个地域的主可用区的列表。
     */
    public $MasterZoneId;

    /**
     * @var string 仅适用于公网负载均衡。可用区ID，指定可用区以创建负载均衡实例。如：ap-guangzhou-1
     */
    public $ZoneId;

    /**
     * @var InternetAccessible 仅适用于公网负载均衡。负载均衡的网络计费模式。
     */
    public $InternetAccessible;

    /**
     * @var string 仅适用于公网负载均衡。CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。
     */
    public $VipIsp;

    /**
     * @var array 购买负载均衡同时，给负载均衡打上标签
     */
    public $Tags;

    /**
     * @param string $LoadBalancerType 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     * @param integer $Forward 负载均衡实例的类型。1：通用的负载均衡实例，目前只支持传入1
     * @param string $LoadBalancerName 负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
     * @param string $VpcId 负载均衡后端目标设备所属的网络 ID，如vpc-12345678，可以通过 DescribeVpcEx 接口获取。 不传此参数则默认为基础网络（'0'）。
     * @param string $SubnetId 在私有网络内购买内网负载均衡实例的情况下，必须指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。
     * @param integer $ProjectId 负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。不传此参数则视为默认项目。
     * @param string $AddressIPVersion 仅适用于公网负载均衡。IP版本，可取值：IPV4、IPV6、IPv6FullChain，默认值 IPV4。
     * @param integer $Number 创建负载均衡的个数，默认值 1。
     * @param string $MasterZoneId 仅适用于公网负载均衡。设置跨可用区容灾时的主可用区ID，例如 100001 或 ap-guangzhou-1
注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区，平台将为您自动选择最佳备可用区。可通过 DescribeMasterZones 接口查询一个地域的主可用区的列表。
     * @param string $ZoneId 仅适用于公网负载均衡。可用区ID，指定可用区以创建负载均衡实例。如：ap-guangzhou-1
     * @param InternetAccessible $InternetAccessible 仅适用于公网负载均衡。负载均衡的网络计费模式。
     * @param string $VipIsp 仅适用于公网负载均衡。CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通，如果不指定本参数，则默认使用BGP。可通过 DescribeSingleIsp 接口查询一个地域所支持的Isp。如果指定运营商，则网络计费式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。
     * @param array $Tags 购买负载均衡同时，给负载均衡打上标签
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
        if (array_key_exists('LoadBalancerType',$param) and $param['LoadBalancerType'] !== null) {
            $this->LoadBalancerType = $param['LoadBalancerType'];
        }

        if (array_key_exists('Forward',$param) and $param['Forward'] !== null) {
            $this->Forward = $param['Forward'];
        }

        if (array_key_exists('LoadBalancerName',$param) and $param['LoadBalancerName'] !== null) {
            $this->LoadBalancerName = $param['LoadBalancerName'];
        }

        if (array_key_exists('VpcId',$param) and $param['VpcId'] !== null) {
            $this->VpcId = $param['VpcId'];
        }

        if (array_key_exists('SubnetId',$param) and $param['SubnetId'] !== null) {
            $this->SubnetId = $param['SubnetId'];
        }

        if (array_key_exists('ProjectId',$param) and $param['ProjectId'] !== null) {
            $this->ProjectId = $param['ProjectId'];
        }

        if (array_key_exists('AddressIPVersion',$param) and $param['AddressIPVersion'] !== null) {
            $this->AddressIPVersion = $param['AddressIPVersion'];
        }

        if (array_key_exists('Number',$param) and $param['Number'] !== null) {
            $this->Number = $param['Number'];
        }

        if (array_key_exists('MasterZoneId',$param) and $param['MasterZoneId'] !== null) {
            $this->MasterZoneId = $param['MasterZoneId'];
        }

        if (array_key_exists('ZoneId',$param) and $param['ZoneId'] !== null) {
            $this->ZoneId = $param['ZoneId'];
        }

        if (array_key_exists('InternetAccessible',$param) and $param['InternetAccessible'] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param['InternetAccessible']);
        }

        if (array_key_exists('VipIsp',$param) and $param['VipIsp'] !== null) {
            $this->VipIsp = $param['VipIsp'];
        }

        if (array_key_exists('Tags',$param) and $param['Tags'] !== null) {
            $this->Tags = [];
            foreach ($param['Tags'] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
