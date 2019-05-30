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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getContent() 获取作文文本，必填
 * @method void setContent(string $Content) 设置作文文本，必填
 * @method string getTitle() 获取作文题目，可选参数
 * @method void setTitle(string $Title) 设置作文题目，可选参数
 * @method string getGrade() 获取年级标准， 默认以cet4为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及cet4和cet6 分别表示 英语4级和6级。
 * @method void setGrade(string $Grade) 设置年级标准， 默认以cet4为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及cet4和cet6 分别表示 英语4级和6级。
 * @method string getOutline() 获取作文提纲，可选参数，作文的写作要求。
 * @method void setOutline(string $Outline) 设置作文提纲，可选参数，作文的写作要求。
 * @method string getModelSubject() 获取范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
 * @method void setModelSubject(string $ModelSubject) 设置范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
 * @method string getModelContent() 获取范文内容，可选参数，同上，范文的正文部分。
 * @method void setModelContent(string $ModelContent) 设置范文内容，可选参数，同上，范文的正文部分。
 */

/**
 *ECC请求参数结构体
 */
class ECCRequest extends AbstractModel
{
    /**
     * @var string 作文文本，必填
     */
    public $Content;

    /**
     * @var string 作文题目，可选参数
     */
    public $Title;

    /**
     * @var string 年级标准， 默认以cet4为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及cet4和cet6 分别表示 英语4级和6级。
     */
    public $Grade;

    /**
     * @var string 作文提纲，可选参数，作文的写作要求。
     */
    public $Outline;

    /**
     * @var string 范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
     */
    public $ModelSubject;

    /**
     * @var string 范文内容，可选参数，同上，范文的正文部分。
     */
    public $ModelContent;
    /**
     * @param string $Content 作文文本，必填
     * @param string $Title 作文题目，可选参数
     * @param string $Grade 年级标准， 默认以cet4为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及cet4和cet6 分别表示 英语4级和6级。
     * @param string $Outline 作文提纲，可选参数，作文的写作要求。
     * @param string $ModelSubject 范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
     * @param string $ModelContent 范文内容，可选参数，同上，范文的正文部分。
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = $param["Outline"];
        }

        if (array_key_exists("ModelSubject",$param) and $param["ModelSubject"] !== null) {
            $this->ModelSubject = $param["ModelSubject"];
        }

        if (array_key_exists("ModelContent",$param) and $param["ModelContent"] !== null) {
            $this->ModelContent = $param["ModelContent"];
        }
    }
}
