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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEDRRulesAction请求参数结构体
 *
 * @method array getRuleIDs() 获取<p>策略ID数组</p>
 * @method void setRuleIDs(array $RuleIDs) 设置<p>策略ID数组</p>
 * @method integer getAlertAction() 获取<p>目标 Action：0-告警 1-放行 2-告警并拦截</p>
 * @method void setAlertAction(integer $AlertAction) 设置<p>目标 Action：0-告警 1-放行 2-告警并拦截</p>
 * @method array getTargetAppIDs() 获取<p>目标账号 AppId 列表</p>
 * @method void setTargetAppIDs(array $TargetAppIDs) 设置<p>目标账号 AppId 列表</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class ModifyEDRRulesActionRequest extends AbstractModel
{
    /**
     * @var array <p>策略ID数组</p>
     */
    public $RuleIDs;

    /**
     * @var integer <p>目标 Action：0-告警 1-放行 2-告警并拦截</p>
     */
    public $AlertAction;

    /**
     * @var array <p>目标账号 AppId 列表</p>
     */
    public $TargetAppIDs;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param array $RuleIDs <p>策略ID数组</p>
     * @param integer $AlertAction <p>目标 Action：0-告警 1-放行 2-告警并拦截</p>
     * @param array $TargetAppIDs <p>目标账号 AppId 列表</p>
     * @param array $MemberId <p>集团账号的成员id</p>
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
        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("AlertAction",$param) and $param["AlertAction"] !== null) {
            $this->AlertAction = $param["AlertAction"];
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
