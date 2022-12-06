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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOverviewAttackTrend返回参数结构体
 *
 * @method string getType() 获取攻击类型
 * @method void setType(string $Type) 设置攻击类型
 * @method string getStartTime() 获取防护概览攻击趋势起始时间
 * @method void setStartTime(string $StartTime) 设置防护概览攻击趋势起始时间
 * @method string getEndTime() 获取防护概览攻击趋势结束时间
 * @method void setEndTime(string $EndTime) 设置防护概览攻击趋势结束时间
 * @method integer getPeriod() 获取周期
 * @method void setPeriod(integer $Period) 设置周期
 * @method array getData() 获取每个周期点的攻击次数
 * @method void setData(array $Data) 设置每个周期点的攻击次数
 * @method integer getCount() 获取包含的周期点数
 * @method void setCount(integer $Count) 设置包含的周期点数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOverviewAttackTrendResponse extends AbstractModel
{
    /**
     * @var string 攻击类型
     */
    public $Type;

    /**
     * @var string 防护概览攻击趋势起始时间
     */
    public $StartTime;

    /**
     * @var string 防护概览攻击趋势结束时间
     */
    public $EndTime;

    /**
     * @var integer 周期
     */
    public $Period;

    /**
     * @var array 每个周期点的攻击次数
     */
    public $Data;

    /**
     * @var integer 包含的周期点数
     */
    public $Count;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Type 攻击类型
     * @param string $StartTime 防护概览攻击趋势起始时间
     * @param string $EndTime 防护概览攻击趋势结束时间
     * @param integer $Period 周期
     * @param array $Data 每个周期点的攻击次数
     * @param integer $Count 包含的周期点数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
