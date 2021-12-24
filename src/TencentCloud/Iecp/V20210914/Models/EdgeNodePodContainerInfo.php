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
 * 边缘节点Pod容器信息
 *
 * @method string getName() 获取Pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置Pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取容器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置容器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImage() 获取镜像（含版本号）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(string $Image) 设置镜像（含版本号）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuRequest() 获取CPU Request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuRequest(string $CpuRequest) 设置CPU Request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuLimit() 获取CPU Limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuLimit(string $CpuLimit) 设置CPU Limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemoryRequest() 获取Memory Request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemoryRequest(string $MemoryRequest) 设置Memory Request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemoryLimit() 获取Memory Limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemoryLimit(string $MemoryLimit) 设置Memory Limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestartCount() 获取重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartCount(integer $RestartCount) 设置重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取容器状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置容器状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeNodePodContainerInfo extends AbstractModel
{
    /**
     * @var string Pod名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 容器ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 镜像（含版本号）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var string CPU Request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuRequest;

    /**
     * @var string CPU Limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuLimit;

    /**
     * @var string Memory Request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemoryRequest;

    /**
     * @var string Memory Limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemoryLimit;

    /**
     * @var integer 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartCount;

    /**
     * @var string 容器状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $Name Pod名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 容器ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Image 镜像（含版本号）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuRequest CPU Request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuLimit CPU Limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemoryRequest Memory Request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemoryLimit Memory Limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestartCount 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 容器状态
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemoryRequest",$param) and $param["MemoryRequest"] !== null) {
            $this->MemoryRequest = $param["MemoryRequest"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
