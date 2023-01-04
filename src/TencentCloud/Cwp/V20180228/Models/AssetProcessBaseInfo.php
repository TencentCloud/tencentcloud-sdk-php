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
 * 资源管理进程基本信息
 *
 * @method string getMachineIp() 获取主机内网IP
 * @method void setMachineIp(string $MachineIp) 设置主机内网IP
 * @method string getMachineWanIp() 获取主机外网IP
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网IP
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method string getOsInfo() 获取操作系统信息
 * @method void setOsInfo(string $OsInfo) 设置操作系统信息
 * @method integer getProjectId() 获取主机业务组ID
 * @method void setProjectId(integer $ProjectId) 设置主机业务组ID
 * @method array getTag() 获取主机标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置主机标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取进程名称
 * @method void setName(string $Name) 设置进程名称
 * @method string getDesc() 获取进程说明
 * @method void setDesc(string $Desc) 设置进程说明
 * @method string getPath() 获取进程路径
 * @method void setPath(string $Path) 设置进程路径
 * @method string getPid() 获取进程ID
 * @method void setPid(string $Pid) 设置进程ID
 * @method string getUser() 获取运行用户
 * @method void setUser(string $User) 设置运行用户
 * @method string getStartTime() 获取启动时间
 * @method void setStartTime(string $StartTime) 设置启动时间
 * @method string getParam() 获取启动参数
 * @method void setParam(string $Param) 设置启动参数
 * @method string getTty() 获取进程TTY
 * @method void setTty(string $Tty) 设置进程TTY
 * @method string getVersion() 获取进程版本
 * @method void setVersion(string $Version) 设置进程版本
 * @method string getGroupName() 获取进程用户组
 * @method void setGroupName(string $GroupName) 设置进程用户组
 * @method string getMd5() 获取进程MD5
 * @method void setMd5(string $Md5) 设置进程MD5
 * @method string getPpid() 获取父进程ID
 * @method void setPpid(string $Ppid) 设置父进程ID
 * @method string getParentProcessName() 获取父进程名称
 * @method void setParentProcessName(string $ParentProcessName) 设置父进程名称
 * @method string getStatus() 获取进程状态
 * @method void setStatus(string $Status) 设置进程状态
 * @method integer getHasSign() 获取数字签名:0无，1有， 999 空，仅windows
 * @method void setHasSign(integer $HasSign) 设置数字签名:0无，1有， 999 空，仅windows
 * @method integer getInstallByPackage() 获取是否通过安装包安装：:0否，1是， 999 空，仅linux
 * @method void setInstallByPackage(integer $InstallByPackage) 设置是否通过安装包安装：:0否，1是， 999 空，仅linux
 * @method string getPackageName() 获取软件包名
 * @method void setPackageName(string $PackageName) 设置软件包名
 * @method string getMachineName() 获取主机名称
 * @method void setMachineName(string $MachineName) 设置主机名称
 * @method string getUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstTime() 获取首次采集时间
 * @method void setFirstTime(string $FirstTime) 设置首次采集时间
 * @method integer getIsNew() 获取是否新增[0:否|1:是]
 * @method void setIsNew(integer $IsNew) 设置是否新增[0:否|1:是]
 * @method MachineExtraInfo getMachineExtraInfo() 获取
 附加信息

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置
 附加信息

注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetProcessBaseInfo extends AbstractModel
{
    /**
     * @var string 主机内网IP
     */
    public $MachineIp;

    /**
     * @var string 主机外网IP
     */
    public $MachineWanIp;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var string 操作系统信息
     */
    public $OsInfo;

    /**
     * @var integer 主机业务组ID
     */
    public $ProjectId;

    /**
     * @var array 主机标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var string 进程名称
     */
    public $Name;

    /**
     * @var string 进程说明
     */
    public $Desc;

    /**
     * @var string 进程路径
     */
    public $Path;

    /**
     * @var string 进程ID
     */
    public $Pid;

    /**
     * @var string 运行用户
     */
    public $User;

    /**
     * @var string 启动时间
     */
    public $StartTime;

    /**
     * @var string 启动参数
     */
    public $Param;

    /**
     * @var string 进程TTY
     */
    public $Tty;

    /**
     * @var string 进程版本
     */
    public $Version;

    /**
     * @var string 进程用户组
     */
    public $GroupName;

    /**
     * @var string 进程MD5
     */
    public $Md5;

    /**
     * @var string 父进程ID
     */
    public $Ppid;

    /**
     * @var string 父进程名称
     */
    public $ParentProcessName;

    /**
     * @var string 进程状态
     */
    public $Status;

    /**
     * @var integer 数字签名:0无，1有， 999 空，仅windows
     */
    public $HasSign;

    /**
     * @var integer 是否通过安装包安装：:0否，1是， 999 空，仅linux
     */
    public $InstallByPackage;

    /**
     * @var string 软件包名
     */
    public $PackageName;

    /**
     * @var string 主机名称
     */
    public $MachineName;

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
     * @var MachineExtraInfo 
 附加信息

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineIp 主机内网IP
     * @param string $MachineWanIp 主机外网IP
     * @param string $Quuid 主机Quuid
     * @param string $Uuid 主机Uuid
     * @param string $OsInfo 操作系统信息
     * @param integer $ProjectId 主机业务组ID
     * @param array $Tag 主机标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 进程名称
     * @param string $Desc 进程说明
     * @param string $Path 进程路径
     * @param string $Pid 进程ID
     * @param string $User 运行用户
     * @param string $StartTime 启动时间
     * @param string $Param 启动参数
     * @param string $Tty 进程TTY
     * @param string $Version 进程版本
     * @param string $GroupName 进程用户组
     * @param string $Md5 进程MD5
     * @param string $Ppid 父进程ID
     * @param string $ParentProcessName 父进程名称
     * @param string $Status 进程状态
     * @param integer $HasSign 数字签名:0无，1有， 999 空，仅windows
     * @param integer $InstallByPackage 是否通过安装包安装：:0否，1是， 999 空，仅linux
     * @param string $PackageName 软件包名
     * @param string $MachineName 主机名称
     * @param string $UpdateTime 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstTime 首次采集时间
     * @param integer $IsNew 是否新增[0:否|1:是]
     * @param MachineExtraInfo $MachineExtraInfo 
 附加信息

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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
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

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Tty",$param) and $param["Tty"] !== null) {
            $this->Tty = $param["Tty"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Ppid",$param) and $param["Ppid"] !== null) {
            $this->Ppid = $param["Ppid"];
        }

        if (array_key_exists("ParentProcessName",$param) and $param["ParentProcessName"] !== null) {
            $this->ParentProcessName = $param["ParentProcessName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("HasSign",$param) and $param["HasSign"] !== null) {
            $this->HasSign = $param["HasSign"];
        }

        if (array_key_exists("InstallByPackage",$param) and $param["InstallByPackage"] !== null) {
            $this->InstallByPackage = $param["InstallByPackage"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
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

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
