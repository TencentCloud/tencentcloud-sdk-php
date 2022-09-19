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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模板的预置参数
 *
 * @method array getTags() 获取模板tag列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置模板tag列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIcons() 获取模板图标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIcons(array $Icons) 设置模板图标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserDefinedTemplateParams getTemplates() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplates(UserDefinedTemplateParams $Templates) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomizeTemplatesPresetsInfo extends AbstractModel
{
    /**
     * @var array 模板tag列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 模板图标列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Icons;

    /**
     * @var UserDefinedTemplateParams 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Templates;

    /**
     * @param array $Tags 模板tag列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Icons 模板图标列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserDefinedTemplateParams $Templates 无
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Icons",$param) and $param["Icons"] !== null) {
            $this->Icons = $param["Icons"];
        }

        if (array_key_exists("Templates",$param) and $param["Templates"] !== null) {
            $this->Templates = new UserDefinedTemplateParams();
            $this->Templates->deserialize($param["Templates"]);
        }
    }
}
