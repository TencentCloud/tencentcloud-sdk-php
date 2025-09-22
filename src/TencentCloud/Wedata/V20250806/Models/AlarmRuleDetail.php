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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警规则详细配置
 *
 * @method integer getTrigger() 获取失败触发时机 

1 – 首次失败触发
2 --所有重试完成触发 (默认)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrigger(integer $Trigger) 设置失败触发时机 

1 – 首次失败触发
2 --所有重试完成触发 (默认)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataBackfillOrRerunTrigger() 获取补录重跑触发时机

1 –  首次失败触发
2 – 所有重试完成触发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataBackfillOrRerunTrigger(integer $DataBackfillOrRerunTrigger) 设置补录重跑触发时机

1 –  首次失败触发
2 – 所有重试完成触发
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTimeOutExtInfo() 获取周期实例超时配置明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeOutExtInfo(array $TimeOutExtInfo) 设置周期实例超时配置明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataBackfillOrRerunTimeOutExtInfo() 获取重跑补录实例超时配置明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataBackfillOrRerunTimeOutExtInfo(array $DataBackfillOrRerunTimeOutExtInfo) 设置重跑补录实例超时配置明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProjectInstanceStatisticsAlarmInfoList() 获取项目波动告警配置明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectInstanceStatisticsAlarmInfoList(array $ProjectInstanceStatisticsAlarmInfoList) 设置项目波动告警配置明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReconciliationExtInfo() 获取离线集成对账告警配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReconciliationExtInfo(array $ReconciliationExtInfo) 设置离线集成对账告警配置信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmRuleDetail extends AbstractModel
{
    /**
     * @var integer 失败触发时机 

1 – 首次失败触发
2 --所有重试完成触发 (默认)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Trigger;

    /**
     * @var integer 补录重跑触发时机

1 –  首次失败触发
2 – 所有重试完成触发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataBackfillOrRerunTrigger;

    /**
     * @var array 周期实例超时配置明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeOutExtInfo;

    /**
     * @var array 重跑补录实例超时配置明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataBackfillOrRerunTimeOutExtInfo;

    /**
     * @var array 项目波动告警配置明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectInstanceStatisticsAlarmInfoList;

    /**
     * @var array 离线集成对账告警配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReconciliationExtInfo;

    /**
     * @param integer $Trigger 失败触发时机 

1 – 首次失败触发
2 --所有重试完成触发 (默认)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataBackfillOrRerunTrigger 补录重跑触发时机

1 –  首次失败触发
2 – 所有重试完成触发
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TimeOutExtInfo 周期实例超时配置明细
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataBackfillOrRerunTimeOutExtInfo 重跑补录实例超时配置明细
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProjectInstanceStatisticsAlarmInfoList 项目波动告警配置明细
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReconciliationExtInfo 离线集成对账告警配置信息
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
        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = $param["Trigger"];
        }

        if (array_key_exists("DataBackfillOrRerunTrigger",$param) and $param["DataBackfillOrRerunTrigger"] !== null) {
            $this->DataBackfillOrRerunTrigger = $param["DataBackfillOrRerunTrigger"];
        }

        if (array_key_exists("TimeOutExtInfo",$param) and $param["TimeOutExtInfo"] !== null) {
            $this->TimeOutExtInfo = [];
            foreach ($param["TimeOutExtInfo"] as $key => $value){
                $obj = new TimeOutStrategyInfo();
                $obj->deserialize($value);
                array_push($this->TimeOutExtInfo, $obj);
            }
        }

        if (array_key_exists("DataBackfillOrRerunTimeOutExtInfo",$param) and $param["DataBackfillOrRerunTimeOutExtInfo"] !== null) {
            $this->DataBackfillOrRerunTimeOutExtInfo = [];
            foreach ($param["DataBackfillOrRerunTimeOutExtInfo"] as $key => $value){
                $obj = new TimeOutStrategyInfo();
                $obj->deserialize($value);
                array_push($this->DataBackfillOrRerunTimeOutExtInfo, $obj);
            }
        }

        if (array_key_exists("ProjectInstanceStatisticsAlarmInfoList",$param) and $param["ProjectInstanceStatisticsAlarmInfoList"] !== null) {
            $this->ProjectInstanceStatisticsAlarmInfoList = [];
            foreach ($param["ProjectInstanceStatisticsAlarmInfoList"] as $key => $value){
                $obj = new ProjectInstanceStatisticsAlarmInfo();
                $obj->deserialize($value);
                array_push($this->ProjectInstanceStatisticsAlarmInfoList, $obj);
            }
        }

        if (array_key_exists("ReconciliationExtInfo",$param) and $param["ReconciliationExtInfo"] !== null) {
            $this->ReconciliationExtInfo = [];
            foreach ($param["ReconciliationExtInfo"] as $key => $value){
                $obj = new ReconciliationStrategyInfo();
                $obj->deserialize($value);
                array_push($this->ReconciliationExtInfo, $obj);
            }
        }
    }
}
