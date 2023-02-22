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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器信息
 *
 * @method string getName() 获取名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerId(string $ContainerId) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImage() 获取镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(string $Image) 设置镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContainerStatus getStatus() 获取容器状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(ContainerStatus $Status) 设置容器状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class Container extends AbstractModel
{
    /**
     * @var string 名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerId;

    /**
     * @var string 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var ContainerStatus 容器状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $Name 名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerId id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Image 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContainerStatus $Status 容器状态
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

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new ContainerStatus();
            $this->Status->deserialize($param["Status"]);
        }
    }
}
