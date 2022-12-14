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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源描述
 *
 * @method NodeResourceSpec getMasterResourceSpec() 获取描述Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterResourceSpec(NodeResourceSpec $MasterResourceSpec) 设置描述Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeResourceSpec getCoreResourceSpec() 获取描述Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoreResourceSpec(NodeResourceSpec $CoreResourceSpec) 设置描述Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeResourceSpec getTaskResourceSpec() 获取描述Taskr节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskResourceSpec(NodeResourceSpec $TaskResourceSpec) 设置描述Taskr节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodeResourceSpec getCommonResourceSpec() 获取描述Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommonResourceSpec(NodeResourceSpec $CommonResourceSpec) 设置描述Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMasterCount() 获取Master节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterCount(integer $MasterCount) 设置Master节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCoreCount() 获取Corer节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoreCount(integer $CoreCount) 设置Corer节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskCount() 获取Task节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCount(integer $TaskCount) 设置Task节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCommonCount() 获取Common节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommonCount(integer $CommonCount) 设置Common节点数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class AllNodeResourceSpec extends AbstractModel
{
    /**
     * @var NodeResourceSpec 描述Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterResourceSpec;

    /**
     * @var NodeResourceSpec 描述Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoreResourceSpec;

    /**
     * @var NodeResourceSpec 描述Taskr节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskResourceSpec;

    /**
     * @var NodeResourceSpec 描述Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommonResourceSpec;

    /**
     * @var integer Master节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterCount;

    /**
     * @var integer Corer节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoreCount;

    /**
     * @var integer Task节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCount;

    /**
     * @var integer Common节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommonCount;

    /**
     * @param NodeResourceSpec $MasterResourceSpec 描述Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeResourceSpec $CoreResourceSpec 描述Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeResourceSpec $TaskResourceSpec 描述Taskr节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodeResourceSpec $CommonResourceSpec 描述Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MasterCount Master节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CoreCount Corer节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskCount Task节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CommonCount Common节点数量
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
        if (array_key_exists("MasterResourceSpec",$param) and $param["MasterResourceSpec"] !== null) {
            $this->MasterResourceSpec = new NodeResourceSpec();
            $this->MasterResourceSpec->deserialize($param["MasterResourceSpec"]);
        }

        if (array_key_exists("CoreResourceSpec",$param) and $param["CoreResourceSpec"] !== null) {
            $this->CoreResourceSpec = new NodeResourceSpec();
            $this->CoreResourceSpec->deserialize($param["CoreResourceSpec"]);
        }

        if (array_key_exists("TaskResourceSpec",$param) and $param["TaskResourceSpec"] !== null) {
            $this->TaskResourceSpec = new NodeResourceSpec();
            $this->TaskResourceSpec->deserialize($param["TaskResourceSpec"]);
        }

        if (array_key_exists("CommonResourceSpec",$param) and $param["CommonResourceSpec"] !== null) {
            $this->CommonResourceSpec = new NodeResourceSpec();
            $this->CommonResourceSpec->deserialize($param["CommonResourceSpec"]);
        }

        if (array_key_exists("MasterCount",$param) and $param["MasterCount"] !== null) {
            $this->MasterCount = $param["MasterCount"];
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("CommonCount",$param) and $param["CommonCount"] !== null) {
            $this->CommonCount = $param["CommonCount"];
        }
    }
}
