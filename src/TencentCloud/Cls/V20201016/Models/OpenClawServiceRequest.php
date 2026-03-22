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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenClawService请求参数结构体
 *
 * @method string getTag() 获取<p>标签类型</p><p>枚举值：</p><ul><li>OpenClaw： OpenClaw类型</li><li>ClawPro： ClawPro类型</li></ul>
 * @method void setTag(string $Tag) 设置<p>标签类型</p><p>枚举值：</p><ul><li>OpenClaw： OpenClaw类型</li><li>ClawPro： ClawPro类型</li></ul>
 */
class OpenClawServiceRequest extends AbstractModel
{
    /**
     * @var string <p>标签类型</p><p>枚举值：</p><ul><li>OpenClaw： OpenClaw类型</li><li>ClawPro： ClawPro类型</li></ul>
     */
    public $Tag;

    /**
     * @param string $Tag <p>标签类型</p><p>枚举值：</p><ul><li>OpenClaw： OpenClaw类型</li><li>ClawPro： ClawPro类型</li></ul>
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
