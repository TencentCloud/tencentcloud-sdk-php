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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyQAList请求参数结构体
 *
 * @method string getKbId() 获取<p>所属知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>所属知识库 ID</p>
 * @method array getQaIdList() 获取<p>待修改的 QA ID 列表（数量：1~20）</p>
 * @method void setQaIdList(array $QaIdList) 设置<p>待修改的 QA ID 列表（数量：1~20）</p>
 * @method string getCategoryId() 获取<p>分类 ID</p>
 * @method void setCategoryId(string $CategoryId) 设置<p>分类 ID</p>
 * @method integer getEffectiveDomain() 获取<p>生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
 * @method void setEffectiveDomain(integer $EffectiveDomain) 设置<p>生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
 * @method ExpirationPolicy getExpirationPolicy() 获取<p>过期策略（有效时间与超过有效时间后的行为）</p>
 * @method void setExpirationPolicy(ExpirationPolicy $ExpirationPolicy) 设置<p>过期策略（有效时间与超过有效时间后的行为）</p>
 * @method boolean getIsAccepted() 获取<p>是否采纳（校验通过）</p>
 * @method void setIsAccepted(boolean $IsAccepted) 设置<p>是否采纳（校验通过）</p>
 * @method LabelRefIdentityList getLabelRefList() 获取<p>适用范围（标签条件列表）</p>
 * @method void setLabelRefList(LabelRefIdentityList $LabelRefList) 设置<p>适用范围（标签条件列表）</p>
 */
class ModifyQAListRequest extends AbstractModel
{
    /**
     * @var string <p>所属知识库 ID</p>
     */
    public $KbId;

    /**
     * @var array <p>待修改的 QA ID 列表（数量：1~20）</p>
     */
    public $QaIdList;

    /**
     * @var string <p>分类 ID</p>
     */
    public $CategoryId;

    /**
     * @var integer <p>生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
     */
    public $EffectiveDomain;

    /**
     * @var ExpirationPolicy <p>过期策略（有效时间与超过有效时间后的行为）</p>
     */
    public $ExpirationPolicy;

    /**
     * @var boolean <p>是否采纳（校验通过）</p>
     */
    public $IsAccepted;

    /**
     * @var LabelRefIdentityList <p>适用范围（标签条件列表）</p>
     */
    public $LabelRefList;

    /**
     * @param string $KbId <p>所属知识库 ID</p>
     * @param array $QaIdList <p>待修改的 QA ID 列表（数量：1~20）</p>
     * @param string $CategoryId <p>分类 ID</p>
     * @param integer $EffectiveDomain <p>生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
     * @param ExpirationPolicy $ExpirationPolicy <p>过期策略（有效时间与超过有效时间后的行为）</p>
     * @param boolean $IsAccepted <p>是否采纳（校验通过）</p>
     * @param LabelRefIdentityList $LabelRefList <p>适用范围（标签条件列表）</p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("QaIdList",$param) and $param["QaIdList"] !== null) {
            $this->QaIdList = $param["QaIdList"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("EffectiveDomain",$param) and $param["EffectiveDomain"] !== null) {
            $this->EffectiveDomain = $param["EffectiveDomain"];
        }

        if (array_key_exists("ExpirationPolicy",$param) and $param["ExpirationPolicy"] !== null) {
            $this->ExpirationPolicy = new ExpirationPolicy();
            $this->ExpirationPolicy->deserialize($param["ExpirationPolicy"]);
        }

        if (array_key_exists("IsAccepted",$param) and $param["IsAccepted"] !== null) {
            $this->IsAccepted = $param["IsAccepted"];
        }

        if (array_key_exists("LabelRefList",$param) and $param["LabelRefList"] !== null) {
            $this->LabelRefList = new LabelRefIdentityList();
            $this->LabelRefList->deserialize($param["LabelRefList"]);
        }
    }
}
