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
 * 弹性扩缩容规格配置
 *
 * @method integer getId() 获取<p>配置ID。</p>
 * @method void setId(integer $Id) 设置<p>配置ID。</p>
 * @method integer getClusterId() 获取<p>集群实例ID。</p>
 * @method void setClusterId(integer $ClusterId) 设置<p>集群实例ID。</p>
 * @method integer getScaleLowerBound() 获取<p>自动扩缩容保留最小实例数。</p>
 * @method void setScaleLowerBound(integer $ScaleLowerBound) 设置<p>自动扩缩容保留最小实例数。</p>
 * @method integer getScaleUpperBound() 获取<p>自动扩缩容最大实例数。</p>
 * @method void setScaleUpperBound(integer $ScaleUpperBound) 设置<p>自动扩缩容最大实例数。</p>
 * @method integer getStrategyType() 获取<p>扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则</p>
 * @method void setStrategyType(integer $StrategyType) 设置<p>扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则</p>
 * @method integer getNextTimeCanScale() 获取<p>下次可扩容时间。</p>
 * @method void setNextTimeCanScale(integer $NextTimeCanScale) 设置<p>下次可扩容时间。</p>
 * @method boolean getGraceDownFlag() 获取<p>优雅缩容开关</p>
 * @method void setGraceDownFlag(boolean $GraceDownFlag) 设置<p>优雅缩容开关</p>
 * @method string getHardwareType() 获取<p>&quot;CVM&quot;表示规格全部使用CVM相关类型，&quot;POD&quot;表示规格使用容器相关类型,默认为&quot;CVM&quot;。</p>
 * @method void setHardwareType(string $HardwareType) 设置<p>&quot;CVM&quot;表示规格全部使用CVM相关类型，&quot;POD&quot;表示规格使用容器相关类型,默认为&quot;CVM&quot;。</p>
 * @method string getPayMode() 获取<p>&quot;POSTPAY&quot;表示只使用按量计费，&quot;SPOT_FIRST&quot;表示竞价实例优先，只有HardwareType为&quot;HOST&quot;时支持竞价实例优先，&quot;POD&quot;只支持纯按量计费。</p>
 * @method void setPayMode(string $PayMode) 设置<p>&quot;POSTPAY&quot;表示只使用按量计费，&quot;SPOT_FIRST&quot;表示竞价实例优先，只有HardwareType为&quot;HOST&quot;时支持竞价实例优先，&quot;POD&quot;只支持纯按量计费。</p>
 * @method integer getPostPayPercentMin() 获取<p>竞价实例优先的场景下，按量计费资源数量的最低百分比，整数</p>
 * @method void setPostPayPercentMin(integer $PostPayPercentMin) 设置<p>竞价实例优先的场景下，按量计费资源数量的最低百分比，整数</p>
 * @method integer getChangeToPod() 获取<p>预设资源类型为HOST时，支持勾选“资源不足时切换POD”；支持取消勾选；0表示默认不勾选（0），1表示勾选</p>
 * @method void setChangeToPod(integer $ChangeToPod) 设置<p>预设资源类型为HOST时，支持勾选“资源不足时切换POD”；支持取消勾选；0表示默认不勾选（0），1表示勾选</p>
 * @method string getGroupName() 获取<p>伸缩组名</p>
 * @method void setGroupName(string $GroupName) 设置<p>伸缩组名</p>
 * @method string getYarnNodeLabel() 获取<p>标签</p>
 * @method void setYarnNodeLabel(string $YarnNodeLabel) 设置<p>标签</p>
 * @method string getWarehouseName() 获取<p>对应的计算组</p>
 * @method void setWarehouseName(string $WarehouseName) 设置<p>对应的计算组</p>
 * @method integer getGroupStatus() 获取<p>伸缩组状态</p>
 * @method void setGroupStatus(integer $GroupStatus) 设置<p>伸缩组状态</p>
 * @method integer getParallel() 获取<p>并行伸缩 0关闭；1开启</p>
 * @method void setParallel(integer $Parallel) 设置<p>并行伸缩 0关闭；1开启</p>
 * @method integer getEnableMNode() 获取<p>是否支持MNode</p>
 * @method void setEnableMNode(integer $EnableMNode) 设置<p>是否支持MNode</p>
 * @method AutoScaleGroupAdvanceAttrs getExtraAdvanceAttrs() 获取<p>伸缩组更多设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraAdvanceAttrs(AutoScaleGroupAdvanceAttrs $ExtraAdvanceAttrs) 设置<p>伸缩组更多设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomNodeName() 获取<p>自定义主机名</p>
 * @method void setCustomNodeName(string $CustomNodeName) 设置<p>自定义主机名</p>
 */
class AutoScaleResourceConf extends AbstractModel
{
    /**
     * @var integer <p>配置ID。</p>
     */
    public $Id;

    /**
     * @var integer <p>集群实例ID。</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>自动扩缩容保留最小实例数。</p>
     */
    public $ScaleLowerBound;

    /**
     * @var integer <p>自动扩缩容最大实例数。</p>
     */
    public $ScaleUpperBound;

    /**
     * @var integer <p>扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则</p>
     */
    public $StrategyType;

    /**
     * @var integer <p>下次可扩容时间。</p>
     */
    public $NextTimeCanScale;

    /**
     * @var boolean <p>优雅缩容开关</p>
     */
    public $GraceDownFlag;

    /**
     * @var string <p>&quot;CVM&quot;表示规格全部使用CVM相关类型，&quot;POD&quot;表示规格使用容器相关类型,默认为&quot;CVM&quot;。</p>
     */
    public $HardwareType;

    /**
     * @var string <p>&quot;POSTPAY&quot;表示只使用按量计费，&quot;SPOT_FIRST&quot;表示竞价实例优先，只有HardwareType为&quot;HOST&quot;时支持竞价实例优先，&quot;POD&quot;只支持纯按量计费。</p>
     */
    public $PayMode;

    /**
     * @var integer <p>竞价实例优先的场景下，按量计费资源数量的最低百分比，整数</p>
     */
    public $PostPayPercentMin;

    /**
     * @var integer <p>预设资源类型为HOST时，支持勾选“资源不足时切换POD”；支持取消勾选；0表示默认不勾选（0），1表示勾选</p>
     */
    public $ChangeToPod;

    /**
     * @var string <p>伸缩组名</p>
     */
    public $GroupName;

    /**
     * @var string <p>标签</p>
     */
    public $YarnNodeLabel;

    /**
     * @var string <p>对应的计算组</p>
     */
    public $WarehouseName;

    /**
     * @var integer <p>伸缩组状态</p>
     */
    public $GroupStatus;

    /**
     * @var integer <p>并行伸缩 0关闭；1开启</p>
     */
    public $Parallel;

    /**
     * @var integer <p>是否支持MNode</p>
     */
    public $EnableMNode;

    /**
     * @var AutoScaleGroupAdvanceAttrs <p>伸缩组更多设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraAdvanceAttrs;

    /**
     * @var string <p>自定义主机名</p>
     */
    public $CustomNodeName;

    /**
     * @param integer $Id <p>配置ID。</p>
     * @param integer $ClusterId <p>集群实例ID。</p>
     * @param integer $ScaleLowerBound <p>自动扩缩容保留最小实例数。</p>
     * @param integer $ScaleUpperBound <p>自动扩缩容最大实例数。</p>
     * @param integer $StrategyType <p>扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则</p>
     * @param integer $NextTimeCanScale <p>下次可扩容时间。</p>
     * @param boolean $GraceDownFlag <p>优雅缩容开关</p>
     * @param string $HardwareType <p>&quot;CVM&quot;表示规格全部使用CVM相关类型，&quot;POD&quot;表示规格使用容器相关类型,默认为&quot;CVM&quot;。</p>
     * @param string $PayMode <p>&quot;POSTPAY&quot;表示只使用按量计费，&quot;SPOT_FIRST&quot;表示竞价实例优先，只有HardwareType为&quot;HOST&quot;时支持竞价实例优先，&quot;POD&quot;只支持纯按量计费。</p>
     * @param integer $PostPayPercentMin <p>竞价实例优先的场景下，按量计费资源数量的最低百分比，整数</p>
     * @param integer $ChangeToPod <p>预设资源类型为HOST时，支持勾选“资源不足时切换POD”；支持取消勾选；0表示默认不勾选（0），1表示勾选</p>
     * @param string $GroupName <p>伸缩组名</p>
     * @param string $YarnNodeLabel <p>标签</p>
     * @param string $WarehouseName <p>对应的计算组</p>
     * @param integer $GroupStatus <p>伸缩组状态</p>
     * @param integer $Parallel <p>并行伸缩 0关闭；1开启</p>
     * @param integer $EnableMNode <p>是否支持MNode</p>
     * @param AutoScaleGroupAdvanceAttrs $ExtraAdvanceAttrs <p>伸缩组更多设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomNodeName <p>自定义主机名</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ScaleLowerBound",$param) and $param["ScaleLowerBound"] !== null) {
            $this->ScaleLowerBound = $param["ScaleLowerBound"];
        }

        if (array_key_exists("ScaleUpperBound",$param) and $param["ScaleUpperBound"] !== null) {
            $this->ScaleUpperBound = $param["ScaleUpperBound"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("NextTimeCanScale",$param) and $param["NextTimeCanScale"] !== null) {
            $this->NextTimeCanScale = $param["NextTimeCanScale"];
        }

        if (array_key_exists("GraceDownFlag",$param) and $param["GraceDownFlag"] !== null) {
            $this->GraceDownFlag = $param["GraceDownFlag"];
        }

        if (array_key_exists("HardwareType",$param) and $param["HardwareType"] !== null) {
            $this->HardwareType = $param["HardwareType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PostPayPercentMin",$param) and $param["PostPayPercentMin"] !== null) {
            $this->PostPayPercentMin = $param["PostPayPercentMin"];
        }

        if (array_key_exists("ChangeToPod",$param) and $param["ChangeToPod"] !== null) {
            $this->ChangeToPod = $param["ChangeToPod"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("YarnNodeLabel",$param) and $param["YarnNodeLabel"] !== null) {
            $this->YarnNodeLabel = $param["YarnNodeLabel"];
        }

        if (array_key_exists("WarehouseName",$param) and $param["WarehouseName"] !== null) {
            $this->WarehouseName = $param["WarehouseName"];
        }

        if (array_key_exists("GroupStatus",$param) and $param["GroupStatus"] !== null) {
            $this->GroupStatus = $param["GroupStatus"];
        }

        if (array_key_exists("Parallel",$param) and $param["Parallel"] !== null) {
            $this->Parallel = $param["Parallel"];
        }

        if (array_key_exists("EnableMNode",$param) and $param["EnableMNode"] !== null) {
            $this->EnableMNode = $param["EnableMNode"];
        }

        if (array_key_exists("ExtraAdvanceAttrs",$param) and $param["ExtraAdvanceAttrs"] !== null) {
            $this->ExtraAdvanceAttrs = new AutoScaleGroupAdvanceAttrs();
            $this->ExtraAdvanceAttrs->deserialize($param["ExtraAdvanceAttrs"]);
        }

        if (array_key_exists("CustomNodeName",$param) and $param["CustomNodeName"] !== null) {
            $this->CustomNodeName = $param["CustomNodeName"];
        }
    }
}
