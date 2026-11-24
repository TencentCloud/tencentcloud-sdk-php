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
 * 提示词模板完整信息
 *
 * @method PromptTemplateProfile getProfile() 获取<p>提示词模板Profile</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProfile(PromptTemplateProfile $Profile) 设置<p>提示词模板Profile</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomVariableList() 获取<p>自定义变量列表</p>
 * @method void setCustomVariableList(array $CustomVariableList) 设置<p>自定义变量列表</p>
 * @method array getLabelList() 获取<p>标签列表</p>
 * @method void setLabelList(array $LabelList) 设置<p>标签列表</p>
 * @method string getPromptContent() 获取<p>提示词内容</p>
 * @method void setPromptContent(string $PromptContent) 设置<p>提示词内容</p>
 */
class PromptTemplate extends AbstractModel
{
    /**
     * @var PromptTemplateProfile <p>提示词模板Profile</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Profile;

    /**
     * @var array <p>自定义变量列表</p>
     */
    public $CustomVariableList;

    /**
     * @var array <p>标签列表</p>
     */
    public $LabelList;

    /**
     * @var string <p>提示词内容</p>
     */
    public $PromptContent;

    /**
     * @param PromptTemplateProfile $Profile <p>提示词模板Profile</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomVariableList <p>自定义变量列表</p>
     * @param array $LabelList <p>标签列表</p>
     * @param string $PromptContent <p>提示词内容</p>
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
        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new PromptTemplateProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("CustomVariableList",$param) and $param["CustomVariableList"] !== null) {
            $this->CustomVariableList = $param["CustomVariableList"];
        }

        if (array_key_exists("LabelList",$param) and $param["LabelList"] !== null) {
            $this->LabelList = [];
            foreach ($param["LabelList"] as $key => $value){
                $obj = new PromptTemplateLabel();
                $obj->deserialize($value);
                array_push($this->LabelList, $obj);
            }
        }

        if (array_key_exists("PromptContent",$param) and $param["PromptContent"] !== null) {
            $this->PromptContent = $param["PromptContent"];
        }
    }
}
