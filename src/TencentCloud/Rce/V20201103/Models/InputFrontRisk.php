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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险趋势统计--入参
 *
 * @method integer getEventId() 获取事件ID
 * @method void setEventId(integer $EventId) 设置事件ID
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getType() 获取趋势类型
 * @method void setType(integer $Type) 设置趋势类型
 * @method string getCurrentStartTime() 获取当前开始时间
 * @method void setCurrentStartTime(string $CurrentStartTime) 设置当前开始时间
 * @method string getCurrentEndTime() 获取当前结束时间
 * @method void setCurrentEndTime(string $CurrentEndTime) 设置当前结束时间
 */
class InputFrontRisk extends AbstractModel
{
    /**
     * @var integer 事件ID
     */
    public $EventId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 趋势类型
     */
    public $Type;

    /**
     * @var string 当前开始时间
     */
    public $CurrentStartTime;

    /**
     * @var string 当前结束时间
     */
    public $CurrentEndTime;

    /**
     * @param integer $EventId 事件ID
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $Type 趋势类型
     * @param string $CurrentStartTime 当前开始时间
     * @param string $CurrentEndTime 当前结束时间
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CurrentStartTime",$param) and $param["CurrentStartTime"] !== null) {
            $this->CurrentStartTime = $param["CurrentStartTime"];
        }

        if (array_key_exists("CurrentEndTime",$param) and $param["CurrentEndTime"] !== null) {
            $this->CurrentEndTime = $param["CurrentEndTime"];
        }
    }
}
