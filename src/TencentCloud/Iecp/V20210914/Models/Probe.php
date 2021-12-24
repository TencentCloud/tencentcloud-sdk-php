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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 探针配置
 *
 * @method integer getInitialDelaySeconds() 获取启动后，延迟探测时间 单位:秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置启动后，延迟探测时间 单位:秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPeriodSeconds() 获取探测间隔，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodSeconds(integer $PeriodSeconds) 设置探测间隔，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeoutSeconds() 获取探测超时时间 单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeoutSeconds(integer $TimeoutSeconds) 设置探测超时时间 单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessThreshold() 获取失败后检查成功的最小连续成功次数。默认为1.活跃度必须为1。最小值为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessThreshold(integer $SuccessThreshold) 设置失败后检查成功的最小连续成功次数。默认为1.活跃度必须为1。最小值为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailureThreshold() 获取当Pod成功启动且检查失败时，放弃之前尝试次数。默认为3.最小值为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureThreshold(integer $FailureThreshold) 设置当Pod成功启动且检查失败时，放弃之前尝试次数。默认为3.最小值为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method HttpProbe getHttpProbe() 获取HTTP探测配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpProbe(HttpProbe $HttpProbe) 设置HTTP探测配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method TcpProbe getTcpProbe() 获取TCP探测配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcpProbe(TcpProbe $TcpProbe) 设置TCP探测配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class Probe extends AbstractModel
{
    /**
     * @var integer 启动后，延迟探测时间 单位:秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitialDelaySeconds;

    /**
     * @var integer 探测间隔，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodSeconds;

    /**
     * @var integer 探测超时时间 单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeoutSeconds;

    /**
     * @var integer 失败后检查成功的最小连续成功次数。默认为1.活跃度必须为1。最小值为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessThreshold;

    /**
     * @var integer 当Pod成功启动且检查失败时，放弃之前尝试次数。默认为3.最小值为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureThreshold;

    /**
     * @var HttpProbe HTTP探测配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpProbe;

    /**
     * @var TcpProbe TCP探测配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcpProbe;

    /**
     * @param integer $InitialDelaySeconds 启动后，延迟探测时间 单位:秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PeriodSeconds 探测间隔，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeoutSeconds 探测超时时间 单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessThreshold 失败后检查成功的最小连续成功次数。默认为1.活跃度必须为1。最小值为1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailureThreshold 当Pod成功启动且检查失败时，放弃之前尝试次数。默认为3.最小值为1
注意：此字段可能返回 null，表示取不到有效值。
     * @param HttpProbe $HttpProbe HTTP探测配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param TcpProbe $TcpProbe TCP探测配置
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
        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("PeriodSeconds",$param) and $param["PeriodSeconds"] !== null) {
            $this->PeriodSeconds = $param["PeriodSeconds"];
        }

        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            $this->TimeoutSeconds = $param["TimeoutSeconds"];
        }

        if (array_key_exists("SuccessThreshold",$param) and $param["SuccessThreshold"] !== null) {
            $this->SuccessThreshold = $param["SuccessThreshold"];
        }

        if (array_key_exists("FailureThreshold",$param) and $param["FailureThreshold"] !== null) {
            $this->FailureThreshold = $param["FailureThreshold"];
        }

        if (array_key_exists("HttpProbe",$param) and $param["HttpProbe"] !== null) {
            $this->HttpProbe = new HttpProbe();
            $this->HttpProbe->deserialize($param["HttpProbe"]);
        }

        if (array_key_exists("TcpProbe",$param) and $param["TcpProbe"] !== null) {
            $this->TcpProbe = new TcpProbe();
            $this->TcpProbe->deserialize($param["TcpProbe"]);
        }
    }
}
