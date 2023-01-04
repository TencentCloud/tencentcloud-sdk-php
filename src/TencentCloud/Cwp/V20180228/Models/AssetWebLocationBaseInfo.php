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
 * 资产管理Web站点列表信息
 *
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getMachineIp() 获取内网IP
 * @method void setMachineIp(string $MachineIp) 设置内网IP
 * @method string getMachineWanIp() 获取外网IP
 * @method void setMachineWanIp(string $MachineWanIp) 设置外网IP
 * @method string getMachineName() 获取主机名称
 * @method void setMachineName(string $MachineName) 设置主机名称
 * @method string getOsInfo() 获取操作系统
 * @method void setOsInfo(string $OsInfo) 设置操作系统
 * @method string getName() 获取域名
 * @method void setName(string $Name) 设置域名
 * @method string getPort() 获取站点端口
 * @method void setPort(string $Port) 设置站点端口
 * @method string getProto() 获取站点协议
 * @method void setProto(string $Proto) 设置站点协议
 * @method string getServiceType() 获取服务类型
 * @method void setServiceType(string $ServiceType) 设置服务类型
 * @method integer getPathCount() 获取站点路经数
 * @method void setPathCount(integer $PathCount) 设置站点路经数
 * @method string getUser() 获取运行用户
 * @method void setUser(string $User) 设置运行用户
 * @method string getMainPath() 获取主目录
 * @method void setMainPath(string $MainPath) 设置主目录
 * @method string getMainPathOwner() 获取主目录所有者
 * @method void setMainPathOwner(string $MainPathOwner) 设置主目录所有者
 * @method string getPermission() 获取拥有者权限
 * @method void setPermission(string $Permission) 设置拥有者权限
 * @method integer getProjectId() 获取主机业务组ID
 * @method void setProjectId(integer $ProjectId) 设置主机业务组ID
 * @method array getTag() 获取主机标签
 * @method void setTag(array $Tag) 设置主机标签
 * @method string getId() 获取Web站点Id
 * @method void setId(string $Id) 设置Web站点Id
 * @method string getUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstTime() 获取首次采集时间
 * @method void setFirstTime(string $FirstTime) 设置首次采集时间
 * @method integer getIsNew() 获取是否新增[0:否|1:是]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNew(integer $IsNew) 设置是否新增[0:否|1:是]
注意：此字段可能返回 null，表示取不到有效值。
 * @method MachineExtraInfo getMachineExtraInfo() 获取 附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置 附加信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetWebLocationBaseInfo extends AbstractModel
{
    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 内网IP
     */
    public $MachineIp;

    /**
     * @var string 外网IP
     */
    public $MachineWanIp;

    /**
     * @var string 主机名称
     */
    public $MachineName;

    /**
     * @var string 操作系统
     */
    public $OsInfo;

    /**
     * @var string 域名
     */
    public $Name;

    /**
     * @var string 站点端口
     */
    public $Port;

    /**
     * @var string 站点协议
     */
    public $Proto;

    /**
     * @var string 服务类型
     */
    public $ServiceType;

    /**
     * @var integer 站点路经数
     */
    public $PathCount;

    /**
     * @var string 运行用户
     */
    public $User;

    /**
     * @var string 主目录
     */
    public $MainPath;

    /**
     * @var string 主目录所有者
     */
    public $MainPathOwner;

    /**
     * @var string 拥有者权限
     */
    public $Permission;

    /**
     * @var integer 主机业务组ID
     */
    public $ProjectId;

    /**
     * @var array 主机标签
     */
    public $Tag;

    /**
     * @var string Web站点Id
     */
    public $Id;

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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNew;

    /**
     * @var MachineExtraInfo  附加信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $Uuid 主机Uuid
     * @param string $Quuid 主机Quuid
     * @param string $MachineIp 内网IP
     * @param string $MachineWanIp 外网IP
     * @param string $MachineName 主机名称
     * @param string $OsInfo 操作系统
     * @param string $Name 域名
     * @param string $Port 站点端口
     * @param string $Proto 站点协议
     * @param string $ServiceType 服务类型
     * @param integer $PathCount 站点路经数
     * @param string $User 运行用户
     * @param string $MainPath 主目录
     * @param string $MainPathOwner 主目录所有者
     * @param string $Permission 拥有者权限
     * @param integer $ProjectId 主机业务组ID
     * @param array $Tag 主机标签
     * @param string $Id Web站点Id
     * @param string $UpdateTime 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstTime 首次采集时间
     * @param integer $IsNew 是否新增[0:否|1:是]
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("PathCount",$param) and $param["PathCount"] !== null) {
            $this->PathCount = $param["PathCount"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("MainPath",$param) and $param["MainPath"] !== null) {
            $this->MainPath = $param["MainPath"];
        }

        if (array_key_exists("MainPathOwner",$param) and $param["MainPathOwner"] !== null) {
            $this->MainPathOwner = $param["MainPathOwner"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
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

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
