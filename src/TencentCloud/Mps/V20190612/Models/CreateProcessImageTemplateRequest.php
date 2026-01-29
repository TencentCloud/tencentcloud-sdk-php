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
 * CreateProcessImageTemplate请求参数结构体
 *
 * @method ImageTaskInput getProcessImageTemplate() 获取图片处理模板。
 * @method void setProcessImageTemplate(ImageTaskInput $ProcessImageTemplate) 设置图片处理模板。
 * @method string getName() 获取图片处理模板名称，长度限制：64个字符。
 * @method void setName(string $Name) 设置图片处理模板名称，长度限制：64个字符。
 * @method string getComment() 获取图片处理模板描述信息，长度限制：256个字符。
 * @method void setComment(string $Comment) 设置图片处理模板描述信息，长度限制：256个字符。
 * @method string getStdExtInfo() 获取图片处理模板拓展参数。
 * @method void setStdExtInfo(string $StdExtInfo) 设置图片处理模板拓展参数。
 */
class CreateProcessImageTemplateRequest extends AbstractModel
{
    /**
     * @var ImageTaskInput 图片处理模板。
     */
    public $ProcessImageTemplate;

    /**
     * @var string 图片处理模板名称，长度限制：64个字符。
     */
    public $Name;

    /**
     * @var string 图片处理模板描述信息，长度限制：256个字符。
     */
    public $Comment;

    /**
     * @var string 图片处理模板拓展参数。
     */
    public $StdExtInfo;

    /**
     * @param ImageTaskInput $ProcessImageTemplate 图片处理模板。
     * @param string $Name 图片处理模板名称，长度限制：64个字符。
     * @param string $Comment 图片处理模板描述信息，长度限制：256个字符。
     * @param string $StdExtInfo 图片处理模板拓展参数。
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
        if (array_key_exists("ProcessImageTemplate",$param) and $param["ProcessImageTemplate"] !== null) {
            $this->ProcessImageTemplate = new ImageTaskInput();
            $this->ProcessImageTemplate->deserialize($param["ProcessImageTemplate"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }
    }
}
