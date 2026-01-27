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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤选择器
 *
 * @method string getDecoration() 获取<p>过滤规则类型，在tag过滤中，可选值为matches（匹配），excludes(排除)，在仓库过滤中，可选值为repoMatches（仓库匹配），repoExcludes（仓库排除）</p>
 * @method void setDecoration(string $Decoration) 设置<p>过滤规则类型，在tag过滤中，可选值为matches（匹配），excludes(排除)，在仓库过滤中，可选值为repoMatches（仓库匹配），repoExcludes（仓库排除）</p>
 * @method string getPattern() 获取<p>过滤表达式</p>
 * @method void setPattern(string $Pattern) 设置<p>过滤表达式</p>
 */
class FilterSelector extends AbstractModel
{
    /**
     * @var string <p>过滤规则类型，在tag过滤中，可选值为matches（匹配），excludes(排除)，在仓库过滤中，可选值为repoMatches（仓库匹配），repoExcludes（仓库排除）</p>
     */
    public $Decoration;

    /**
     * @var string <p>过滤表达式</p>
     */
    public $Pattern;

    /**
     * @param string $Decoration <p>过滤规则类型，在tag过滤中，可选值为matches（匹配），excludes(排除)，在仓库过滤中，可选值为repoMatches（仓库匹配），repoExcludes（仓库排除）</p>
     * @param string $Pattern <p>过滤表达式</p>
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
        if (array_key_exists("Decoration",$param) and $param["Decoration"] !== null) {
            $this->Decoration = $param["Decoration"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }
    }
}
