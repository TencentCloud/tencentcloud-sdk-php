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
 * 资产管理内核模块列表
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method string getMachineIp() 获取服务器IP
 * @method void setMachineIp(string $MachineIp) 设置服务器IP
 * @method string getMachineName() 获取服务器名称
 * @method void setMachineName(string $MachineName) 设置服务器名称
 * @method string getOsInfo() 获取操作系统
 * @method void setOsInfo(string $OsInfo) 设置操作系统
 * @method integer getSize() 获取模块大小
 * @method void setSize(integer $Size) 设置模块大小
 * @method integer getProcessCount() 获取依赖进程数
 * @method void setProcessCount(integer $ProcessCount) 设置依赖进程数
 * @method integer getModuleCount() 获取依赖模块数
 * @method void setModuleCount(integer $ModuleCount) 设置依赖模块数
 * @method string getId() 获取模块ID
 * @method void setId(string $Id) 设置模块ID
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method string getUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstTime() 获取首次采集时间
 * @method void setFirstTime(string $FirstTime) 设置首次采集时间
 * @method integer getIsNew() 获取是否新增[0:否|1:是]
 * @method void setIsNew(integer $IsNew) 设置是否新增[0:否|1:是]
 * @method string getMachineWanIp() 获取服务器外网IP
 * @method void setMachineWanIp(string $MachineWanIp) 设置服务器外网IP
 * @method MachineExtraInfo getMachineExtraInfo() 获取 附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置 附加信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetCoreModuleBaseInfo extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var string 路径
     */
    public $Path;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var string 服务器IP
     */
    public $MachineIp;

    /**
     * @var string 服务器名称
     */
    public $MachineName;

    /**
     * @var string 操作系统
     */
    public $OsInfo;

    /**
     * @var integer 模块大小
     */
    public $Size;

    /**
     * @var integer 依赖进程数
     */
    public $ProcessCount;

    /**
     * @var integer 依赖模块数
     */
    public $ModuleCount;

    /**
     * @var string 模块ID
     */
    public $Id;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var string 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 首次采集时间
     */
    public $FirstTime;

    /**
     * @var integer 是否新增[0:否|1:是]
     */
    public $IsNew;

    /**
     * @var string 服务器外网IP
     */
    public $MachineWanIp;

    /**
     * @var MachineExtraInfo  附加信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $Name 名称
     * @param string $Desc 描述
     * @param string $Path 路径
     * @param string $Version 版本
     * @param string $MachineIp 服务器IP
     * @param string $MachineName 服务器名称
     * @param string $OsInfo 操作系统
     * @param integer $Size 模块大小
     * @param integer $ProcessCount 依赖进程数
     * @param integer $ModuleCount 依赖模块数
     * @param string $Id 模块ID
     * @param string $Quuid 主机Quuid
     * @param string $Uuid 主机uuid
     * @param string $UpdateTime 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstTime 首次采集时间
     * @param integer $IsNew 是否新增[0:否|1:是]
     * @param string $MachineWanIp 服务器外网IP
     * @param MachineExtraInfo $MachineExtraInfo  附加信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ProcessCount",$param) and $param["ProcessCount"] !== null) {
            $this->ProcessCount = $param["ProcessCount"];
        }

        if (array_key_exists("ModuleCount",$param) and $param["ModuleCount"] !== null) {
            $this->ModuleCount = $param["ModuleCount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
