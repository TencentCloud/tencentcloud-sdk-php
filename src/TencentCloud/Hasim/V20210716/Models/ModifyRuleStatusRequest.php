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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRuleStatus请求参数结构体
 *
 * @method integer getRuleID() 获取自动化规则ID
 * @method void setRuleID(integer $RuleID) 设置自动化规则ID
 * @method boolean getIsActive() 获取是否激活
 * @method void setIsActive(boolean $IsActive) 设置是否激活
 */
class ModifyRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer 自动化规则ID
     */
    public $RuleID;

    /**
     * @var boolean 是否激活
     */
    public $IsActive;

    /**
     * @param integer $RuleID 自动化规则ID
     * @param boolean $IsActive 是否激活
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("IsActive",$param) and $param["IsActive"] !== null) {
            $this->IsActive = $param["IsActive"];
        }
    }
}
