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
 * ModifyImageSensitiveWhitelist请求参数结构体
 *
 * @method integer getRuleId() 获取<p>敏感信息白名单id</p>
 * @method void setRuleId(integer $RuleId) 设置<p>敏感信息白名单id</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getBehavior() 获取<p>加白的敏感信息类型</p><p>枚举值：</p><ul><li>1： root启动</li><li>2： 代码泄露</li><li>3： 凭据泄露</li></ul>
 * @method void setBehavior(integer $Behavior) 设置<p>加白的敏感信息类型</p><p>枚举值：</p><ul><li>1： root启动</li><li>2： 代码泄露</li><li>3： 凭据泄露</li></ul>
 * @method array getImageIds() 获取<p>镜像id</p>
 * @method void setImageIds(array $ImageIds) 设置<p>镜像id</p>
 * @method integer getScope() 获取<p>生效范围</p>
 * @method void setScope(integer $Scope) 设置<p>生效范围</p>
 * @method integer getStatus() 获取<p>白名单状态</p>
 * @method void setStatus(integer $Status) 设置<p>白名单状态</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 */
class ModifyImageSensitiveWhitelistRequest extends AbstractModel
{
    /**
     * @var integer <p>敏感信息白名单id</p>
     */
    public $RuleId;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>加白的敏感信息类型</p><p>枚举值：</p><ul><li>1： root启动</li><li>2： 代码泄露</li><li>3： 凭据泄露</li></ul>
     */
    public $Behavior;

    /**
     * @var array <p>镜像id</p>
     */
    public $ImageIds;

    /**
     * @var integer <p>生效范围</p>
     */
    public $Scope;

    /**
     * @var integer <p>白名单状态</p>
     */
    public $Status;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @param integer $RuleId <p>敏感信息白名单id</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $Behavior <p>加白的敏感信息类型</p><p>枚举值：</p><ul><li>1： root启动</li><li>2： 代码泄露</li><li>3： 凭据泄露</li></ul>
     * @param array $ImageIds <p>镜像id</p>
     * @param integer $Scope <p>生效范围</p>
     * @param integer $Status <p>白名单状态</p>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = $param["Behavior"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
