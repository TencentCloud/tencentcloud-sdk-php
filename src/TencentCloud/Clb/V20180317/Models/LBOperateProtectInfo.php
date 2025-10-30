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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡的操作保护信息
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID。
 * @method boolean getProtectState() 获取保护状态，true：表示开启了操作保护，false：表示未开启操作保护。
 * @method void setProtectState(boolean $ProtectState) 设置保护状态，true：表示开启了操作保护，false：表示未开启操作保护。
 * @method string getOperatorUin() 获取操作保护的设置uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUin(string $OperatorUin) 设置操作保护的设置uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取设置操作保护时的描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置设置操作保护时的描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取最后修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置最后修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LBOperateProtectInfo extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID。
     */
    public $LoadBalancerId;

    /**
     * @var boolean 保护状态，true：表示开启了操作保护，false：表示未开启操作保护。
     */
    public $ProtectState;

    /**
     * @var string 操作保护的设置uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUin;

    /**
     * @var string 设置操作保护时的描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 最后修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID。
     * @param boolean $ProtectState 保护状态，true：表示开启了操作保护，false：表示未开启操作保护。
     * @param string $OperatorUin 操作保护的设置uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 设置操作保护时的描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 最后修改时间。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ProtectState",$param) and $param["ProtectState"] !== null) {
            $this->ProtectState = $param["ProtectState"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
