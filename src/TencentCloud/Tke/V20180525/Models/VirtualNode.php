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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 虚拟节点
 *
 * @method string getName() 获取虚拟节点名称
 * @method void setName(string $Name) 设置虚拟节点名称
 * @method string getSubnetId() 获取虚拟节点所属子网
 * @method void setSubnetId(string $SubnetId) 设置虚拟节点所属子网
 * @method string getPhase() 获取虚拟节点状态
 * @method void setPhase(string $Phase) 设置虚拟节点状态
 * @method string getCreatedTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class VirtualNode extends AbstractModel
{
    /**
     * @var string 虚拟节点名称
     */
    public $Name;

    /**
     * @var string 虚拟节点所属子网
     */
    public $SubnetId;

    /**
     * @var string 虚拟节点状态
     */
    public $Phase;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @param string $Name 虚拟节点名称
     * @param string $SubnetId 虚拟节点所属子网
     * @param string $Phase 虚拟节点状态
     * @param string $CreatedTime 创建时间
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
