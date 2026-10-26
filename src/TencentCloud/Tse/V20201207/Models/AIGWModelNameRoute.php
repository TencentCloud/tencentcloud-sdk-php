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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI网关入口按模型名称路由
 *
 * @method array getModelNames() 获取<p>用于入口路由匹配的模型名称或别名列表。配置 ModelNameRoute 时须提供 1-50 项，每项为 1-128 个 Unicode 字符的合法 UTF-8 字符串，不允许空值或重复项。按原始模型名称精确匹配，区分大小写，不自动去除首尾空白。</p>
 * @method void setModelNames(array $ModelNames) 设置<p>用于入口路由匹配的模型名称或别名列表。配置 ModelNameRoute 时须提供 1-50 项，每项为 1-128 个 Unicode 字符的合法 UTF-8 字符串，不允许空值或重复项。按原始模型名称精确匹配，区分大小写，不自动去除首尾空白。</p>
 */
class AIGWModelNameRoute extends AbstractModel
{
    /**
     * @var array <p>用于入口路由匹配的模型名称或别名列表。配置 ModelNameRoute 时须提供 1-50 项，每项为 1-128 个 Unicode 字符的合法 UTF-8 字符串，不允许空值或重复项。按原始模型名称精确匹配，区分大小写，不自动去除首尾空白。</p>
     */
    public $ModelNames;

    /**
     * @param array $ModelNames <p>用于入口路由匹配的模型名称或别名列表。配置 ModelNameRoute 时须提供 1-50 项，每项为 1-128 个 Unicode 字符的合法 UTF-8 字符串，不允许空值或重复项。按原始模型名称精确匹配，区分大小写，不自动去除首尾空白。</p>
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
        if (array_key_exists("ModelNames",$param) and $param["ModelNames"] !== null) {
            $this->ModelNames = $param["ModelNames"];
        }
    }
}
