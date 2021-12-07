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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccessControlRuleStatus请求参数结构体
 *
 * @method array getRuleIdSet() 获取策略的ids
 * @method void setRuleIdSet(array $RuleIdSet) 设置策略的ids
 * @method boolean getIsEnable() 获取策略开关，true:代表开启， false代表关闭
 * @method void setIsEnable(boolean $IsEnable) 设置策略开关，true:代表开启， false代表关闭
 */
class ModifyAccessControlRuleStatusRequest extends AbstractModel
{
    /**
     * @var array 策略的ids
     */
    public $RuleIdSet;

    /**
     * @var boolean 策略开关，true:代表开启， false代表关闭
     */
    public $IsEnable;

    /**
     * @param array $RuleIdSet 策略的ids
     * @param boolean $IsEnable 策略开关，true:代表开启， false代表关闭
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
        if (array_key_exists("RuleIdSet",$param) and $param["RuleIdSet"] !== null) {
            $this->RuleIdSet = $param["RuleIdSet"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }
    }
}
