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
 * 数字水印模板详情
 *
 * @method integer getDefinition() 获取数字水印模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置数字水印模板唯一标识。
 * @method string getType() 获取数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li><li>blind-nagra：NAGRA取证水印；</li>
 * @method void setType(string $Type) 设置数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li><li>blind-nagra：NAGRA取证水印；</li>
 * @method string getName() 获取数字水印模板名称。
 * @method void setName(string $Name) 设置数字水印模板名称。
 * @method string getTextContent() 获取数字水印模板文本内容，长度不超过64个字符。
 * @method void setTextContent(string $TextContent) 设置数字水印模板文本内容，长度不超过64个字符。
 * @method string getComment() 获取数字水印模板描述信息。
 * @method void setComment(string $Comment) 设置数字水印模板描述信息。
 * @method string getCreateTime() 获取数字水印模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setCreateTime(string $CreateTime) 设置数字水印模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method string getUpdateTime() 获取数字水印模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setUpdateTime(string $UpdateTime) 设置数字水印模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 */
class BlindWatermarkTemplate extends AbstractModel
{
    /**
     * @var integer 数字水印模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li><li>blind-nagra：NAGRA取证水印；</li>
     */
    public $Type;

    /**
     * @var string 数字水印模板名称。
     */
    public $Name;

    /**
     * @var string 数字水印模板文本内容，长度不超过64个字符。
     */
    public $TextContent;

    /**
     * @var string 数字水印模板描述信息。
     */
    public $Comment;

    /**
     * @var string 数字水印模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $CreateTime;

    /**
     * @var string 数字水印模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $UpdateTime;

    /**
     * @param integer $Definition 数字水印模板唯一标识。
     * @param string $Type 数字水印类型，可选值：<li>blind-basic：基础版权数字水印；</li><li>blind-nagra：NAGRA取证水印；</li>
     * @param string $Name 数字水印模板名称。
     * @param string $TextContent 数字水印模板文本内容，长度不超过64个字符。
     * @param string $Comment 数字水印模板描述信息。
     * @param string $CreateTime 数字水印模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     * @param string $UpdateTime 数字水印模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
