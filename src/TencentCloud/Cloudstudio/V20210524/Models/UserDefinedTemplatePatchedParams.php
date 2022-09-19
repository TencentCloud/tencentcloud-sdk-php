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
 * 用户自定义模板Patched参数
 *
 * @method string getSource() 获取模板来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置模板来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIcon() 获取模板图标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIcon(string $Icon) 设置模板图标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取模板描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置模板描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取模板标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置模板标签列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserDefinedTemplatePatchedParams extends AbstractModel
{
    /**
     * @var string 模板来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 模板名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 模板图标地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Icon;

    /**
     * @var string 模板描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 模板标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $Source 模板来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Icon 模板图标地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 模板描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 模板标签列表
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
