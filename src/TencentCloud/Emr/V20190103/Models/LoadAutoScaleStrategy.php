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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动扩缩容基于负载指标的规则
 *
 * @method integer getStrategyId() 获取规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyId(integer $StrategyId) 设置规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyName() 获取规则名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyName(string $StrategyName) 设置规则名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCalmDownTime() 获取规则生效冷却时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalmDownTime(integer $CalmDownTime) 设置规则生效冷却时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaleAction() 获取扩缩容动作，1表示扩容，2表示缩容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleAction(integer $ScaleAction) 设置扩缩容动作，1表示扩容，2表示缩容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaleNum() 获取每次规则生效时的扩缩容数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleNum(integer $ScaleNum) 设置每次规则生效时的扩缩容数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProcessMethod() 获取指标处理方法，1表示MAX，2表示MIN，3表示AVG。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessMethod(integer $ProcessMethod) 设置指标处理方法，1表示MAX，2表示MIN，3表示AVG。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriority() 获取规则优先级，添加时无效，默认为自增。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置规则优先级，添加时无效，默认为自增。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategyStatus() 获取规则状态，1表示启动，3表示禁用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyStatus(integer $StrategyStatus) 设置规则状态，1表示启动，3表示禁用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYarnNodeLabel() 获取规则扩容指定 yarn node label
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarnNodeLabel(string $YarnNodeLabel) 设置规则扩容指定 yarn node label
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeriodValid() 获取规则生效的有效时间
 * @method void setPeriodValid(string $PeriodValid) 设置规则生效的有效时间
 * @method boolean getGraceDownFlag() 获取优雅缩容开关
 * @method void setGraceDownFlag(boolean $GraceDownFlag) 设置优雅缩容开关
 * @method integer getGraceDownTime() 获取优雅缩容等待时间
 * @method void setGraceDownTime(integer $GraceDownTime) 设置优雅缩容等待时间
 * @method array getTags() 获取绑定标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置绑定标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigGroupAssigned() 获取预设配置组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigGroupAssigned(string $ConfigGroupAssigned) 设置预设配置组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMeasureMethod() 获取扩容资源计算方法，"DEFAULT","INSTANCE", "CPU", "MEMORYGB"。
"DEFAULT"表示默认方式，与"INSTANCE"意义相同。
"INSTANCE"表示按照节点计算，默认方式。
"CPU"表示按照机器的核数计算。
"MEMORYGB"表示按照机器内存数计算。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMeasureMethod(string $MeasureMethod) 设置扩容资源计算方法，"DEFAULT","INSTANCE", "CPU", "MEMORYGB"。
"DEFAULT"表示默认方式，与"INSTANCE"意义相同。
"INSTANCE"表示按照节点计算，默认方式。
"CPU"表示按照机器的核数计算。
"MEMORYGB"表示按照机器内存数计算。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LoadMetricsConditions getLoadMetricsConditions() 获取多指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadMetricsConditions(LoadMetricsConditions $LoadMetricsConditions) 设置多指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadAutoScaleStrategy extends AbstractModel
{
    /**
     * @var integer 规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyId;

    /**
     * @var string 规则名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyName;

    /**
     * @var integer 规则生效冷却时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalmDownTime;

    /**
     * @var integer 扩缩容动作，1表示扩容，2表示缩容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleAction;

    /**
     * @var integer 每次规则生效时的扩缩容数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleNum;

    /**
     * @var integer 指标处理方法，1表示MAX，2表示MIN，3表示AVG。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessMethod;

    /**
     * @var integer 规则优先级，添加时无效，默认为自增。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var integer 规则状态，1表示启动，3表示禁用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyStatus;

    /**
     * @var string 规则扩容指定 yarn node label
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YarnNodeLabel;

    /**
     * @var string 规则生效的有效时间
     */
    public $PeriodValid;

    /**
     * @var boolean 优雅缩容开关
     */
    public $GraceDownFlag;

    /**
     * @var integer 优雅缩容等待时间
     */
    public $GraceDownTime;

    /**
     * @var array 绑定标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 预设配置组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigGroupAssigned;

    /**
     * @var string 扩容资源计算方法，"DEFAULT","INSTANCE", "CPU", "MEMORYGB"。
"DEFAULT"表示默认方式，与"INSTANCE"意义相同。
"INSTANCE"表示按照节点计算，默认方式。
"CPU"表示按照机器的核数计算。
"MEMORYGB"表示按照机器内存数计算。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MeasureMethod;

    /**
     * @var LoadMetricsConditions 多指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadMetricsConditions;

    /**
     * @param integer $StrategyId 规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyName 规则名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CalmDownTime 规则生效冷却时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaleAction 扩缩容动作，1表示扩容，2表示缩容。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaleNum 每次规则生效时的扩缩容数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProcessMethod 指标处理方法，1表示MAX，2表示MIN，3表示AVG。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Priority 规则优先级，添加时无效，默认为自增。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StrategyStatus 规则状态，1表示启动，3表示禁用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $YarnNodeLabel 规则扩容指定 yarn node label
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeriodValid 规则生效的有效时间
     * @param boolean $GraceDownFlag 优雅缩容开关
     * @param integer $GraceDownTime 优雅缩容等待时间
     * @param array $Tags 绑定标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigGroupAssigned 预设配置组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MeasureMethod 扩容资源计算方法，"DEFAULT","INSTANCE", "CPU", "MEMORYGB"。
"DEFAULT"表示默认方式，与"INSTANCE"意义相同。
"INSTANCE"表示按照节点计算，默认方式。
"CPU"表示按照机器的核数计算。
"MEMORYGB"表示按照机器内存数计算。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LoadMetricsConditions $LoadMetricsConditions 多指标触发条件
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("CalmDownTime",$param) and $param["CalmDownTime"] !== null) {
            $this->CalmDownTime = $param["CalmDownTime"];
        }

        if (array_key_exists("ScaleAction",$param) and $param["ScaleAction"] !== null) {
            $this->ScaleAction = $param["ScaleAction"];
        }

        if (array_key_exists("ScaleNum",$param) and $param["ScaleNum"] !== null) {
            $this->ScaleNum = $param["ScaleNum"];
        }

        if (array_key_exists("ProcessMethod",$param) and $param["ProcessMethod"] !== null) {
            $this->ProcessMethod = $param["ProcessMethod"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("StrategyStatus",$param) and $param["StrategyStatus"] !== null) {
            $this->StrategyStatus = $param["StrategyStatus"];
        }

        if (array_key_exists("YarnNodeLabel",$param) and $param["YarnNodeLabel"] !== null) {
            $this->YarnNodeLabel = $param["YarnNodeLabel"];
        }

        if (array_key_exists("PeriodValid",$param) and $param["PeriodValid"] !== null) {
            $this->PeriodValid = $param["PeriodValid"];
        }

        if (array_key_exists("GraceDownFlag",$param) and $param["GraceDownFlag"] !== null) {
            $this->GraceDownFlag = $param["GraceDownFlag"];
        }

        if (array_key_exists("GraceDownTime",$param) and $param["GraceDownTime"] !== null) {
            $this->GraceDownTime = $param["GraceDownTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ConfigGroupAssigned",$param) and $param["ConfigGroupAssigned"] !== null) {
            $this->ConfigGroupAssigned = $param["ConfigGroupAssigned"];
        }

        if (array_key_exists("MeasureMethod",$param) and $param["MeasureMethod"] !== null) {
            $this->MeasureMethod = $param["MeasureMethod"];
        }

        if (array_key_exists("LoadMetricsConditions",$param) and $param["LoadMetricsConditions"] !== null) {
            $this->LoadMetricsConditions = new LoadMetricsConditions();
            $this->LoadMetricsConditions->deserialize($param["LoadMetricsConditions"]);
        }
    }
}
