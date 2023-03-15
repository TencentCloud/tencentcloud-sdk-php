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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC接入点信息
 *
 * @method string getVpcId() 获取vpc的id
 * @method void setVpcId(string $VpcId) 设置vpc的id
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method string getVpcEndpoint() 获取vpc接入点信息
 * @method void setVpcEndpoint(string $VpcEndpoint) 设置vpc接入点信息
 * @method string getVpcDataStreamEndpointStatus() 获取vpc接入点状态
OFF/ON/CREATING/DELETING
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcDataStreamEndpointStatus(string $VpcDataStreamEndpointStatus) 设置vpc接入点状态
OFF/ON/CREATING/DELETING
注意：此字段可能返回 null，表示取不到有效值。
 */
class VpcEndpointInfo extends AbstractModel
{
    /**
     * @var string vpc的id
     */
    public $VpcId;

    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var string vpc接入点信息
     */
    public $VpcEndpoint;

    /**
     * @var string vpc接入点状态
OFF/ON/CREATING/DELETING
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcDataStreamEndpointStatus;

    /**
     * @param string $VpcId vpc的id
     * @param string $SubnetId 子网id
     * @param string $VpcEndpoint vpc接入点信息
     * @param string $VpcDataStreamEndpointStatus vpc接入点状态
OFF/ON/CREATING/DELETING
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcEndpoint",$param) and $param["VpcEndpoint"] !== null) {
            $this->VpcEndpoint = $param["VpcEndpoint"];
        }

        if (array_key_exists("VpcDataStreamEndpointStatus",$param) and $param["VpcDataStreamEndpointStatus"] !== null) {
            $this->VpcDataStreamEndpointStatus = $param["VpcDataStreamEndpointStatus"];
        }
    }
}
