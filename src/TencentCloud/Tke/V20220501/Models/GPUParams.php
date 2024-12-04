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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GPU相关的参数，包括驱动版本，CUDA版本，cuDNN版本，是否开启MIG以及是否开启Fabric
 *
 * @method string getDriver() 获取GPU驱动版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDriver(string $Driver) 设置GPU驱动版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCUDA() 获取CUDA版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCUDA(string $CUDA) 设置CUDA版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCUDNN() 获取CUDNN版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCUDNN(string $CUDNN) 设置CUDNN版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMIGEnable() 获取是否启用MIG特性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMIGEnable(boolean $MIGEnable) 设置是否启用MIG特性
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getFabric() 获取是否启用Fabric特性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFabric(boolean $Fabric) 设置是否启用Fabric特性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomGPUDriver() 获取自定义驱动下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomGPUDriver(string $CustomGPUDriver) 设置自定义驱动下载地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class GPUParams extends AbstractModel
{
    /**
     * @var string GPU驱动版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Driver;

    /**
     * @var string CUDA版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CUDA;

    /**
     * @var string CUDNN版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CUDNN;

    /**
     * @var boolean 是否启用MIG特性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MIGEnable;

    /**
     * @var boolean 是否启用Fabric特性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fabric;

    /**
     * @var string 自定义驱动下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomGPUDriver;

    /**
     * @param string $Driver GPU驱动版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CUDA CUDA版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CUDNN CUDNN版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $MIGEnable 是否启用MIG特性
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Fabric 是否启用Fabric特性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomGPUDriver 自定义驱动下载地址
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
        if (array_key_exists("Driver",$param) and $param["Driver"] !== null) {
            $this->Driver = $param["Driver"];
        }

        if (array_key_exists("CUDA",$param) and $param["CUDA"] !== null) {
            $this->CUDA = $param["CUDA"];
        }

        if (array_key_exists("CUDNN",$param) and $param["CUDNN"] !== null) {
            $this->CUDNN = $param["CUDNN"];
        }

        if (array_key_exists("MIGEnable",$param) and $param["MIGEnable"] !== null) {
            $this->MIGEnable = $param["MIGEnable"];
        }

        if (array_key_exists("Fabric",$param) and $param["Fabric"] !== null) {
            $this->Fabric = $param["Fabric"];
        }

        if (array_key_exists("CustomGPUDriver",$param) and $param["CustomGPUDriver"] !== null) {
            $this->CustomGPUDriver = $param["CustomGPUDriver"];
        }
    }
}
