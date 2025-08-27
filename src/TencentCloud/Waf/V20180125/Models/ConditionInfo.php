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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 免鉴权条件信息
 *
 * @method string getAttributes() 获取条件属性，目前只支持VpcID
 * @method void setAttributes(string $Attributes) 设置条件属性，目前只支持VpcID
 * @method integer getRule() 获取条件规则，1:等于，2:不等于
 * @method void setRule(integer $Rule) 设置条件规则，1:等于，2:不等于
 * @method string getConditionValue() 获取对应条件属性的值
 * @method void setConditionValue(string $ConditionValue) 设置对应条件属性的值
 */
class ConditionInfo extends AbstractModel
{
    /**
     * @var string 条件属性，目前只支持VpcID
     */
    public $Attributes;

    /**
     * @var integer 条件规则，1:等于，2:不等于
     */
    public $Rule;

    /**
     * @var string 对应条件属性的值
     */
    public $ConditionValue;

    /**
     * @param string $Attributes 条件属性，目前只支持VpcID
     * @param integer $Rule 条件规则，1:等于，2:不等于
     * @param string $ConditionValue 对应条件属性的值
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
        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = $param["Attributes"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("ConditionValue",$param) and $param["ConditionValue"] !== null) {
            $this->ConditionValue = $param["ConditionValue"];
        }
    }
}
