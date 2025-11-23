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
 * EnableLimitRuleItem
 *
 * @method integer getLimitRuleId() 获取规则ID
 * @method void setLimitRuleId(integer $LimitRuleId) 设置规则ID
 * @method integer getStatus() 获取规则开关，0开启，1关闭
 * @method void setStatus(integer $Status) 设置规则开关，0开启，1关闭
 */
class EnableLimitRuleItem extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $LimitRuleId;

    /**
     * @var integer 规则开关，0开启，1关闭
     */
    public $Status;

    /**
     * @param integer $LimitRuleId 规则ID
     * @param integer $Status 规则开关，0开启，1关闭
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
        if (array_key_exists("LimitRuleId",$param) and $param["LimitRuleId"] !== null) {
            $this->LimitRuleId = $param["LimitRuleId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
