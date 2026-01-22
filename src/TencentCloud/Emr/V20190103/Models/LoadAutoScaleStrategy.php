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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动扩缩容基于负载指标的规则
 *
 * @method integer getStrategyId() 获取规则ID。
 * @method void setStrategyId(integer $StrategyId) 设置规则ID。
 * @method string getStrategyName() 获取规则名称。
 * @method void setStrategyName(string $StrategyName) 设置规则名称。
 * @method integer getCalmDownTime() 获取规则生效冷却时间。
 * @method void setCalmDownTime(integer $CalmDownTime) 设置规则生效冷却时间。
 * @method integer getScaleAction() 获取扩缩容动作，1表示扩容，2表示缩容。
 * @method void setScaleAction(integer $ScaleAction) 设置扩缩容动作，1表示扩容，2表示缩容。
 * @method integer getScaleNum() 获取每次规则生效时的扩缩容数量。
 * @method void setScaleNum(integer $ScaleNum) 设置每次规则生效时的扩缩容数量。
 * @method integer getProcessMethod() 获取指标处理方法，1表示MAX，2表示MIN，3表示AVG。
 * @method void setProcessMethod(integer $ProcessMethod) 设置指标处理方法，1表示MAX，2表示MIN，3表示AVG。
 * @method integer getPriority() 获取规则优先级，添加时无效，默认为自增。
 * @method void setPriority(integer $Priority) 设置规则优先级，添加时无效，默认为自增。
 * @method integer getStrategyStatus() 获取规则状态，1表示启动，3表示禁用。
 * @method void setStrategyStatus(integer $StrategyStatus) 设置规则状态，1表示启动，3表示禁用。
 * @method string getYarnNodeLabel() 获取规则扩容指定 yarn node label
 * @method void setYarnNodeLabel(string $YarnNodeLabel) 设置规则扩容指定 yarn node label
 * @method string getPeriodValid() 获取规则生效的有效时间
 * @method void setPeriodValid(string $PeriodValid) 设置规则生效的有效时间
 * @method boolean getGraceDownFlag() 获取优雅缩容开关
 * @method void setGraceDownFlag(boolean $GraceDownFlag) 设置优雅缩容开关
 * @method integer getGraceDownTime() 获取优雅缩容等待时间
 * @method void setGraceDownTime(integer $GraceDownTime) 设置优雅缩容等待时间
 * @method boolean getGraceDownProtectFlag() 获取是否开启任务保护
 * @method void setGraceDownProtectFlag(boolean $GraceDownProtectFlag) 设置是否开启任务保护
 * @method array getTags() 获取绑定标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置绑定标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigGroupAssigned() 获取预设配置组
 * @method void setConfigGroupAssigned(string $ConfigGroupAssigned) 设置预设配置组
 * @method string getMeasureMethod() 获取扩容资源计算方法，"DEFAULT","INSTANCE", "CPU", "MEMORYGB"。
"DEFAULT"表示默认方式，与"INSTANCE"意义相同。
"INSTANCE"表示按照节点计算，默认方式。
"CPU"表示按照机器的核数计算。
"MEMORYGB"表示按照机器内存数计算。
 * @method void setMeasureMethod(string $MeasureMethod) 设置扩容资源计算方法，"DEFAULT","INSTANCE", "CPU", "MEMORYGB"。
"DEFAULT"表示默认方式，与"INSTANCE"意义相同。
"INSTANCE"表示按照节点计算，默认方式。
"CPU"表示按照机器的核数计算。
"MEMORYGB"表示按照机器内存数计算。
 * @method array getSoftDeployDesc() 获取节点部署服务列表，例如["HDFS-3.1.2","YARN-3.1.2"]。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoftDeployDesc(array $SoftDeployDesc) 设置节点部署服务列表，例如["HDFS-3.1.2","YARN-3.1.2"]。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceNodeDesc() 获取启动进程列表，例如["NodeManager"]。
 * @method void setServiceNodeDesc(string $ServiceNodeDesc) 设置启动进程列表，例如["NodeManager"]。
 * @method array getServiceNodeInfo() 获取启动进程列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) 设置启动进程列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSoftDeployInfo() 获取节点部署服务列表。部署服务仅填写HDFS、YARN。[组件名对应的映射关系表](https://cloud.tencent.com/document/product/589/98760)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoftDeployInfo(array $SoftDeployInfo) 设置节点部署服务列表。部署服务仅填写HDFS、YARN。[组件名对应的映射关系表](https://cloud.tencent.com/document/product/589/98760)
注意：此字段可能返回 null，表示取不到有效值。
 * @method LoadMetricsConditions getLoadMetricsConditions() 获取多指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadMetricsConditions(LoadMetricsConditions $LoadMetricsConditions) 设置多指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupId() 获取伸缩组Id
 * @method void setGroupId(integer $GroupId) 设置伸缩组Id
 * @method string getSoft() 获取soft例如yarn
 * @method void setSoft(string $Soft) 设置soft例如yarn
 * @method integer getGraceDownProtectTime() 获取任务保护时间
 * @method void setGraceDownProtectTime(integer $GraceDownProtectTime) 设置任务保护时间
 */
class LoadAutoScaleStrategy extends AbstractModel
{
    /**
     * @var integer 规则ID。
     */
    public $StrategyId;

    /**
     * @var string 规则名称。
     */
    public $StrategyName;

    /**
     * @var integer 规则生效冷却时间。
     */
    public $CalmDownTime;

    /**
     * @var integer 扩缩容动作，1表示扩容，2表示缩容。
     */
    public $ScaleAction;

    /**
     * @var integer 每次规则生效时的扩缩容数量。
     */
    public $ScaleNum;

    /**
     * @var integer 指标处理方法，1表示MAX，2表示MIN，3表示AVG。
     */
    public $ProcessMethod;

    /**
     * @var integer 规则优先级，添加时无效，默认为自增。
     */
    public $Priority;

    /**
     * @var integer 规则状态，1表示启动，3表示禁用。
     */
    public $StrategyStatus;

    /**
     * @var string 规则扩容指定 yarn node label
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
     * @var boolean 是否开启任务保护
     */
    public $GraceDownProtectFlag;

    /**
     * @var array 绑定标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 预设配置组
     */
    public $ConfigGroupAssigned;

    /**
     * @var string 扩容资源计算方法，"DEFAULT","INSTANCE", "CPU", "MEMORYGB"。
"DEFAULT"表示默认方式，与"INSTANCE"意义相同。
"INSTANCE"表示按照节点计算，默认方式。
"CPU"表示按照机器的核数计算。
"MEMORYGB"表示按照机器内存数计算。
     */
    public $MeasureMethod;

    /**
     * @var array 节点部署服务列表，例如["HDFS-3.1.2","YARN-3.1.2"]。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoftDeployDesc;

    /**
     * @var string 启动进程列表，例如["NodeManager"]。
     */
    public $ServiceNodeDesc;

    /**
     * @var array 启动进程列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceNodeInfo;

    /**
     * @var array 节点部署服务列表。部署服务仅填写HDFS、YARN。[组件名对应的映射关系表](https://cloud.tencent.com/document/product/589/98760)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoftDeployInfo;

    /**
     * @var LoadMetricsConditions 多指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadMetricsConditions;

    /**
     * @var integer 伸缩组Id
     */
    public $GroupId;

    /**
     * @var string soft例如yarn
     */
    public $Soft;

    /**
     * @var integer 任务保护时间
     */
    public $GraceDownProtectTime;

    /**
     * @param integer $StrategyId 规则ID。
     * @param string $StrategyName 规则名称。
     * @param integer $CalmDownTime 规则生效冷却时间。
     * @param integer $ScaleAction 扩缩容动作，1表示扩容，2表示缩容。
     * @param integer $ScaleNum 每次规则生效时的扩缩容数量。
     * @param integer $ProcessMethod 指标处理方法，1表示MAX，2表示MIN，3表示AVG。
     * @param integer $Priority 规则优先级，添加时无效，默认为自增。
     * @param integer $StrategyStatus 规则状态，1表示启动，3表示禁用。
     * @param string $YarnNodeLabel 规则扩容指定 yarn node label
     * @param string $PeriodValid 规则生效的有效时间
     * @param boolean $GraceDownFlag 优雅缩容开关
     * @param integer $GraceDownTime 优雅缩容等待时间
     * @param boolean $GraceDownProtectFlag 是否开启任务保护
     * @param array $Tags 绑定标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigGroupAssigned 预设配置组
     * @param string $MeasureMethod 扩容资源计算方法，"DEFAULT","INSTANCE", "CPU", "MEMORYGB"。
"DEFAULT"表示默认方式，与"INSTANCE"意义相同。
"INSTANCE"表示按照节点计算，默认方式。
"CPU"表示按照机器的核数计算。
"MEMORYGB"表示按照机器内存数计算。
     * @param array $SoftDeployDesc 节点部署服务列表，例如["HDFS-3.1.2","YARN-3.1.2"]。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceNodeDesc 启动进程列表，例如["NodeManager"]。
     * @param array $ServiceNodeInfo 启动进程列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SoftDeployInfo 节点部署服务列表。部署服务仅填写HDFS、YARN。[组件名对应的映射关系表](https://cloud.tencent.com/document/product/589/98760)
注意：此字段可能返回 null，表示取不到有效值。
     * @param LoadMetricsConditions $LoadMetricsConditions 多指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupId 伸缩组Id
     * @param string $Soft soft例如yarn
     * @param integer $GraceDownProtectTime 任务保护时间
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

        if (array_key_exists("GraceDownProtectFlag",$param) and $param["GraceDownProtectFlag"] !== null) {
            $this->GraceDownProtectFlag = $param["GraceDownProtectFlag"];
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

        if (array_key_exists("SoftDeployDesc",$param) and $param["SoftDeployDesc"] !== null) {
            $this->SoftDeployDesc = $param["SoftDeployDesc"];
        }

        if (array_key_exists("ServiceNodeDesc",$param) and $param["ServiceNodeDesc"] !== null) {
            $this->ServiceNodeDesc = $param["ServiceNodeDesc"];
        }

        if (array_key_exists("ServiceNodeInfo",$param) and $param["ServiceNodeInfo"] !== null) {
            $this->ServiceNodeInfo = $param["ServiceNodeInfo"];
        }

        if (array_key_exists("SoftDeployInfo",$param) and $param["SoftDeployInfo"] !== null) {
            $this->SoftDeployInfo = $param["SoftDeployInfo"];
        }

        if (array_key_exists("LoadMetricsConditions",$param) and $param["LoadMetricsConditions"] !== null) {
            $this->LoadMetricsConditions = new LoadMetricsConditions();
            $this->LoadMetricsConditions->deserialize($param["LoadMetricsConditions"]);
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Soft",$param) and $param["Soft"] !== null) {
            $this->Soft = $param["Soft"];
        }

        if (array_key_exists("GraceDownProtectTime",$param) and $param["GraceDownProtectTime"] !== null) {
            $this->GraceDownProtectTime = $param["GraceDownProtectTime"];
        }
    }
}
