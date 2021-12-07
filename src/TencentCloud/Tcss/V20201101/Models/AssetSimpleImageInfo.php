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
 * 容器安全资产镜像简略信息
 *
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method integer getContainerCnt() 获取关联容器个数
 * @method void setContainerCnt(integer $ContainerCnt) 设置关联容器个数
 * @method string getScanTime() 获取最后扫描时间
 * @method void setScanTime(string $ScanTime) 设置最后扫描时间
 * @method integer getSize() 获取镜像大小
 * @method void setSize(integer $Size) 设置镜像大小
 */
class AssetSimpleImageInfo extends AbstractModel
{
    /**
     * @var string 镜像ID
     */
    public $ImageID;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var integer 关联容器个数
     */
    public $ContainerCnt;

    /**
     * @var string 最后扫描时间
     */
    public $ScanTime;

    /**
     * @var integer 镜像大小
     */
    public $Size;

    /**
     * @param string $ImageID 镜像ID
     * @param string $ImageName 镜像名称
     * @param integer $ContainerCnt 关联容器个数
     * @param string $ScanTime 最后扫描时间
     * @param integer $Size 镜像大小
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
