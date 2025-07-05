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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路径路由重写规则
 *
 * @method string getPath() 获取需要重路由的路径，取值规范：/，/*，/xxx，/xxx/a，/xxx/*
 * @method void setPath(string $Path) 设置需要重路由的路径，取值规范：/，/*，/xxx，/xxx/a，/xxx/*
 * @method string getType() 获取匹配规，取值范围： WildcardRules 通配符匹配， ExactRules 精确匹配
 * @method void setType(string $Type) 设置匹配规，取值范围： WildcardRules 通配符匹配， ExactRules 精确匹配
 * @method string getRewrite() 获取替换值：比如/, /$
 * @method void setRewrite(string $Rewrite) 设置替换值：比如/, /$
 */
class PathRewriteRule extends AbstractModel
{
    /**
     * @var string 需要重路由的路径，取值规范：/，/*，/xxx，/xxx/a，/xxx/*
     */
    public $Path;

    /**
     * @var string 匹配规，取值范围： WildcardRules 通配符匹配， ExactRules 精确匹配
     */
    public $Type;

    /**
     * @var string 替换值：比如/, /$
     */
    public $Rewrite;

    /**
     * @param string $Path 需要重路由的路径，取值规范：/，/*，/xxx，/xxx/a，/xxx/*
     * @param string $Type 匹配规，取值范围： WildcardRules 通配符匹配， ExactRules 精确匹配
     * @param string $Rewrite 替换值：比如/, /$
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Rewrite",$param) and $param["Rewrite"] !== null) {
            $this->Rewrite = $param["Rewrite"];
        }
    }
}
