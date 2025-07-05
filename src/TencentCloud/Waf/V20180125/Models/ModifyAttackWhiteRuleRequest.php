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
 * ModifyAttackWhiteRule请求参数结构体
 *
 * @method integer getRuleId() 获取规则序号
 * @method void setRuleId(integer $RuleId) 设置规则序号
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getStatus() 获取规则状态
 * @method void setStatus(integer $Status) 设置规则状态
 * @method array getRules() 获取匹配规则项列表
 * @method void setRules(array $Rules) 设置匹配规则项列表
 * @method string getSignatureId() 获取规则Id
 * @method void setSignatureId(string $SignatureId) 设置规则Id
 * @method array getSignatureIds() 获取编辑的加白的规则ID列表
 * @method void setSignatureIds(array $SignatureIds) 设置编辑的加白的规则ID列表
 * @method array getTypeIds() 获取加白的大类规则ID
 * @method void setTypeIds(array $TypeIds) 设置加白的大类规则ID
 * @method integer getMode() 获取0表示按照特定规则ID加白, 1表示按照规则类型加白
 * @method void setMode(integer $Mode) 设置0表示按照特定规则ID加白, 1表示按照规则类型加白
 * @method string getName() 获取规则名
 * @method void setName(string $Name) 设置规则名
 */
class ModifyAttackWhiteRuleRequest extends AbstractModel
{
    /**
     * @var integer 规则序号
     */
    public $RuleId;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 规则状态
     */
    public $Status;

    /**
     * @var array 匹配规则项列表
     */
    public $Rules;

    /**
     * @var string 规则Id
     */
    public $SignatureId;

    /**
     * @var array 编辑的加白的规则ID列表
     */
    public $SignatureIds;

    /**
     * @var array 加白的大类规则ID
     */
    public $TypeIds;

    /**
     * @var integer 0表示按照特定规则ID加白, 1表示按照规则类型加白
     */
    public $Mode;

    /**
     * @var string 规则名
     */
    public $Name;

    /**
     * @param integer $RuleId 规则序号
     * @param string $Domain 域名
     * @param integer $Status 规则状态
     * @param array $Rules 匹配规则项列表
     * @param string $SignatureId 规则Id
     * @param array $SignatureIds 编辑的加白的规则ID列表
     * @param array $TypeIds 加白的大类规则ID
     * @param integer $Mode 0表示按照特定规则ID加白, 1表示按照规则类型加白
     * @param string $Name 规则名
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new UserWhiteRuleItem();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("SignatureId",$param) and $param["SignatureId"] !== null) {
            $this->SignatureId = $param["SignatureId"];
        }

        if (array_key_exists("SignatureIds",$param) and $param["SignatureIds"] !== null) {
            $this->SignatureIds = $param["SignatureIds"];
        }

        if (array_key_exists("TypeIds",$param) and $param["TypeIds"] !== null) {
            $this->TypeIds = $param["TypeIds"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
