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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPService缓存规则匹配条件（必填）
 *
 * @method string getTarget() 获取<p>Target 匹配对象</p><p>枚举值：</p><ul><li>url_path： 请求 URI 路径（不含查询串），例：/static/logo.jpg</li><li>file_extension： 请求文件扩展名（EO 从 path 中解析），例：jpg</li><li>full_uri： 完整 URI（路径 + 查询串），例：/download?type=hd</li></ul>
 * @method void setTarget(string $Target) 设置<p>Target 匹配对象</p><p>枚举值：</p><ul><li>url_path： 请求 URI 路径（不含查询串），例：/static/logo.jpg</li><li>file_extension： 请求文件扩展名（EO 从 path 中解析），例：jpg</li><li>full_uri： 完整 URI（路径 + 查询串），例：/download?type=hd</li></ul>
 * @method string getMatchType() 获取<p>MatchType 字符串匹配类型</p><p>枚举值：</p><ul><li>prefix：  前缀匹配</li><li>suffix： 后缀匹配</li><li>contains： 包含匹配</li><li>exact： 精确匹配</li></ul>
 * @method void setMatchType(string $MatchType) 设置<p>MatchType 字符串匹配类型</p><p>枚举值：</p><ul><li>prefix：  前缀匹配</li><li>suffix： 后缀匹配</li><li>contains： 包含匹配</li><li>exact： 精确匹配</li></ul>
 * @method array getValues() 获取<p>Values 匹配值集合，Values 内任一命中即认为条件成立（OR 语义）</p><p>入参限制：单项 1~1024 字节，最多 100 条</p>
 * @method void setValues(array $Values) 设置<p>Values 匹配值集合，Values 内任一命中即认为条件成立（OR 语义）</p><p>入参限制：单项 1~1024 字节，最多 100 条</p>
 */
class HTTPServiceRuleCondition extends AbstractModel
{
    /**
     * @var string <p>Target 匹配对象</p><p>枚举值：</p><ul><li>url_path： 请求 URI 路径（不含查询串），例：/static/logo.jpg</li><li>file_extension： 请求文件扩展名（EO 从 path 中解析），例：jpg</li><li>full_uri： 完整 URI（路径 + 查询串），例：/download?type=hd</li></ul>
     */
    public $Target;

    /**
     * @var string <p>MatchType 字符串匹配类型</p><p>枚举值：</p><ul><li>prefix：  前缀匹配</li><li>suffix： 后缀匹配</li><li>contains： 包含匹配</li><li>exact： 精确匹配</li></ul>
     */
    public $MatchType;

    /**
     * @var array <p>Values 匹配值集合，Values 内任一命中即认为条件成立（OR 语义）</p><p>入参限制：单项 1~1024 字节，最多 100 条</p>
     */
    public $Values;

    /**
     * @param string $Target <p>Target 匹配对象</p><p>枚举值：</p><ul><li>url_path： 请求 URI 路径（不含查询串），例：/static/logo.jpg</li><li>file_extension： 请求文件扩展名（EO 从 path 中解析），例：jpg</li><li>full_uri： 完整 URI（路径 + 查询串），例：/download?type=hd</li></ul>
     * @param string $MatchType <p>MatchType 字符串匹配类型</p><p>枚举值：</p><ul><li>prefix：  前缀匹配</li><li>suffix： 后缀匹配</li><li>contains： 包含匹配</li><li>exact： 精确匹配</li></ul>
     * @param array $Values <p>Values 匹配值集合，Values 内任一命中即认为条件成立（OR 语义）</p><p>入参限制：单项 1~1024 字节，最多 100 条</p>
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
        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
