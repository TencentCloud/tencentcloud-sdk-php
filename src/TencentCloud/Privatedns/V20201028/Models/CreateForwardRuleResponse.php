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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateForwardRule返回参数结构体
 *
 * @method string getRuleId() 获取转发规则ID
 * @method void setRuleId(string $RuleId) 设置转发规则ID
 * @method string getRuleName() 获取转发规则名称
 * @method void setRuleName(string $RuleName) 设置转发规则名称
 * @method string getRuleType() 获取转发规则类型
 * @method void setRuleType(string $RuleType) 设置转发规则类型
 * @method string getZoneId() 获取私有域ID
 * @method void setZoneId(string $ZoneId) 设置私有域ID
 * @method string getEndPointId() 获取终端节点ID
 * @method void setEndPointId(string $EndPointId) 设置终端节点ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateForwardRuleResponse extends AbstractModel
{
    /**
     * @var string 转发规则ID
     */
    public $RuleId;

    /**
     * @var string 转发规则名称
     */
    public $RuleName;

    /**
     * @var string 转发规则类型
     */
    public $RuleType;

    /**
     * @var string 私有域ID
     */
    public $ZoneId;

    /**
     * @var string 终端节点ID
     */
    public $EndPointId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RuleId 转发规则ID
     * @param string $RuleName 转发规则名称
     * @param string $RuleType 转发规则类型
     * @param string $ZoneId 私有域ID
     * @param string $EndPointId 终端节点ID
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
