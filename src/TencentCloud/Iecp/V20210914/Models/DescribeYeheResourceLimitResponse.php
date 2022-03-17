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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeYeheResourceLimit返回参数结构体
 *
 * @method string getUin() 获取用户父账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户父账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateNodeLimit() 获取允许创建的节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateNodeLimit(integer $CreateNodeLimit) 设置允许创建的节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateClusterLimit() 获取允许创建的集群数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateClusterLimit(integer $CreateClusterLimit) 设置允许创建的集群数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnablePermMonitor() 获取是否有监控开启权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnablePermMonitor(boolean $EnablePermMonitor) 设置是否有监控开启权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnablePermAdminNode() 获取节点是否有admin的所有权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnablePermAdminNode(boolean $EnablePermAdminNode) 设置节点是否有admin的所有权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeYeheResourceLimitResponse extends AbstractModel
{
    /**
     * @var string 用户父账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var integer 允许创建的节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateNodeLimit;

    /**
     * @var integer 允许创建的集群数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateClusterLimit;

    /**
     * @var boolean 是否有监控开启权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnablePermMonitor;

    /**
     * @var boolean 节点是否有admin的所有权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnablePermAdminNode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Uin 用户父账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateNodeLimit 允许创建的节点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateClusterLimit 允许创建的集群数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnablePermMonitor 是否有监控开启权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnablePermAdminNode 节点是否有admin的所有权限
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CreateNodeLimit",$param) and $param["CreateNodeLimit"] !== null) {
            $this->CreateNodeLimit = $param["CreateNodeLimit"];
        }

        if (array_key_exists("CreateClusterLimit",$param) and $param["CreateClusterLimit"] !== null) {
            $this->CreateClusterLimit = $param["CreateClusterLimit"];
        }

        if (array_key_exists("EnablePermMonitor",$param) and $param["EnablePermMonitor"] !== null) {
            $this->EnablePermMonitor = $param["EnablePermMonitor"];
        }

        if (array_key_exists("EnablePermAdminNode",$param) and $param["EnablePermAdminNode"] !== null) {
            $this->EnablePermAdminNode = $param["EnablePermAdminNode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
