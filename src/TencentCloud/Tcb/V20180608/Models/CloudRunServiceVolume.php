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
 * 服务的volume
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method CloudBaseRunNfsVolumeSource getNFS() 获取NFS的挂载方式
 * @method void setNFS(CloudBaseRunNfsVolumeSource $NFS) 设置NFS的挂载方式
 * @method string getSecretName() 获取secret名称
 * @method void setSecretName(string $SecretName) 设置secret名称
 * @method boolean getEnableEmptyDirVolume() 获取是否开启临时目录逐步废弃，请使用 EmptyDir
 * @method void setEnableEmptyDirVolume(boolean $EnableEmptyDirVolume) 设置是否开启临时目录逐步废弃，请使用 EmptyDir
 * @method CloudBaseRunEmptyDirVolumeSource getEmptyDir() 获取emptydir数据卷详细信息
 * @method void setEmptyDir(CloudBaseRunEmptyDirVolumeSource $EmptyDir) 设置emptydir数据卷详细信息
 * @method CloudBaseRunServiceVolumeHostPath getHostPath() 获取主机路径挂载信息
 * @method void setHostPath(CloudBaseRunServiceVolumeHostPath $HostPath) 设置主机路径挂载信息
 */
class CloudRunServiceVolume extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var CloudBaseRunNfsVolumeSource NFS的挂载方式
     */
    public $NFS;

    /**
     * @var string secret名称
     */
    public $SecretName;

    /**
     * @var boolean 是否开启临时目录逐步废弃，请使用 EmptyDir
     */
    public $EnableEmptyDirVolume;

    /**
     * @var CloudBaseRunEmptyDirVolumeSource emptydir数据卷详细信息
     */
    public $EmptyDir;

    /**
     * @var CloudBaseRunServiceVolumeHostPath 主机路径挂载信息
     */
    public $HostPath;

    /**
     * @param string $Name 名称
     * @param CloudBaseRunNfsVolumeSource $NFS NFS的挂载方式
     * @param string $SecretName secret名称
     * @param boolean $EnableEmptyDirVolume 是否开启临时目录逐步废弃，请使用 EmptyDir
     * @param CloudBaseRunEmptyDirVolumeSource $EmptyDir emptydir数据卷详细信息
     * @param CloudBaseRunServiceVolumeHostPath $HostPath 主机路径挂载信息
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

        if (array_key_exists("NFS",$param) and $param["NFS"] !== null) {
            $this->NFS = new CloudBaseRunNfsVolumeSource();
            $this->NFS->deserialize($param["NFS"]);
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("EnableEmptyDirVolume",$param) and $param["EnableEmptyDirVolume"] !== null) {
            $this->EnableEmptyDirVolume = $param["EnableEmptyDirVolume"];
        }

        if (array_key_exists("EmptyDir",$param) and $param["EmptyDir"] !== null) {
            $this->EmptyDir = new CloudBaseRunEmptyDirVolumeSource();
            $this->EmptyDir->deserialize($param["EmptyDir"]);
        }

        if (array_key_exists("HostPath",$param) and $param["HostPath"] !== null) {
            $this->HostPath = new CloudBaseRunServiceVolumeHostPath();
            $this->HostPath->deserialize($param["HostPath"]);
        }
    }
}
