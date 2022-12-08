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
 * TextToClass请求参数结构体
 *
 * @method string getText() 获取报告文本
 * @method void setText(string $Text) 设置报告文本
 * @method integer getUserType() 获取用户类型，新客户传1，老客户可不传
 * @method void setUserType(integer $UserType) 设置用户类型，新客户传1，老客户可不传
 */
class TextToClassRequest extends AbstractModel
{
    /**
     * @var string 报告文本
     */
    public $Text;

    /**
     * @var integer 用户类型，新客户传1，老客户可不传
     */
    public $UserType;

    /**
     * @param string $Text 报告文本
     * @param integer $UserType 用户类型，新客户传1，老客户可不传
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

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
