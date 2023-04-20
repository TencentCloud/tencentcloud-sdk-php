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
 * ModifyCustomWhiteRule请求参数结构体
 *
 * @method string getDomain() 获取编辑的域名
 * @method void setDomain(string $Domain) 设置编辑的域名
 * @method integer getRuleId() 获取编辑的规则ID
 * @method void setRuleId(integer $RuleId) 设置编辑的规则ID
 * @method string getRuleName() 获取编辑的规则名称
 * @method void setRuleName(string $RuleName) 设置编辑的规则名称
 * @method string getBypass() 获取放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。
 * @method void setBypass(string $Bypass) 设置放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。
 * @method integer getSortId() 获取优先级，1~100的整数，数字越小，代表这条规则的执行优先级越高。
 * @method void setSortId(integer $SortId) 设置优先级，1~100的整数，数字越小，代表这条规则的执行优先级越高。
 * @method integer getExpireTime() 获取规则生效截止时间，0：永久生效，其它值为对应时间的时间戳。
 * @method void setExpireTime(integer $ExpireTime) 设置规则生效截止时间，0：永久生效，其它值为对应时间的时间戳。
 * @method array getStrategies() 获取匹配条件数组
 * @method void setStrategies(array $Strategies) 设置匹配条件数组
 */
class ModifyCustomWhiteRuleRequest extends AbstractModel
{
    /**
     * @var string 编辑的域名
     */
    public $Domain;

    /**
     * @var integer 编辑的规则ID
     */
    public $RuleId;

    /**
     * @var string 编辑的规则名称
     */
    public $RuleName;

    /**
     * @var string 放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。
     */
    public $Bypass;

    /**
     * @var integer 优先级，1~100的整数，数字越小，代表这条规则的执行优先级越高。
     */
    public $SortId;

    /**
     * @var integer 规则生效截止时间，0：永久生效，其它值为对应时间的时间戳。
     */
    public $ExpireTime;

    /**
     * @var array 匹配条件数组
     */
    public $Strategies;

    /**
     * @param string $Domain 编辑的域名
     * @param integer $RuleId 编辑的规则ID
     * @param string $RuleName 编辑的规则名称
     * @param string $Bypass 放行时是否继续执行其它检查逻辑，继续执行地域封禁防护：geoip、继续执行CC策略防护：cc、继续执行WEB应用防护：owasp、继续执行AI引擎防护：ai、继续执行信息防泄漏防护：antileakage。如果多个勾选那么以,串接。
     * @param integer $SortId 优先级，1~100的整数，数字越小，代表这条规则的执行优先级越高。
     * @param integer $ExpireTime 规则生效截止时间，0：永久生效，其它值为对应时间的时间戳。
     * @param array $Strategies 匹配条件数组
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }
    }
}
