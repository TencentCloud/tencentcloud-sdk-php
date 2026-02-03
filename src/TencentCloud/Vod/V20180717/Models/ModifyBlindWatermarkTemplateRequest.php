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
 * ModifyBlindWatermarkTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取数字水印模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置数字水印模板唯一标识。
 * @method integer getSubAppId() 获取点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。
 * @method void setSubAppId(integer $SubAppId) 设置点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。
 * @method string getName() 获取数字水印模板名称，支持 中文、英文、数字、_、-和. 六种格式，长度限制：64 个字符。
 * @method void setName(string $Name) 设置数字水印模板名称，支持 中文、英文、数字、_、-和. 六种格式，长度限制：64 个字符。
 * @method string getComment() 获取数字水印模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置数字水印模板描述信息，长度限制：256 个字符。
 * @method string getTextContent() 获取数字水印文字内容，长度不超过64个字符，NAGRA水印类型的模板不支持修改文字内容。
 * @method void setTextContent(string $TextContent) 设置数字水印文字内容，长度不超过64个字符，NAGRA水印类型的模板不支持修改文字内容。
 */
class ModifyBlindWatermarkTemplateRequest extends AbstractModel
{
    /**
     * @var integer 数字水印模板唯一标识。
     */
    public $Definition;

    /**
     * @var integer 点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。
     */
    public $SubAppId;

    /**
     * @var string 数字水印模板名称，支持 中文、英文、数字、_、-和. 六种格式，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 数字水印模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var string 数字水印文字内容，长度不超过64个字符，NAGRA水印类型的模板不支持修改文字内容。
     */
    public $TextContent;

    /**
     * @param integer $Definition 数字水印模板唯一标识。
     * @param integer $SubAppId 点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。
     * @param string $Name 数字水印模板名称，支持 中文、英文、数字、_、-和. 六种格式，长度限制：64 个字符。
     * @param string $Comment 数字水印模板描述信息，长度限制：256 个字符。
     * @param string $TextContent 数字水印文字内容，长度不超过64个字符，NAGRA水印类型的模板不支持修改文字内容。
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }
    }
}
