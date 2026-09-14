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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档摘要信息
 *
 * @method CategoryPath getCategoryPath() 获取<p>所属分类路径（包含分类 ID、从根节点开始的分类 ID 路径和分类名称路径）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryPath(CategoryPath $CategoryPath) 设置<p>所属分类路径（包含分类 ID、从根节点开始的分类 ID 路径和分类名称路径）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocId() 获取<p>文档 ID</p>
 * @method void setDocId(string $DocId) 设置<p>文档 ID</p>
 * @method KnowledgeScope getKnowledgeScope() 获取<p>知识生效范围（聚合生效作用域 + 标签条件）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeScope(KnowledgeScope $KnowledgeScope) 设置<p>知识生效范围（聚合生效作用域 + 标签条件）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocLifecycle getLifecycle() 获取<p>生命周期信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycle(DocLifecycle $Lifecycle) 设置<p>生命周期信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocMetadata getMetadata() 获取<p>元信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(DocMetadata $Metadata) 设置<p>元信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocOperator getOperatorInfo() 获取<p>操作者信息（聚合修改人 + 操作权限）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorInfo(DocOperator $OperatorInfo) 设置<p>操作者信息（聚合修改人 + 操作权限）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocTaskStatus getTaskStatus() 获取<p>任务状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(DocTaskStatus $TaskStatus) 设置<p>任务状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DocSummary extends AbstractModel
{
    /**
     * @var CategoryPath <p>所属分类路径（包含分类 ID、从根节点开始的分类 ID 路径和分类名称路径）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryPath;

    /**
     * @var string <p>文档 ID</p>
     */
    public $DocId;

    /**
     * @var KnowledgeScope <p>知识生效范围（聚合生效作用域 + 标签条件）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeScope;

    /**
     * @var DocLifecycle <p>生命周期信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lifecycle;

    /**
     * @var DocMetadata <p>元信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var DocOperator <p>操作者信息（聚合修改人 + 操作权限）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorInfo;

    /**
     * @var DocTaskStatus <p>任务状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @param CategoryPath $CategoryPath <p>所属分类路径（包含分类 ID、从根节点开始的分类 ID 路径和分类名称路径）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocId <p>文档 ID</p>
     * @param KnowledgeScope $KnowledgeScope <p>知识生效范围（聚合生效作用域 + 标签条件）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocLifecycle $Lifecycle <p>生命周期信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocMetadata $Metadata <p>元信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocOperator $OperatorInfo <p>操作者信息（聚合修改人 + 操作权限）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocTaskStatus $TaskStatus <p>任务状态信息</p>
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
        if (array_key_exists("CategoryPath",$param) and $param["CategoryPath"] !== null) {
            $this->CategoryPath = new CategoryPath();
            $this->CategoryPath->deserialize($param["CategoryPath"]);
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("KnowledgeScope",$param) and $param["KnowledgeScope"] !== null) {
            $this->KnowledgeScope = new KnowledgeScope();
            $this->KnowledgeScope->deserialize($param["KnowledgeScope"]);
        }

        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = new DocLifecycle();
            $this->Lifecycle->deserialize($param["Lifecycle"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new DocMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("OperatorInfo",$param) and $param["OperatorInfo"] !== null) {
            $this->OperatorInfo = new DocOperator();
            $this->OperatorInfo->deserialize($param["OperatorInfo"]);
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = new DocTaskStatus();
            $this->TaskStatus->deserialize($param["TaskStatus"]);
        }
    }
}
