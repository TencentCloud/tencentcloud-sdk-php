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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库代理组详细信息
 *
 * @method ProxyGroup getProxyGroup() 获取数据库代理组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyGroup(ProxyGroup $ProxyGroup) 设置数据库代理组
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProxyGroupRwInfo getProxyGroupRwInfo() 获取数据库代理组读写分离信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyGroupRwInfo(ProxyGroupRwInfo $ProxyGroupRwInfo) 设置数据库代理组读写分离信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProxyNodes() 获取数据库代理节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyNodes(array $ProxyNodes) 设置数据库代理节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProxyConnectionPoolInfo getConnectionPool() 获取数据库代理连接池信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionPool(ProxyConnectionPoolInfo $ConnectionPool) 设置数据库代理连接池信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetAddrInfos() 获取数据库代理网络信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetAddrInfos(array $NetAddrInfos) 设置数据库代理网络信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取数据库代理任务集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置数据库代理任务集
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProxyGroupInfo extends AbstractModel
{
    /**
     * @var ProxyGroup 数据库代理组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyGroup;

    /**
     * @var ProxyGroupRwInfo 数据库代理组读写分离信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyGroupRwInfo;

    /**
     * @var array 数据库代理节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyNodes;

    /**
     * @var ProxyConnectionPoolInfo 数据库代理连接池信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionPool;

    /**
     * @var array 数据库代理网络信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetAddrInfos;

    /**
     * @var array 数据库代理任务集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @param ProxyGroup $ProxyGroup 数据库代理组
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProxyGroupRwInfo $ProxyGroupRwInfo 数据库代理组读写分离信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProxyNodes 数据库代理节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProxyConnectionPoolInfo $ConnectionPool 数据库代理连接池信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NetAddrInfos 数据库代理网络信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks 数据库代理任务集
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
        if (array_key_exists("ProxyGroup",$param) and $param["ProxyGroup"] !== null) {
            $this->ProxyGroup = new ProxyGroup();
            $this->ProxyGroup->deserialize($param["ProxyGroup"]);
        }

        if (array_key_exists("ProxyGroupRwInfo",$param) and $param["ProxyGroupRwInfo"] !== null) {
            $this->ProxyGroupRwInfo = new ProxyGroupRwInfo();
            $this->ProxyGroupRwInfo->deserialize($param["ProxyGroupRwInfo"]);
        }

        if (array_key_exists("ProxyNodes",$param) and $param["ProxyNodes"] !== null) {
            $this->ProxyNodes = [];
            foreach ($param["ProxyNodes"] as $key => $value){
                $obj = new ProxyNodeInfo();
                $obj->deserialize($value);
                array_push($this->ProxyNodes, $obj);
            }
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = new ProxyConnectionPoolInfo();
            $this->ConnectionPool->deserialize($param["ConnectionPool"]);
        }

        if (array_key_exists("NetAddrInfos",$param) and $param["NetAddrInfos"] !== null) {
            $this->NetAddrInfos = [];
            foreach ($param["NetAddrInfos"] as $key => $value){
                $obj = new NetAddr();
                $obj->deserialize($value);
                array_push($this->NetAddrInfos, $obj);
            }
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }
    }
}
