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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchSession请求参数结构体
 *
 * @method string getPrivateIp() 获取内部Ip
 * @method void setPrivateIp(string $PrivateIp) 设置内部Ip
 * @method string getPublicIp() 获取外部Ip
 * @method void setPublicIp(string $PublicIp) 设置外部Ip
 * @method string getUserName() 获取用户名，长度不超过20
 * @method void setUserName(string $UserName) 设置用户名，长度不超过20
 * @method string getAccount() 获取账号，长度不超过64
 * @method void setAccount(string $Account) 设置账号，长度不超过64
 * @method string getFromIp() 获取来源Ip
 * @method void setFromIp(string $FromIp) 设置来源Ip
 * @method string getStartTime() 获取搜索区间的开始时间。若入参是Id，则非必传，否则为必传。
 * @method void setStartTime(string $StartTime) 设置搜索区间的开始时间。若入参是Id，则非必传，否则为必传。
 * @method string getEndTime() 获取搜索区间的结束时间
 * @method void setEndTime(string $EndTime) 设置搜索区间的结束时间
 * @method integer getKind() 获取会话协议类型，只能是1、2、3或4 对应关系为1-tui 2-gui 3-file 4-数据库。若入参是Id，则非必传，否则为必传。
 * @method void setKind(integer $Kind) 设置会话协议类型，只能是1、2、3或4 对应关系为1-tui 2-gui 3-file 4-数据库。若入参是Id，则非必传，否则为必传。
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取分页的页内记录数，默认为20，最大200
 * @method void setLimit(integer $Limit) 设置分页的页内记录数，默认为20，最大200
 * @method string getRealName() 获取姓名，长度不超过20
 * @method void setRealName(string $RealName) 设置姓名，长度不超过20
 * @method string getDeviceName() 获取主机名，长度不超过64
 * @method void setDeviceName(string $DeviceName) 设置主机名，长度不超过64
 * @method integer getStatus() 获取状态，1为活跃，2为结束，3为强制离线，4为其他错误
 * @method void setStatus(integer $Status) 设置状态，1为活跃，2为结束，3为强制离线，4为其他错误
 * @method string getId() 获取若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话
 * @method void setId(string $Id) 设置若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话
 */
class SearchSessionRequest extends AbstractModel
{
    /**
     * @var string 内部Ip
     */
    public $PrivateIp;

    /**
     * @var string 外部Ip
     */
    public $PublicIp;

    /**
     * @var string 用户名，长度不超过20
     */
    public $UserName;

    /**
     * @var string 账号，长度不超过64
     */
    public $Account;

    /**
     * @var string 来源Ip
     */
    public $FromIp;

    /**
     * @var string 搜索区间的开始时间。若入参是Id，则非必传，否则为必传。
     */
    public $StartTime;

    /**
     * @var string 搜索区间的结束时间
     */
    public $EndTime;

    /**
     * @var integer 会话协议类型，只能是1、2、3或4 对应关系为1-tui 2-gui 3-file 4-数据库。若入参是Id，则非必传，否则为必传。
     */
    public $Kind;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 分页的页内记录数，默认为20，最大200
     */
    public $Limit;

    /**
     * @var string 姓名，长度不超过20
     */
    public $RealName;

    /**
     * @var string 主机名，长度不超过64
     */
    public $DeviceName;

    /**
     * @var integer 状态，1为活跃，2为结束，3为强制离线，4为其他错误
     */
    public $Status;

    /**
     * @var string 若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话
     */
    public $Id;

    /**
     * @param string $PrivateIp 内部Ip
     * @param string $PublicIp 外部Ip
     * @param string $UserName 用户名，长度不超过20
     * @param string $Account 账号，长度不超过64
     * @param string $FromIp 来源Ip
     * @param string $StartTime 搜索区间的开始时间。若入参是Id，则非必传，否则为必传。
     * @param string $EndTime 搜索区间的结束时间
     * @param integer $Kind 会话协议类型，只能是1、2、3或4 对应关系为1-tui 2-gui 3-file 4-数据库。若入参是Id，则非必传，否则为必传。
     * @param integer $Offset 偏移量
     * @param integer $Limit 分页的页内记录数，默认为20，最大200
     * @param string $RealName 姓名，长度不超过20
     * @param string $DeviceName 主机名，长度不超过64
     * @param integer $Status 状态，1为活跃，2为结束，3为强制离线，4为其他错误
     * @param string $Id 若入参为Id，则其他入参字段不作为搜索依据，仅按照Id来搜索会话
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
        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("FromIp",$param) and $param["FromIp"] !== null) {
            $this->FromIp = $param["FromIp"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
