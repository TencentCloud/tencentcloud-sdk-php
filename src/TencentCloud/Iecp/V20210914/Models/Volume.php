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
 * 卷
 *
 * @method string getSource() 获取来源(emptyDir|hostPath|configMap|secret|nfs)
 * @method void setSource(string $Source) 设置来源(emptyDir|hostPath|configMap|secret|nfs)
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method VolumeHostPath getHostPath() 获取Host挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostPath(VolumeHostPath $HostPath) 设置Host挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method VolumeConfigMap getConfigMap() 获取ConfigMap挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigMap(VolumeConfigMap $ConfigMap) 设置ConfigMap挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method VolumeConfigMap getSecret() 获取Secret挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecret(VolumeConfigMap $Secret) 设置Secret挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method VolumeNFS getNFS() 获取NFS挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNFS(VolumeNFS $NFS) 设置NFS挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class Volume extends AbstractModel
{
    /**
     * @var string 来源(emptyDir|hostPath|configMap|secret|nfs)
     */
    public $Source;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var VolumeHostPath Host挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostPath;

    /**
     * @var VolumeConfigMap ConfigMap挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigMap;

    /**
     * @var VolumeConfigMap Secret挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Secret;

    /**
     * @var VolumeNFS NFS挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NFS;

    /**
     * @param string $Source 来源(emptyDir|hostPath|configMap|secret|nfs)
     * @param string $Name 名称
     * @param VolumeHostPath $HostPath Host挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param VolumeConfigMap $ConfigMap ConfigMap挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param VolumeConfigMap $Secret Secret挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param VolumeNFS $NFS NFS挂载配置
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("HostPath",$param) and $param["HostPath"] !== null) {
            $this->HostPath = new VolumeHostPath();
            $this->HostPath->deserialize($param["HostPath"]);
        }

        if (array_key_exists("ConfigMap",$param) and $param["ConfigMap"] !== null) {
            $this->ConfigMap = new VolumeConfigMap();
            $this->ConfigMap->deserialize($param["ConfigMap"]);
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = new VolumeConfigMap();
            $this->Secret->deserialize($param["Secret"]);
        }

        if (array_key_exists("NFS",$param) and $param["NFS"] !== null) {
            $this->NFS = new VolumeNFS();
            $this->NFS->deserialize($param["NFS"]);
        }
    }
}
