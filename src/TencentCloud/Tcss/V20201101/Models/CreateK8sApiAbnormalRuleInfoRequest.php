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
 * CreateK8sApiAbnormalRuleInfo请求参数结构体
 *
 * @method K8sApiAbnormalRuleInfo getRuleInfo() 获取规则详情
 * @method void setRuleInfo(K8sApiAbnormalRuleInfo $RuleInfo) 设置规则详情
 * @method string getCopySrcRuleID() 获取拷贝规则ID(适用于复制规则场景)
 * @method void setCopySrcRuleID(string $CopySrcRuleID) 设置拷贝规则ID(适用于复制规则场景)
 * @method integer getEventID() 获取事件ID(适用于事件加白场景)
 * @method void setEventID(integer $EventID) 设置事件ID(适用于事件加白场景)
 */
class CreateK8sApiAbnormalRuleInfoRequest extends AbstractModel
{
    /**
     * @var K8sApiAbnormalRuleInfo 规则详情
     */
    public $RuleInfo;

    /**
     * @var string 拷贝规则ID(适用于复制规则场景)
     */
    public $CopySrcRuleID;

    /**
     * @var integer 事件ID(适用于事件加白场景)
     */
    public $EventID;

    /**
     * @param K8sApiAbnormalRuleInfo $RuleInfo 规则详情
     * @param string $CopySrcRuleID 拷贝规则ID(适用于复制规则场景)
     * @param integer $EventID 事件ID(适用于事件加白场景)
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
        if (array_key_exists("RuleInfo",$param) and $param["RuleInfo"] !== null) {
            $this->RuleInfo = new K8sApiAbnormalRuleInfo();
            $this->RuleInfo->deserialize($param["RuleInfo"]);
        }

        if (array_key_exists("CopySrcRuleID",$param) and $param["CopySrcRuleID"] !== null) {
            $this->CopySrcRuleID = $param["CopySrcRuleID"];
        }

        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }
    }
}
