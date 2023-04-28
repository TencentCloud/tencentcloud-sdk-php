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
 * SearchCommand请求参数结构体
 *
 * @method string getStartTime() 获取搜索区间的开始时间
 * @method void setStartTime(string $StartTime) 设置搜索区间的开始时间
 * @method string getEndTime() 获取搜索区间的结束时间，不填默认为开始时间到现在为止
 * @method void setEndTime(string $EndTime) 设置搜索区间的结束时间，不填默认为开始时间到现在为止
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getRealName() 获取姓名
 * @method void setRealName(string $RealName) 设置姓名
 * @method string getInstanceId() 获取资产实例ID
 * @method void setInstanceId(string $InstanceId) 设置资产实例ID
 * @method string getDeviceName() 获取资产名称
 * @method void setDeviceName(string $DeviceName) 设置资产名称
 * @method string getPublicIp() 获取资产的公网IP
 * @method void setPublicIp(string $PublicIp) 设置资产的公网IP
 * @method string getPrivateIp() 获取资产的内网IP
 * @method void setPrivateIp(string $PrivateIp) 设置资产的内网IP
 * @method string getCmd() 获取执行的命令
 * @method void setCmd(string $Cmd) 设置执行的命令
 * @method integer getEncoding() 获取Cmd字段是前端传值是否进行base64.
0:否，1：是
 * @method void setEncoding(integer $Encoding) 设置Cmd字段是前端传值是否进行base64.
0:否，1：是
 * @method array getAuditAction() 获取根据拦截状态进行过滤：1 - 已执行，2 - 被阻断
 * @method void setAuditAction(array $AuditAction) 设置根据拦截状态进行过滤：1 - 已执行，2 - 被阻断
 * @method integer getLimit() 获取每页容量，默认20，最大200
 * @method void setLimit(integer $Limit) 设置每页容量，默认20，最大200
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 */
class SearchCommandRequest extends AbstractModel
{
    /**
     * @var string 搜索区间的开始时间
     */
    public $StartTime;

    /**
     * @var string 搜索区间的结束时间，不填默认为开始时间到现在为止
     */
    public $EndTime;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 姓名
     */
    public $RealName;

    /**
     * @var string 资产实例ID
     */
    public $InstanceId;

    /**
     * @var string 资产名称
     */
    public $DeviceName;

    /**
     * @var string 资产的公网IP
     */
    public $PublicIp;

    /**
     * @var string 资产的内网IP
     */
    public $PrivateIp;

    /**
     * @var string 执行的命令
     */
    public $Cmd;

    /**
     * @var integer Cmd字段是前端传值是否进行base64.
0:否，1：是
     */
    public $Encoding;

    /**
     * @var array 根据拦截状态进行过滤：1 - 已执行，2 - 被阻断
     */
    public $AuditAction;

    /**
     * @var integer 每页容量，默认20，最大200
     */
    public $Limit;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @param string $StartTime 搜索区间的开始时间
     * @param string $EndTime 搜索区间的结束时间，不填默认为开始时间到现在为止
     * @param string $UserName 用户名
     * @param string $RealName 姓名
     * @param string $InstanceId 资产实例ID
     * @param string $DeviceName 资产名称
     * @param string $PublicIp 资产的公网IP
     * @param string $PrivateIp 资产的内网IP
     * @param string $Cmd 执行的命令
     * @param integer $Encoding Cmd字段是前端传值是否进行base64.
0:否，1：是
     * @param array $AuditAction 根据拦截状态进行过滤：1 - 已执行，2 - 被阻断
     * @param integer $Limit 每页容量，默认20，最大200
     * @param integer $Offset 分页偏移位置，默认值为0
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("AuditAction",$param) and $param["AuditAction"] !== null) {
            $this->AuditAction = $param["AuditAction"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
