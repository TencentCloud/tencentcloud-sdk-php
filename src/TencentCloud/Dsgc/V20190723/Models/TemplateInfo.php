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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 评估模版的详情数据
 *
 * @method integer getTemplateId() 获取模版id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(integer $TemplateId) 设置模版id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateName() 获取模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateName(string $TemplateName) 设置模版名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class TemplateInfo extends AbstractModel
{
    /**
     * @var integer 模版id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string 模版名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateName;

    /**
     * @param integer $TemplateId 模版id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateName 模版名称
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }
    }
}
