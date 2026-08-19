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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字段样式配置
 *
 * @method string getType() 获取<p>类型</p>
 * @method void setType(string $Type) 设置<p>类型</p>
 * @method boolean getCopy() 获取<p>是否支持复制</p>
 * @method void setCopy(boolean $Copy) 设置<p>是否支持复制</p>
 * @method string getColor() 获取<p>颜色</p>
 * @method void setColor(string $Color) 设置<p>颜色</p>
 * @method string getURL() 获取<p>跳转url</p>
 * @method void setURL(string $URL) 设置<p>跳转url</p>
 */
class FieldStyle extends AbstractModel
{
    /**
     * @var string <p>类型</p>
     */
    public $Type;

    /**
     * @var boolean <p>是否支持复制</p>
     */
    public $Copy;

    /**
     * @var string <p>颜色</p>
     */
    public $Color;

    /**
     * @var string <p>跳转url</p>
     */
    public $URL;

    /**
     * @param string $Type <p>类型</p>
     * @param boolean $Copy <p>是否支持复制</p>
     * @param string $Color <p>颜色</p>
     * @param string $URL <p>跳转url</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Copy",$param) and $param["Copy"] !== null) {
            $this->Copy = $param["Copy"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }
    }
}
