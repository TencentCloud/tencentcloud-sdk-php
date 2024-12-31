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
 * 弹性扩缩容规格配置
 *
 * @method integer getId() 获取配置ID。
 * @method void setId(integer $Id) 设置配置ID。
 * @method integer getClusterId() 获取集群实例ID。
 * @method void setClusterId(integer $ClusterId) 设置集群实例ID。
 * @method integer getScaleLowerBound() 获取自动扩缩容保留最小实例数。
 * @method void setScaleLowerBound(integer $ScaleLowerBound) 设置自动扩缩容保留最小实例数。
 * @method integer getScaleUpperBound() 获取自动扩缩容最大实例数。
 * @method void setScaleUpperBound(integer $ScaleUpperBound) 设置自动扩缩容最大实例数。
 * @method integer getStrategyType() 获取扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则
 * @method void setStrategyType(integer $StrategyType) 设置扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则
 * @method integer getNextTimeCanScale() 获取下次能可扩容时间。
 * @method void setNextTimeCanScale(integer $NextTimeCanScale) 设置下次能可扩容时间。
 * @method boolean getGraceDownFlag() 获取优雅缩容开关
 * @method void setGraceDownFlag(boolean $GraceDownFlag) 设置优雅缩容开关
 * @method string getHardwareType() 获取"CVM"表示规格全部使用CVM相关类型，"POD"表示规格使用容器相关类型,默认为"CVM"。
 * @method void setHardwareType(string $HardwareType) 设置"CVM"表示规格全部使用CVM相关类型，"POD"表示规格使用容器相关类型,默认为"CVM"。
 * @method string getPayMode() 获取"POSTPAY"表示只使用按量计费，"SPOT_FIRST"表示竞价实例优先，只有HardwareType为"HOST"时支持竞价实例优先，"POD"只支持纯按量计费。
 * @method void setPayMode(string $PayMode) 设置"POSTPAY"表示只使用按量计费，"SPOT_FIRST"表示竞价实例优先，只有HardwareType为"HOST"时支持竞价实例优先，"POD"只支持纯按量计费。
 * @method integer getPostPayPercentMin() 获取竞价实例优先的场景下，按量计费资源数量的最低百分比，整数
 * @method void setPostPayPercentMin(integer $PostPayPercentMin) 设置竞价实例优先的场景下，按量计费资源数量的最低百分比，整数
 * @method integer getChangeToPod() 获取预设资源类型为HOST时，支持勾选“资源不足时切换POD”；支持取消勾选；默认不勾选（0），勾选（1)
 * @method void setChangeToPod(integer $ChangeToPod) 设置预设资源类型为HOST时，支持勾选“资源不足时切换POD”；支持取消勾选；默认不勾选（0），勾选（1)
 * @method string getGroupName() 获取伸缩组名
 * @method void setGroupName(string $GroupName) 设置伸缩组名
 * @method string getYarnNodeLabel() 获取标签
 * @method void setYarnNodeLabel(string $YarnNodeLabel) 设置标签
 * @method integer getGroupStatus() 获取伸缩组状态
 * @method void setGroupStatus(integer $GroupStatus) 设置伸缩组状态
 * @method integer getParallel() 获取并行伸缩 0关闭；1开启
 * @method void setParallel(integer $Parallel) 设置并行伸缩 0关闭；1开启
 * @method integer getEnableMNode() 获取是否支持MNode
 * @method void setEnableMNode(integer $EnableMNode) 设置是否支持MNode
 */
class AutoScaleResourceConf extends AbstractModel
{
    /**
     * @var integer 配置ID。
     */
    public $Id;

    /**
     * @var integer 集群实例ID。
     */
    public $ClusterId;

    /**
     * @var integer 自动扩缩容保留最小实例数。
     */
    public $ScaleLowerBound;

    /**
     * @var integer 自动扩缩容最大实例数。
     */
    public $ScaleUpperBound;

    /**
     * @var integer 扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则
     */
    public $StrategyType;

    /**
     * @var integer 下次能可扩容时间。
     */
    public $NextTimeCanScale;

    /**
     * @var boolean 优雅缩容开关
     */
    public $GraceDownFlag;

    /**
     * @var string "CVM"表示规格全部使用CVM相关类型，"POD"表示规格使用容器相关类型,默认为"CVM"。
     */
    public $HardwareType;

    /**
     * @var string "POSTPAY"表示只使用按量计费，"SPOT_FIRST"表示竞价实例优先，只有HardwareType为"HOST"时支持竞价实例优先，"POD"只支持纯按量计费。
     */
    public $PayMode;

    /**
     * @var integer 竞价实例优先的场景下，按量计费资源数量的最低百分比，整数
     */
    public $PostPayPercentMin;

    /**
     * @var integer 预设资源类型为HOST时，支持勾选“资源不足时切换POD”；支持取消勾选；默认不勾选（0），勾选（1)
     */
    public $ChangeToPod;

    /**
     * @var string 伸缩组名
     */
    public $GroupName;

    /**
     * @var string 标签
     */
    public $YarnNodeLabel;

    /**
     * @var integer 伸缩组状态
     */
    public $GroupStatus;

    /**
     * @var integer 并行伸缩 0关闭；1开启
     */
    public $Parallel;

    /**
     * @var integer 是否支持MNode
     */
    public $EnableMNode;

    /**
     * @param integer $Id 配置ID。
     * @param integer $ClusterId 集群实例ID。
     * @param integer $ScaleLowerBound 自动扩缩容保留最小实例数。
     * @param integer $ScaleUpperBound 自动扩缩容最大实例数。
     * @param integer $StrategyType 扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则
     * @param integer $NextTimeCanScale 下次能可扩容时间。
     * @param boolean $GraceDownFlag 优雅缩容开关
     * @param string $HardwareType "CVM"表示规格全部使用CVM相关类型，"POD"表示规格使用容器相关类型,默认为"CVM"。
     * @param string $PayMode "POSTPAY"表示只使用按量计费，"SPOT_FIRST"表示竞价实例优先，只有HardwareType为"HOST"时支持竞价实例优先，"POD"只支持纯按量计费。
     * @param integer $PostPayPercentMin 竞价实例优先的场景下，按量计费资源数量的最低百分比，整数
     * @param integer $ChangeToPod 预设资源类型为HOST时，支持勾选“资源不足时切换POD”；支持取消勾选；默认不勾选（0），勾选（1)
     * @param string $GroupName 伸缩组名
     * @param string $YarnNodeLabel 标签
     * @param integer $GroupStatus 伸缩组状态
     * @param integer $Parallel 并行伸缩 0关闭；1开启
     * @param integer $EnableMNode 是否支持MNode
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

        if (array_key_exists("GroupStatus",$param) and $param["GroupStatus"] !== null) {
            $this->GroupStatus = $param["GroupStatus"];
        }

        if (array_key_exists("Parallel",$param) and $param["Parallel"] !== null) {
            $this->Parallel = $param["Parallel"];
        }

        if (array_key_exists("EnableMNode",$param) and $param["EnableMNode"] !== null) {
            $this->EnableMNode = $param["EnableMNode"];
        }
    }
}
