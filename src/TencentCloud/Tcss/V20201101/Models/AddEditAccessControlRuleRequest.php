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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddEditAccessControlRule请求参数结构体
 *
 * @method AccessControlRuleInfo getRuleInfo() 获取增加策略信息，策略id为空，编辑策略是id不能为空
 * @method void setRuleInfo(AccessControlRuleInfo $RuleInfo) 设置增加策略信息，策略id为空，编辑策略是id不能为空
 * @method string getEventId() 获取仅在白名单时候使用
 * @method void setEventId(string $EventId) 设置仅在白名单时候使用
 */
class AddEditAccessControlRuleRequest extends AbstractModel
{
    /**
     * @var AccessControlRuleInfo 增加策略信息，策略id为空，编辑策略是id不能为空
     */
    public $RuleInfo;

    /**
     * @var string 仅在白名单时候使用
     */
    public $EventId;

    /**
     * @param AccessControlRuleInfo $RuleInfo 增加策略信息，策略id为空，编辑策略是id不能为空
     * @param string $EventId 仅在白名单时候使用
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
        if (array_key_exists("RuleInfo",$param) and $param["RuleInfo"] !== null) {
            $this->RuleInfo = new AccessControlRuleInfo();
            $this->RuleInfo->deserialize($param["RuleInfo"]);
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
