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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 翻译接口返回的内容（流式返回）
 *
 * @method string getRole() 获取角色名称。
 * @method void setRole(string $Role) 设置角色名称。
 * @method string getContent() 获取内容详情。
 * @method void setContent(string $Content) 设置内容详情。
 */
class TranslationDelta extends AbstractModel
{
    /**
     * @var string 角色名称。
     */
    public $Role;

    /**
     * @var string 内容详情。
     */
    public $Content;

    /**
     * @param string $Role 角色名称。
     * @param string $Content 内容详情。
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
