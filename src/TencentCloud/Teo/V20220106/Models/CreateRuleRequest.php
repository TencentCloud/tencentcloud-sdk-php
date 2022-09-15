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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRule请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getRuleName() 获取规则名称，名称字符串长度 1～255。
 * @method void setRuleName(string $RuleName) 设置规则名称，名称字符串长度 1～255。
 * @method string getStatus() 获取规则状态，取值有：
<li> enable: 启用； </li>
<li> disable: 未启用。</li>
 * @method void setStatus(string $Status) 设置规则状态，取值有：
<li> enable: 启用； </li>
<li> disable: 未启用。</li>
 * @method array getRules() 获取规则内容。
 * @method void setRules(array $Rules) 设置规则内容。
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 规则名称，名称字符串长度 1～255。
     */
    public $RuleName;

    /**
     * @var string 规则状态，取值有：
<li> enable: 启用； </li>
<li> disable: 未启用。</li>
     */
    public $Status;

    /**
     * @var array 规则内容。
     */
    public $Rules;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $RuleName 规则名称，名称字符串长度 1～255。
     * @param string $Status 规则状态，取值有：
<li> enable: 启用； </li>
<li> disable: 未启用。</li>
     * @param array $Rules 规则内容。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RuleItem();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
