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
 * 容器状态
 *
 * @method string getName() 获取容器名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置容器名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getID() 获取容器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置容器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImage() 获取镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(string $Image) 设置镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestartCount() 获取重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartCount(integer $RestartCount) 设置重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 */
class ContainerStatus extends AbstractModel
{
    /**
     * @var string 容器名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 容器ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 镜像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var integer 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartCount;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @param string $Name 容器名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ID 容器ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Image 镜像
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestartCount 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
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

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
