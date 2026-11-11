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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单条对话消息，定义对话中的角色与内容。
 *
 * @method string getRole() 获取<p>角色</p><p>枚举值：</p><ul><li>system： 系统消息</li><li>user： 用户消息</li><li>assistant： 模型消息</li></ul>
 * @method void setRole(string $Role) 设置<p>角色</p><p>枚举值：</p><ul><li>system： 系统消息</li><li>user： 用户消息</li><li>assistant： 模型消息</li></ul>
 * @method array getContent() 获取<p>输入内容</p>
 * @method void setContent(array $Content) 设置<p>输入内容</p>
 */
class ModelChatMessageItem extends AbstractModel
{
    /**
     * @var string <p>角色</p><p>枚举值：</p><ul><li>system： 系统消息</li><li>user： 用户消息</li><li>assistant： 模型消息</li></ul>
     */
    public $Role;

    /**
     * @var array <p>输入内容</p>
     */
    public $Content;

    /**
     * @param string $Role <p>角色</p><p>枚举值：</p><ul><li>system： 系统消息</li><li>user： 用户消息</li><li>assistant： 模型消息</li></ul>
     * @param array $Content <p>输入内容</p>
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
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new ModelChatContentPart();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }
    }
}
