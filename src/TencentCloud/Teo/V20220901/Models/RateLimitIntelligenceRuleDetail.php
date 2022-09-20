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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 速率限制智能客户端过滤规则详情
 *
 * @method string getMatchContent() 获取智能识别到的客户端IP。
 * @method void setMatchContent(string $MatchContent) 设置智能识别到的客户端IP。
 * @method string getAction() 获取应用的动作。
 * @method void setAction(string $Action) 设置应用的动作。
 * @method string getEffectiveTime() 获取更新时间。
 * @method void setEffectiveTime(string $EffectiveTime) 设置更新时间。
 * @method string getExpireTime() 获取失效时间。
 * @method void setExpireTime(string $ExpireTime) 设置失效时间。
 * @method integer getRuleId() 获取规则id。
 * @method void setRuleId(integer $RuleId) 设置规则id。
 * @method string getStatus() 获取处置状态，allowed即已经人为放行。
 * @method void setStatus(string $Status) 设置处置状态，allowed即已经人为放行。
 */
class RateLimitIntelligenceRuleDetail extends AbstractModel
{
    /**
     * @var string 智能识别到的客户端IP。
     */
    public $MatchContent;

    /**
     * @var string 应用的动作。
     */
    public $Action;

    /**
     * @var string 更新时间。
     */
    public $EffectiveTime;

    /**
     * @var string 失效时间。
     */
    public $ExpireTime;

    /**
     * @var integer 规则id。
     */
    public $RuleId;

    /**
     * @var string 处置状态，allowed即已经人为放行。
     */
    public $Status;

    /**
     * @param string $MatchContent 智能识别到的客户端IP。
     * @param string $Action 应用的动作。
     * @param string $EffectiveTime 更新时间。
     * @param string $ExpireTime 失效时间。
     * @param integer $RuleId 规则id。
     * @param string $Status 处置状态，allowed即已经人为放行。
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
        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
