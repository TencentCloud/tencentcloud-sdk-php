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
 * SkillCategory Skill 分类信息。
 *
 * @method string getCategoryKey() 获取分类标识
 * @method void setCategoryKey(string $CategoryKey) 设置分类标识
 * @method string getCategoryName() 获取分类名称
 * @method void setCategoryName(string $CategoryName) 设置分类名称
 */
class SkillCategory extends AbstractModel
{
    /**
     * @var string 分类标识
     */
    public $CategoryKey;

    /**
     * @var string 分类名称
     */
    public $CategoryName;

    /**
     * @param string $CategoryKey 分类标识
     * @param string $CategoryName 分类名称
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
        if (array_key_exists("CategoryKey",$param) and $param["CategoryKey"] !== null) {
            $this->CategoryKey = $param["CategoryKey"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }
    }
}
