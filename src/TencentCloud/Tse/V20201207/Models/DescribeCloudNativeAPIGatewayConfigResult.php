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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取云原生API网关实例网络配置结果。
 *
 * @method string getGatewayId() 获取网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置网关实例ID。
 * @method array getConfigList() 获取分组网络配置列表。
 * @method void setConfigList(array $ConfigList) 设置分组网络配置列表。
 * @method string getGroupSubnetId() 获取分组子网信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupSubnetId(string $GroupSubnetId) 设置分组子网信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupVpcId() 获取分组VPC信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupVpcId(string $GroupVpcId) 设置分组VPC信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置分组ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeCloudNativeAPIGatewayConfigResult extends AbstractModel
{
    /**
     * @var string 网关实例ID。
     */
    public $GatewayId;

    /**
     * @var array 分组网络配置列表。
     */
    public $ConfigList;

    /**
     * @var string 分组子网信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupSubnetId;

    /**
     * @var string 分组VPC信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupVpcId;

    /**
     * @var string 分组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @param string $GatewayId 网关实例ID。
     * @param array $ConfigList 分组网络配置列表。
     * @param string $GroupSubnetId 分组子网信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupVpcId 分组VPC信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 分组ID
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ConfigList",$param) and $param["ConfigList"] !== null) {
            $this->ConfigList = [];
            foreach ($param["ConfigList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayConfig();
                $obj->deserialize($value);
                array_push($this->ConfigList, $obj);
            }
        }

        if (array_key_exists("GroupSubnetId",$param) and $param["GroupSubnetId"] !== null) {
            $this->GroupSubnetId = $param["GroupSubnetId"];
        }

        if (array_key_exists("GroupVpcId",$param) and $param["GroupVpcId"] !== null) {
            $this->GroupVpcId = $param["GroupVpcId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
