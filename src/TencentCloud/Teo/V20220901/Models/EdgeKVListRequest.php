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
 * EdgeKVList请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getNamespace() 获取命名空间名称。
 * @method void setNamespace(string $Namespace) 设置命名空间名称。
 * @method string getPrefix() 获取键名前缀过滤。只返回以指定前缀开头的键名，长度为 1-512 个字符。不填写表示返回所有键名；不允许传入空字符串。
 * @method void setPrefix(string $Prefix) 设置键名前缀过滤。只返回以指定前缀开头的键名，长度为 1-512 个字符。不填写表示返回所有键名；不允许传入空字符串。
 * @method string getCursor() 获取游标位置。标识当前查询的起始位置，用于遍历大量数据。首次查询时不填写，从头开始遍历；后续查询时填写上一次返回的 Cursor 值，从该位置继续向后遍历。

 * @method void setCursor(string $Cursor) 设置游标位置。标识当前查询的起始位置，用于遍历大量数据。首次查询时不填写，从头开始遍历；后续查询时填写上一次返回的 Cursor 值，从该位置继续向后遍历。

 * @method integer getLimit() 获取返回的键名数量。默认值：20，最大值：1000。
 * @method void setLimit(integer $Limit) 设置返回的键名数量。默认值：20，最大值：1000。
 */
class EdgeKVListRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 命名空间名称。
     */
    public $Namespace;

    /**
     * @var string 键名前缀过滤。只返回以指定前缀开头的键名，长度为 1-512 个字符。不填写表示返回所有键名；不允许传入空字符串。
     */
    public $Prefix;

    /**
     * @var string 游标位置。标识当前查询的起始位置，用于遍历大量数据。首次查询时不填写，从头开始遍历；后续查询时填写上一次返回的 Cursor 值，从该位置继续向后遍历。

     */
    public $Cursor;

    /**
     * @var integer 返回的键名数量。默认值：20，最大值：1000。
     */
    public $Limit;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Namespace 命名空间名称。
     * @param string $Prefix 键名前缀过滤。只返回以指定前缀开头的键名，长度为 1-512 个字符。不填写表示返回所有键名；不允许传入空字符串。
     * @param string $Cursor 游标位置。标识当前查询的起始位置，用于遍历大量数据。首次查询时不填写，从头开始遍历；后续查询时填写上一次返回的 Cursor 值，从该位置继续向后遍历。

     * @param integer $Limit 返回的键名数量。默认值：20，最大值：1000。
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

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
