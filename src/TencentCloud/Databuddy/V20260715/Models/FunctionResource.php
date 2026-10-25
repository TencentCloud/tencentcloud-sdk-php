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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 函数资源
 *
 * @method string getResourceType() 获取资源类型，取值如file(文件)、jar(jar包)、archive(归档文件)等
 * @method void setResourceType(string $ResourceType) 设置资源类型，取值如file(文件)、jar(jar包)、archive(归档文件)等
 * @method string getUri() 获取资源路径
 * @method void setUri(string $Uri) 设置资源路径
 */
class FunctionResource extends AbstractModel
{
    /**
     * @var string 资源类型，取值如file(文件)、jar(jar包)、archive(归档文件)等
     */
    public $ResourceType;

    /**
     * @var string 资源路径
     */
    public $Uri;

    /**
     * @param string $ResourceType 资源类型，取值如file(文件)、jar(jar包)、archive(归档文件)等
     * @param string $Uri 资源路径
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }
    }
}
