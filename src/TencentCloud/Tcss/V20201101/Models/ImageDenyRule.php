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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像拦截规则
 *
 * @method string getRuleID() 获取规则RuleID
 * @method void setRuleID(string $RuleID) 设置规则RuleID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getRuleType() 获取规则类型 RULE_RISK：风险， RULE_PRIVILEGE：特权
 * @method void setRuleType(string $RuleType) 设置规则类型 RULE_RISK：风险， RULE_PRIVILEGE：特权
 * @method integer getEffectImageCount() 获取生效的镜像数量
 * @method void setEffectImageCount(integer $EffectImageCount) 设置生效的镜像数量
 * @method integer getIsEffectAllImage() 获取是否对全部扫描镜像生效。0:全选镜像，1:自选镜像
 * @method void setIsEffectAllImage(integer $IsEffectAllImage) 设置是否对全部扫描镜像生效。0:全选镜像，1:自选镜像
 * @method string getEffectTime() 获取规则开始生效时间
 * @method void setEffectTime(string $EffectTime) 设置规则开始生效时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getOperationUin() 获取操作用户
 * @method void setOperationUin(string $OperationUin) 设置操作用户
 * @method integer getStatus() 获取启用状态
 * @method void setStatus(integer $Status) 设置启用状态
 * @method string getEffectStatus() 获取生效状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
 * @method void setEffectStatus(string $EffectStatus) 设置生效状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
 * @method integer getID() 获取规则ID
 * @method void setID(integer $ID) 设置规则ID
 */
class ImageDenyRule extends AbstractModel
{
    /**
     * @var string 规则RuleID
     */
    public $RuleID;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 规则类型 RULE_RISK：风险， RULE_PRIVILEGE：特权
     */
    public $RuleType;

    /**
     * @var integer 生效的镜像数量
     */
    public $EffectImageCount;

    /**
     * @var integer 是否对全部扫描镜像生效。0:全选镜像，1:自选镜像
     */
    public $IsEffectAllImage;

    /**
     * @var string 规则开始生效时间
     */
    public $EffectTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 操作用户
     */
    public $OperationUin;

    /**
     * @var integer 启用状态
     */
    public $Status;

    /**
     * @var string 生效状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
     */
    public $EffectStatus;

    /**
     * @var integer 规则ID
     */
    public $ID;

    /**
     * @param string $RuleID 规则RuleID
     * @param string $RuleName 规则名称
     * @param string $RuleType 规则类型 RULE_RISK：风险， RULE_PRIVILEGE：特权
     * @param integer $EffectImageCount 生效的镜像数量
     * @param integer $IsEffectAllImage 是否对全部扫描镜像生效。0:全选镜像，1:自选镜像
     * @param string $EffectTime 规则开始生效时间
     * @param string $UpdateTime 更新时间
     * @param string $OperationUin 操作用户
     * @param integer $Status 启用状态
     * @param string $EffectStatus 生效状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
     * @param integer $ID 规则ID
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("EffectImageCount",$param) and $param["EffectImageCount"] !== null) {
            $this->EffectImageCount = $param["EffectImageCount"];
        }

        if (array_key_exists("IsEffectAllImage",$param) and $param["IsEffectAllImage"] !== null) {
            $this->IsEffectAllImage = $param["IsEffectAllImage"];
        }

        if (array_key_exists("EffectTime",$param) and $param["EffectTime"] !== null) {
            $this->EffectTime = $param["EffectTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperationUin",$param) and $param["OperationUin"] !== null) {
            $this->OperationUin = $param["OperationUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EffectStatus",$param) and $param["EffectStatus"] !== null) {
            $this->EffectStatus = $param["EffectStatus"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
