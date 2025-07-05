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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运维大屏任务展示
 *
 * @method integer getCountTag() 获取统计标示 0：全部、1：当前天、2：昨天
 * @method void setCountTag(integer $CountTag) 设置统计标示 0：全部、1：当前天、2：昨天
 * @method integer getTotalNum() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalNum(integer $TotalNum) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunningNum() 获取运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningNum(integer $RunningNum) 设置运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStoppingNum() 获取停止中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoppingNum(integer $StoppingNum) 设置停止中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStoppedNum() 获取已停止
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoppedNum(integer $StoppedNum) 设置已停止
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFrozenNum() 获取暂停
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrozenNum(integer $FrozenNum) 设置暂停
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInvalidNum() 获取无效任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvalidNum(integer $InvalidNum) 设置无效任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getYearNum() 获取年任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYearNum(integer $YearNum) 设置年任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonthNum() 获取月任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonthNum(integer $MonthNum) 设置月任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeekNum() 获取周任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeekNum(integer $WeekNum) 设置周任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDayNum() 获取天任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDayNum(integer $DayNum) 设置天任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHourNum() 获取小时任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHourNum(integer $HourNum) 设置小时任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinuteNum() 获取分钟任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinuteNum(integer $MinuteNum) 设置分钟任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWorkflowNum() 获取工作流总数
 * @method void setWorkflowNum(integer $WorkflowNum) 设置工作流总数
 */
class ScreenTaskInfo extends AbstractModel
{
    /**
     * @var integer 统计标示 0：全部、1：当前天、2：昨天
     */
    public $CountTag;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalNum;

    /**
     * @var integer 运行中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningNum;

    /**
     * @var integer 停止中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoppingNum;

    /**
     * @var integer 已停止
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoppedNum;

    /**
     * @var integer 暂停
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrozenNum;

    /**
     * @var integer 无效任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvalidNum;

    /**
     * @var integer 年任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YearNum;

    /**
     * @var integer 月任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonthNum;

    /**
     * @var integer 周任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeekNum;

    /**
     * @var integer 天任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DayNum;

    /**
     * @var integer 小时任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HourNum;

    /**
     * @var integer 分钟任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinuteNum;

    /**
     * @var integer 工作流总数
     */
    public $WorkflowNum;

    /**
     * @param integer $CountTag 统计标示 0：全部、1：当前天、2：昨天
     * @param integer $TotalNum 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunningNum 运行中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StoppingNum 停止中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StoppedNum 已停止
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FrozenNum 暂停
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InvalidNum 无效任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $YearNum 年任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonthNum 月任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WeekNum 周任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DayNum 天任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HourNum 小时任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinuteNum 分钟任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WorkflowNum 工作流总数
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
        if (array_key_exists("CountTag",$param) and $param["CountTag"] !== null) {
            $this->CountTag = $param["CountTag"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("RunningNum",$param) and $param["RunningNum"] !== null) {
            $this->RunningNum = $param["RunningNum"];
        }

        if (array_key_exists("StoppingNum",$param) and $param["StoppingNum"] !== null) {
            $this->StoppingNum = $param["StoppingNum"];
        }

        if (array_key_exists("StoppedNum",$param) and $param["StoppedNum"] !== null) {
            $this->StoppedNum = $param["StoppedNum"];
        }

        if (array_key_exists("FrozenNum",$param) and $param["FrozenNum"] !== null) {
            $this->FrozenNum = $param["FrozenNum"];
        }

        if (array_key_exists("InvalidNum",$param) and $param["InvalidNum"] !== null) {
            $this->InvalidNum = $param["InvalidNum"];
        }

        if (array_key_exists("YearNum",$param) and $param["YearNum"] !== null) {
            $this->YearNum = $param["YearNum"];
        }

        if (array_key_exists("MonthNum",$param) and $param["MonthNum"] !== null) {
            $this->MonthNum = $param["MonthNum"];
        }

        if (array_key_exists("WeekNum",$param) and $param["WeekNum"] !== null) {
            $this->WeekNum = $param["WeekNum"];
        }

        if (array_key_exists("DayNum",$param) and $param["DayNum"] !== null) {
            $this->DayNum = $param["DayNum"];
        }

        if (array_key_exists("HourNum",$param) and $param["HourNum"] !== null) {
            $this->HourNum = $param["HourNum"];
        }

        if (array_key_exists("MinuteNum",$param) and $param["MinuteNum"] !== null) {
            $this->MinuteNum = $param["MinuteNum"];
        }

        if (array_key_exists("WorkflowNum",$param) and $param["WorkflowNum"] !== null) {
            $this->WorkflowNum = $param["WorkflowNum"];
        }
    }
}
