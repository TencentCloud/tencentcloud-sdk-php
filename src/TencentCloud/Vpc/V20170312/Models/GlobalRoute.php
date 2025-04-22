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
 * 全局路由对象。
 *
 * @method string getVpcId() 获取作为出参展示，表示VPC唯一Id，。
 * @method void setVpcId(string $VpcId) 设置作为出参展示，表示VPC唯一Id，。
 * @method string getGlobalRouteId() 获取全局路由唯一Id。
 * @method void setGlobalRouteId(string $GlobalRouteId) 设置全局路由唯一Id。
 * @method string getDestinationCidrBlock() 获取Ipv4目标网段。
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置Ipv4目标网段。
 * @method string getGatewayType() 获取下一跳类型，支持 NORMAL_CVM。
 * @method void setGatewayType(string $GatewayType) 设置下一跳类型，支持 NORMAL_CVM。
 * @method string getGatewayId() 获取下一跳对象，如果GatewayType类型是NORMAL_CVM填写子机IP。
 * @method void setGatewayId(string $GatewayId) 设置下一跳对象，如果GatewayType类型是NORMAL_CVM填写子机IP。
 * @method string getDescription() 获取备注。
 * @method void setDescription(string $Description) 设置备注。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method string getSubnetRouteAlgorithm() 获取支持的 ECMP算法有：

- ECMP_QUINTUPLE_HASH：五元组hash
- ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash
- ECMP_DESTINATION_IP_HASH：目的IP hash
- ECMP_SOURCE_IP_HASH：源IP hash。
 * @method void setSubnetRouteAlgorithm(string $SubnetRouteAlgorithm) 设置支持的 ECMP算法有：

- ECMP_QUINTUPLE_HASH：五元组hash
- ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash
- ECMP_DESTINATION_IP_HASH：目的IP hash
- ECMP_SOURCE_IP_HASH：源IP hash。
 */
class GlobalRoute extends AbstractModel
{
    /**
     * @var string 作为出参展示，表示VPC唯一Id，。
     */
    public $VpcId;

    /**
     * @var string 全局路由唯一Id。
     */
    public $GlobalRouteId;

    /**
     * @var string Ipv4目标网段。
     */
    public $DestinationCidrBlock;

    /**
     * @var string 下一跳类型，支持 NORMAL_CVM。
     */
    public $GatewayType;

    /**
     * @var string 下一跳对象，如果GatewayType类型是NORMAL_CVM填写子机IP。
     */
    public $GatewayId;

    /**
     * @var string 备注。
     */
    public $Description;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 支持的 ECMP算法有：

- ECMP_QUINTUPLE_HASH：五元组hash
- ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash
- ECMP_DESTINATION_IP_HASH：目的IP hash
- ECMP_SOURCE_IP_HASH：源IP hash。
     */
    public $SubnetRouteAlgorithm;

    /**
     * @param string $VpcId 作为出参展示，表示VPC唯一Id，。
     * @param string $GlobalRouteId 全局路由唯一Id。
     * @param string $DestinationCidrBlock Ipv4目标网段。
     * @param string $GatewayType 下一跳类型，支持 NORMAL_CVM。
     * @param string $GatewayId 下一跳对象，如果GatewayType类型是NORMAL_CVM填写子机IP。
     * @param string $Description 备注。
     * @param string $CreatedTime 创建时间。
     * @param string $SubnetRouteAlgorithm 支持的 ECMP算法有：

- ECMP_QUINTUPLE_HASH：五元组hash
- ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash
- ECMP_DESTINATION_IP_HASH：目的IP hash
- ECMP_SOURCE_IP_HASH：源IP hash。
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

        if (array_key_exists("GlobalRouteId",$param) and $param["GlobalRouteId"] !== null) {
            $this->GlobalRouteId = $param["GlobalRouteId"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("SubnetRouteAlgorithm",$param) and $param["SubnetRouteAlgorithm"] !== null) {
            $this->SubnetRouteAlgorithm = $param["SubnetRouteAlgorithm"];
        }
    }
}
