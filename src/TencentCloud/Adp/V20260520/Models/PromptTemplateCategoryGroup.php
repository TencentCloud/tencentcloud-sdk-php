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
 * 提示词模板分类分组
 *
 * @method array getCategoryList() 获取分类列表
 * @method void setCategoryList(array $CategoryList) 设置分类列表
 * @method string getModule() 获取模块标识
 * @method void setModule(string $Module) 设置模块标识
 */
class PromptTemplateCategoryGroup extends AbstractModel
{
    /**
     * @var array 分类列表
     */
    public $CategoryList;

    /**
     * @var string 模块标识
     */
    public $Module;

    /**
     * @param array $CategoryList 分类列表
     * @param string $Module 模块标识
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
        if (array_key_exists("CategoryList",$param) and $param["CategoryList"] !== null) {
            $this->CategoryList = [];
            foreach ($param["CategoryList"] as $key => $value){
                $obj = new PromptTemplateCategory();
                $obj->deserialize($value);
                array_push($this->CategoryList, $obj);
            }
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }
    }
}
