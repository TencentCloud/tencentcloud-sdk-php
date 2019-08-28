<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getDefinition() 获取水印模板 ID。
 * @method void setDefinition(integer $Definition) 设置水印模板 ID。
 * @method string getTextContent() 获取文字内容，长度不超过100个字符。仅当水印类型为文字水印时填写。
 * @method void setTextContent(string $TextContent) 设置文字内容，长度不超过100个字符。仅当水印类型为文字水印时填写。
 * @method string getSvgContent() 获取SVG 内容。长度不超过 2000000 个字符。仅当水印类型为 SVG 水印时填写。
 * @method void setSvgContent(string $SvgContent) 设置SVG 内容。长度不超过 2000000 个字符。仅当水印类型为 SVG 水印时填写。
 */

/**
 *视频处理任务中的水印参数类型
 */
class WatermarkInput extends AbstractModel
{
    /**
     * @var integer 水印模板 ID。
     */
    public $Definition;

    /**
     * @var string 文字内容，长度不超过100个字符。仅当水印类型为文字水印时填写。
     */
    public $TextContent;

    /**
     * @var string SVG 内容。长度不超过 2000000 个字符。仅当水印类型为 SVG 水印时填写。
     */
    public $SvgContent;
    /**
     * @param integer $Definition 水印模板 ID。
     * @param string $TextContent 文字内容，长度不超过100个字符。仅当水印类型为文字水印时填写。
     * @param string $SvgContent SVG 内容。长度不超过 2000000 个字符。仅当水印类型为 SVG 水印时填写。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }

        if (array_key_exists("SvgContent",$param) and $param["SvgContent"] !== null) {
            $this->SvgContent = $param["SvgContent"];
        }
    }
}
