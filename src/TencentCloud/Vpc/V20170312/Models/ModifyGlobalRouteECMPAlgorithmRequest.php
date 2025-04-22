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
 * ModifyGlobalRouteECMPAlgorithm请求参数结构体
 *
 * @method string getVpcId() 获取VPC唯一Id。
 * @method void setVpcId(string $VpcId) 设置VPC唯一Id。
 * @method string getDestinationCidrBlock() 获取Ipv4目标网段。
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置Ipv4目标网段。
 * @method string getSubnetRouteAlgorithm() 获取支持的 ECMP算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。
 * @method void setSubnetRouteAlgorithm(string $SubnetRouteAlgorithm) 设置支持的 ECMP算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。
 * @method string getCdcId() 获取CDC 集群唯一 ID。
 * @method void setCdcId(string $CdcId) 设置CDC 集群唯一 ID。
 */
class ModifyGlobalRouteECMPAlgorithmRequest extends AbstractModel
{
    /**
     * @var string VPC唯一Id。
     */
    public $VpcId;

    /**
     * @var string Ipv4目标网段。
     */
    public $DestinationCidrBlock;

    /**
     * @var string 支持的 ECMP算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。
     */
    public $SubnetRouteAlgorithm;

    /**
     * @var string CDC 集群唯一 ID。
     */
    public $CdcId;

    /**
     * @param string $VpcId VPC唯一Id。
     * @param string $DestinationCidrBlock Ipv4目标网段。
     * @param string $SubnetRouteAlgorithm 支持的 ECMP算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。
     * @param string $CdcId CDC 集群唯一 ID。
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

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("SubnetRouteAlgorithm",$param) and $param["SubnetRouteAlgorithm"] !== null) {
            $this->SubnetRouteAlgorithm = $param["SubnetRouteAlgorithm"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
