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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRemediationExecutions请求参数结构体
 *
 * @method string getRuleId() 获取规则 ID
 * @method void setRuleId(string $RuleId) 设置规则 ID
 * @method integer getLimit() 获取分页条数。默认20， 取值1~200
 * @method void setLimit(integer $Limit) 设置分页条数。默认20， 取值1~200
 * @method integer getOffset() 获取分页偏移量。
 * @method void setOffset(integer $Offset) 设置分页偏移量。
 * @method integer getExecutionStatus() 获取修正状态 1：运行中 2：成功 3：失败
 * @method void setExecutionStatus(integer $ExecutionStatus) 设置修正状态 1：运行中 2：成功 3：失败
 */
class ListRemediationExecutionsRequest extends AbstractModel
{
    /**
     * @var string 规则 ID
     */
    public $RuleId;

    /**
     * @var integer 分页条数。默认20， 取值1~200
     */
    public $Limit;

    /**
     * @var integer 分页偏移量。
     */
    public $Offset;

    /**
     * @var integer 修正状态 1：运行中 2：成功 3：失败
     */
    public $ExecutionStatus;

    /**
     * @param string $RuleId 规则 ID
     * @param integer $Limit 分页条数。默认20， 取值1~200
     * @param integer $Offset 分页偏移量。
     * @param integer $ExecutionStatus 修正状态 1：运行中 2：成功 3：失败
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ExecutionStatus",$param) and $param["ExecutionStatus"] !== null) {
            $this->ExecutionStatus = $param["ExecutionStatus"];
        }
    }
}
