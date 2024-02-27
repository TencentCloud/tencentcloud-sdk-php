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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置配置ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterId() 获取集群实例ID。
 * @method void setClusterId(integer $ClusterId) 设置集群实例ID。
 * @method integer getScaleLowerBound() 获取自动扩缩容保留最小实例数。
 * @method void setScaleLowerBound(integer $ScaleLowerBound) 设置自动扩缩容保留最小实例数。
 * @method integer getScaleUpperBound() 获取自动扩缩容最大实例数。
 * @method void setScaleUpperBound(integer $ScaleUpperBound) 设置自动扩缩容最大实例数。
 * @method integer getStrategyType() 获取扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则
 * @method void setStrategyType(integer $StrategyType) 设置扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则
 * @method integer getNextTimeCanScale() 获取下次能可扩容时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextTimeCanScale(integer $NextTimeCanScale) 设置下次能可扩容时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getGraceDownFlag() 获取优雅缩容开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGraceDownFlag(boolean $GraceDownFlag) 设置优雅缩容开关
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoScaleResourceConf extends AbstractModel
{
    /**
     * @var integer 配置ID。
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextTimeCanScale;

    /**
     * @var boolean 优雅缩容开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GraceDownFlag;

    /**
     * @param integer $Id 配置ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterId 集群实例ID。
     * @param integer $ScaleLowerBound 自动扩缩容保留最小实例数。
     * @param integer $ScaleUpperBound 自动扩缩容最大实例数。
     * @param integer $StrategyType 扩容规则类型，1为按负载指标扩容规则，2为按时间扩容规则
     * @param integer $NextTimeCanScale 下次能可扩容时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $GraceDownFlag 优雅缩容开关
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
    }
}
