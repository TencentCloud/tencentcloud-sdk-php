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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话内容，按对话时间从旧到新在数组中排列，长度受模型窗口大小限制。
 *
 * @method string getRole() 获取角色, ‘system', ‘user'，'assistant'或者'tool', 在message中, 除了system，其他必须是user与assistant交替(一问一答) 
 * @method void setRole(string $Role) 设置角色, ‘system', ‘user'，'assistant'或者'tool', 在message中, 除了system，其他必须是user与assistant交替(一问一答) 
 * @method string getContent() 获取具体文本内容
 * @method void setContent(string $Content) 设置具体文本内容
 */
class Message extends AbstractModel
{
    /**
     * @var string 角色, ‘system', ‘user'，'assistant'或者'tool', 在message中, 除了system，其他必须是user与assistant交替(一问一答) 
     */
    public $Role;

    /**
     * @var string 具体文本内容
     */
    public $Content;

    /**
     * @param string $Role 角色, ‘system', ‘user'，'assistant'或者'tool', 在message中, 除了system，其他必须是user与assistant交替(一问一答) 
     * @param string $Content 具体文本内容
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
