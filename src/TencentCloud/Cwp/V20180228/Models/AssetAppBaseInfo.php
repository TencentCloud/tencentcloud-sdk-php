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
 * @method string getMachineName() 获取主机名称
 * @method void setMachineName(string $MachineName) 设置主机名称
 * @method string getMachineWanIp() 获取主机外网IP
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网IP
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method integer getProjectId() 获取主机业务组ID
 * @method void setProjectId(integer $ProjectId) 设置主机业务组ID
 * @method array getTag() 获取主机标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置主机标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取应用名称
 * @method void setName(string $Name) 设置应用名称
 * @method integer getType() 获取应用类型	
1: 运维
2 : 数据库
3 : 安全
4 : 可疑应用
5 : 系统架构
6 : 系统应用
7 : WEB服务
99: 其他
 * @method void setType(integer $Type) 设置应用类型	
1: 运维
2 : 数据库
3 : 安全
4 : 可疑应用
5 : 系统架构
6 : 系统应用
7 : WEB服务
99: 其他
 * @method string getBinPath() 获取二进制路径
 * @method void setBinPath(string $BinPath) 设置二进制路径
 * @method string getOsInfo() 获取操作系统信息
 * @method void setOsInfo(string $OsInfo) 设置操作系统信息
 * @method integer getProcessCount() 获取关联进程数
 * @method void setProcessCount(integer $ProcessCount) 设置关联进程数
 * @method string getDesc() 获取应用描述
 * @method void setDesc(string $Desc) 设置应用描述
 * @method string getVersion() 获取版本号
 * @method void setVersion(string $Version) 设置版本号
 * @method string getConfigPath() 获取配置文件路径
 * @method void setConfigPath(string $ConfigPath) 设置配置文件路径
 * @method string getFirstTime() 获取首次采集时间
 * @method void setFirstTime(string $FirstTime) 设置首次采集时间
 * @method string getUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNew() 获取是否新增[0:否|1:是]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNew(integer $IsNew) 设置是否新增[0:否|1:是]
注意：此字段可能返回 null，表示取不到有效值。
 * @method MachineExtraInfo getMachineExtraInfo() 获取附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置附加信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetAppBaseInfo extends AbstractModel
{
    /**
     * @var string 主机内网IP
     */
    public $MachineIp;

    /**
     * @var string 主机名称
     */
    public $MachineName;

    /**
     * @var string 主机外网IP
     */
    public $MachineWanIp;

    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

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
     * @var string 应用名称
     */
    public $Name;

    /**
     * @var integer 应用类型	
1: 运维
2 : 数据库
3 : 安全
4 : 可疑应用
5 : 系统架构
6 : 系统应用
7 : WEB服务
99: 其他
     */
    public $Type;

    /**
     * @var string 二进制路径
     */
    public $BinPath;

    /**
     * @var string 操作系统信息
     */
    public $OsInfo;

    /**
     * @var integer 关联进程数
     */
    public $ProcessCount;

    /**
     * @var string 应用描述
     */
    public $Desc;

    /**
     * @var string 版本号
     */
    public $Version;

    /**
     * @var string 配置文件路径
     */
    public $ConfigPath;

    /**
     * @var string 首次采集时间
     */
    public $FirstTime;

    /**
     * @var string 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 是否新增[0:否|1:是]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNew;

    /**
     * @var MachineExtraInfo 附加信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineIp 主机内网IP
     * @param string $MachineName 主机名称
     * @param string $MachineWanIp 主机外网IP
     * @param string $Uuid 主机Uuid
     * @param string $Quuid 主机Quuid
     * @param integer $ProjectId 主机业务组ID
     * @param array $Tag 主机标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 应用名称
     * @param integer $Type 应用类型	
1: 运维
2 : 数据库
3 : 安全
4 : 可疑应用
5 : 系统架构
6 : 系统应用
7 : WEB服务
99: 其他
     * @param string $BinPath 二进制路径
     * @param string $OsInfo 操作系统信息
     * @param integer $ProcessCount 关联进程数
     * @param string $Desc 应用描述
     * @param string $Version 版本号
     * @param string $ConfigPath 配置文件路径
     * @param string $FirstTime 首次采集时间
     * @param string $UpdateTime 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNew 是否新增[0:否|1:是]
注意：此字段可能返回 null，表示取不到有效值。
     * @param MachineExtraInfo $MachineExtraInfo 附加信息
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

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BinPath",$param) and $param["BinPath"] !== null) {
            $this->BinPath = $param["BinPath"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("ProcessCount",$param) and $param["ProcessCount"] !== null) {
            $this->ProcessCount = $param["ProcessCount"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ConfigPath",$param) and $param["ConfigPath"] !== null) {
            $this->ConfigPath = $param["ConfigPath"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
