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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则运行情况结果
 *
 * @method integer getTotalCnt() 获取规则运行总数
 * @method void setTotalCnt(integer $TotalCnt) 设置规则运行总数
 * @method integer getLastTotalCnt() 获取环比规则运行总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTotalCnt(integer $LastTotalCnt) 设置环比规则运行总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalCntRatio() 获取规则运行总数占比
 * @method void setTotalCntRatio(float $TotalCntRatio) 设置规则运行总数占比
 * @method float getLastTotalCntRatio() 获取规则运行总数环比变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTotalCntRatio(float $LastTotalCntRatio) 设置规则运行总数环比变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTriggerCnt() 获取规则触发数
 * @method void setTriggerCnt(integer $TriggerCnt) 设置规则触发数
 * @method integer getLastTriggerCnt() 获取环比规则触发数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTriggerCnt(integer $LastTriggerCnt) 设置环比规则触发数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTriggerCntRatio() 获取触发占总数占比
 * @method void setTriggerCntRatio(float $TriggerCntRatio) 设置触发占总数占比
 * @method float getLastTriggerCntRatio() 获取环比规则触发数变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTriggerCntRatio(float $LastTriggerCntRatio) 设置环比规则触发数变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmCnt() 获取规则报警数
 * @method void setAlarmCnt(integer $AlarmCnt) 设置规则报警数
 * @method integer getLastAlarmCnt() 获取环比规则报警数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastAlarmCnt(integer $LastAlarmCnt) 设置环比规则报警数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAlarmCntRatio() 获取报警占总数占比
 * @method void setAlarmCntRatio(float $AlarmCntRatio) 设置报警占总数占比
 * @method float getLastAlarmCntRatio() 获取环比报警数变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastAlarmCntRatio(float $LastAlarmCntRatio) 设置环比报警数变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPipelineCnt() 获取阻塞发生数
 * @method void setPipelineCnt(integer $PipelineCnt) 设置阻塞发生数
 * @method integer getLastPipelineCnt() 获取环比阻塞发生数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastPipelineCnt(integer $LastPipelineCnt) 设置环比阻塞发生数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPipelineCntRatio() 获取阻塞占总数占比
 * @method void setPipelineCntRatio(float $PipelineCntRatio) 设置阻塞占总数占比
 * @method float getLastPipelineCntRatio() 获取环比阻塞发生数变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastPipelineCntRatio(float $LastPipelineCntRatio) 设置环比阻塞发生数变化
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleExecStat extends AbstractModel
{
    /**
     * @var integer 规则运行总数
     */
    public $TotalCnt;

    /**
     * @var integer 环比规则运行总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTotalCnt;

    /**
     * @var float 规则运行总数占比
     */
    public $TotalCntRatio;

    /**
     * @var float 规则运行总数环比变化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTotalCntRatio;

    /**
     * @var integer 规则触发数
     */
    public $TriggerCnt;

    /**
     * @var integer 环比规则触发数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTriggerCnt;

    /**
     * @var float 触发占总数占比
     */
    public $TriggerCntRatio;

    /**
     * @var float 环比规则触发数变化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTriggerCntRatio;

    /**
     * @var integer 规则报警数
     */
    public $AlarmCnt;

    /**
     * @var integer 环比规则报警数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastAlarmCnt;

    /**
     * @var float 报警占总数占比
     */
    public $AlarmCntRatio;

    /**
     * @var float 环比报警数变化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastAlarmCntRatio;

    /**
     * @var integer 阻塞发生数
     */
    public $PipelineCnt;

    /**
     * @var integer 环比阻塞发生数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastPipelineCnt;

    /**
     * @var float 阻塞占总数占比
     */
    public $PipelineCntRatio;

    /**
     * @var float 环比阻塞发生数变化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastPipelineCntRatio;

    /**
     * @param integer $TotalCnt 规则运行总数
     * @param integer $LastTotalCnt 环比规则运行总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalCntRatio 规则运行总数占比
     * @param float $LastTotalCntRatio 规则运行总数环比变化
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerCnt 规则触发数
     * @param integer $LastTriggerCnt 环比规则触发数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TriggerCntRatio 触发占总数占比
     * @param float $LastTriggerCntRatio 环比规则触发数变化
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmCnt 规则报警数
     * @param integer $LastAlarmCnt 环比规则报警数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $AlarmCntRatio 报警占总数占比
     * @param float $LastAlarmCntRatio 环比报警数变化
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PipelineCnt 阻塞发生数
     * @param integer $LastPipelineCnt 环比阻塞发生数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $PipelineCntRatio 阻塞占总数占比
     * @param float $LastPipelineCntRatio 环比阻塞发生数变化
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("LastTotalCnt",$param) and $param["LastTotalCnt"] !== null) {
            $this->LastTotalCnt = $param["LastTotalCnt"];
        }

        if (array_key_exists("TotalCntRatio",$param) and $param["TotalCntRatio"] !== null) {
            $this->TotalCntRatio = $param["TotalCntRatio"];
        }

        if (array_key_exists("LastTotalCntRatio",$param) and $param["LastTotalCntRatio"] !== null) {
            $this->LastTotalCntRatio = $param["LastTotalCntRatio"];
        }

        if (array_key_exists("TriggerCnt",$param) and $param["TriggerCnt"] !== null) {
            $this->TriggerCnt = $param["TriggerCnt"];
        }

        if (array_key_exists("LastTriggerCnt",$param) and $param["LastTriggerCnt"] !== null) {
            $this->LastTriggerCnt = $param["LastTriggerCnt"];
        }

        if (array_key_exists("TriggerCntRatio",$param) and $param["TriggerCntRatio"] !== null) {
            $this->TriggerCntRatio = $param["TriggerCntRatio"];
        }

        if (array_key_exists("LastTriggerCntRatio",$param) and $param["LastTriggerCntRatio"] !== null) {
            $this->LastTriggerCntRatio = $param["LastTriggerCntRatio"];
        }

        if (array_key_exists("AlarmCnt",$param) and $param["AlarmCnt"] !== null) {
            $this->AlarmCnt = $param["AlarmCnt"];
        }

        if (array_key_exists("LastAlarmCnt",$param) and $param["LastAlarmCnt"] !== null) {
            $this->LastAlarmCnt = $param["LastAlarmCnt"];
        }

        if (array_key_exists("AlarmCntRatio",$param) and $param["AlarmCntRatio"] !== null) {
            $this->AlarmCntRatio = $param["AlarmCntRatio"];
        }

        if (array_key_exists("LastAlarmCntRatio",$param) and $param["LastAlarmCntRatio"] !== null) {
            $this->LastAlarmCntRatio = $param["LastAlarmCntRatio"];
        }

        if (array_key_exists("PipelineCnt",$param) and $param["PipelineCnt"] !== null) {
            $this->PipelineCnt = $param["PipelineCnt"];
        }

        if (array_key_exists("LastPipelineCnt",$param) and $param["LastPipelineCnt"] !== null) {
            $this->LastPipelineCnt = $param["LastPipelineCnt"];
        }

        if (array_key_exists("PipelineCntRatio",$param) and $param["PipelineCntRatio"] !== null) {
            $this->PipelineCntRatio = $param["PipelineCntRatio"];
        }

        if (array_key_exists("LastPipelineCntRatio",$param) and $param["LastPipelineCntRatio"] !== null) {
            $this->LastPipelineCntRatio = $param["LastPipelineCntRatio"];
        }
    }
}
