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
 * ModifyDspmAuditFilterStrategy请求参数结构体
 *
 * @method integer getAuditFilterStrategyId() 获取<p>策略ID</p>
 * @method void setAuditFilterStrategyId(integer $AuditFilterStrategyId) 设置<p>策略ID</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getName() 获取<p>策略名称</p>
 * @method void setName(string $Name) 设置<p>策略名称</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 * @method string getRule() 获取<p>策略规则内容</p>
 * @method void setRule(string $Rule) 设置<p>策略规则内容</p>
 * @method integer getIsEnabled() 获取<p>是否启用</p><p>枚举值：</p><ul><li>0： 不启用</li><li>1： 启用</li></ul>
 * @method void setIsEnabled(integer $IsEnabled) 设置<p>是否启用</p><p>枚举值：</p><ul><li>0： 不启用</li><li>1： 启用</li></ul>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 */
class ModifyDspmAuditFilterStrategyRequest extends AbstractModel
{
    /**
     * @var integer <p>策略ID</p>
     */
    public $AuditFilterStrategyId;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>策略名称</p>
     */
    public $Name;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @var string <p>策略规则内容</p>
     */
    public $Rule;

    /**
     * @var integer <p>是否启用</p><p>枚举值：</p><ul><li>0： 不启用</li><li>1： 启用</li></ul>
     */
    public $IsEnabled;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @param integer $AuditFilterStrategyId <p>策略ID</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Name <p>策略名称</p>
     * @param string $Description <p>策略描述</p>
     * @param string $Rule <p>策略规则内容</p>
     * @param integer $IsEnabled <p>是否启用</p><p>枚举值：</p><ul><li>0： 不启用</li><li>1： 启用</li></ul>
     * @param string $Remark <p>备注</p>
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
        if (array_key_exists("AuditFilterStrategyId",$param) and $param["AuditFilterStrategyId"] !== null) {
            $this->AuditFilterStrategyId = $param["AuditFilterStrategyId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
