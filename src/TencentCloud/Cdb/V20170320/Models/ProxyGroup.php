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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据代理组信息
 *
 * @method BaseGroupInfo getBaseGroup() 获取代理基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaseGroup(BaseGroupInfo $BaseGroup) 设置代理基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAddress() 获取代理地址信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(array $Address) 设置代理地址信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConnectionPoolInfo getConnectionPoolInfo() 获取代理连接池信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionPoolInfo(ConnectionPoolInfo $ConnectionPoolInfo) 设置代理连接池信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProxyNode() 获取代理节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyNode(array $ProxyNode) 设置代理节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method RWInfo getRWInstInfo() 获取代理路由信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRWInstInfo(RWInfo $RWInstInfo) 设置代理路由信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProxyGroup extends AbstractModel
{
    /**
     * @var BaseGroupInfo 代理基本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaseGroup;

    /**
     * @var array 代理地址信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var ConnectionPoolInfo 代理连接池信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionPoolInfo;

    /**
     * @var array 代理节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyNode;

    /**
     * @var RWInfo 代理路由信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RWInstInfo;

    /**
     * @param BaseGroupInfo $BaseGroup 代理基本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Address 代理地址信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConnectionPoolInfo $ConnectionPoolInfo 代理连接池信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProxyNode 代理节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param RWInfo $RWInstInfo 代理路由信息
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
        if (array_key_exists("BaseGroup",$param) and $param["BaseGroup"] !== null) {
            $this->BaseGroup = new BaseGroupInfo();
            $this->BaseGroup->deserialize($param["BaseGroup"]);
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = [];
            foreach ($param["Address"] as $key => $value){
                $obj = new Address();
                $obj->deserialize($value);
                array_push($this->Address, $obj);
            }
        }

        if (array_key_exists("ConnectionPoolInfo",$param) and $param["ConnectionPoolInfo"] !== null) {
            $this->ConnectionPoolInfo = new ConnectionPoolInfo();
            $this->ConnectionPoolInfo->deserialize($param["ConnectionPoolInfo"]);
        }

        if (array_key_exists("ProxyNode",$param) and $param["ProxyNode"] !== null) {
            $this->ProxyNode = [];
            foreach ($param["ProxyNode"] as $key => $value){
                $obj = new ProxyNodeInfo();
                $obj->deserialize($value);
                array_push($this->ProxyNode, $obj);
            }
        }

        if (array_key_exists("RWInstInfo",$param) and $param["RWInstInfo"] !== null) {
            $this->RWInstInfo = new RWInfo();
            $this->RWInstInfo->deserialize($param["RWInstInfo"]);
        }
    }
}
