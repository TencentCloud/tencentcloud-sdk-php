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
 * DeleteEDRRules请求参数结构体
 *
 * @method array getRuleIDs() 获取<p>规则ID数组. (最大100条)</p>
 * @method void setRuleIDs(array $RuleIDs) 设置<p>规则ID数组. (最大100条)</p>
 * @method integer getRuleType() 获取<p>规则类型，0-system 1-custom，目前只支持删除自定义规则</p>
 * @method void setRuleType(integer $RuleType) 设置<p>规则类型，0-system 1-custom，目前只支持删除自定义规则</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getTargetAppIDs() 获取<p>删除策略对应的APPID</p>
 * @method void setTargetAppIDs(array $TargetAppIDs) 设置<p>删除策略对应的APPID</p>
 */
class DeleteEDRRulesRequest extends AbstractModel
{
    /**
     * @var array <p>规则ID数组. (最大100条)</p>
     */
    public $RuleIDs;

    /**
     * @var integer <p>规则类型，0-system 1-custom，目前只支持删除自定义规则</p>
     */
    public $RuleType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>删除策略对应的APPID</p>
     */
    public $TargetAppIDs;

    /**
     * @param array $RuleIDs <p>规则ID数组. (最大100条)</p>
     * @param integer $RuleType <p>规则类型，0-system 1-custom，目前只支持删除自定义规则</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $TargetAppIDs <p>删除策略对应的APPID</p>
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

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }
    }
}
