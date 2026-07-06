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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStrategyDispatchStatus返回参数结构体
 *
 * @method float getProgress() 获取进度
 * @method void setProgress(float $Progress) 设置进度
 * @method string getStartTime() 获取下发开始时间
 * @method void setStartTime(string $StartTime) 设置下发开始时间
 * @method string getEndTime() 获取下发结束时间
 * @method void setEndTime(string $EndTime) 设置下发结束时间
 * @method integer getStatus() 获取下发状态，0无变动，1下发中，2下发成功，3下发失败，4更新待下发
 * @method void setStatus(integer $Status) 设置下发状态，0无变动，1下发中，2下发成功，3下发失败，4更新待下发
 * @method integer getRuleGroupNum() 获取下发规则组数量
 * @method void setRuleGroupNum(integer $RuleGroupNum) 设置下发规则组数量
 * @method string getErrorMsg() 获取下发失败错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置下发失败错误信息
 * @method array getDispatchStrategyList() 获取下发关联策略id列表
 * @method void setDispatchStrategyList(array $DispatchStrategyList) 设置下发关联策略id列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStrategyDispatchStatusResponse extends AbstractModel
{
    /**
     * @var float 进度
     */
    public $Progress;

    /**
     * @var string 下发开始时间
     */
    public $StartTime;

    /**
     * @var string 下发结束时间
     */
    public $EndTime;

    /**
     * @var integer 下发状态，0无变动，1下发中，2下发成功，3下发失败，4更新待下发
     */
    public $Status;

    /**
     * @var integer 下发规则组数量
     */
    public $RuleGroupNum;

    /**
     * @var string 下发失败错误信息
     */
    public $ErrorMsg;

    /**
     * @var array 下发关联策略id列表
     */
    public $DispatchStrategyList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Progress 进度
     * @param string $StartTime 下发开始时间
     * @param string $EndTime 下发结束时间
     * @param integer $Status 下发状态，0无变动，1下发中，2下发成功，3下发失败，4更新待下发
     * @param integer $RuleGroupNum 下发规则组数量
     * @param string $ErrorMsg 下发失败错误信息
     * @param array $DispatchStrategyList 下发关联策略id列表
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
        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleGroupNum",$param) and $param["RuleGroupNum"] !== null) {
            $this->RuleGroupNum = $param["RuleGroupNum"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("DispatchStrategyList",$param) and $param["DispatchStrategyList"] !== null) {
            $this->DispatchStrategyList = $param["DispatchStrategyList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
