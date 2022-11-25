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
 * k8a api 异常请求规则详情
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method boolean getStatus() 获取状态
 * @method void setStatus(boolean $Status) 设置状态
 * @method array getRuleInfoList() 获取规则信息列表
 * @method void setRuleInfoList(array $RuleInfoList) 设置规则信息列表
 * @method array getEffectClusterIDSet() 获取生效集群IDSet
 * @method void setEffectClusterIDSet(array $EffectClusterIDSet) 设置生效集群IDSet
 * @method string getRuleType() 获取规则类型
RT_SYSTEM 系统规则
RT_USER 用户自定义
 * @method void setRuleType(string $RuleType) 设置规则类型
RT_SYSTEM 系统规则
RT_USER 用户自定义
 * @method boolean getEffectAllCluster() 获取是否所有集群生效
 * @method void setEffectAllCluster(boolean $EffectAllCluster) 设置是否所有集群生效
 * @method string getRuleID() 获取规则ID
 * @method void setRuleID(string $RuleID) 设置规则ID
 */
class K8sApiAbnormalRuleInfo extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var boolean 状态
     */
    public $Status;

    /**
     * @var array 规则信息列表
     */
    public $RuleInfoList;

    /**
     * @var array 生效集群IDSet
     */
    public $EffectClusterIDSet;

    /**
     * @var string 规则类型
RT_SYSTEM 系统规则
RT_USER 用户自定义
     */
    public $RuleType;

    /**
     * @var boolean 是否所有集群生效
     */
    public $EffectAllCluster;

    /**
     * @var string 规则ID
     */
    public $RuleID;

    /**
     * @param string $RuleName 规则名称
     * @param boolean $Status 状态
     * @param array $RuleInfoList 规则信息列表
     * @param array $EffectClusterIDSet 生效集群IDSet
     * @param string $RuleType 规则类型
RT_SYSTEM 系统规则
RT_USER 用户自定义
     * @param boolean $EffectAllCluster 是否所有集群生效
     * @param string $RuleID 规则ID
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleInfoList",$param) and $param["RuleInfoList"] !== null) {
            $this->RuleInfoList = [];
            foreach ($param["RuleInfoList"] as $key => $value){
                $obj = new K8sApiAbnormalRuleScopeInfo();
                $obj->deserialize($value);
                array_push($this->RuleInfoList, $obj);
            }
        }

        if (array_key_exists("EffectClusterIDSet",$param) and $param["EffectClusterIDSet"] !== null) {
            $this->EffectClusterIDSet = $param["EffectClusterIDSet"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("EffectAllCluster",$param) and $param["EffectAllCluster"] !== null) {
            $this->EffectAllCluster = $param["EffectAllCluster"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }
    }
}
