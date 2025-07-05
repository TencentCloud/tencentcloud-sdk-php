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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据接入cvm数据源信息
 *
 * @method string getVpcId() 获取vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogPaths() 获取采集路径列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogPaths(array $LogPaths) 设置采集路径列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCvmInstances() 获取cvm实例信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvmInstances(array $CvmInstances) 设置cvm实例信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectorId() 获取采集器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectorId(string $CollectorId) 设置采集器id
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiDataSourceCvm extends AbstractModel
{
    /**
     * @var string vpc id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var array 采集路径列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogPaths;

    /**
     * @var array cvm实例信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvmInstances;

    /**
     * @var string 采集器id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectorId;

    /**
     * @param string $VpcId vpc id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LogPaths 采集路径列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CvmInstances cvm实例信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectorId 采集器id
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("LogPaths",$param) and $param["LogPaths"] !== null) {
            $this->LogPaths = $param["LogPaths"];
        }

        if (array_key_exists("CvmInstances",$param) and $param["CvmInstances"] !== null) {
            $this->CvmInstances = [];
            foreach ($param["CvmInstances"] as $key => $value){
                $obj = new DiDataSourceCvmInstance();
                $obj->deserialize($value);
                array_push($this->CvmInstances, $obj);
            }
        }

        if (array_key_exists("CollectorId",$param) and $param["CollectorId"] !== null) {
            $this->CollectorId = $param["CollectorId"];
        }
    }
}
