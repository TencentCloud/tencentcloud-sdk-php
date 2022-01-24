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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例GPU信息
 *
 * @method float getGPUCount() 获取实例GPU个数。值小于1代表VGPU类型，大于1代表GPU直通类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPUCount(float $GPUCount) 设置实例GPU个数。值小于1代表VGPU类型，大于1代表GPU直通类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGPUId() 获取实例GPU地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPUId(array $GPUId) 设置实例GPU地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGPUType() 获取实例GPU类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGPUType(string $GPUType) 设置实例GPU类型。
注意：此字段可能返回 null，表示取不到有效值。
 */
class GPUInfo extends AbstractModel
{
    /**
     * @var float 实例GPU个数。值小于1代表VGPU类型，大于1代表GPU直通类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPUCount;

    /**
     * @var array 实例GPU地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPUId;

    /**
     * @var string 实例GPU类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GPUType;

    /**
     * @param float $GPUCount 实例GPU个数。值小于1代表VGPU类型，大于1代表GPU直通类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GPUId 实例GPU地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GPUType 实例GPU类型。
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
        if (array_key_exists("GPUCount",$param) and $param["GPUCount"] !== null) {
            $this->GPUCount = $param["GPUCount"];
        }

        if (array_key_exists("GPUId",$param) and $param["GPUId"] !== null) {
            $this->GPUId = $param["GPUId"];
        }

        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            $this->GPUType = $param["GPUType"];
        }
    }
}
