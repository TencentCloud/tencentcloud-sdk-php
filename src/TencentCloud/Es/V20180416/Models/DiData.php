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
 * 数据接入信息
 *
 * @method string getDiId() 获取数据接入id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiId(string $DiId) 设置数据接入id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取数据接入创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置数据接入创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取数据接入状态，0处理中，1正常，-2删除中，-3已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置数据接入状态，0处理中，1正常，-2删除中，-3已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiDataSourceCvm getDiDataSourceCvm() 获取cvm数据源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiDataSourceCvm(DiDataSourceCvm $DiDataSourceCvm) 设置cvm数据源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiDataSourceTke getDiDataSourceTke() 获取tke数据源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiDataSourceTke(DiDataSourceTke $DiDataSourceTke) 设置tke数据源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiDataSinkServerless getDiDataSinkServerless() 获取serverless目的端信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiDataSinkServerless(DiDataSinkServerless $DiDataSinkServerless) 设置serverless目的端信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiDataSourceType() 获取数据接入类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiDataSourceType(string $DiDataSourceType) 设置数据接入类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiData extends AbstractModel
{
    /**
     * @var string 数据接入id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiId;

    /**
     * @var string 数据接入创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 数据接入状态，0处理中，1正常，-2删除中，-3已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var DiDataSourceCvm cvm数据源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiDataSourceCvm;

    /**
     * @var DiDataSourceTke tke数据源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiDataSourceTke;

    /**
     * @var DiDataSinkServerless serverless目的端信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiDataSinkServerless;

    /**
     * @var string 数据接入类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiDataSourceType;

    /**
     * @param string $DiId 数据接入id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 数据接入创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 数据接入状态，0处理中，1正常，-2删除中，-3已删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiDataSourceCvm $DiDataSourceCvm cvm数据源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiDataSourceTke $DiDataSourceTke tke数据源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiDataSinkServerless $DiDataSinkServerless serverless目的端信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiDataSourceType 数据接入类型
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
        if (array_key_exists("DiId",$param) and $param["DiId"] !== null) {
            $this->DiId = $param["DiId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DiDataSourceCvm",$param) and $param["DiDataSourceCvm"] !== null) {
            $this->DiDataSourceCvm = new DiDataSourceCvm();
            $this->DiDataSourceCvm->deserialize($param["DiDataSourceCvm"]);
        }

        if (array_key_exists("DiDataSourceTke",$param) and $param["DiDataSourceTke"] !== null) {
            $this->DiDataSourceTke = new DiDataSourceTke();
            $this->DiDataSourceTke->deserialize($param["DiDataSourceTke"]);
        }

        if (array_key_exists("DiDataSinkServerless",$param) and $param["DiDataSinkServerless"] !== null) {
            $this->DiDataSinkServerless = new DiDataSinkServerless();
            $this->DiDataSinkServerless->deserialize($param["DiDataSinkServerless"]);
        }

        if (array_key_exists("DiDataSourceType",$param) and $param["DiDataSourceType"] !== null) {
            $this->DiDataSourceType = $param["DiDataSourceType"];
        }
    }
}
