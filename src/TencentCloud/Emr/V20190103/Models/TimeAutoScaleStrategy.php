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
 * 时间扩缩容规则
 *
 * @method string getStrategyName() 获取策略名字，集群内唯一。
 * @method void setStrategyName(string $StrategyName) 设置策略名字，集群内唯一。
 * @method integer getIntervalTime() 获取策略触发后的冷却时间，该段时间内，将不能触发弹性扩缩容。
 * @method void setIntervalTime(integer $IntervalTime) 设置策略触发后的冷却时间，该段时间内，将不能触发弹性扩缩容。
 * @method integer getScaleAction() 获取扩缩容动作，1表示扩容，2表示缩容。
 * @method void setScaleAction(integer $ScaleAction) 设置扩缩容动作，1表示扩容，2表示缩容。
 * @method integer getScaleNum() 获取扩缩容数量。
 * @method void setScaleNum(integer $ScaleNum) 设置扩缩容数量。
 * @method integer getStrategyStatus() 获取规则状态，1表示有效，2表示无效，3表示暂停。必须填写
 * @method void setStrategyStatus(integer $StrategyStatus) 设置规则状态，1表示有效，2表示无效，3表示暂停。必须填写
 * @method integer getPriority() 获取规则优先级，越小越高。
 * @method void setPriority(integer $Priority) 设置规则优先级，越小越高。
 * @method integer getRetryValidTime() 获取当多条规则同时触发，其中某些未真正执行时，在该时间范围内，将会重试。
 * @method void setRetryValidTime(integer $RetryValidTime) 设置当多条规则同时触发，其中某些未真正执行时，在该时间范围内，将会重试。
 * @method RepeatStrategy getRepeatStrategy() 获取时间扩缩容重复策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepeatStrategy(RepeatStrategy $RepeatStrategy) 设置时间扩缩容重复策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategyId() 获取策略唯一ID。
 * @method void setStrategyId(integer $StrategyId) 设置策略唯一ID。
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
 * @method string getTerminatePolicy() 获取销毁策略, "DEFAULT",默认销毁策略，由缩容规则触发缩容，"TIMING"表示定时销毁
 * @method void setTerminatePolicy(string $TerminatePolicy) 设置销毁策略, "DEFAULT",默认销毁策略，由缩容规则触发缩容，"TIMING"表示定时销毁
 * @method integer getMaxUse() 获取最长使用时间， 秒数，最短1小时，最长24小时
 * @method void setMaxUse(integer $MaxUse) 设置最长使用时间， 秒数，最短1小时，最长24小时
 * @method array getSoftDeployInfo() 获取节点部署服务列表。部署服务仅填写HDFS、YARN。[组件名对应的映射关系表](https://cloud.tencent.com/document/product/589/98760)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoftDeployInfo(array $SoftDeployInfo) 设置节点部署服务列表。部署服务仅填写HDFS、YARN。[组件名对应的映射关系表](https://cloud.tencent.com/document/product/589/98760)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceNodeInfo() 获取启动进程列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) 设置启动进程列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompensateFlag() 获取补偿扩容，0表示不开启，1表示开启
 * @method void setCompensateFlag(integer $CompensateFlag) 设置补偿扩容，0表示不开启，1表示开启
 * @method integer getGroupId() 获取伸缩组id
 * @method void setGroupId(integer $GroupId) 设置伸缩组id
 * @method array getGraceDownLabel() 获取优雅缩容业务pod标签，当node不存在上述pod或超过优雅缩容时间时，缩容节点
 * @method void setGraceDownLabel(array $GraceDownLabel) 设置优雅缩容业务pod标签，当node不存在上述pod或超过优雅缩容时间时，缩容节点
 * @method integer getGraceDownProtectTime() 获取任务保护时间
 * @method void setGraceDownProtectTime(integer $GraceDownProtectTime) 设置任务保护时间
 */
class TimeAutoScaleStrategy extends AbstractModel
{
    /**
     * @var string 策略名字，集群内唯一。
     */
    public $StrategyName;

    /**
     * @var integer 策略触发后的冷却时间，该段时间内，将不能触发弹性扩缩容。
     */
    public $IntervalTime;

    /**
     * @var integer 扩缩容动作，1表示扩容，2表示缩容。
     */
    public $ScaleAction;

    /**
     * @var integer 扩缩容数量。
     */
    public $ScaleNum;

    /**
     * @var integer 规则状态，1表示有效，2表示无效，3表示暂停。必须填写
     */
    public $StrategyStatus;

    /**
     * @var integer 规则优先级，越小越高。
     */
    public $Priority;

    /**
     * @var integer 当多条规则同时触发，其中某些未真正执行时，在该时间范围内，将会重试。
     */
    public $RetryValidTime;

    /**
     * @var RepeatStrategy 时间扩缩容重复策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepeatStrategy;

    /**
     * @var integer 策略唯一ID。
     */
    public $StrategyId;

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
     * @var string 销毁策略, "DEFAULT",默认销毁策略，由缩容规则触发缩容，"TIMING"表示定时销毁
     */
    public $TerminatePolicy;

    /**
     * @var integer 最长使用时间， 秒数，最短1小时，最长24小时
     */
    public $MaxUse;

    /**
     * @var array 节点部署服务列表。部署服务仅填写HDFS、YARN。[组件名对应的映射关系表](https://cloud.tencent.com/document/product/589/98760)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoftDeployInfo;

    /**
     * @var array 启动进程列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceNodeInfo;

    /**
     * @var integer 补偿扩容，0表示不开启，1表示开启
     */
    public $CompensateFlag;

    /**
     * @var integer 伸缩组id
     */
    public $GroupId;

    /**
     * @var array 优雅缩容业务pod标签，当node不存在上述pod或超过优雅缩容时间时，缩容节点
     */
    public $GraceDownLabel;

    /**
     * @var integer 任务保护时间
     */
    public $GraceDownProtectTime;

    /**
     * @param string $StrategyName 策略名字，集群内唯一。
     * @param integer $IntervalTime 策略触发后的冷却时间，该段时间内，将不能触发弹性扩缩容。
     * @param integer $ScaleAction 扩缩容动作，1表示扩容，2表示缩容。
     * @param integer $ScaleNum 扩缩容数量。
     * @param integer $StrategyStatus 规则状态，1表示有效，2表示无效，3表示暂停。必须填写
     * @param integer $Priority 规则优先级，越小越高。
     * @param integer $RetryValidTime 当多条规则同时触发，其中某些未真正执行时，在该时间范围内，将会重试。
     * @param RepeatStrategy $RepeatStrategy 时间扩缩容重复策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StrategyId 策略唯一ID。
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
     * @param string $TerminatePolicy 销毁策略, "DEFAULT",默认销毁策略，由缩容规则触发缩容，"TIMING"表示定时销毁
     * @param integer $MaxUse 最长使用时间， 秒数，最短1小时，最长24小时
     * @param array $SoftDeployInfo 节点部署服务列表。部署服务仅填写HDFS、YARN。[组件名对应的映射关系表](https://cloud.tencent.com/document/product/589/98760)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceNodeInfo 启动进程列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompensateFlag 补偿扩容，0表示不开启，1表示开启
     * @param integer $GroupId 伸缩组id
     * @param array $GraceDownLabel 优雅缩容业务pod标签，当node不存在上述pod或超过优雅缩容时间时，缩容节点
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("ScaleAction",$param) and $param["ScaleAction"] !== null) {
            $this->ScaleAction = $param["ScaleAction"];
        }

        if (array_key_exists("ScaleNum",$param) and $param["ScaleNum"] !== null) {
            $this->ScaleNum = $param["ScaleNum"];
        }

        if (array_key_exists("StrategyStatus",$param) and $param["StrategyStatus"] !== null) {
            $this->StrategyStatus = $param["StrategyStatus"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("RetryValidTime",$param) and $param["RetryValidTime"] !== null) {
            $this->RetryValidTime = $param["RetryValidTime"];
        }

        if (array_key_exists("RepeatStrategy",$param) and $param["RepeatStrategy"] !== null) {
            $this->RepeatStrategy = new RepeatStrategy();
            $this->RepeatStrategy->deserialize($param["RepeatStrategy"]);
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
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

        if (array_key_exists("TerminatePolicy",$param) and $param["TerminatePolicy"] !== null) {
            $this->TerminatePolicy = $param["TerminatePolicy"];
        }

        if (array_key_exists("MaxUse",$param) and $param["MaxUse"] !== null) {
            $this->MaxUse = $param["MaxUse"];
        }

        if (array_key_exists("SoftDeployInfo",$param) and $param["SoftDeployInfo"] !== null) {
            $this->SoftDeployInfo = $param["SoftDeployInfo"];
        }

        if (array_key_exists("ServiceNodeInfo",$param) and $param["ServiceNodeInfo"] !== null) {
            $this->ServiceNodeInfo = $param["ServiceNodeInfo"];
        }

        if (array_key_exists("CompensateFlag",$param) and $param["CompensateFlag"] !== null) {
            $this->CompensateFlag = $param["CompensateFlag"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GraceDownLabel",$param) and $param["GraceDownLabel"] !== null) {
            $this->GraceDownLabel = [];
            foreach ($param["GraceDownLabel"] as $key => $value){
                $obj = new TkeLabel();
                $obj->deserialize($value);
                array_push($this->GraceDownLabel, $obj);
            }
        }

        if (array_key_exists("GraceDownProtectTime",$param) and $param["GraceDownProtectTime"] !== null) {
            $this->GraceDownProtectTime = $param["GraceDownProtectTime"];
        }
    }
}
