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
 * 文档可修改字段集合（配合 update_mask 使用）
 *
 * @method string getCategoryId() 获取<p>归属分类 ID</p>
 * @method void setCategoryId(string $CategoryId) 设置<p>归属分类 ID</p>
 * @method integer getEffectiveDomain() 获取<p>生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
 * @method void setEffectiveDomain(integer $EffectiveDomain) 设置<p>生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
 * @method ExpirationPolicy getExpirationPolicy() 获取<p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpirationPolicy(ExpirationPolicy $ExpirationPolicy) 设置<p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocExternalLink getExternalLink() 获取<p>外部链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalLink(DocExternalLink $ExternalLink) 设置<p>外部链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelRefList() 获取<p>标签列表</p>
 * @method void setLabelRefList(array $LabelRefList) 设置<p>标签列表</p>
 * @method string getName() 获取<p>文档名</p>
 * @method void setName(string $Name) 设置<p>文档名</p>
 * @method DocParseConfig getParseConfig() 获取<p>解析配置（分割规则、内容过滤等）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParseConfig(DocParseConfig $ParseConfig) 设置<p>解析配置（分割规则、内容过滤等）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocSwitch getSwitch() 获取<p>开关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(DocSwitch $Switch) 设置<p>开关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocUpdatePeriod getUpdatePeriod() 获取<p>更新周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatePeriod(DocUpdatePeriod $UpdatePeriod) 设置<p>更新周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserAccessConfig getUserAccessConfig() 获取<p>用户访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAccessConfig(UserAccessConfig $UserAccessConfig) 设置<p>用户访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DocModifyFields extends AbstractModel
{
    /**
     * @var string <p>归属分类 ID</p>
     */
    public $CategoryId;

    /**
     * @var integer <p>生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
     */
    public $EffectiveDomain;

    /**
     * @var ExpirationPolicy <p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpirationPolicy;

    /**
     * @var DocExternalLink <p>外部链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalLink;

    /**
     * @var array <p>标签列表</p>
     */
    public $LabelRefList;

    /**
     * @var string <p>文档名</p>
     */
    public $Name;

    /**
     * @var DocParseConfig <p>解析配置（分割规则、内容过滤等）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParseConfig;

    /**
     * @var DocSwitch <p>开关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var DocUpdatePeriod <p>更新周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatePeriod;

    /**
     * @var UserAccessConfig <p>用户访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAccessConfig;

    /**
     * @param string $CategoryId <p>归属分类 ID</p>
     * @param integer $EffectiveDomain <p>生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
     * @param ExpirationPolicy $ExpirationPolicy <p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocExternalLink $ExternalLink <p>外部链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelRefList <p>标签列表</p>
     * @param string $Name <p>文档名</p>
     * @param DocParseConfig $ParseConfig <p>解析配置（分割规则、内容过滤等）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocSwitch $Switch <p>开关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocUpdatePeriod $UpdatePeriod <p>更新周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserAccessConfig $UserAccessConfig <p>用户访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ExternalLink",$param) and $param["ExternalLink"] !== null) {
            $this->ExternalLink = new DocExternalLink();
            $this->ExternalLink->deserialize($param["ExternalLink"]);
        }

        if (array_key_exists("LabelRefList",$param) and $param["LabelRefList"] !== null) {
            $this->LabelRefList = [];
            foreach ($param["LabelRefList"] as $key => $value){
                $obj = new LabelRefIdentity();
                $obj->deserialize($value);
                array_push($this->LabelRefList, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParseConfig",$param) and $param["ParseConfig"] !== null) {
            $this->ParseConfig = new DocParseConfig();
            $this->ParseConfig->deserialize($param["ParseConfig"]);
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = new DocSwitch();
            $this->Switch->deserialize($param["Switch"]);
        }

        if (array_key_exists("UpdatePeriod",$param) and $param["UpdatePeriod"] !== null) {
            $this->UpdatePeriod = new DocUpdatePeriod();
            $this->UpdatePeriod->deserialize($param["UpdatePeriod"]);
        }

        if (array_key_exists("UserAccessConfig",$param) and $param["UserAccessConfig"] !== null) {
            $this->UserAccessConfig = new UserAccessConfig();
            $this->UserAccessConfig->deserialize($param["UserAccessConfig"]);
        }
    }
}
