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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordingRules请求参数结构体
 *
 * @method string getInstanceId() 获取<p>Prometheus 实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>Prometheus 实例 ID</p>
 * @method integer getLimit() 获取<p>返回数量，默认为 20，最大值为 100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为 20，最大值为 100</p>
 * @method integer getOffset() 获取<p>偏移量，默认为 0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为 0</p>
 * @method string getRuleId() 获取<p>规则 ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则 ID</p>
 * @method integer getRuleState() 获取<p>规则状态码，取值如下：</p><li>1=RuleDeleted</li><li>2=RuleEnabled</li><li>3=RuleDisabled</li>
 * @method void setRuleState(integer $RuleState) 设置<p>规则状态码，取值如下：</p><li>1=RuleDeleted</li><li>2=RuleEnabled</li><li>3=RuleDisabled</li>
 * @method string getName() 获取<p>规则名称</p>
 * @method void setName(string $Name) 设置<p>规则名称</p>
 */
class DescribeRecordingRulesRequest extends AbstractModel
{
    /**
     * @var string <p>Prometheus 实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>返回数量，默认为 20，最大值为 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为 0</p>
     */
    public $Offset;

    /**
     * @var string <p>规则 ID</p>
     */
    public $RuleId;

    /**
     * @var integer <p>规则状态码，取值如下：</p><li>1=RuleDeleted</li><li>2=RuleEnabled</li><li>3=RuleDisabled</li>
     */
    public $RuleState;

    /**
     * @var string <p>规则名称</p>
     */
    public $Name;

    /**
     * @param string $InstanceId <p>Prometheus 实例 ID</p>
     * @param integer $Limit <p>返回数量，默认为 20，最大值为 100</p>
     * @param integer $Offset <p>偏移量，默认为 0</p>
     * @param string $RuleId <p>规则 ID</p>
     * @param integer $RuleState <p>规则状态码，取值如下：</p><li>1=RuleDeleted</li><li>2=RuleEnabled</li><li>3=RuleDisabled</li>
     * @param string $Name <p>规则名称</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
