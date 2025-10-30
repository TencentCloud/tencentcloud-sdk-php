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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenIdentityCenter请求参数结构体
 *
 * @method string getZoneName() 获取空间名，必须全局唯一。包含小写字母、数字和短划线（-）。不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。长度：2~64 个字符。
 * @method void setZoneName(string $ZoneName) 设置空间名，必须全局唯一。包含小写字母、数字和短划线（-）。不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。长度：2~64 个字符。
 */
class OpenIdentityCenterRequest extends AbstractModel
{
    /**
     * @var string 空间名，必须全局唯一。包含小写字母、数字和短划线（-）。不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。长度：2~64 个字符。
     */
    public $ZoneName;

    /**
     * @param string $ZoneName 空间名，必须全局唯一。包含小写字母、数字和短划线（-）。不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。长度：2~64 个字符。
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
