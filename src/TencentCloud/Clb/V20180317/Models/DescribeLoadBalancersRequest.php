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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getLoadBalancerIds() 获取负载均衡实例 ID。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置负载均衡实例 ID。
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method integer getForward() 获取1：应用型，0：传统型。
 * @method void setForward(integer $Forward) 设置1：应用型，0：传统型。
 * @method string getLoadBalancerName() 获取负载均衡实例名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例名称。
 * @method string getDomain() 获取腾讯云为负载均衡实例分配的域名，应用型负载均衡该字段无意义。
 * @method void setDomain(string $Domain) 设置腾讯云为负载均衡实例分配的域名，应用型负载均衡该字段无意义。
 * @method array getLoadBalancerVips() 获取负载均衡实例的 VIP 地址，支持多个。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡实例的 VIP 地址，支持多个。
 * @method array getBackendPublicIps() 获取后端云服务器的外网 IP。
 * @method void setBackendPublicIps(array $BackendPublicIps) 设置后端云服务器的外网 IP。
 * @method array getBackendPrivateIps() 获取后端云服务器的内网 IP。
 * @method void setBackendPrivateIps(array $BackendPrivateIps) 设置后端云服务器的内网 IP。
 * @method integer getOffset() 获取数据偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认为 0。
 * @method integer getLimit() 获取返回负载均衡个数，默认为 20。
 * @method void setLimit(integer $Limit) 设置返回负载均衡个数，默认为 20。
 * @method string getOrderBy() 获取排序字段，支持以下字段：LoadBalancerName，CreateTime，Domain，LoadBalancerType。
 * @method void setOrderBy(string $OrderBy) 设置排序字段，支持以下字段：LoadBalancerName，CreateTime，Domain，LoadBalancerType。
 * @method integer getOrderType() 获取1：倒序，0：顺序，默认按照创建时间倒序。
 * @method void setOrderType(integer $OrderType) 设置1：倒序，0：顺序，默认按照创建时间倒序。
 * @method string getSearchKey() 获取搜索字段，模糊匹配名称、域名、VIP。
 * @method void setSearchKey(string $SearchKey) 设置搜索字段，模糊匹配名称、域名、VIP。
 * @method integer getProjectId() 获取负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。
 * @method integer getWithRs() 获取查询的负载均衡是否绑定后端服务器，0：没有绑定云服务器，1：绑定云服务器，-1：查询全部。
 * @method void setWithRs(integer $WithRs) 设置查询的负载均衡是否绑定后端服务器，0：没有绑定云服务器，1：绑定云服务器，-1：查询全部。
 * @method string getVpcId() 获取负载均衡实例所属私有网络，如 vpc-bhqkbhdx，
基础网络不支持通过VpcId查询。
 * @method void setVpcId(string $VpcId) 设置负载均衡实例所属私有网络，如 vpc-bhqkbhdx，
基础网络不支持通过VpcId查询。
 * @method string getSecurityGroup() 获取安全组ID，如 sg-m1cc9123
 * @method void setSecurityGroup(string $SecurityGroup) 设置安全组ID，如 sg-m1cc9123
 */

/**
 *DescribeLoadBalancers请求参数结构体
 */
class DescribeLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array 负载均衡实例 ID。
     */
    public $LoadBalancerIds;

    /**
     * @var string 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     */
    public $LoadBalancerType;

    /**
     * @var integer 1：应用型，0：传统型。
     */
    public $Forward;

    /**
     * @var string 负载均衡实例名称。
     */
    public $LoadBalancerName;

    /**
     * @var string 腾讯云为负载均衡实例分配的域名，应用型负载均衡该字段无意义。
     */
    public $Domain;

    /**
     * @var array 负载均衡实例的 VIP 地址，支持多个。
     */
    public $LoadBalancerVips;

    /**
     * @var array 后端云服务器的外网 IP。
     */
    public $BackendPublicIps;

    /**
     * @var array 后端云服务器的内网 IP。
     */
    public $BackendPrivateIps;

    /**
     * @var integer 数据偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 返回负载均衡个数，默认为 20。
     */
    public $Limit;

    /**
     * @var string 排序字段，支持以下字段：LoadBalancerName，CreateTime，Domain，LoadBalancerType。
     */
    public $OrderBy;

    /**
     * @var integer 1：倒序，0：顺序，默认按照创建时间倒序。
     */
    public $OrderType;

    /**
     * @var string 搜索字段，模糊匹配名称、域名、VIP。
     */
    public $SearchKey;

    /**
     * @var integer 负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。
     */
    public $ProjectId;

    /**
     * @var integer 查询的负载均衡是否绑定后端服务器，0：没有绑定云服务器，1：绑定云服务器，-1：查询全部。
     */
    public $WithRs;

    /**
     * @var string 负载均衡实例所属私有网络，如 vpc-bhqkbhdx，
基础网络不支持通过VpcId查询。
     */
    public $VpcId;

    /**
     * @var string 安全组ID，如 sg-m1cc9123
     */
    public $SecurityGroup;
    /**
     * @param array $LoadBalancerIds 负载均衡实例 ID。
     * @param string $LoadBalancerType 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     * @param integer $Forward 1：应用型，0：传统型。
     * @param string $LoadBalancerName 负载均衡实例名称。
     * @param string $Domain 腾讯云为负载均衡实例分配的域名，应用型负载均衡该字段无意义。
     * @param array $LoadBalancerVips 负载均衡实例的 VIP 地址，支持多个。
     * @param array $BackendPublicIps 后端云服务器的外网 IP。
     * @param array $BackendPrivateIps 后端云服务器的内网 IP。
     * @param integer $Offset 数据偏移量，默认为 0。
     * @param integer $Limit 返回负载均衡个数，默认为 20。
     * @param string $OrderBy 排序字段，支持以下字段：LoadBalancerName，CreateTime，Domain，LoadBalancerType。
     * @param integer $OrderType 1：倒序，0：顺序，默认按照创建时间倒序。
     * @param string $SearchKey 搜索字段，模糊匹配名称、域名、VIP。
     * @param integer $ProjectId 负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。
     * @param integer $WithRs 查询的负载均衡是否绑定后端服务器，0：没有绑定云服务器，1：绑定云服务器，-1：查询全部。
     * @param string $VpcId 负载均衡实例所属私有网络，如 vpc-bhqkbhdx，
基础网络不支持通过VpcId查询。
     * @param string $SecurityGroup 安全组ID，如 sg-m1cc9123
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("BackendPublicIps",$param) and $param["BackendPublicIps"] !== null) {
            $this->BackendPublicIps = $param["BackendPublicIps"];
        }

        if (array_key_exists("BackendPrivateIps",$param) and $param["BackendPrivateIps"] !== null) {
            $this->BackendPrivateIps = $param["BackendPrivateIps"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WithRs",$param) and $param["WithRs"] !== null) {
            $this->WithRs = $param["WithRs"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }
    }
}
