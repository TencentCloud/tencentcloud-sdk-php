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
 * CreateAssetImageRegistryScanTaskOneKey请求参数结构体
 *
 * @method boolean getAll() 获取是否扫描全部镜像(废弃)
 * @method void setAll(boolean $All) 设置是否扫描全部镜像(废弃)
 * @method array getImages() 获取扫描的镜像列表
 * @method void setImages(array $Images) 设置扫描的镜像列表
 * @method array getScanType() 获取扫描类型数组
 * @method void setScanType(array $ScanType) 设置扫描类型数组
 * @method array getId() 获取扫描的镜像列表Id
 * @method void setId(array $Id) 设置扫描的镜像列表Id
 * @method boolean getIsLatest() 获取是否最新镜像
 * @method void setIsLatest(boolean $IsLatest) 设置是否最新镜像
 * @method integer getScanScope() 获取扫描范围 0全部镜像，1自选镜像，2推荐扫描镜像
 * @method void setScanScope(integer $ScanScope) 设置扫描范围 0全部镜像，1自选镜像，2推荐扫描镜像
 * @method array getRegistryType() 获取仓库类型
 * @method void setRegistryType(array $RegistryType) 设置仓库类型
 * @method array getNamespace() 获取命名空间
 * @method void setNamespace(array $Namespace) 设置命名空间
 * @method boolean getContainerRunning() 获取是否存在运行中的容器
 * @method void setContainerRunning(boolean $ContainerRunning) 设置是否存在运行中的容器
 * @method integer getTimeout() 获取任务超时时长单位s
 * @method void setTimeout(integer $Timeout) 设置任务超时时长单位s
 */
class CreateAssetImageRegistryScanTaskOneKeyRequest extends AbstractModel
{
    /**
     * @var boolean 是否扫描全部镜像(废弃)
     * @deprecated
     */
    public $All;

    /**
     * @var array 扫描的镜像列表
     */
    public $Images;

    /**
     * @var array 扫描类型数组
     */
    public $ScanType;

    /**
     * @var array 扫描的镜像列表Id
     */
    public $Id;

    /**
     * @var boolean 是否最新镜像
     */
    public $IsLatest;

    /**
     * @var integer 扫描范围 0全部镜像，1自选镜像，2推荐扫描镜像
     */
    public $ScanScope;

    /**
     * @var array 仓库类型
     */
    public $RegistryType;

    /**
     * @var array 命名空间
     */
    public $Namespace;

    /**
     * @var boolean 是否存在运行中的容器
     */
    public $ContainerRunning;

    /**
     * @var integer 任务超时时长单位s
     */
    public $Timeout;

    /**
     * @param boolean $All 是否扫描全部镜像(废弃)
     * @param array $Images 扫描的镜像列表
     * @param array $ScanType 扫描类型数组
     * @param array $Id 扫描的镜像列表Id
     * @param boolean $IsLatest 是否最新镜像
     * @param integer $ScanScope 扫描范围 0全部镜像，1自选镜像，2推荐扫描镜像
     * @param array $RegistryType 仓库类型
     * @param array $Namespace 命名空间
     * @param boolean $ContainerRunning 是否存在运行中的容器
     * @param integer $Timeout 任务超时时长单位s
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsLatest",$param) and $param["IsLatest"] !== null) {
            $this->IsLatest = $param["IsLatest"];
        }

        if (array_key_exists("ScanScope",$param) and $param["ScanScope"] !== null) {
            $this->ScanScope = $param["ScanScope"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
