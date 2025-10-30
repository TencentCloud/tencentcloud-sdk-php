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
 * java内存马事件详细信息
 *
 * @method string getInstanceName() 获取容器名
 * @method void setInstanceName(string $InstanceName) 设置容器名
 * @method string getInstanceState() 获取实例状态：RUNNING,STOPPED,SHUTDOWN...
 * @method void setInstanceState(string $InstanceState) 设置实例状态：RUNNING,STOPPED,SHUTDOWN...
 * @method string getPrivateIp() 获取内网IP
 * @method void setPrivateIp(string $PrivateIp) 设置内网IP
 * @method string getPublicIp() 获取公共ip
 * @method void setPublicIp(string $PublicIp) 设置公共ip
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
 * @method string getClassLoaderName() 获取java加载器类名
 * @method void setClassLoaderName(string $ClassLoaderName) 设置java加载器类名
 * @method string getSuperClassName() 获取父类名
 * @method void setSuperClassName(string $SuperClassName) 设置父类名
 * @method string getMd5() 获取类文件MD5
 * @method void setMd5(string $Md5) 设置类文件MD5
 * @method string getInterfaces() 获取继承的接口
 * @method void setInterfaces(string $Interfaces) 设置继承的接口
 * @method string getAnnotations() 获取注释
 * @method void setAnnotations(string $Annotations) 设置注释
 * @method integer getPid() 获取进程pid
 * @method void setPid(integer $Pid) 设置进程pid
 * @method string getExe() 获取java进程路径
 * @method void setExe(string $Exe) 设置java进程路径
 * @method string getArgs() 获取java进程命令行参数
 * @method void setArgs(string $Args) 设置java进程命令行参数
 * @method string getClassName() 获取类名
 * @method void setClassName(string $ClassName) 设置类名
 * @method string getClassContent() 获取java内存马二进制代码(base64)
 * @method void setClassContent(string $ClassContent) 设置java内存马二进制代码(base64)
 * @method string getClassContentPretty() 获取java内存马反编译代码
 * @method void setClassContentPretty(string $ClassContentPretty) 设置java内存马反编译代码
 * @method string getEventDescription() 获取事件描述
 * @method void setEventDescription(string $EventDescription) 设置事件描述
 * @method string getSecurityAdvice() 获取安全建议
 * @method void setSecurityAdvice(string $SecurityAdvice) 设置安全建议
 * @method MachineExtraInfo getMachineExtraInfo() 获取 主机额外信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置 主机额外信息
 * @method string getMachineState() 获取agent状态：OFFLINE,ONLINE
 * @method void setMachineState(string $MachineState) 设置agent状态：OFFLINE,ONLINE
 */
class JavaMemShellDetail extends AbstractModel
{
    /**
     * @var string 容器名
     */
    public $InstanceName;

    /**
     * @var string 实例状态：RUNNING,STOPPED,SHUTDOWN...
     */
    public $InstanceState;

    /**
     * @var string 内网IP
     */
    public $PrivateIp;

    /**
     * @var string 公共ip
     */
    public $PublicIp;

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
     * @var string java加载器类名
     */
    public $ClassLoaderName;

    /**
     * @var string 父类名
     */
    public $SuperClassName;

    /**
     * @var string 类文件MD5
     */
    public $Md5;

    /**
     * @var string 继承的接口
     */
    public $Interfaces;

    /**
     * @var string 注释
     */
    public $Annotations;

    /**
     * @var integer 进程pid
     */
    public $Pid;

    /**
     * @var string java进程路径
     */
    public $Exe;

    /**
     * @var string java进程命令行参数
     */
    public $Args;

    /**
     * @var string 类名
     */
    public $ClassName;

    /**
     * @var string java内存马二进制代码(base64)
     */
    public $ClassContent;

    /**
     * @var string java内存马反编译代码
     */
    public $ClassContentPretty;

    /**
     * @var string 事件描述
     */
    public $EventDescription;

    /**
     * @var string 安全建议
     */
    public $SecurityAdvice;

    /**
     * @var MachineExtraInfo  主机额外信息
     */
    public $MachineExtraInfo;

    /**
     * @var string agent状态：OFFLINE,ONLINE
     */
    public $MachineState;

    /**
     * @param string $InstanceName 容器名
     * @param string $InstanceState 实例状态：RUNNING,STOPPED,SHUTDOWN...
     * @param string $PrivateIp 内网IP
     * @param string $PublicIp 公共ip
     * @param integer $Type 内存马类型  0:Filter型 1:Listener型 2:Servlet型 3:Interceptors型 4:Agent型 5:其他
     * @param string $Description 说明
     * @param string $CreateTime 首次发现时间
     * @param string $RecentFoundTime 最近检测时间
     * @param integer $Status 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略  4 - 已手动处理
     * @param string $ClassLoaderName java加载器类名
     * @param string $SuperClassName 父类名
     * @param string $Md5 类文件MD5
     * @param string $Interfaces 继承的接口
     * @param string $Annotations 注释
     * @param integer $Pid 进程pid
     * @param string $Exe java进程路径
     * @param string $Args java进程命令行参数
     * @param string $ClassName 类名
     * @param string $ClassContent java内存马二进制代码(base64)
     * @param string $ClassContentPretty java内存马反编译代码
     * @param string $EventDescription 事件描述
     * @param string $SecurityAdvice 安全建议
     * @param MachineExtraInfo $MachineExtraInfo  主机额外信息
     * @param string $MachineState agent状态：OFFLINE,ONLINE
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
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

        if (array_key_exists("ClassLoaderName",$param) and $param["ClassLoaderName"] !== null) {
            $this->ClassLoaderName = $param["ClassLoaderName"];
        }

        if (array_key_exists("SuperClassName",$param) and $param["SuperClassName"] !== null) {
            $this->SuperClassName = $param["SuperClassName"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Interfaces",$param) and $param["Interfaces"] !== null) {
            $this->Interfaces = $param["Interfaces"];
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = $param["Annotations"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("ClassContent",$param) and $param["ClassContent"] !== null) {
            $this->ClassContent = $param["ClassContent"];
        }

        if (array_key_exists("ClassContentPretty",$param) and $param["ClassContentPretty"] !== null) {
            $this->ClassContentPretty = $param["ClassContentPretty"];
        }

        if (array_key_exists("EventDescription",$param) and $param["EventDescription"] !== null) {
            $this->EventDescription = $param["EventDescription"];
        }

        if (array_key_exists("SecurityAdvice",$param) and $param["SecurityAdvice"] !== null) {
            $this->SecurityAdvice = $param["SecurityAdvice"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("MachineState",$param) and $param["MachineState"] !== null) {
            $this->MachineState = $param["MachineState"];
        }
    }
}
