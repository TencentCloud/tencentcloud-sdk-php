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
namespace TencentCloud\Rce\V20250425\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP画像出参
 *
 * @method integer getCode() 获取返回码
 * @method void setCode(integer $Code) 设置返回码
 * @method string getMessage() 获取返回消息
 * @method void setMessage(string $Message) 设置返回消息
 * @method ManageIPPortraitRiskValueOutput getValue() 获取结果
 * @method void setValue(ManageIPPortraitRiskValueOutput $Value) 设置结果
 */
class ManageIPPortraitRiskOutput extends AbstractModel
{
    /**
     * @var integer 返回码
     */
    public $Code;

    /**
     * @var string 返回消息
     */
    public $Message;

    /**
     * @var ManageIPPortraitRiskValueOutput 结果
     */
    public $Value;

    /**
     * @param integer $Code 返回码
     * @param string $Message 返回消息
     * @param ManageIPPortraitRiskValueOutput $Value 结果
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new ManageIPPortraitRiskValueOutput();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
