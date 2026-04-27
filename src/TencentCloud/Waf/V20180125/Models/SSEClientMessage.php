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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对话消息结构体
 *
 * @method string getRole() 获取<p>对话角色，填user</p>
 * @method void setRole(string $Role) 设置<p>对话角色，填user</p>
 * @method string getContent() 获取<p>prompt内容</p>
 * @method void setContent(string $Content) 设置<p>prompt内容</p>
 * @method integer getContentType() 获取<p>检测类型，0是文本内容代答，目前只支持0，可以不传，默认值是0</p><p>枚举值：</p><ul><li>0： 文件内容代答</li></ul>
 * @method void setContentType(integer $ContentType) 设置<p>检测类型，0是文本内容代答，目前只支持0，可以不传，默认值是0</p><p>枚举值：</p><ul><li>0： 文件内容代答</li></ul>
 */
class SSEClientMessage extends AbstractModel
{
    /**
     * @var string <p>对话角色，填user</p>
     */
    public $Role;

    /**
     * @var string <p>prompt内容</p>
     */
    public $Content;

    /**
     * @var integer <p>检测类型，0是文本内容代答，目前只支持0，可以不传，默认值是0</p><p>枚举值：</p><ul><li>0： 文件内容代答</li></ul>
     */
    public $ContentType;

    /**
     * @param string $Role <p>对话角色，填user</p>
     * @param string $Content <p>prompt内容</p>
     * @param integer $ContentType <p>检测类型，0是文本内容代答，目前只支持0，可以不传，默认值是0</p><p>枚举值：</p><ul><li>0： 文件内容代答</li></ul>
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

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }
    }
}
