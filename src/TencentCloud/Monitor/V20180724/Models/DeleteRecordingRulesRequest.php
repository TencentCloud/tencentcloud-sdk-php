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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRecordingRules请求参数结构体
 *
 * @method array getRuleIds() 获取规则 ID 列表
 * @method void setRuleIds(array $RuleIds) 设置规则 ID 列表
 * @method string getInstanceId() 获取Prometheus 实例 ID
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID
 */
class DeleteRecordingRulesRequest extends AbstractModel
{
    /**
     * @var array 规则 ID 列表
     */
    public $RuleIds;

    /**
     * @var string Prometheus 实例 ID
     */
    public $InstanceId;

    /**
     * @param array $RuleIds 规则 ID 列表
     * @param string $InstanceId Prometheus 实例 ID
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
        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
