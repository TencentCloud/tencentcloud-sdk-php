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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务依赖边详情
 *
 * @method string getId() 获取边的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置边的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkKey() 获取边的key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkKey(string $LinkKey) 设置边的key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFrom() 获取边的源节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFrom(string $TaskFrom) 设置边的源节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTo() 获取边的目标节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTo(string $TaskTo) 设置边的目标节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkDependencyType() 获取父子任务之间的依赖关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkDependencyType(string $LinkDependencyType) 设置父子任务之间的依赖关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOffset() 获取父子任务之间依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(string $Offset) 设置父子任务之间依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkType() 获取边的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkType(string $LinkType) 设置边的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 */
class LinkOpsDto extends AbstractModel
{
    /**
     * @var string 边的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 边的key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkKey;

    /**
     * @var string 边的源节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFrom;

    /**
     * @var string 边的目标节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTo;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string 父子任务之间的依赖关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkDependencyType;

    /**
     * @var string 父子任务之间依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var string 边的类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkType;

    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @param string $Id 边的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkKey 边的key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFrom 边的源节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTo 边的目标节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkDependencyType 父子任务之间的依赖关系
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Offset 父子任务之间依赖偏移量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkType 边的类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("LinkKey",$param) and $param["LinkKey"] !== null) {
            $this->LinkKey = $param["LinkKey"];
        }

        if (array_key_exists("TaskFrom",$param) and $param["TaskFrom"] !== null) {
            $this->TaskFrom = $param["TaskFrom"];
        }

        if (array_key_exists("TaskTo",$param) and $param["TaskTo"] !== null) {
            $this->TaskTo = $param["TaskTo"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("LinkDependencyType",$param) and $param["LinkDependencyType"] !== null) {
            $this->LinkDependencyType = $param["LinkDependencyType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LinkType",$param) and $param["LinkType"] !== null) {
            $this->LinkType = $param["LinkType"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }
    }
}
