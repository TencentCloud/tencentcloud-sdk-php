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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListFiles请求参数结构体
 *
 * @method integer getSubAppId() 获取点播[应用](/document/product/266/14574) ID。
 * @method void setSubAppId(integer $SubAppId) 设置点播[应用](/document/product/266/14574) ID。
 * @method string getPrefix() 获取对象键匹配前缀，限定响应中只包含指定前缀的对象键。
 * @method void setPrefix(string $Prefix) 设置对象键匹配前缀，限定响应中只包含指定前缀的对象键。
 * @method string getDelimiter() 获取一个字符的分隔符，用于对对象键进行分组。所有对象键中从 prefix 或从头（如未指定 prefix）到首个 delimiter 之间相同的部分将作为 CommonPrefixes 下的一个 Prefix 节点。被分组的对象键不再出现在后续对象列表中。
 * @method void setDelimiter(string $Delimiter) 设置一个字符的分隔符，用于对对象键进行分组。所有对象键中从 prefix 或从头（如未指定 prefix）到首个 delimiter 之间相同的部分将作为 CommonPrefixes 下的一个 Prefix 节点。被分组的对象键不再出现在后续对象列表中。
 * @method integer getMaxKeys() 获取ys 	 单次返回最大的条目数量，默认值为100，最小为1，最大为100。
 * @method void setMaxKeys(integer $MaxKeys) 设置ys 	 单次返回最大的条目数量，默认值为100，最小为1，最大为100。
 * @method string getMarker() 获取起始对象键标记
 * @method void setMarker(string $Marker) 设置起始对象键标记
 * @method array getCategories() 获取文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li>
 * @method void setCategories(array $Categories) 设置文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li>
 */
class ListFilesRequest extends AbstractModel
{
    /**
     * @var integer 点播[应用](/document/product/266/14574) ID。
     */
    public $SubAppId;

    /**
     * @var string 对象键匹配前缀，限定响应中只包含指定前缀的对象键。
     */
    public $Prefix;

    /**
     * @var string 一个字符的分隔符，用于对对象键进行分组。所有对象键中从 prefix 或从头（如未指定 prefix）到首个 delimiter 之间相同的部分将作为 CommonPrefixes 下的一个 Prefix 节点。被分组的对象键不再出现在后续对象列表中。
     */
    public $Delimiter;

    /**
     * @var integer ys 	 单次返回最大的条目数量，默认值为100，最小为1，最大为100。
     */
    public $MaxKeys;

    /**
     * @var string 起始对象键标记
     */
    public $Marker;

    /**
     * @var array 文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li>
     */
    public $Categories;

    /**
     * @param integer $SubAppId 点播[应用](/document/product/266/14574) ID。
     * @param string $Prefix 对象键匹配前缀，限定响应中只包含指定前缀的对象键。
     * @param string $Delimiter 一个字符的分隔符，用于对对象键进行分组。所有对象键中从 prefix 或从头（如未指定 prefix）到首个 delimiter 之间相同的部分将作为 CommonPrefixes 下的一个 Prefix 节点。被分组的对象键不再出现在后续对象列表中。
     * @param integer $MaxKeys ys 	 单次返回最大的条目数量，默认值为100，最小为1，最大为100。
     * @param string $Marker 起始对象键标记
     * @param array $Categories 文件类型。匹配集合中的任意元素： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("MaxKeys",$param) and $param["MaxKeys"] !== null) {
            $this->MaxKeys = $param["MaxKeys"];
        }

        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = $param["Categories"];
        }
    }
}
