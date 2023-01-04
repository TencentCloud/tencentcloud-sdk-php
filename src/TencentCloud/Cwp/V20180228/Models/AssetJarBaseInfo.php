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
 * 资产管理jar包列表
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getType() 获取类型：1应用程序，2系统类库，3Web服务自带库，8:其他，
 * @method void setType(integer $Type) 设置类型：1应用程序，2系统类库，3Web服务自带库，8:其他，
 * @method integer getStatus() 获取是否可执行：0未知，1是，2否
 * @method void setStatus(integer $Status) 设置是否可执行：0未知，1是，2否
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 * @method string getMachineIp() 获取服务器IP
 * @method void setMachineIp(string $MachineIp) 设置服务器IP
 * @method string getMachineName() 获取服务器名称
 * @method void setMachineName(string $MachineName) 设置服务器名称
 * @method string getOsInfo() 获取操作系统
 * @method void setOsInfo(string $OsInfo) 设置操作系统
 * @method string getId() 获取Jar包ID
 * @method void setId(string $Id) 设置Jar包ID
 * @method string getMd5() 获取Jar包Md5
 * @method void setMd5(string $Md5) 设置Jar包Md5
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
class AssetJarBaseInfo extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 类型：1应用程序，2系统类库，3Web服务自带库，8:其他，
     */
    public $Type;

    /**
     * @var integer 是否可执行：0未知，1是，2否
     */
    public $Status;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var string 路径
     */
    public $Path;

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
     * @var string Jar包ID
     */
    public $Id;

    /**
     * @var string Jar包Md5
     */
    public $Md5;

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
     * @param integer $Type 类型：1应用程序，2系统类库，3Web服务自带库，8:其他，
     * @param integer $Status 是否可执行：0未知，1是，2否
     * @param string $Version 版本
     * @param string $Path 路径
     * @param string $MachineIp 服务器IP
     * @param string $MachineName 服务器名称
     * @param string $OsInfo 操作系统
     * @param string $Id Jar包ID
     * @param string $Md5 Jar包Md5
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
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
