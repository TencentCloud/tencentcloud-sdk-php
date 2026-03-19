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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubtitleEmbedTemplates请求参数结构体
 *
 * @method array getDefinitions() 获取<p>智能字幕模板唯一标识过滤条件，数组长度限制：100。</p>
 * @method void setDefinitions(array $Definitions) 设置<p>智能字幕模板唯一标识过滤条件，数组长度限制：100。</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认值：0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认值：0。</p>
 * @method integer getLimit() 获取<p>返回记录条数，默认值：10，最大值：100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回记录条数，默认值：10，最大值：100。</p>
 * @method string getType() 获取<p>模板类型过滤条件，不填则返回所有，可选值：</p><ul><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li></ul>
 * @method void setType(string $Type) 设置<p>模板类型过滤条件，不填则返回所有，可选值：</p><ul><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li></ul>
 * @method string getName() 获取<p>字幕压制模板标识过滤条件，长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>字幕压制模板标识过滤条件，长度限制：64 个字符。</p>
 */
class DescribeSubtitleEmbedTemplatesRequest extends AbstractModel
{
    /**
     * @var array <p>智能字幕模板唯一标识过滤条件，数组长度限制：100。</p>
     */
    public $Definitions;

    /**
     * @var integer <p>分页偏移量，默认值：0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回记录条数，默认值：10，最大值：100。</p>
     */
    public $Limit;

    /**
     * @var string <p>模板类型过滤条件，不填则返回所有，可选值：</p><ul><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li></ul>
     */
    public $Type;

    /**
     * @var string <p>字幕压制模板标识过滤条件，长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @param array $Definitions <p>智能字幕模板唯一标识过滤条件，数组长度限制：100。</p>
     * @param integer $Offset <p>分页偏移量，默认值：0。</p>
     * @param integer $Limit <p>返回记录条数，默认值：10，最大值：100。</p>
     * @param string $Type <p>模板类型过滤条件，不填则返回所有，可选值：</p><ul><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li></ul>
     * @param string $Name <p>字幕压制模板标识过滤条件，长度限制：64 个字符。</p>
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
        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = $param["Definitions"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
