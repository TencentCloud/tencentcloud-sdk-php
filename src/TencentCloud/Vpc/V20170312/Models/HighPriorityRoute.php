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
 * 高优路由表条目信息
 *
 * @method string getHighPriorityRouteTableId() 获取高优路由表唯一 ID
 * @method void setHighPriorityRouteTableId(string $HighPriorityRouteTableId) 设置高优路由表唯一 ID
 * @method string getHighPriorityRouteId() 获取高优路由表条目唯一 ID
 * @method void setHighPriorityRouteId(string $HighPriorityRouteId) 设置高优路由表条目唯一 ID
 * @method string getDestinationCidrBlock() 获取目标网段
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置目标网段
 * @method string getGatewayType() 获取网关类型
 * @method void setGatewayType(string $GatewayType) 设置网关类型
 * @method string getGatewayId() 获取网关唯一ID
 * @method void setGatewayId(string $GatewayId) 设置网关唯一ID
 * @method string getDescription() 获取高优路由条目描述
 * @method void setDescription(string $Description) 设置高优路由条目描述
 * @method string getSubnetRouteAlgorithm() 获取ECMP算法，支持的算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。
 * @method void setSubnetRouteAlgorithm(string $SubnetRouteAlgorithm) 设置ECMP算法，支持的算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。
 * @method boolean getIsCdc() 获取出参展示，是否为CDC属性高优路由
 * @method void setIsCdc(boolean $IsCdc) 设置出参展示，是否为CDC属性高优路由
 * @method string getCdcId() 获取出参展示，CDC 唯一ID
 * @method void setCdcId(string $CdcId) 设置出参展示，CDC 唯一ID
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 */
class HighPriorityRoute extends AbstractModel
{
    /**
     * @var string 高优路由表唯一 ID
     */
    public $HighPriorityRouteTableId;

    /**
     * @var string 高优路由表条目唯一 ID
     */
    public $HighPriorityRouteId;

    /**
     * @var string 目标网段
     */
    public $DestinationCidrBlock;

    /**
     * @var string 网关类型
     */
    public $GatewayType;

    /**
     * @var string 网关唯一ID
     */
    public $GatewayId;

    /**
     * @var string 高优路由条目描述
     */
    public $Description;

    /**
     * @var string ECMP算法，支持的算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。
     */
    public $SubnetRouteAlgorithm;

    /**
     * @var boolean 出参展示，是否为CDC属性高优路由
     */
    public $IsCdc;

    /**
     * @var string 出参展示，CDC 唯一ID
     */
    public $CdcId;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @param string $HighPriorityRouteTableId 高优路由表唯一 ID
     * @param string $HighPriorityRouteId 高优路由表条目唯一 ID
     * @param string $DestinationCidrBlock 目标网段
     * @param string $GatewayType 网关类型
     * @param string $GatewayId 网关唯一ID
     * @param string $Description 高优路由条目描述
     * @param string $SubnetRouteAlgorithm ECMP算法，支持的算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。
     * @param boolean $IsCdc 出参展示，是否为CDC属性高优路由
     * @param string $CdcId 出参展示，CDC 唯一ID
     * @param string $CreatedTime 创建时间。
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
        if (array_key_exists("HighPriorityRouteTableId",$param) and $param["HighPriorityRouteTableId"] !== null) {
            $this->HighPriorityRouteTableId = $param["HighPriorityRouteTableId"];
        }

        if (array_key_exists("HighPriorityRouteId",$param) and $param["HighPriorityRouteId"] !== null) {
            $this->HighPriorityRouteId = $param["HighPriorityRouteId"];
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

        if (array_key_exists("SubnetRouteAlgorithm",$param) and $param["SubnetRouteAlgorithm"] !== null) {
            $this->SubnetRouteAlgorithm = $param["SubnetRouteAlgorithm"];
        }

        if (array_key_exists("IsCdc",$param) and $param["IsCdc"] !== null) {
            $this->IsCdc = $param["IsCdc"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
