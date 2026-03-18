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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 号码信息
 *
 * @method string getNumber() 获取<p>号码</p>
 * @method void setNumber(string $Number) 设置<p>号码</p>
 * @method array getCallOutSkillGroupIds() 获取<p>绑定的外呼技能组</p>
 * @method void setCallOutSkillGroupIds(array $CallOutSkillGroupIds) 设置<p>绑定的外呼技能组</p>
 * @method integer getState() 获取<p>号码状态，1-正常，2-欠费停用，4-管理员停用，5-违规停用</p>
 * @method void setState(integer $State) 设置<p>号码状态，1-正常，2-欠费停用，4-管理员停用，5-违规停用</p>
 * @method integer getCostType() 获取<p>是否自携号码</p><p>枚举值：</p><ul><li>0： 非自携</li><li>1： 自携</li></ul>
 * @method void setCostType(integer $CostType) 设置<p>是否自携号码</p><p>枚举值：</p><ul><li>0： 非自携</li><li>1： 自携</li></ul>
 */
class NumberInfo extends AbstractModel
{
    /**
     * @var string <p>号码</p>
     */
    public $Number;

    /**
     * @var array <p>绑定的外呼技能组</p>
     */
    public $CallOutSkillGroupIds;

    /**
     * @var integer <p>号码状态，1-正常，2-欠费停用，4-管理员停用，5-违规停用</p>
     */
    public $State;

    /**
     * @var integer <p>是否自携号码</p><p>枚举值：</p><ul><li>0： 非自携</li><li>1： 自携</li></ul>
     */
    public $CostType;

    /**
     * @param string $Number <p>号码</p>
     * @param array $CallOutSkillGroupIds <p>绑定的外呼技能组</p>
     * @param integer $State <p>号码状态，1-正常，2-欠费停用，4-管理员停用，5-违规停用</p>
     * @param integer $CostType <p>是否自携号码</p><p>枚举值：</p><ul><li>0： 非自携</li><li>1： 自携</li></ul>
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("CallOutSkillGroupIds",$param) and $param["CallOutSkillGroupIds"] !== null) {
            $this->CallOutSkillGroupIds = $param["CallOutSkillGroupIds"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CostType",$param) and $param["CostType"] !== null) {
            $this->CostType = $param["CostType"];
        }
    }
}
