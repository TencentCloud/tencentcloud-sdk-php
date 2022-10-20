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
 * SwitchImageAutoAuthorizedRule请求参数结构体
 *
 * @method integer getIsEnabled() 获取规则是否生效，0:不生效，1:已生效
 * @method void setIsEnabled(integer $IsEnabled) 设置规则是否生效，0:不生效，1:已生效
 * @method integer getRuleId() 获取规则id
 * @method void setRuleId(integer $RuleId) 设置规则id
 */
class SwitchImageAutoAuthorizedRuleRequest extends AbstractModel
{
    /**
     * @var integer 规则是否生效，0:不生效，1:已生效
     */
    public $IsEnabled;

    /**
     * @var integer 规则id
     */
    public $RuleId;

    /**
     * @param integer $IsEnabled 规则是否生效，0:不生效，1:已生效
     * @param integer $RuleId 规则id
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
        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
