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
 * 受漏洞影响的镜像信息
 *
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method integer getHostCount() 获取关联的主机数
 * @method void setHostCount(integer $HostCount) 设置关联的主机数
 * @method integer getContainerCount() 获取关联的容器数
 * @method void setContainerCount(integer $ContainerCount) 设置关联的容器数
 * @method array getComponentList() 获取组件列表
 * @method void setComponentList(array $ComponentList) 设置组件列表
 */
class VulAffectedImageInfo extends AbstractModel
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
     * @var integer 关联的主机数
     */
    public $HostCount;

    /**
     * @var integer 关联的容器数
     */
    public $ContainerCount;

    /**
     * @var array 组件列表
     */
    public $ComponentList;

    /**
     * @param string $ImageID 镜像ID
     * @param string $ImageName 镜像名称
     * @param integer $HostCount 关联的主机数
     * @param integer $ContainerCount 关联的容器数
     * @param array $ComponentList 组件列表
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

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("ComponentList",$param) and $param["ComponentList"] !== null) {
            $this->ComponentList = [];
            foreach ($param["ComponentList"] as $key => $value){
                $obj = new VulAffectedImageComponentInfo();
                $obj->deserialize($value);
                array_push($this->ComponentList, $obj);
            }
        }
    }
}
