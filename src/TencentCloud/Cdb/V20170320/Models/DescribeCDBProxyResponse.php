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
 * DescribeCDBProxy返回参数结构体
 *
 * @method BaseGroupInfo getBaseGroup() 获取代理组基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaseGroup(BaseGroupInfo $BaseGroup) 设置代理组基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Address getAddress() 获取代理组地址信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(Address $Address) 设置代理组地址信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProxyNodeInfo getProxyNode() 获取代理组节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyNode(ProxyNodeInfo $ProxyNode) 设置代理组节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method RWInfo getRWInstInfo() 获取读写分析信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRWInstInfo(RWInfo $RWInstInfo) 设置读写分析信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConnectionPoolInfo getConnectionPoolInfo() 获取连接池信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionPoolInfo(ConnectionPoolInfo $ConnectionPoolInfo) 设置连接池信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCDBProxyResponse extends AbstractModel
{
    /**
     * @var BaseGroupInfo 代理组基本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaseGroup;

    /**
     * @var Address 代理组地址信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var ProxyNodeInfo 代理组节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyNode;

    /**
     * @var RWInfo 读写分析信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RWInstInfo;

    /**
     * @var ConnectionPoolInfo 连接池信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionPoolInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param BaseGroupInfo $BaseGroup 代理组基本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Address $Address 代理组地址信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProxyNodeInfo $ProxyNode 代理组节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param RWInfo $RWInstInfo 读写分析信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConnectionPoolInfo $ConnectionPoolInfo 连接池信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
            $this->Address = new Address();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("ProxyNode",$param) and $param["ProxyNode"] !== null) {
            $this->ProxyNode = new ProxyNodeInfo();
            $this->ProxyNode->deserialize($param["ProxyNode"]);
        }

        if (array_key_exists("RWInstInfo",$param) and $param["RWInstInfo"] !== null) {
            $this->RWInstInfo = new RWInfo();
            $this->RWInstInfo->deserialize($param["RWInstInfo"]);
        }

        if (array_key_exists("ConnectionPoolInfo",$param) and $param["ConnectionPoolInfo"] !== null) {
            $this->ConnectionPoolInfo = new ConnectionPoolInfo();
            $this->ConnectionPoolInfo->deserialize($param["ConnectionPoolInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
