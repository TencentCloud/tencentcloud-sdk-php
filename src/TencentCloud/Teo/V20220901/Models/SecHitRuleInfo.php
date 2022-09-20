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
 * 命中规则信息
 *
 * @method integer getRuleId() 获取规则ID。
 * @method void setRuleId(integer $RuleId) 设置规则ID。
 * @method string getRuleTypeName() 获取规则类型名称。
 * @method void setRuleTypeName(string $RuleTypeName) 设置规则类型名称。
 * @method string getAction() 获取执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
 * @method void setAction(string $Action) 设置执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
 * @method integer getHitTime() 获取命中时间，采用unix秒级时间戳。
 * @method void setHitTime(integer $HitTime) 设置命中时间，采用unix秒级时间戳。
 * @method integer getRequestNum() 获取请求数。
 * @method void setRequestNum(integer $RequestNum) 设置请求数。
 * @method string getDescription() 获取规则描述。
 * @method void setDescription(string $Description) 设置规则描述。
 * @method string getDomain() 获取子域名。
 * @method void setDomain(string $Domain) 设置子域名。
 */
class SecHitRuleInfo extends AbstractModel
{
    /**
     * @var integer 规则ID。
     */
    public $RuleId;

    /**
     * @var string 规则类型名称。
     */
    public $RuleTypeName;

    /**
     * @var string 执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
     */
    public $Action;

    /**
     * @var integer 命中时间，采用unix秒级时间戳。
     */
    public $HitTime;

    /**
     * @var integer 请求数。
     */
    public $RequestNum;

    /**
     * @var string 规则描述。
     */
    public $Description;

    /**
     * @var string 子域名。
     */
    public $Domain;

    /**
     * @param integer $RuleId 规则ID。
     * @param string $RuleTypeName 规则类型名称。
     * @param string $Action 执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
     * @param integer $HitTime 命中时间，采用unix秒级时间戳。
     * @param integer $RequestNum 请求数。
     * @param string $Description 规则描述。
     * @param string $Domain 子域名。
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("HitTime",$param) and $param["HitTime"] !== null) {
            $this->HitTime = $param["HitTime"];
        }

        if (array_key_exists("RequestNum",$param) and $param["RequestNum"] !== null) {
            $this->RequestNum = $param["RequestNum"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
