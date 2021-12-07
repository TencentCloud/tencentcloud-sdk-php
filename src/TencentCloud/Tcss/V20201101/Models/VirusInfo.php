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
 * 运行时木马列表信息
 *
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method string getFilePath() 获取文件路径
 * @method void setFilePath(string $FilePath) 设置文件路径
 * @method string getVirusName() 获取病毒名称
 * @method void setVirusName(string $VirusName) 设置病毒名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取更新时间
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getContainerId() 获取容器id
 * @method void setContainerId(string $ContainerId) 设置容器id
 * @method string getContainerStatus() 获取容器状态，CS_RUNING:运行， CS_PAUSE:暂停，CS_STOP:停止，
												       CS_CREATE:已经创建， CS_DESTORY:销毁
 * @method void setContainerStatus(string $ContainerStatus) 设置容器状态，CS_RUNING:运行， CS_PAUSE:暂停，CS_STOP:停止，
												       CS_CREATE:已经创建， CS_DESTORY:销毁
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageId() 获取镜像id
 * @method void setImageId(string $ImageId) 设置镜像id
 * @method string getStatus() 获取DEAL_NONE:文件待处理
DEAL_IGNORE:已经忽略
DEAL_ADD_WHITELIST:加白
DEAL_DEL:文件已经删除
DEAL_ISOLATE:已经隔离
DEAL_ISOLATING:隔离中
DEAL_ISOLATE_FAILED:隔离失败
DEAL_RECOVERING:恢复中
DEAL_RECOVER_FAILED: 恢复失败
 * @method void setStatus(string $Status) 设置DEAL_NONE:文件待处理
DEAL_IGNORE:已经忽略
DEAL_ADD_WHITELIST:加白
DEAL_DEL:文件已经删除
DEAL_ISOLATE:已经隔离
DEAL_ISOLATING:隔离中
DEAL_ISOLATE_FAILED:隔离失败
DEAL_RECOVERING:恢复中
DEAL_RECOVER_FAILED: 恢复失败
 * @method string getId() 获取事件id
 * @method void setId(string $Id) 设置事件id
 * @method string getHarmDescribe() 获取事件描述
 * @method void setHarmDescribe(string $HarmDescribe) 设置事件描述
 * @method string getSuggestScheme() 获取建议方案
 * @method void setSuggestScheme(string $SuggestScheme) 设置建议方案
 * @method string getSubStatus() 获取失败子状态:
FILE_NOT_FOUND:文件不存在
FILE_ABNORMAL:文件异常
FILE_ABNORMAL_DEAL_RECOVER:恢复文件时，文件异常
BACKUP_FILE_NOT_FOUND:备份文件不存在
CONTAINER_NOT_FOUND_DEAL_ISOLATE:隔离时，容器不存在
CONTAINER_NOT_FOUND_DEAL_RECOVER:恢复时，容器不存在
 * @method void setSubStatus(string $SubStatus) 设置失败子状态:
FILE_NOT_FOUND:文件不存在
FILE_ABNORMAL:文件异常
FILE_ABNORMAL_DEAL_RECOVER:恢复文件时，文件异常
BACKUP_FILE_NOT_FOUND:备份文件不存在
CONTAINER_NOT_FOUND_DEAL_ISOLATE:隔离时，容器不存在
CONTAINER_NOT_FOUND_DEAL_RECOVER:恢复时，容器不存在
 */
class VirusInfo extends AbstractModel
{
    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var string 文件路径
     */
    public $FilePath;

    /**
     * @var string 病毒名称
     */
    public $VirusName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $ModifyTime;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string 容器id
     */
    public $ContainerId;

    /**
     * @var string 容器状态，CS_RUNING:运行， CS_PAUSE:暂停，CS_STOP:停止，
												       CS_CREATE:已经创建， CS_DESTORY:销毁
     */
    public $ContainerStatus;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像id
     */
    public $ImageId;

    /**
     * @var string DEAL_NONE:文件待处理
DEAL_IGNORE:已经忽略
DEAL_ADD_WHITELIST:加白
DEAL_DEL:文件已经删除
DEAL_ISOLATE:已经隔离
DEAL_ISOLATING:隔离中
DEAL_ISOLATE_FAILED:隔离失败
DEAL_RECOVERING:恢复中
DEAL_RECOVER_FAILED: 恢复失败
     */
    public $Status;

    /**
     * @var string 事件id
     */
    public $Id;

    /**
     * @var string 事件描述
     */
    public $HarmDescribe;

    /**
     * @var string 建议方案
     */
    public $SuggestScheme;

    /**
     * @var string 失败子状态:
FILE_NOT_FOUND:文件不存在
FILE_ABNORMAL:文件异常
FILE_ABNORMAL_DEAL_RECOVER:恢复文件时，文件异常
BACKUP_FILE_NOT_FOUND:备份文件不存在
CONTAINER_NOT_FOUND_DEAL_ISOLATE:隔离时，容器不存在
CONTAINER_NOT_FOUND_DEAL_RECOVER:恢复时，容器不存在
     */
    public $SubStatus;

    /**
     * @param string $FileName 文件名称
     * @param string $FilePath 文件路径
     * @param string $VirusName 病毒名称
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 更新时间
     * @param string $ContainerName 容器名称
     * @param string $ContainerId 容器id
     * @param string $ContainerStatus 容器状态，CS_RUNING:运行， CS_PAUSE:暂停，CS_STOP:停止，
												       CS_CREATE:已经创建， CS_DESTORY:销毁
     * @param string $ImageName 镜像名称
     * @param string $ImageId 镜像id
     * @param string $Status DEAL_NONE:文件待处理
DEAL_IGNORE:已经忽略
DEAL_ADD_WHITELIST:加白
DEAL_DEL:文件已经删除
DEAL_ISOLATE:已经隔离
DEAL_ISOLATING:隔离中
DEAL_ISOLATE_FAILED:隔离失败
DEAL_RECOVERING:恢复中
DEAL_RECOVER_FAILED: 恢复失败
     * @param string $Id 事件id
     * @param string $HarmDescribe 事件描述
     * @param string $SuggestScheme 建议方案
     * @param string $SubStatus 失败子状态:
FILE_NOT_FOUND:文件不存在
FILE_ABNORMAL:文件异常
FILE_ABNORMAL_DEAL_RECOVER:恢复文件时，文件异常
BACKUP_FILE_NOT_FOUND:备份文件不存在
CONTAINER_NOT_FOUND_DEAL_ISOLATE:隔离时，容器不存在
CONTAINER_NOT_FOUND_DEAL_RECOVER:恢复时，容器不存在
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerStatus",$param) and $param["ContainerStatus"] !== null) {
            $this->ContainerStatus = $param["ContainerStatus"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("HarmDescribe",$param) and $param["HarmDescribe"] !== null) {
            $this->HarmDescribe = $param["HarmDescribe"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }
    }
}
