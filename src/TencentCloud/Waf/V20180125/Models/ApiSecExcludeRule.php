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
 * 排除无效api资产的规则
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getMatchType() 获取匹配类型，regex、prefix、suffix、contain匹配模式
 * @method void setMatchType(string $MatchType) 设置匹配类型，regex、prefix、suffix、contain匹配模式
 * @method string getContent() 获取匹配内容
 * @method void setContent(string $Content) 设置匹配内容
 * @method integer getStatus() 获取状态开关
 * @method void setStatus(integer $Status) 设置状态开关
 * @method integer getUpdateTime() 获取规则更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置规则更新时间
 */
class ApiSecExcludeRule extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 匹配类型，regex、prefix、suffix、contain匹配模式
     */
    public $MatchType;

    /**
     * @var string 匹配内容
     */
    public $Content;

    /**
     * @var integer 状态开关
     */
    public $Status;

    /**
     * @var integer 规则更新时间
     */
    public $UpdateTime;

    /**
     * @param string $RuleName 规则名称
     * @param string $MatchType 匹配类型，regex、prefix、suffix、contain匹配模式
     * @param string $Content 匹配内容
     * @param integer $Status 状态开关
     * @param integer $UpdateTime 规则更新时间
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
