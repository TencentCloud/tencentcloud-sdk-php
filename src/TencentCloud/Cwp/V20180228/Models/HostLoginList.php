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
 * 登录审计列表实体
 *
 * @method integer getId() 获取记录Id
 * @method void setId(integer $Id) 设置记录Id
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method string getMachineIp() 获取主机ip
 * @method void setMachineIp(string $MachineIp) 设置主机ip
 * @method string getMachineName() 获取主机名
 * @method void setMachineName(string $MachineName) 设置主机名
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getSrcIp() 获取来源ip
 * @method void setSrcIp(string $SrcIp) 设置来源ip
 * @method integer getStatus() 获取1:正常登录；2异地登录； 5已加白； 14：已处理；15：已忽略。
 * @method void setStatus(integer $Status) 设置1:正常登录；2异地登录； 5已加白； 14：已处理；15：已忽略。
 * @method integer getCountry() 获取国家id
 * @method void setCountry(integer $Country) 设置国家id
 * @method integer getCity() 获取城市id
 * @method void setCity(integer $City) 设置城市id
 * @method integer getProvince() 获取省份id
 * @method void setProvince(integer $Province) 设置省份id
 * @method string getLoginTime() 获取登录时间
 * @method void setLoginTime(string $LoginTime) 设置登录时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method integer getIsRiskArea() 获取是否命中异地登录异常  1表示命中此类异常, 0表示未命中
 * @method void setIsRiskArea(integer $IsRiskArea) 设置是否命中异地登录异常  1表示命中此类异常, 0表示未命中
 * @method integer getIsRiskUser() 获取是否命中异常用户异常 1表示命中此类异常, 0表示未命中
 * @method void setIsRiskUser(integer $IsRiskUser) 设置是否命中异常用户异常 1表示命中此类异常, 0表示未命中
 * @method integer getIsRiskTime() 获取是否命中异常时间异常 1表示命中此类异常, 0表示未命中
 * @method void setIsRiskTime(integer $IsRiskTime) 设置是否命中异常时间异常 1表示命中此类异常, 0表示未命中
 * @method integer getIsRiskSrcIp() 获取是否命中异常IP异常 1表示命中此类异常, 0表示未命中
 * @method void setIsRiskSrcIp(integer $IsRiskSrcIp) 设置是否命中异常IP异常 1表示命中此类异常, 0表示未命中
 * @method integer getRiskLevel() 获取危险等级：
0 高危
1 可疑
 * @method void setRiskLevel(integer $RiskLevel) 设置危险等级：
0 高危
1 可疑
 * @method string getLocation() 获取位置名称
 * @method void setLocation(string $Location) 设置位置名称
 * @method string getQuuid() 获取主机quuid
 * @method void setQuuid(string $Quuid) 设置主机quuid
 * @method string getDesc() 获取高危信息说明：
ABROAD - 海外IP；
XTI - 威胁情报
 * @method void setDesc(string $Desc) 设置高危信息说明：
ABROAD - 海外IP；
XTI - 威胁情报
 * @method MachineExtraInfo getMachineExtraInfo() 获取附加信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置附加信息
 * @method integer getPort() 获取请求目的端口
 * @method void setPort(integer $Port) 设置请求目的端口
 */
class HostLoginList extends AbstractModel
{
    /**
     * @var integer 记录Id
     */
    public $Id;

    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var string 主机ip
     */
    public $MachineIp;

    /**
     * @var string 主机名
     */
    public $MachineName;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 来源ip
     */
    public $SrcIp;

    /**
     * @var integer 1:正常登录；2异地登录； 5已加白； 14：已处理；15：已忽略。
     */
    public $Status;

    /**
     * @var integer 国家id
     */
    public $Country;

    /**
     * @var integer 城市id
     */
    public $City;

    /**
     * @var integer 省份id
     */
    public $Province;

    /**
     * @var string 登录时间
     */
    public $LoginTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var integer 是否命中异地登录异常  1表示命中此类异常, 0表示未命中
     */
    public $IsRiskArea;

    /**
     * @var integer 是否命中异常用户异常 1表示命中此类异常, 0表示未命中
     */
    public $IsRiskUser;

    /**
     * @var integer 是否命中异常时间异常 1表示命中此类异常, 0表示未命中
     */
    public $IsRiskTime;

    /**
     * @var integer 是否命中异常IP异常 1表示命中此类异常, 0表示未命中
     */
    public $IsRiskSrcIp;

    /**
     * @var integer 危险等级：
0 高危
1 可疑
     */
    public $RiskLevel;

    /**
     * @var string 位置名称
     */
    public $Location;

    /**
     * @var string 主机quuid
     */
    public $Quuid;

    /**
     * @var string 高危信息说明：
ABROAD - 海外IP；
XTI - 威胁情报
     */
    public $Desc;

    /**
     * @var MachineExtraInfo 附加信息
     */
    public $MachineExtraInfo;

    /**
     * @var integer 请求目的端口
     */
    public $Port;

    /**
     * @param integer $Id 记录Id
     * @param string $Uuid 主机Uuid
     * @param string $MachineIp 主机ip
     * @param string $MachineName 主机名
     * @param string $UserName 用户名
     * @param string $SrcIp 来源ip
     * @param integer $Status 1:正常登录；2异地登录； 5已加白； 14：已处理；15：已忽略。
     * @param integer $Country 国家id
     * @param integer $City 城市id
     * @param integer $Province 省份id
     * @param string $LoginTime 登录时间
     * @param string $ModifyTime 修改时间
     * @param integer $IsRiskArea 是否命中异地登录异常  1表示命中此类异常, 0表示未命中
     * @param integer $IsRiskUser 是否命中异常用户异常 1表示命中此类异常, 0表示未命中
     * @param integer $IsRiskTime 是否命中异常时间异常 1表示命中此类异常, 0表示未命中
     * @param integer $IsRiskSrcIp 是否命中异常IP异常 1表示命中此类异常, 0表示未命中
     * @param integer $RiskLevel 危险等级：
0 高危
1 可疑
     * @param string $Location 位置名称
     * @param string $Quuid 主机quuid
     * @param string $Desc 高危信息说明：
ABROAD - 海外IP；
XTI - 威胁情报
     * @param MachineExtraInfo $MachineExtraInfo 附加信息
     * @param integer $Port 请求目的端口
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IsRiskArea",$param) and $param["IsRiskArea"] !== null) {
            $this->IsRiskArea = $param["IsRiskArea"];
        }

        if (array_key_exists("IsRiskUser",$param) and $param["IsRiskUser"] !== null) {
            $this->IsRiskUser = $param["IsRiskUser"];
        }

        if (array_key_exists("IsRiskTime",$param) and $param["IsRiskTime"] !== null) {
            $this->IsRiskTime = $param["IsRiskTime"];
        }

        if (array_key_exists("IsRiskSrcIp",$param) and $param["IsRiskSrcIp"] !== null) {
            $this->IsRiskSrcIp = $param["IsRiskSrcIp"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
