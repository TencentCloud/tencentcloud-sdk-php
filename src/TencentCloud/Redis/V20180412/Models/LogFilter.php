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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志过滤条件
 *
 * @method string getType() 获取<p>过滤条件名称。</p><p>枚举值：</p><ul><li>Timestamp： 创建时间（格式：2006-01-02 15:04:05.000）</li><li>UserName： 用户名</li><li>CacheCode： 缓存代码，后端redis节点</li><li>ClientAddr： 客户端地址</li><li>CommandDetail： 命令详情</li><li>CommandLatency： 命令延迟（毫秒）</li><li>CommandType： 命令类型</li><li>DBId： 数据库ID</li><li>ErrMsg： 错误信息</li></ul>
 * @method void setType(string $Type) 设置<p>过滤条件名称。</p><p>枚举值：</p><ul><li>Timestamp： 创建时间（格式：2006-01-02 15:04:05.000）</li><li>UserName： 用户名</li><li>CacheCode： 缓存代码，后端redis节点</li><li>ClientAddr： 客户端地址</li><li>CommandDetail： 命令详情</li><li>CommandLatency： 命令延迟（毫秒）</li><li>CommandType： 命令类型</li><li>DBId： 数据库ID</li><li>ErrMsg： 错误信息</li></ul>
 * @method string getCompare() 获取<p>过滤条件匹配类型。</p><p>枚举值：</p><ul><li>INC： 包含，多个值之前是||的关系</li><li>EXC： 不包含，多个值之前是||的关系</li><li>EQS： 等于，多个值之前是||的关系</li><li>NEQ： 不等于，多个值之前是&amp;&amp;的关系</li><li>RA： 范围</li></ul>
 * @method void setCompare(string $Compare) 设置<p>过滤条件匹配类型。</p><p>枚举值：</p><ul><li>INC： 包含，多个值之前是||的关系</li><li>EXC： 不包含，多个值之前是||的关系</li><li>EQS： 等于，多个值之前是||的关系</li><li>NEQ： 不等于，多个值之前是&amp;&amp;的关系</li><li>RA： 范围</li></ul>
 * @method array getValue() 获取<p>过滤条件匹配值。当Compare=RA时，例如：[&quot;1-100&quot;,&quot;200-300&quot;]。</p>
 * @method void setValue(array $Value) 设置<p>过滤条件匹配值。当Compare=RA时，例如：[&quot;1-100&quot;,&quot;200-300&quot;]。</p>
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string <p>过滤条件名称。</p><p>枚举值：</p><ul><li>Timestamp： 创建时间（格式：2006-01-02 15:04:05.000）</li><li>UserName： 用户名</li><li>CacheCode： 缓存代码，后端redis节点</li><li>ClientAddr： 客户端地址</li><li>CommandDetail： 命令详情</li><li>CommandLatency： 命令延迟（毫秒）</li><li>CommandType： 命令类型</li><li>DBId： 数据库ID</li><li>ErrMsg： 错误信息</li></ul>
     */
    public $Type;

    /**
     * @var string <p>过滤条件匹配类型。</p><p>枚举值：</p><ul><li>INC： 包含，多个值之前是||的关系</li><li>EXC： 不包含，多个值之前是||的关系</li><li>EQS： 等于，多个值之前是||的关系</li><li>NEQ： 不等于，多个值之前是&amp;&amp;的关系</li><li>RA： 范围</li></ul>
     */
    public $Compare;

    /**
     * @var array <p>过滤条件匹配值。当Compare=RA时，例如：[&quot;1-100&quot;,&quot;200-300&quot;]。</p>
     */
    public $Value;

    /**
     * @param string $Type <p>过滤条件名称。</p><p>枚举值：</p><ul><li>Timestamp： 创建时间（格式：2006-01-02 15:04:05.000）</li><li>UserName： 用户名</li><li>CacheCode： 缓存代码，后端redis节点</li><li>ClientAddr： 客户端地址</li><li>CommandDetail： 命令详情</li><li>CommandLatency： 命令延迟（毫秒）</li><li>CommandType： 命令类型</li><li>DBId： 数据库ID</li><li>ErrMsg： 错误信息</li></ul>
     * @param string $Compare <p>过滤条件匹配类型。</p><p>枚举值：</p><ul><li>INC： 包含，多个值之前是||的关系</li><li>EXC： 不包含，多个值之前是||的关系</li><li>EQS： 等于，多个值之前是||的关系</li><li>NEQ： 不等于，多个值之前是&amp;&amp;的关系</li><li>RA： 范围</li></ul>
     * @param array $Value <p>过滤条件匹配值。当Compare=RA时，例如：[&quot;1-100&quot;,&quot;200-300&quot;]。</p>
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
