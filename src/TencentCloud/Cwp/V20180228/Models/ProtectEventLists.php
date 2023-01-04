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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防护事件列表信息
 *
 * @method string getHostName() 获取服务器名称
 * @method void setHostName(string $HostName) 设置服务器名称
 * @method string getHostIp() 获取服务器ip
 * @method void setHostIp(string $HostIp) 设置服务器ip
 * @method string getEventDir() 获取事件地址
 * @method void setEventDir(string $EventDir) 设置事件地址
 * @method integer getEventType() 获取事件类型 0-内容被修改恢复；1-权限被修改恢复；2-归属被修改恢复；3-被删除恢复；4-新增删除
 * @method void setEventType(integer $EventType) 设置事件类型 0-内容被修改恢复；1-权限被修改恢复；2-归属被修改恢复；3-被删除恢复；4-新增删除
 * @method integer getEventStatus() 获取事件状态 1 已恢复 0 未恢复
 * @method void setEventStatus(integer $EventStatus) 设置事件状态 1 已恢复 0 未恢复
 * @method string getCreateTime() 获取发现时间
 * @method void setCreateTime(string $CreateTime) 设置发现时间
 * @method string getRestoreTime() 获取恢复时间
 * @method void setRestoreTime(string $RestoreTime) 设置恢复时间
 * @method integer getId() 获取唯一ID
 * @method void setId(integer $Id) 设置唯一ID
 * @method integer getFileType() 获取文件类型 0-常规文件；1-目录；2-软链
 * @method void setFileType(integer $FileType) 设置文件类型 0-常规文件；1-目录；2-软链
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProtectEventLists extends AbstractModel
{
    /**
     * @var string 服务器名称
     */
    public $HostName;

    /**
     * @var string 服务器ip
     */
    public $HostIp;

    /**
     * @var string 事件地址
     */
    public $EventDir;

    /**
     * @var integer 事件类型 0-内容被修改恢复；1-权限被修改恢复；2-归属被修改恢复；3-被删除恢复；4-新增删除
     */
    public $EventType;

    /**
     * @var integer 事件状态 1 已恢复 0 未恢复
     */
    public $EventStatus;

    /**
     * @var string 发现时间
     */
    public $CreateTime;

    /**
     * @var string 恢复时间
     */
    public $RestoreTime;

    /**
     * @var integer 唯一ID
     */
    public $Id;

    /**
     * @var integer 文件类型 0-常规文件；1-目录；2-软链
     */
    public $FileType;

    /**
     * @var MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $HostName 服务器名称
     * @param string $HostIp 服务器ip
     * @param string $EventDir 事件地址
     * @param integer $EventType 事件类型 0-内容被修改恢复；1-权限被修改恢复；2-归属被修改恢复；3-被删除恢复；4-新增删除
     * @param integer $EventStatus 事件状态 1 已恢复 0 未恢复
     * @param string $CreateTime 发现时间
     * @param string $RestoreTime 恢复时间
     * @param integer $Id 唯一ID
     * @param integer $FileType 文件类型 0-常规文件；1-目录；2-软链
     * @param MachineExtraInfo $MachineExtraInfo 主机额外信息
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("EventDir",$param) and $param["EventDir"] !== null) {
            $this->EventDir = $param["EventDir"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
