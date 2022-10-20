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
 * 漏洞扫描忽略的仓库镜像
 *
 * @method integer getID() 获取记录ID
 * @method void setID(integer $ID) 设置记录ID
 * @method string getRegistryName() 获取仓库名称
 * @method void setRegistryName(string $RegistryName) 设置仓库名称
 * @method string getImageVersion() 获取镜像版本
 * @method void setImageVersion(string $ImageVersion) 设置镜像版本
 * @method string getRegistryPath() 获取仓库地址
 * @method void setRegistryPath(string $RegistryPath) 设置仓库地址
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getPocID() 获取漏洞PocID
 * @method void setPocID(string $PocID) 设置漏洞PocID
 */
class VulIgnoreRegistryImage extends AbstractModel
{
    /**
     * @var integer 记录ID
     */
    public $ID;

    /**
     * @var string 仓库名称
     */
    public $RegistryName;

    /**
     * @var string 镜像版本
     */
    public $ImageVersion;

    /**
     * @var string 仓库地址
     */
    public $RegistryPath;

    /**
     * @var string 镜像ID
     */
    public $ImageID;

    /**
     * @var string 漏洞PocID
     */
    public $PocID;

    /**
     * @param integer $ID 记录ID
     * @param string $RegistryName 仓库名称
     * @param string $ImageVersion 镜像版本
     * @param string $RegistryPath 仓库地址
     * @param string $ImageID 镜像ID
     * @param string $PocID 漏洞PocID
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("RegistryPath",$param) and $param["RegistryPath"] !== null) {
            $this->RegistryPath = $param["RegistryPath"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }
    }
}
