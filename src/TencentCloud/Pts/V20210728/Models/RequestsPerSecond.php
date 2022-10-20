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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RPS模式的施压配置
 *
 * @method integer getMaxRequestsPerSecond() 获取最大RPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestsPerSecond(integer $MaxRequestsPerSecond) 设置最大RPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDurationSeconds() 获取施压时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationSeconds(integer $DurationSeconds) 设置施压时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetVirtualUsers() 获取deprecated
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetVirtualUsers(integer $TargetVirtualUsers) 设置deprecated
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResources() 获取资源数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResources(integer $Resources) 设置资源数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartRequestsPerSecond() 获取起始RPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartRequestsPerSecond(integer $StartRequestsPerSecond) 设置起始RPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetRequestsPerSecond() 获取目标RPS，入参无效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetRequestsPerSecond(integer $TargetRequestsPerSecond) 设置目标RPS，入参无效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGracefulStopSeconds() 获取优雅关停的等待时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGracefulStopSeconds(integer $GracefulStopSeconds) 设置优雅关停的等待时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class RequestsPerSecond extends AbstractModel
{
    /**
     * @var integer 最大RPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestsPerSecond;

    /**
     * @var integer 施压时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationSeconds;

    /**
     * @var integer deprecated
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetVirtualUsers;

    /**
     * @var integer 资源数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resources;

    /**
     * @var integer 起始RPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartRequestsPerSecond;

    /**
     * @var integer 目标RPS，入参无效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetRequestsPerSecond;

    /**
     * @var integer 优雅关停的等待时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GracefulStopSeconds;

    /**
     * @param integer $MaxRequestsPerSecond 最大RPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DurationSeconds 施压时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetVirtualUsers deprecated
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Resources 资源数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartRequestsPerSecond 起始RPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetRequestsPerSecond 目标RPS，入参无效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GracefulStopSeconds 优雅关停的等待时间
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
        if (array_key_exists("MaxRequestsPerSecond",$param) and $param["MaxRequestsPerSecond"] !== null) {
            $this->MaxRequestsPerSecond = $param["MaxRequestsPerSecond"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }

        if (array_key_exists("TargetVirtualUsers",$param) and $param["TargetVirtualUsers"] !== null) {
            $this->TargetVirtualUsers = $param["TargetVirtualUsers"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }

        if (array_key_exists("StartRequestsPerSecond",$param) and $param["StartRequestsPerSecond"] !== null) {
            $this->StartRequestsPerSecond = $param["StartRequestsPerSecond"];
        }

        if (array_key_exists("TargetRequestsPerSecond",$param) and $param["TargetRequestsPerSecond"] !== null) {
            $this->TargetRequestsPerSecond = $param["TargetRequestsPerSecond"];
        }

        if (array_key_exists("GracefulStopSeconds",$param) and $param["GracefulStopSeconds"] !== null) {
            $this->GracefulStopSeconds = $param["GracefulStopSeconds"];
        }
    }
}
