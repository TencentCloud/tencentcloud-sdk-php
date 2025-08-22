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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 外部挂载信息
 *
 * @method CFSConfig getCFSConfig() 获取cfs的配置信息
 * @method void setCFSConfig(CFSConfig $CFSConfig) 设置cfs的配置信息
 * @method string getVolumeSourceType() 获取挂载源类型，CFS、COS，默认为CFS
 * @method void setVolumeSourceType(string $VolumeSourceType) 设置挂载源类型，CFS、COS，默认为CFS
 * @method string getMountPath() 获取自定义容器内挂载路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountPath(string $MountPath) 设置自定义容器内挂载路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class VolumeMount extends AbstractModel
{
    /**
     * @var CFSConfig cfs的配置信息
     */
    public $CFSConfig;

    /**
     * @var string 挂载源类型，CFS、COS，默认为CFS
     */
    public $VolumeSourceType;

    /**
     * @var string 自定义容器内挂载路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountPath;

    /**
     * @param CFSConfig $CFSConfig cfs的配置信息
     * @param string $VolumeSourceType 挂载源类型，CFS、COS，默认为CFS
     * @param string $MountPath 自定义容器内挂载路径
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
        if (array_key_exists("CFSConfig",$param) and $param["CFSConfig"] !== null) {
            $this->CFSConfig = new CFSConfig();
            $this->CFSConfig->deserialize($param["CFSConfig"]);
        }

        if (array_key_exists("VolumeSourceType",$param) and $param["VolumeSourceType"] !== null) {
            $this->VolumeSourceType = $param["VolumeSourceType"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }
    }
}
