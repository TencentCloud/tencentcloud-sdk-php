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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pulsar专业版集群规格信息
 *
 * @method string getSpecName() 获取集群规格名称
 * @method void setSpecName(string $SpecName) 设置集群规格名称
 * @method integer getMaxTps() 获取峰值tps
 * @method void setMaxTps(integer $MaxTps) 设置峰值tps
 * @method integer getMaxBandWidth() 获取峰值带宽。单位：mbps
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置峰值带宽。单位：mbps
 * @method integer getMaxNamespaces() 获取最大命名空间个数
 * @method void setMaxNamespaces(integer $MaxNamespaces) 设置最大命名空间个数
 * @method integer getMaxTopics() 获取最大主题分区数
 * @method void setMaxTopics(integer $MaxTopics) 设置最大主题分区数
 * @method integer getScalableTps() 获取规格外弹性TPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalableTps(integer $ScalableTps) 设置规格外弹性TPS
注意：此字段可能返回 null，表示取不到有效值。
 */
class PulsarProClusterSpecInfo extends AbstractModel
{
    /**
     * @var string 集群规格名称
     */
    public $SpecName;

    /**
     * @var integer 峰值tps
     */
    public $MaxTps;

    /**
     * @var integer 峰值带宽。单位：mbps
     */
    public $MaxBandWidth;

    /**
     * @var integer 最大命名空间个数
     */
    public $MaxNamespaces;

    /**
     * @var integer 最大主题分区数
     */
    public $MaxTopics;

    /**
     * @var integer 规格外弹性TPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalableTps;

    /**
     * @param string $SpecName 集群规格名称
     * @param integer $MaxTps 峰值tps
     * @param integer $MaxBandWidth 峰值带宽。单位：mbps
     * @param integer $MaxNamespaces 最大命名空间个数
     * @param integer $MaxTopics 最大主题分区数
     * @param integer $ScalableTps 规格外弹性TPS
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("MaxNamespaces",$param) and $param["MaxNamespaces"] !== null) {
            $this->MaxNamespaces = $param["MaxNamespaces"];
        }

        if (array_key_exists("MaxTopics",$param) and $param["MaxTopics"] !== null) {
            $this->MaxTopics = $param["MaxTopics"];
        }

        if (array_key_exists("ScalableTps",$param) and $param["ScalableTps"] !== null) {
            $this->ScalableTps = $param["ScalableTps"];
        }
    }
}
