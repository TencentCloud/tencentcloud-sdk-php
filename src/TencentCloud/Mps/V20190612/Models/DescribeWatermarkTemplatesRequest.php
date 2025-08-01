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
 * DescribeWatermarkTemplates请求参数结构体
 *
 * @method array getDefinitions() 获取水印模板唯一标识过滤条件，数组长度限制：100。
 * @method void setDefinitions(array $Definitions) 设置水印模板唯一标识过滤条件，数组长度限制：100。
 * @method string getType() 获取水印类型过滤条件，可选值：
<li>image：图片水印；</li>
<li>text：文字水印。</li>
 * @method void setType(string $Type) 设置水印类型过滤条件，可选值：
<li>image：图片水印；</li>
<li>text：文字水印。</li>
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取返回记录条数
<li>默认值：10；</li>
<li>最大值：100。</li>
 * @method void setLimit(integer $Limit) 设置返回记录条数
<li>默认值：10；</li>
<li>最大值：100。</li>
 * @method string getName() 获取水印模板标识过滤条件，长度限制：64 个字符。
 * @method void setName(string $Name) 设置水印模板标识过滤条件，长度限制：64 个字符。
 */
class DescribeWatermarkTemplatesRequest extends AbstractModel
{
    /**
     * @var array 水印模板唯一标识过滤条件，数组长度限制：100。
     */
    public $Definitions;

    /**
     * @var string 水印类型过滤条件，可选值：
<li>image：图片水印；</li>
<li>text：文字水印。</li>
     */
    public $Type;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数
<li>默认值：10；</li>
<li>最大值：100。</li>
     */
    public $Limit;

    /**
     * @var string 水印模板标识过滤条件，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @param array $Definitions 水印模板唯一标识过滤条件，数组长度限制：100。
     * @param string $Type 水印类型过滤条件，可选值：
<li>image：图片水印；</li>
<li>text：文字水印。</li>
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 返回记录条数
<li>默认值：10；</li>
<li>最大值：100。</li>
     * @param string $Name 水印模板标识过滤条件，长度限制：64 个字符。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
