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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源管理数据库列表信息
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
 * @method void setTag(array $Tag) 设置主机标签
 * @method string getName() 获取数据库名
 * @method void setName(string $Name) 设置数据库名
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method string getPort() 获取监听端口
 * @method void setPort(string $Port) 设置监听端口
 * @method string getProto() 获取协议
 * @method void setProto(string $Proto) 设置协议
 * @method string getUser() 获取运行用户
 * @method void setUser(string $User) 设置运行用户
 * @method string getIp() 获取绑定IP
 * @method void setIp(string $Ip) 设置绑定IP
 * @method string getConfigPath() 获取配置文件路径
 * @method void setConfigPath(string $ConfigPath) 设置配置文件路径
 * @method string getLogPath() 获取日志文件路径
 * @method void setLogPath(string $LogPath) 设置日志文件路径
 * @method string getDataPath() 获取数据路径
 * @method void setDataPath(string $DataPath) 设置数据路径
 * @method string getPermission() 获取运行权限
 * @method void setPermission(string $Permission) 设置运行权限
 * @method string getErrorLogPath() 获取错误日志路径
 * @method void setErrorLogPath(string $ErrorLogPath) 设置错误日志路径
 * @method string getPlugInPath() 获取插件路径
 * @method void setPlugInPath(string $PlugInPath) 设置插件路径
 * @method string getBinPath() 获取二进制路径
 * @method void setBinPath(string $BinPath) 设置二进制路径
 * @method string getParam() 获取启动参数
 * @method void setParam(string $Param) 设置启动参数
 * @method string getId() 获取数据库ID
 * @method void setId(string $Id) 设置数据库ID
 * @method string getUpdateTime() 获取数据更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
 * @method string getFirstTime() 获取首次采集时间
 * @method void setFirstTime(string $FirstTime) 设置首次采集时间
 * @method integer getIsNew() 获取是否新增[0:否|1:是]
 * @method void setIsNew(integer $IsNew) 设置是否新增[0:否|1:是]
 * @method string getMachineName() 获取主机名称
 * @method void setMachineName(string $MachineName) 设置主机名称
 * @method MachineExtraInfo getMachineExtraInfo() 获取 附加信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置 附加信息
 */
class AssetDatabaseBaseInfo extends AbstractModel
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
     */
    public $Tag;

    /**
     * @var string 数据库名
     */
    public $Name;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var string 监听端口
     */
    public $Port;

    /**
     * @var string 协议
     */
    public $Proto;

    /**
     * @var string 运行用户
     */
    public $User;

    /**
     * @var string 绑定IP
     */
    public $Ip;

    /**
     * @var string 配置文件路径
     */
    public $ConfigPath;

    /**
     * @var string 日志文件路径
     */
    public $LogPath;

    /**
     * @var string 数据路径
     */
    public $DataPath;

    /**
     * @var string 运行权限
     */
    public $Permission;

    /**
     * @var string 错误日志路径
     */
    public $ErrorLogPath;

    /**
     * @var string 插件路径
     */
    public $PlugInPath;

    /**
     * @var string 二进制路径
     */
    public $BinPath;

    /**
     * @var string 启动参数
     */
    public $Param;

    /**
     * @var string 数据库ID
     */
    public $Id;

    /**
     * @var string 数据更新时间
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
     * @var string 主机名称
     */
    public $MachineName;

    /**
     * @var MachineExtraInfo  附加信息
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
     * @param string $Name 数据库名
     * @param string $Version 版本
     * @param string $Port 监听端口
     * @param string $Proto 协议
     * @param string $User 运行用户
     * @param string $Ip 绑定IP
     * @param string $ConfigPath 配置文件路径
     * @param string $LogPath 日志文件路径
     * @param string $DataPath 数据路径
     * @param string $Permission 运行权限
     * @param string $ErrorLogPath 错误日志路径
     * @param string $PlugInPath 插件路径
     * @param string $BinPath 二进制路径
     * @param string $Param 启动参数
     * @param string $Id 数据库ID
     * @param string $UpdateTime 数据更新时间
     * @param string $FirstTime 首次采集时间
     * @param integer $IsNew 是否新增[0:否|1:是]
     * @param string $MachineName 主机名称
     * @param MachineExtraInfo $MachineExtraInfo  附加信息
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ConfigPath",$param) and $param["ConfigPath"] !== null) {
            $this->ConfigPath = $param["ConfigPath"];
        }

        if (array_key_exists("LogPath",$param) and $param["LogPath"] !== null) {
            $this->LogPath = $param["LogPath"];
        }

        if (array_key_exists("DataPath",$param) and $param["DataPath"] !== null) {
            $this->DataPath = $param["DataPath"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("ErrorLogPath",$param) and $param["ErrorLogPath"] !== null) {
            $this->ErrorLogPath = $param["ErrorLogPath"];
        }

        if (array_key_exists("PlugInPath",$param) and $param["PlugInPath"] !== null) {
            $this->PlugInPath = $param["PlugInPath"];
        }

        if (array_key_exists("BinPath",$param) and $param["BinPath"] !== null) {
            $this->BinPath = $param["BinPath"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
