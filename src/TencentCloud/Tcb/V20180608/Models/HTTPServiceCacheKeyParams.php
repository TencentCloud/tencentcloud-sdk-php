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
 * 自定义缓存键参数。约束：FullURLCache=on 与 QueryStringSwitch=on 互斥
使用示例：
- 整 URL 参与缓存键：{FullURLCache: "on", QueryStringSwitch: "off"}
- URL 路径 + 仅保留 x/y：{FullURLCache: "off", QueryStringSwitch: "on", QueryStringAction: "includeCustom", QueryStringValues: ["x", "y"]}
- URL 路径 + 忽略 debug：{FullURLCache: "off", QueryStringSwitch: "on", QueryStringAction: "excludeCustom", QueryStringValues: ["debug"]}
 *
 * @method string getFullURLCache() 获取<p>全 URL 缓存开关</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method void setFullURLCache(string $FullURLCache) 设置<p>全 URL 缓存开关</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method string getQueryStringSwitch() 获取<p>查询参数是否参与缓存键</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method void setQueryStringSwitch(string $QueryStringSwitch) 设置<p>查询参数是否参与缓存键</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
 * @method string getQueryStringAction() 获取<p>QueryStringSwitch=on 时必填</p><p>枚举值：</p><ul><li>includeCustom： 白名单</li><li>excludeCustom： 黑名单</li></ul>
 * @method void setQueryStringAction(string $QueryStringAction) 设置<p>QueryStringSwitch=on 时必填</p><p>枚举值：</p><ul><li>includeCustom： 白名单</li><li>excludeCustom： 黑名单</li></ul>
 * @method array getQueryStringValues() 获取<p>参数名列表</p><p>入参限制：最多 100 项，单项 1~128 字节</p>
 * @method void setQueryStringValues(array $QueryStringValues) 设置<p>参数名列表</p><p>入参限制：最多 100 项，单项 1~128 字节</p>
 */
class HTTPServiceCacheKeyParams extends AbstractModel
{
    /**
     * @var string <p>全 URL 缓存开关</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     */
    public $FullURLCache;

    /**
     * @var string <p>查询参数是否参与缓存键</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     */
    public $QueryStringSwitch;

    /**
     * @var string <p>QueryStringSwitch=on 时必填</p><p>枚举值：</p><ul><li>includeCustom： 白名单</li><li>excludeCustom： 黑名单</li></ul>
     */
    public $QueryStringAction;

    /**
     * @var array <p>参数名列表</p><p>入参限制：最多 100 项，单项 1~128 字节</p>
     */
    public $QueryStringValues;

    /**
     * @param string $FullURLCache <p>全 URL 缓存开关</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     * @param string $QueryStringSwitch <p>查询参数是否参与缓存键</p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul>
     * @param string $QueryStringAction <p>QueryStringSwitch=on 时必填</p><p>枚举值：</p><ul><li>includeCustom： 白名单</li><li>excludeCustom： 黑名单</li></ul>
     * @param array $QueryStringValues <p>参数名列表</p><p>入参限制：最多 100 项，单项 1~128 字节</p>
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
        if (array_key_exists("FullURLCache",$param) and $param["FullURLCache"] !== null) {
            $this->FullURLCache = $param["FullURLCache"];
        }

        if (array_key_exists("QueryStringSwitch",$param) and $param["QueryStringSwitch"] !== null) {
            $this->QueryStringSwitch = $param["QueryStringSwitch"];
        }

        if (array_key_exists("QueryStringAction",$param) and $param["QueryStringAction"] !== null) {
            $this->QueryStringAction = $param["QueryStringAction"];
        }

        if (array_key_exists("QueryStringValues",$param) and $param["QueryStringValues"] !== null) {
            $this->QueryStringValues = $param["QueryStringValues"];
        }
    }
}
