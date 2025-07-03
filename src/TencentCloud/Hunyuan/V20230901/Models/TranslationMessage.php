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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 翻译接口会话内容
 *
 * @method string getRole() 获取角色，可选值包括 system、user、assistant、 tool。
 * @method void setRole(string $Role) 设置角色，可选值包括 system、user、assistant、 tool。
 * @method string getContent() 获取文本内容
 * @method void setContent(string $Content) 设置文本内容
 */
class TranslationMessage extends AbstractModel
{
    /**
     * @var string 角色，可选值包括 system、user、assistant、 tool。
     */
    public $Role;

    /**
     * @var string 文本内容
     */
    public $Content;

    /**
     * @param string $Role 角色，可选值包括 system、user、assistant、 tool。
     * @param string $Content 文本内容
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
