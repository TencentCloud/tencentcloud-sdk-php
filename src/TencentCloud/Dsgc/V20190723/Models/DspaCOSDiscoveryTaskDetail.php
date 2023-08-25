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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS敏感数据扫描任务相关信息
 *
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getDescription() 获取任务描述
 * @method void setDescription(string $Description) 设置任务描述
 * @method integer getPeriod() 获取执行周期，0单次 1每天 2每周 3每月
 * @method void setPeriod(integer $Period) 设置执行周期，0单次 1每天 2每周 3每月
 * @method integer getPlan() 获取执行计划，0立即 1定时
 * @method void setPlan(integer $Plan) 设置执行计划，0立即 1定时
 * @method integer getEnable() 获取任务开关；1 打开，0 关闭
 * @method void setEnable(integer $Enable) 设置任务开关；1 打开，0 关闭
 * @method DspaCOSDiscoveryTaskDataSourceInfo getDataSourceInfo() 获取数据源对象信息
 * @method void setDataSourceInfo(DspaCOSDiscoveryTaskDataSourceInfo $DataSourceInfo) 设置数据源对象信息
 * @method integer getGeneralRuleSetEnable() 获取通用规则集开关，0 关闭，1 启用
 * @method void setGeneralRuleSetEnable(integer $GeneralRuleSetEnable) 设置通用规则集开关，0 关闭，1 启用
 * @method array getDefaultComplianceInfo() 获取当创建任务时，用户打开了通用规则集开关，则该字段就会保存默认合规组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultComplianceInfo(array $DefaultComplianceInfo) 设置当创建任务时，用户打开了通用规则集开关，则该字段就会保存默认合规组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomComplianceInfo() 获取该任务中用户选择的合规组信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomComplianceInfo(array $CustomComplianceInfo) 设置该任务中用户选择的合规组信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimingStartTime() 获取定时开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimingStartTime(string $TimingStartTime) 设置定时开始时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaCOSDiscoveryTaskDetail extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 任务描述
     */
    public $Description;

    /**
     * @var integer 执行周期，0单次 1每天 2每周 3每月
     */
    public $Period;

    /**
     * @var integer 执行计划，0立即 1定时
     */
    public $Plan;

    /**
     * @var integer 任务开关；1 打开，0 关闭
     */
    public $Enable;

    /**
     * @var DspaCOSDiscoveryTaskDataSourceInfo 数据源对象信息
     */
    public $DataSourceInfo;

    /**
     * @var integer 通用规则集开关，0 关闭，1 启用
     */
    public $GeneralRuleSetEnable;

    /**
     * @var array 当创建任务时，用户打开了通用规则集开关，则该字段就会保存默认合规组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultComplianceInfo;

    /**
     * @var array 该任务中用户选择的合规组信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomComplianceInfo;

    /**
     * @var string 定时开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimingStartTime;

    /**
     * @param string $Name 任务名称
     * @param string $Description 任务描述
     * @param integer $Period 执行周期，0单次 1每天 2每周 3每月
     * @param integer $Plan 执行计划，0立即 1定时
     * @param integer $Enable 任务开关；1 打开，0 关闭
     * @param DspaCOSDiscoveryTaskDataSourceInfo $DataSourceInfo 数据源对象信息
     * @param integer $GeneralRuleSetEnable 通用规则集开关，0 关闭，1 启用
     * @param array $DefaultComplianceInfo 当创建任务时，用户打开了通用规则集开关，则该字段就会保存默认合规组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomComplianceInfo 该任务中用户选择的合规组信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimingStartTime 定时开始时间
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Plan",$param) and $param["Plan"] !== null) {
            $this->Plan = $param["Plan"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("DataSourceInfo",$param) and $param["DataSourceInfo"] !== null) {
            $this->DataSourceInfo = new DspaCOSDiscoveryTaskDataSourceInfo();
            $this->DataSourceInfo->deserialize($param["DataSourceInfo"]);
        }

        if (array_key_exists("GeneralRuleSetEnable",$param) and $param["GeneralRuleSetEnable"] !== null) {
            $this->GeneralRuleSetEnable = $param["GeneralRuleSetEnable"];
        }

        if (array_key_exists("DefaultComplianceInfo",$param) and $param["DefaultComplianceInfo"] !== null) {
            $this->DefaultComplianceInfo = [];
            foreach ($param["DefaultComplianceInfo"] as $key => $value){
                $obj = new ScanTaskComplianceInfo();
                $obj->deserialize($value);
                array_push($this->DefaultComplianceInfo, $obj);
            }
        }

        if (array_key_exists("CustomComplianceInfo",$param) and $param["CustomComplianceInfo"] !== null) {
            $this->CustomComplianceInfo = [];
            foreach ($param["CustomComplianceInfo"] as $key => $value){
                $obj = new ScanTaskComplianceInfo();
                $obj->deserialize($value);
                array_push($this->CustomComplianceInfo, $obj);
            }
        }

        if (array_key_exists("TimingStartTime",$param) and $param["TimingStartTime"] !== null) {
            $this->TimingStartTime = $param["TimingStartTime"];
        }
    }
}
