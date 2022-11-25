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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * k8s api 异常请求规则列表Item
 *
 * @method string getRuleID() 获取规则ID
 * @method void setRuleID(string $RuleID) 设置规则ID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getRuleType() 获取规则类型
RT_SYSTEM 系统规则
RT_USER 用户自定义
 * @method void setRuleType(string $RuleType) 设置规则类型
RT_SYSTEM 系统规则
RT_USER 用户自定义
 * @method integer getEffectClusterCount() 获取受影响集群总数
 * @method void setEffectClusterCount(integer $EffectClusterCount) 设置受影响集群总数
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getOprUin() 获取编辑账号
 * @method void setOprUin(string $OprUin) 设置编辑账号
 * @method boolean getStatus() 获取状态
 * @method void setStatus(boolean $Status) 设置状态
 */
class K8sApiAbnormalRuleListItem extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleID;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 规则类型
RT_SYSTEM 系统规则
RT_USER 用户自定义
     */
    public $RuleType;

    /**
     * @var integer 受影响集群总数
     */
    public $EffectClusterCount;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 编辑账号
     */
    public $OprUin;

    /**
     * @var boolean 状态
     */
    public $Status;

    /**
     * @param string $RuleID 规则ID
     * @param string $RuleName 规则名称
     * @param string $RuleType 规则类型
RT_SYSTEM 系统规则
RT_USER 用户自定义
     * @param integer $EffectClusterCount 受影响集群总数
     * @param string $UpdateTime 更新时间
     * @param string $OprUin 编辑账号
     * @param boolean $Status 状态
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

        if (array_key_exists("EffectClusterCount",$param) and $param["EffectClusterCount"] !== null) {
            $this->EffectClusterCount = $param["EffectClusterCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OprUin",$param) and $param["OprUin"] !== null) {
            $this->OprUin = $param["OprUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
