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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tiga规则
 *
 * @method string getTypeID() 获取规则ID
 * @method void setTypeID(string $TypeID) 设置规则ID
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getDesc() 获取规则类型描述

 * @method void setDesc(string $Desc) 设置规则类型描述

 * @method integer getRuleTypeStatus() 获取规则类型状态，即类型生效开关，0：关闭，1：开启
 * @method void setRuleTypeStatus(integer $RuleTypeStatus) 设置规则类型状态，即类型生效开关，0：关闭，1：开启
 * @method integer getActiveRuleCount() 获取类型下生效的规则数量
 * @method void setActiveRuleCount(integer $ActiveRuleCount) 设置类型下生效的规则数量
 * @method integer getTotalRuleCount() 获取类型下的规则总数量
 * @method void setTotalRuleCount(integer $TotalRuleCount) 设置类型下的规则总数量
 */
class RuleType extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $TypeID;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 规则类型描述

     */
    public $Desc;

    /**
     * @var integer 规则类型状态，即类型生效开关，0：关闭，1：开启
     */
    public $RuleTypeStatus;

    /**
     * @var integer 类型下生效的规则数量
     */
    public $ActiveRuleCount;

    /**
     * @var integer 类型下的规则总数量
     */
    public $TotalRuleCount;

    /**
     * @param string $TypeID 规则ID
     * @param string $Name 规则名称
     * @param string $Desc 规则类型描述

     * @param integer $RuleTypeStatus 规则类型状态，即类型生效开关，0：关闭，1：开启
     * @param integer $ActiveRuleCount 类型下生效的规则数量
     * @param integer $TotalRuleCount 类型下的规则总数量
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
        if (array_key_exists("TypeID",$param) and $param["TypeID"] !== null) {
            $this->TypeID = $param["TypeID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("RuleTypeStatus",$param) and $param["RuleTypeStatus"] !== null) {
            $this->RuleTypeStatus = $param["RuleTypeStatus"];
        }

        if (array_key_exists("ActiveRuleCount",$param) and $param["ActiveRuleCount"] !== null) {
            $this->ActiveRuleCount = $param["ActiveRuleCount"];
        }

        if (array_key_exists("TotalRuleCount",$param) and $param["TotalRuleCount"] !== null) {
            $this->TotalRuleCount = $param["TotalRuleCount"];
        }
    }
}
