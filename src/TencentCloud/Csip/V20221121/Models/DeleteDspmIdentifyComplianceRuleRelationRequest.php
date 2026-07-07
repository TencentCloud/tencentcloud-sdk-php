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
 * DeleteDspmIdentifyComplianceRuleRelation请求参数结构体
 *
 * @method integer getComplianceId() 获取<p>识别模板ID</p>
 * @method void setComplianceId(integer $ComplianceId) 设置<p>识别模板ID</p>
 * @method integer getCategoryId() 获取<p>分类ID</p>
 * @method void setCategoryId(integer $CategoryId) 设置<p>分类ID</p>
 * @method array getRuleIds() 获取<p>数据项ID集合</p>
 * @method void setRuleIds(array $RuleIds) 设置<p>数据项ID集合</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class DeleteDspmIdentifyComplianceRuleRelationRequest extends AbstractModel
{
    /**
     * @var integer <p>识别模板ID</p>
     */
    public $ComplianceId;

    /**
     * @var integer <p>分类ID</p>
     */
    public $CategoryId;

    /**
     * @var array <p>数据项ID集合</p>
     */
    public $RuleIds;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param integer $ComplianceId <p>识别模板ID</p>
     * @param integer $CategoryId <p>分类ID</p>
     * @param array $RuleIds <p>数据项ID集合</p>
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
        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
