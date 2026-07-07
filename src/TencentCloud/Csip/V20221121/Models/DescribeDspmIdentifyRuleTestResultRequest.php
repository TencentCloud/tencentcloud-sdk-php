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
 * DescribeDspmIdentifyRuleTestResult请求参数结构体
 *
 * @method string getRuleType() 获取<p>规则类型</p><p>枚举值：</p><ul><li>structured： 结构化规则</li><li>unstructrued： 非结构化规则</li></ul>
 * @method void setRuleType(string $RuleType) 设置<p>规则类型</p><p>枚举值：</p><ul><li>structured： 结构化规则</li><li>unstructrued： 非结构化规则</li></ul>
 * @method string getRuleContent() 获取<p>规则内容</p>
 * @method void setRuleContent(string $RuleContent) 设置<p>规则内容</p>
 * @method integer getRuleId() 获取<p>数据项id</p>
 * @method void setRuleId(integer $RuleId) 设置<p>数据项id</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getStructuredTestContent() 获取<p>结构化测试内容</p>
 * @method void setStructuredTestContent(array $StructuredTestContent) 设置<p>结构化测试内容</p>
 * @method string getUnStructuredTestContent() 获取<p>非结构化测试内容</p>
 * @method void setUnStructuredTestContent(string $UnStructuredTestContent) 设置<p>非结构化测试内容</p>
 */
class DescribeDspmIdentifyRuleTestResultRequest extends AbstractModel
{
    /**
     * @var string <p>规则类型</p><p>枚举值：</p><ul><li>structured： 结构化规则</li><li>unstructrued： 非结构化规则</li></ul>
     */
    public $RuleType;

    /**
     * @var string <p>规则内容</p>
     */
    public $RuleContent;

    /**
     * @var integer <p>数据项id</p>
     */
    public $RuleId;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>结构化测试内容</p>
     */
    public $StructuredTestContent;

    /**
     * @var string <p>非结构化测试内容</p>
     */
    public $UnStructuredTestContent;

    /**
     * @param string $RuleType <p>规则类型</p><p>枚举值：</p><ul><li>structured： 结构化规则</li><li>unstructrued： 非结构化规则</li></ul>
     * @param string $RuleContent <p>规则内容</p>
     * @param integer $RuleId <p>数据项id</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $StructuredTestContent <p>结构化测试内容</p>
     * @param string $UnStructuredTestContent <p>非结构化测试内容</p>
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("StructuredTestContent",$param) and $param["StructuredTestContent"] !== null) {
            $this->StructuredTestContent = [];
            foreach ($param["StructuredTestContent"] as $key => $value){
                $obj = new DspmIdentifyRuleStructuredTestItem();
                $obj->deserialize($value);
                array_push($this->StructuredTestContent, $obj);
            }
        }

        if (array_key_exists("UnStructuredTestContent",$param) and $param["UnStructuredTestContent"] !== null) {
            $this->UnStructuredTestContent = $param["UnStructuredTestContent"];
        }
    }
}
