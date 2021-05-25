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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextToObject请求参数结构体
 *
 * @method string getText() 获取报告文本
 * @method void setText(string $Text) 设置报告文本
 * @method integer getType() 获取报告类型
 * @method void setType(integer $Type) 设置报告类型
 * @method boolean getIsUsedClassify() 获取是否使用分类引擎
 * @method void setIsUsedClassify(boolean $IsUsedClassify) 设置是否使用分类引擎
 */
class TextToObjectRequest extends AbstractModel
{
    /**
     * @var string 报告文本
     */
    public $Text;

    /**
     * @var integer 报告类型
     */
    public $Type;

    /**
     * @var boolean 是否使用分类引擎
     */
    public $IsUsedClassify;

    /**
     * @param string $Text 报告文本
     * @param integer $Type 报告类型
     * @param boolean $IsUsedClassify 是否使用分类引擎
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsUsedClassify",$param) and $param["IsUsedClassify"] !== null) {
            $this->IsUsedClassify = $param["IsUsedClassify"];
        }
    }
}
