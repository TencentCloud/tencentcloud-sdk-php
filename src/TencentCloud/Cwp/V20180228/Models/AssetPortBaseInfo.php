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
 * 资源管理账号基本信息
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
 * @method string getProcessName() 获取进程名称
 * @method void setProcessName(string $ProcessName) 设置进程名称
 * @method string getProcessVersion() 获取进程版本
 * @method void setProcessVersion(string $ProcessVersion) 设置进程版本
 * @method string getProcessPath() 获取进程路径
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
 * @method string getPid() 获取进程ID
 * @method void setPid(string $Pid) 设置进程ID
 * @method string getUser() 获取运行用户
 * @method void setUser(string $User) 设置运行用户
 * @method string getStartTime() 获取启动时间
 * @method void setStartTime(string $StartTime) 设置启动时间
 * @method string getParam() 获取启动参数
 * @method void setParam(string $Param) 设置启动参数
 * @method string getTeletype() 获取进程TTY
 * @method void setTeletype(string $Teletype) 设置进程TTY
 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 * @method string getGroupName() 获取所属用户组
 * @method void setGroupName(string $GroupName) 设置所属用户组
 * @method string getMd5() 获取进程MD5
 * @method void setMd5(string $Md5) 设置进程MD5
 * @method string getPpid() 获取父进程ID
 * @method void setPpid(string $Ppid) 设置父进程ID
 * @method string getParentProcessName() 获取父进程名称
 * @method void setParentProcessName(string $ParentProcessName) 设置父进程名称
 * @method string getProto() 获取端口协议
 * @method void setProto(string $Proto) 设置端口协议
 * @method string getBindIp() 获取绑定IP
 * @method void setBindIp(string $BindIp) 设置绑定IP
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
 * @method MachineExtraInfo getMachineExtraInfo() 获取 附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置 附加信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetPortBaseInfo extends AbstractModel
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
    public $ProcessName;

    /**
     * @var string 进程版本
     */
    public $ProcessVersion;

    /**
     * @var string 进程路径
     */
    public $ProcessPath;

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
    public $Teletype;

    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @var string 所属用户组
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
     * @var string 端口协议
     */
    public $Proto;

    /**
     * @var string 绑定IP
     */
    public $BindIp;

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
     * @var MachineExtraInfo  附加信息
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
     * @param string $ProcessName 进程名称
     * @param string $ProcessVersion 进程版本
     * @param string $ProcessPath 进程路径
     * @param string $Pid 进程ID
     * @param string $User 运行用户
     * @param string $StartTime 启动时间
     * @param string $Param 启动参数
     * @param string $Teletype 进程TTY
     * @param string $Port 端口
     * @param string $GroupName 所属用户组
     * @param string $Md5 进程MD5
     * @param string $Ppid 父进程ID
     * @param string $ParentProcessName 父进程名称
     * @param string $Proto 端口协议
     * @param string $BindIp 绑定IP
     * @param string $MachineName 主机名称
     * @param string $UpdateTime 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstTime 首次采集时间
     * @param integer $IsNew 是否新增[0:否|1:是]
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

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessVersion",$param) and $param["ProcessVersion"] !== null) {
            $this->ProcessVersion = $param["ProcessVersion"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
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

        if (array_key_exists("Teletype",$param) and $param["Teletype"] !== null) {
            $this->Teletype = $param["Teletype"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
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

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("BindIp",$param) and $param["BindIp"] !== null) {
            $this->BindIp = $param["BindIp"];
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
