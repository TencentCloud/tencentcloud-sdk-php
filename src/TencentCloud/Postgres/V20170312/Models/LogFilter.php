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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志过滤条件
 *
 * @method string getType() 获取<p>过滤条件名称。</p><p>如：sql - SQL命令详情</p><p>host – 客户端 IP；<br>user – 数据库账户。</p>
 * @method void setType(string $Type) 设置<p>过滤条件名称。</p><p>如：sql - SQL命令详情</p><p>host – 客户端 IP；<br>user – 数据库账户。</p>
 * @method string getCompare() 获取<p>过滤条件匹配类型。支持：<br>INC – 包含；     （多个值之间是||的关系）<br>EXC – 不包含； （多个值之间是&amp;&amp;的关系）<br>EQS – 等于；     （多个值之间是||的关系）<br>NEQ – 不等于；（多个值之间是&amp;&amp;的关系）<br>RG – 范围；</p>
 * @method void setCompare(string $Compare) 设置<p>过滤条件匹配类型。支持：<br>INC – 包含；     （多个值之间是||的关系）<br>EXC – 不包含； （多个值之间是&amp;&amp;的关系）<br>EQS – 等于；     （多个值之间是||的关系）<br>NEQ – 不等于；（多个值之间是&amp;&amp;的关系）<br>RG – 范围；</p>
 * @method array getValue() 获取<p>过滤条件匹配值。当Compare=RG时，例：[&quot;1-100&quot;,&quot;200-300&quot;]</p>
 * @method void setValue(array $Value) 设置<p>过滤条件匹配值。当Compare=RG时，例：[&quot;1-100&quot;,&quot;200-300&quot;]</p>
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string <p>过滤条件名称。</p><p>如：sql - SQL命令详情</p><p>host – 客户端 IP；<br>user – 数据库账户。</p>
     */
    public $Type;

    /**
     * @var string <p>过滤条件匹配类型。支持：<br>INC – 包含；     （多个值之间是||的关系）<br>EXC – 不包含； （多个值之间是&amp;&amp;的关系）<br>EQS – 等于；     （多个值之间是||的关系）<br>NEQ – 不等于；（多个值之间是&amp;&amp;的关系）<br>RG – 范围；</p>
     */
    public $Compare;

    /**
     * @var array <p>过滤条件匹配值。当Compare=RG时，例：[&quot;1-100&quot;,&quot;200-300&quot;]</p>
     */
    public $Value;

    /**
     * @param string $Type <p>过滤条件名称。</p><p>如：sql - SQL命令详情</p><p>host – 客户端 IP；<br>user – 数据库账户。</p>
     * @param string $Compare <p>过滤条件匹配类型。支持：<br>INC – 包含；     （多个值之间是||的关系）<br>EXC – 不包含； （多个值之间是&amp;&amp;的关系）<br>EQS – 等于；     （多个值之间是||的关系）<br>NEQ – 不等于；（多个值之间是&amp;&amp;的关系）<br>RG – 范围；</p>
     * @param array $Value <p>过滤条件匹配值。当Compare=RG时，例：[&quot;1-100&quot;,&quot;200-300&quot;]</p>
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

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
