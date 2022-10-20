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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器安全镜像组件信息
 *
 * @method string getName() 获取组件名称
 * @method void setName(string $Name) 设置组件名称
 * @method string getVersion() 获取组件版本
 * @method void setVersion(string $Version) 设置组件版本
 * @method string getPath() 获取组件路径
 * @method void setPath(string $Path) 设置组件路径
 * @method string getType() 获取组件类型
 * @method void setType(string $Type) 设置组件类型
 * @method integer getVulCount() 获取组件漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulCount(integer $VulCount) 设置组件漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageID() 获取镜像ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageID(string $ImageID) 设置镜像ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageComponent extends AbstractModel
{
    /**
     * @var string 组件名称
     */
    public $Name;

    /**
     * @var string 组件版本
     */
    public $Version;

    /**
     * @var string 组件路径
     */
    public $Path;

    /**
     * @var string 组件类型
     */
    public $Type;

    /**
     * @var integer 组件漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulCount;

    /**
     * @var string 镜像ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageID;

    /**
     * @param string $Name 组件名称
     * @param string $Version 组件版本
     * @param string $Path 组件路径
     * @param string $Type 组件类型
     * @param integer $VulCount 组件漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageID 镜像ID
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }
    }
}
