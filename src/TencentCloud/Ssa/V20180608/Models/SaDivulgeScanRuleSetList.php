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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设置_泄露监测产品监测扫描规则策略
 *
 * @method string getValue() 获取Value
 * @method void setValue(string $Value) 设置Value
 * @method integer getCode() 获取Code
 * @method void setCode(integer $Code) 设置Code
 * @method string getMessage() 获取Message
 * @method void setMessage(string $Message) 设置Message
 */
class SaDivulgeScanRuleSetList extends AbstractModel
{
    /**
     * @var string Value
     */
    public $Value;

    /**
     * @var integer Code
     */
    public $Code;

    /**
     * @var string Message
     */
    public $Message;

    /**
     * @param string $Value Value
     * @param integer $Code Code
     * @param string $Message Message
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
