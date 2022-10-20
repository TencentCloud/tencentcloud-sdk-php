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
 * 逃逸白名单
 *
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method integer getID() 获取白名单记录ID
 * @method void setID(integer $ID) 设置白名单记录ID
 * @method integer getHostCount() 获取关联主机数量
 * @method void setHostCount(integer $HostCount) 设置关联主机数量
 * @method integer getContainerCount() 获取关联容器数量
 * @method void setContainerCount(integer $ContainerCount) 设置关联容器数量
 * @method array getEventType() 获取加白事件类型
 * @method void setEventType(array $EventType) 设置加白事件类型
 * @method string getInsertTime() 获取创建时间
 * @method void setInsertTime(string $InsertTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getImageSize() 获取镜像大小
 * @method void setImageSize(integer $ImageSize) 设置镜像大小
 */
class EscapeWhiteListInfo extends AbstractModel
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
     * @var integer 白名单记录ID
     */
    public $ID;

    /**
     * @var integer 关联主机数量
     */
    public $HostCount;

    /**
     * @var integer 关联容器数量
     */
    public $ContainerCount;

    /**
     * @var array 加白事件类型
     */
    public $EventType;

    /**
     * @var string 创建时间
     */
    public $InsertTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 镜像大小
     */
    public $ImageSize;

    /**
     * @param string $ImageID 镜像ID
     * @param string $ImageName 镜像名称
     * @param integer $ID 白名单记录ID
     * @param integer $HostCount 关联主机数量
     * @param integer $ContainerCount 关联容器数量
     * @param array $EventType 加白事件类型
     * @param string $InsertTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param integer $ImageSize 镜像大小
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

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }
    }
}
