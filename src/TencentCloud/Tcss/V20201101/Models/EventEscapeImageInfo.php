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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险容器信息
 *
 * @method string getImageId() 获取镜像id，用于跳转
 * @method void setImageId(string $ImageId) 设置镜像id，用于跳转
 * @method string getUniqueKey() 获取唯一值
 * @method void setUniqueKey(string $UniqueKey) 设置唯一值
 * @method string getEventType() 获取事件类型
   ESCAPE_CGROUPS：利用cgroup机制逃逸
   ESCAPE_TAMPER_SENSITIVE_FILE：篡改敏感文件逃逸
   ESCAPE_DOCKER_API：访问Docker API接口逃逸
   ESCAPE_VUL_OCCURRED：逃逸漏洞利用
   MOUNT_SENSITIVE_PTAH：敏感路径挂载
   PRIVILEGE_CONTAINER_START：特权容器
   PRIVILEGE：程序提权逃逸
 * @method void setEventType(string $EventType) 设置事件类型
   ESCAPE_CGROUPS：利用cgroup机制逃逸
   ESCAPE_TAMPER_SENSITIVE_FILE：篡改敏感文件逃逸
   ESCAPE_DOCKER_API：访问Docker API接口逃逸
   ESCAPE_VUL_OCCURRED：逃逸漏洞利用
   MOUNT_SENSITIVE_PTAH：敏感路径挂载
   PRIVILEGE_CONTAINER_START：特权容器
   PRIVILEGE：程序提权逃逸
 * @method string getOriginEventType() 获取原始事件类型
 * @method void setOriginEventType(string $OriginEventType) 设置原始事件类型
 * @method string getImageName() 获取镜像名
 * @method void setImageName(string $ImageName) 设置镜像名
 * @method integer getContainerCount() 获取容器数量
 * @method void setContainerCount(integer $ContainerCount) 设置容器数量
 * @method string getFoundTime() 获取生成时间
 * @method void setFoundTime(string $FoundTime) 设置生成时间
 * @method string getLatestFoundTime() 获取最近生成时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近生成时间
 * @method integer getEventCount() 获取事件数量
 * @method void setEventCount(integer $EventCount) 设置事件数量
 * @method string getStatus() 获取状态，EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略
 * @method void setStatus(string $Status) 设置状态，EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略
 * @method string getDescription() 获取风险描述
 * @method void setDescription(string $Description) 设置风险描述
 * @method string getSolution() 获取解决方案
 * @method void setSolution(string $Solution) 设置解决方案
 */
class EventEscapeImageInfo extends AbstractModel
{
    /**
     * @var string 镜像id，用于跳转
     */
    public $ImageId;

    /**
     * @var string 唯一值
     */
    public $UniqueKey;

    /**
     * @var string 事件类型
   ESCAPE_CGROUPS：利用cgroup机制逃逸
   ESCAPE_TAMPER_SENSITIVE_FILE：篡改敏感文件逃逸
   ESCAPE_DOCKER_API：访问Docker API接口逃逸
   ESCAPE_VUL_OCCURRED：逃逸漏洞利用
   MOUNT_SENSITIVE_PTAH：敏感路径挂载
   PRIVILEGE_CONTAINER_START：特权容器
   PRIVILEGE：程序提权逃逸
     */
    public $EventType;

    /**
     * @var string 原始事件类型
     */
    public $OriginEventType;

    /**
     * @var string 镜像名
     */
    public $ImageName;

    /**
     * @var integer 容器数量
     */
    public $ContainerCount;

    /**
     * @var string 生成时间
     */
    public $FoundTime;

    /**
     * @var string 最近生成时间
     */
    public $LatestFoundTime;

    /**
     * @var integer 事件数量
     */
    public $EventCount;

    /**
     * @var string 状态，EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略
     */
    public $Status;

    /**
     * @var string 风险描述
     */
    public $Description;

    /**
     * @var string 解决方案
     */
    public $Solution;

    /**
     * @param string $ImageId 镜像id，用于跳转
     * @param string $UniqueKey 唯一值
     * @param string $EventType 事件类型
   ESCAPE_CGROUPS：利用cgroup机制逃逸
   ESCAPE_TAMPER_SENSITIVE_FILE：篡改敏感文件逃逸
   ESCAPE_DOCKER_API：访问Docker API接口逃逸
   ESCAPE_VUL_OCCURRED：逃逸漏洞利用
   MOUNT_SENSITIVE_PTAH：敏感路径挂载
   PRIVILEGE_CONTAINER_START：特权容器
   PRIVILEGE：程序提权逃逸
     * @param string $OriginEventType 原始事件类型
     * @param string $ImageName 镜像名
     * @param integer $ContainerCount 容器数量
     * @param string $FoundTime 生成时间
     * @param string $LatestFoundTime 最近生成时间
     * @param integer $EventCount 事件数量
     * @param string $Status 状态，EVENT_UNDEAL:未处理，EVENT_DEALED:已处理，EVENT_INGNORE:忽略
     * @param string $Description 风险描述
     * @param string $Solution 解决方案
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("UniqueKey",$param) and $param["UniqueKey"] !== null) {
            $this->UniqueKey = $param["UniqueKey"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("OriginEventType",$param) and $param["OriginEventType"] !== null) {
            $this->OriginEventType = $param["OriginEventType"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("FoundTime",$param) and $param["FoundTime"] !== null) {
            $this->FoundTime = $param["FoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }
    }
}
