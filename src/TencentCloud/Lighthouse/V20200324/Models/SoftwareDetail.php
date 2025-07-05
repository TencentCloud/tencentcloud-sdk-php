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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述镜像软件详细信息。
 *
 * @method string getKey() 获取软件的属性标识
 * @method void setKey(string $Key) 设置软件的属性标识
 * @method string getTitle() 获取软件的属性标识描述
 * @method void setTitle(string $Title) 设置软件的属性标识描述
 * @method string getValue() 获取软件的属性值
 * @method void setValue(string $Value) 设置软件的属性值
 */
class SoftwareDetail extends AbstractModel
{
    /**
     * @var string 软件的属性标识
     */
    public $Key;

    /**
     * @var string 软件的属性标识描述
     */
    public $Title;

    /**
     * @var string 软件的属性值
     */
    public $Value;

    /**
     * @param string $Key 软件的属性标识
     * @param string $Title 软件的属性标识描述
     * @param string $Value 软件的属性值
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
