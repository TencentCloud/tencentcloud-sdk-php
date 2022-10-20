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
 * 木马趋势详情
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method integer getPendingEventCount() 获取待处理事件总数
 * @method void setPendingEventCount(integer $PendingEventCount) 设置待处理事件总数
 * @method integer getRiskContainerCount() 获取风险容器总数
 * @method void setRiskContainerCount(integer $RiskContainerCount) 设置风险容器总数
 * @method integer getEventCount() 获取事件总数
 * @method void setEventCount(integer $EventCount) 设置事件总数
 * @method integer getIsolateEventCount() 获取隔离事件总数
 * @method void setIsolateEventCount(integer $IsolateEventCount) 设置隔离事件总数
 */
class VirusTendencyInfo extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var integer 待处理事件总数
     */
    public $PendingEventCount;

    /**
     * @var integer 风险容器总数
     */
    public $RiskContainerCount;

    /**
     * @var integer 事件总数
     */
    public $EventCount;

    /**
     * @var integer 隔离事件总数
     */
    public $IsolateEventCount;

    /**
     * @param string $Date 日期
     * @param integer $PendingEventCount 待处理事件总数
     * @param integer $RiskContainerCount 风险容器总数
     * @param integer $EventCount 事件总数
     * @param integer $IsolateEventCount 隔离事件总数
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("PendingEventCount",$param) and $param["PendingEventCount"] !== null) {
            $this->PendingEventCount = $param["PendingEventCount"];
        }

        if (array_key_exists("RiskContainerCount",$param) and $param["RiskContainerCount"] !== null) {
            $this->RiskContainerCount = $param["RiskContainerCount"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("IsolateEventCount",$param) and $param["IsolateEventCount"] !== null) {
            $this->IsolateEventCount = $param["IsolateEventCount"];
        }
    }
}
