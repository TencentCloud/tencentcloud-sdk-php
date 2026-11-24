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
 * 提示词模板基本信息
 *
 * @method PromptTemplateCategory getCategory() 获取<p>分类</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(PromptTemplateCategory $Category) 设置<p>分类</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getName() 获取<p>模板名称</p>
 * @method void setName(string $Name) 设置<p>模板名称</p>
 * @method string getPromptTemplateId() 获取<p>提示词模板ID</p>
 * @method void setPromptTemplateId(string $PromptTemplateId) 设置<p>提示词模板ID</p>
 * @method integer getPromptTemplateType() 获取<p>模板类型。1-预置模板, 2-自定义模板</p>
 * @method void setPromptTemplateType(integer $PromptTemplateType) 设置<p>模板类型。1-预置模板, 2-自定义模板</p>
 * @method string getSpaceId() 获取<p>空间ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间ID</p>
 * @method Audit getAudit() 获取<p>审计信息</p>
 * @method void setAudit(Audit $Audit) 设置<p>审计信息</p>
 */
class PromptTemplateProfile extends AbstractModel
{
    /**
     * @var PromptTemplateCategory <p>分类</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>模板名称</p>
     */
    public $Name;

    /**
     * @var string <p>提示词模板ID</p>
     */
    public $PromptTemplateId;

    /**
     * @var integer <p>模板类型。1-预置模板, 2-自定义模板</p>
     */
    public $PromptTemplateType;

    /**
     * @var string <p>空间ID</p>
     */
    public $SpaceId;

    /**
     * @var Audit <p>审计信息</p>
     */
    public $Audit;

    /**
     * @param PromptTemplateCategory $Category <p>分类</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
     * @param string $Name <p>模板名称</p>
     * @param string $PromptTemplateId <p>提示词模板ID</p>
     * @param integer $PromptTemplateType <p>模板类型。1-预置模板, 2-自定义模板</p>
     * @param string $SpaceId <p>空间ID</p>
     * @param Audit $Audit <p>审计信息</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = new PromptTemplateCategory();
            $this->Category->deserialize($param["Category"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PromptTemplateId",$param) and $param["PromptTemplateId"] !== null) {
            $this->PromptTemplateId = $param["PromptTemplateId"];
        }

        if (array_key_exists("PromptTemplateType",$param) and $param["PromptTemplateType"] !== null) {
            $this->PromptTemplateType = $param["PromptTemplateType"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new Audit();
            $this->Audit->deserialize($param["Audit"]);
        }
    }
}
