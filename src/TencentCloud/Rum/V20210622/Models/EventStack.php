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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件异常栈
 *
 * @method string getType() 获取<p>异常类型</p>
 * @method void setType(string $Type) 设置<p>异常类型</p>
 * @method string getValue() 获取<p>异常信息</p>
 * @method void setValue(string $Value) 设置<p>异常信息</p>
 * @method string getMechanismType() 获取<p>mechanism 类型</p>
 * @method void setMechanismType(string $MechanismType) 设置<p>mechanism 类型</p>
 * @method integer getMechanismHandled() 获取<p>是否已处理 0/1</p>
 * @method void setMechanismHandled(integer $MechanismHandled) 设置<p>是否已处理 0/1</p>
 */
class EventStack extends AbstractModel
{
    /**
     * @var string <p>异常类型</p>
     */
    public $Type;

    /**
     * @var string <p>异常信息</p>
     */
    public $Value;

    /**
     * @var string <p>mechanism 类型</p>
     */
    public $MechanismType;

    /**
     * @var integer <p>是否已处理 0/1</p>
     */
    public $MechanismHandled;

    /**
     * @param string $Type <p>异常类型</p>
     * @param string $Value <p>异常信息</p>
     * @param string $MechanismType <p>mechanism 类型</p>
     * @param integer $MechanismHandled <p>是否已处理 0/1</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("MechanismType",$param) and $param["MechanismType"] !== null) {
            $this->MechanismType = $param["MechanismType"];
        }

        if (array_key_exists("MechanismHandled",$param) and $param["MechanismHandled"] !== null) {
            $this->MechanismHandled = $param["MechanismHandled"];
        }
    }
}
