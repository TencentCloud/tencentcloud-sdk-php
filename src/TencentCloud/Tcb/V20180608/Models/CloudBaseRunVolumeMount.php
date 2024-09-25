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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cfs挂载点
 *
 * @method string getName() 获取资源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置资源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMountPath() 获取挂载路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountPath(string $MountPath) 设置挂载路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReadOnly() 获取是否只读
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadOnly(boolean $ReadOnly) 设置是否只读
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNfsVolumes() 获取Nfs挂载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNfsVolumes(array $NfsVolumes) 设置Nfs挂载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMountPropagation() 获取挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountPropagation(string $MountPropagation) 设置挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudBaseRunVolumeMount extends AbstractModel
{
    /**
     * @var string 资源名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 挂载路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountPath;

    /**
     * @var boolean 是否只读
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadOnly;

    /**
     * @var array Nfs挂载信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NfsVolumes;

    /**
     * @var string 挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountPropagation;

    /**
     * @param string $Name 资源名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MountPath 挂载路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ReadOnly 是否只读
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NfsVolumes Nfs挂载信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MountPropagation 挂载配置
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

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("NfsVolumes",$param) and $param["NfsVolumes"] !== null) {
            $this->NfsVolumes = [];
            foreach ($param["NfsVolumes"] as $key => $value){
                $obj = new CloudBaseRunNfsVolumeSource();
                $obj->deserialize($value);
                array_push($this->NfsVolumes, $obj);
            }
        }

        if (array_key_exists("MountPropagation",$param) and $param["MountPropagation"] !== null) {
            $this->MountPropagation = $param["MountPropagation"];
        }
    }
}
