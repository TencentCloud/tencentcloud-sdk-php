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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEdgeKVNamespace请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getNamespace() 获取命名空间名称。输入内容有以下限制：支持输入 1-50 个字符，允许的字符为 a-z、A-Z、0-9、-，且 - 不能单独注册或连续使用，不能放在开头或结尾。在同站点下，名称需保证唯一。
 * @method void setNamespace(string $Namespace) 设置命名空间名称。输入内容有以下限制：支持输入 1-50 个字符，允许的字符为 a-z、A-Z、0-9、-，且 - 不能单独注册或连续使用，不能放在开头或结尾。在同站点下，名称需保证唯一。
 * @method string getRemark() 获取命名空间描述。用于说明命名空间的用途或业务含义。最大支持 256 个字符。
 * @method void setRemark(string $Remark) 设置命名空间描述。用于说明命名空间的用途或业务含义。最大支持 256 个字符。
 */
class CreateEdgeKVNamespaceRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 命名空间名称。输入内容有以下限制：支持输入 1-50 个字符，允许的字符为 a-z、A-Z、0-9、-，且 - 不能单独注册或连续使用，不能放在开头或结尾。在同站点下，名称需保证唯一。
     */
    public $Namespace;

    /**
     * @var string 命名空间描述。用于说明命名空间的用途或业务含义。最大支持 256 个字符。
     */
    public $Remark;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Namespace 命名空间名称。输入内容有以下限制：支持输入 1-50 个字符，允许的字符为 a-z、A-Z、0-9、-，且 - 不能单独注册或连续使用，不能放在开头或结尾。在同站点下，名称需保证唯一。
     * @param string $Remark 命名空间描述。用于说明命名空间的用途或业务含义。最大支持 256 个字符。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
