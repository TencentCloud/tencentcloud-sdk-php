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
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method integer getForward() 获取负载均衡实例。1：应用型，0：传统型，默认为应用型负载均衡实例。
 * @method void setForward(integer $Forward) 设置负载均衡实例。1：应用型，0：传统型，默认为应用型负载均衡实例。
 * @method string getLoadBalancerName() 获取负载均衡实例的名称，只用来创建一个的时候生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称重复的话，则系统将会自动生成此次创建的负载均衡实例的名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例的名称，只用来创建一个的时候生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称重复的话，则系统将会自动生成此次创建的负载均衡实例的名称。
 * @method string getVpcId() 获取负载均衡后端实例所属网络 ID，可以通过 DescribeVpcEx 接口获取。 不填则默认为基础网络。
 * @method void setVpcId(string $VpcId) 设置负载均衡后端实例所属网络 ID，可以通过 DescribeVpcEx 接口获取。 不填则默认为基础网络。
 * @method string getSubnetId() 获取在私有网络内购买内网负载均衡实例的时候需要指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。其他情况不用填写该字段。
 * @method void setSubnetId(string $SubnetId) 设置在私有网络内购买内网负载均衡实例的时候需要指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。其他情况不用填写该字段。
 * @method integer getProjectId() 获取负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。不填则属于默认项目。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。不填则属于默认项目。
 */

/**
 *CreateLoadBalancer请求参数结构体
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     */
    public $LoadBalancerType;

    /**
     * @var integer 负载均衡实例。1：应用型，0：传统型，默认为应用型负载均衡实例。
     */
    public $Forward;

    /**
     * @var string 负载均衡实例的名称，只用来创建一个的时候生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称重复的话，则系统将会自动生成此次创建的负载均衡实例的名称。
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡后端实例所属网络 ID，可以通过 DescribeVpcEx 接口获取。 不填则默认为基础网络。
     */
    public $VpcId;

    /**
     * @var string 在私有网络内购买内网负载均衡实例的时候需要指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。其他情况不用填写该字段。
     */
    public $SubnetId;

    /**
     * @var integer 负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。不填则属于默认项目。
     */
    public $ProjectId;
    /**
     * @param string $LoadBalancerType 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     * @param integer $Forward 负载均衡实例。1：应用型，0：传统型，默认为应用型负载均衡实例。
     * @param string $LoadBalancerName 负载均衡实例的名称，只用来创建一个的时候生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称重复的话，则系统将会自动生成此次创建的负载均衡实例的名称。
     * @param string $VpcId 负载均衡后端实例所属网络 ID，可以通过 DescribeVpcEx 接口获取。 不填则默认为基础网络。
     * @param string $SubnetId 在私有网络内购买内网负载均衡实例的时候需要指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。其他情况不用填写该字段。
     * @param integer $ProjectId 负载均衡实例所属的项目 ID，可以通过 DescribeProject 接口获取。不填则属于默认项目。
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
        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
