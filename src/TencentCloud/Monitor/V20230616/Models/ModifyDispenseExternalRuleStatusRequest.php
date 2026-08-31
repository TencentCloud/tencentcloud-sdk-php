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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDispenseExternalRuleStatus请求参数结构体
 *
 * @method array getRuleIdList() 获取规则id列表
 * @method void setRuleIdList(array $RuleIdList) 设置规则id列表
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 */
class ModifyDispenseExternalRuleStatusRequest extends AbstractModel
{
    /**
     * @var array 规则id列表
     */
    public $RuleIdList;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @param array $RuleIdList 规则id列表
     * @param integer $Status 状态
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
        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
