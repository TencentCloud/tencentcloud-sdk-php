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
 * java内存马事件信息
 *
 * @method integer getId() 获取事件ID
 * @method void setId(integer $Id) 设置事件ID
 * @method string getAlias() 获取服务器名称
 * @method void setAlias(string $Alias) 设置服务器名称
 * @method string getHostIp() 获取服务器IP
 * @method void setHostIp(string $HostIp) 设置服务器IP
 * @method integer getType() 获取内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
 * @method void setType(integer $Type) 设置内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
 * @method string getDescription() 获取说明
 * @method void setDescription(string $Description) 设置说明
 * @method string getCreateTime() 获取首次发现时间
 * @method void setCreateTime(string $CreateTime) 设置首次发现时间
 * @method string getRecentFoundTime() 获取最近检测时间
 * @method void setRecentFoundTime(string $RecentFoundTime) 设置最近检测时间
 * @method integer getStatus() 获取处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
 * @method void setStatus(integer $Status) 设置处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
 * @method string getQuuid() 获取服务器quuid
 * @method void setQuuid(string $Quuid) 设置服务器quuid
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
 * @method string getUuid() 获取服务器uuid
 * @method void setUuid(string $Uuid) 设置服务器uuid
 * @method string getClassName() 获取类名
 * @method void setClassName(string $ClassName) 设置类名
 * @method string getSuperClassName() 获取父类名
 * @method void setSuperClassName(string $SuperClassName) 设置父类名
 * @method string getInterfaces() 获取继承的接口
 * @method void setInterfaces(string $Interfaces) 设置继承的接口
 * @method string getAnnotations() 获取注释
 * @method void setAnnotations(string $Annotations) 设置注释
 * @method string getLoaderClassName() 获取所属的类加载器
 * @method void setLoaderClassName(string $LoaderClassName) 设置所属的类加载器
 */
class JavaMemShellInfo extends AbstractModel
{
    /**
     * @var integer 事件ID
     */
    public $Id;

    /**
     * @var string 服务器名称
     */
    public $Alias;

    /**
     * @var string 服务器IP
     */
    public $HostIp;

    /**
     * @var integer 内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
     */
    public $Type;

    /**
     * @var string 说明
     */
    public $Description;

    /**
     * @var string 首次发现时间
     */
    public $CreateTime;

    /**
     * @var string 最近检测时间
     */
    public $RecentFoundTime;

    /**
     * @var integer 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
     */
    public $Status;

    /**
     * @var string 服务器quuid
     */
    public $Quuid;

    /**
     * @var MachineExtraInfo 主机额外信息
     */
    public $MachineExtraInfo;

    /**
     * @var string 服务器uuid
     */
    public $Uuid;

    /**
     * @var string 类名
     */
    public $ClassName;

    /**
     * @var string 父类名
     */
    public $SuperClassName;

    /**
     * @var string 继承的接口
     */
    public $Interfaces;

    /**
     * @var string 注释
     */
    public $Annotations;

    /**
     * @var string 所属的类加载器
     */
    public $LoaderClassName;

    /**
     * @param integer $Id 事件ID
     * @param string $Alias 服务器名称
     * @param string $HostIp 服务器IP
     * @param integer $Type 内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
     * @param string $Description 说明
     * @param string $CreateTime 首次发现时间
     * @param string $RecentFoundTime 最近检测时间
     * @param integer $Status 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
     * @param string $Quuid 服务器quuid
     * @param MachineExtraInfo $MachineExtraInfo 主机额外信息
     * @param string $Uuid 服务器uuid
     * @param string $ClassName 类名
     * @param string $SuperClassName 父类名
     * @param string $Interfaces 继承的接口
     * @param string $Annotations 注释
     * @param string $LoaderClassName 所属的类加载器
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RecentFoundTime",$param) and $param["RecentFoundTime"] !== null) {
            $this->RecentFoundTime = $param["RecentFoundTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("SuperClassName",$param) and $param["SuperClassName"] !== null) {
            $this->SuperClassName = $param["SuperClassName"];
        }

        if (array_key_exists("Interfaces",$param) and $param["Interfaces"] !== null) {
            $this->Interfaces = $param["Interfaces"];
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = $param["Annotations"];
        }

        if (array_key_exists("LoaderClassName",$param) and $param["LoaderClassName"] !== null) {
            $this->LoaderClassName = $param["LoaderClassName"];
        }
    }
}
