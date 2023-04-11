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
 * 审计日志
 *
 * @method string getSid() 获取被审计会话的Sid
 * @method void setSid(string $Sid) 设置被审计会话的Sid
 * @method string getUin() 获取审计者的编号
 * @method void setUin(string $Uin) 设置审计者的编号
 * @method string getTime() 获取审计动作发生的时间
 * @method void setTime(string $Time) 设置审计动作发生的时间
 * @method string getClientIp() 获取审计者的Ip
 * @method void setClientIp(string $ClientIp) 设置审计者的Ip
 * @method integer getOperation() 获取审计动作类型，1--回放、2--中断、3--监控
 * @method void setOperation(integer $Operation) 设置审计动作类型，1--回放、2--中断、3--监控
 * @method string getInstanceId() 获取被审计主机的Id
 * @method void setInstanceId(string $InstanceId) 设置被审计主机的Id
 * @method string getDeviceName() 获取被审计主机的主机名
 * @method void setDeviceName(string $DeviceName) 设置被审计主机的主机名
 * @method string getProtocol() 获取被审计会话所属的类型，如字符会话
 * @method void setProtocol(string $Protocol) 设置被审计会话所属的类型，如字符会话
 * @method string getPrivateIp() 获取被审计主机的内部Ip
 * @method void setPrivateIp(string $PrivateIp) 设置被审计主机的内部Ip
 * @method string getPublicIp() 获取被审计主机的外部Ip
 * @method void setPublicIp(string $PublicIp) 设置被审计主机的外部Ip
 * @method string getSubAccountUin() 获取审计者的子账号
 * @method void setSubAccountUin(string $SubAccountUin) 设置审计者的子账号
 */
class AuditLogResult extends AbstractModel
{
    /**
     * @var string 被审计会话的Sid
     */
    public $Sid;

    /**
     * @var string 审计者的编号
     */
    public $Uin;

    /**
     * @var string 审计动作发生的时间
     */
    public $Time;

    /**
     * @var string 审计者的Ip
     */
    public $ClientIp;

    /**
     * @var integer 审计动作类型，1--回放、2--中断、3--监控
     */
    public $Operation;

    /**
     * @var string 被审计主机的Id
     */
    public $InstanceId;

    /**
     * @var string 被审计主机的主机名
     */
    public $DeviceName;

    /**
     * @var string 被审计会话所属的类型，如字符会话
     */
    public $Protocol;

    /**
     * @var string 被审计主机的内部Ip
     */
    public $PrivateIp;

    /**
     * @var string 被审计主机的外部Ip
     */
    public $PublicIp;

    /**
     * @var string 审计者的子账号
     */
    public $SubAccountUin;

    /**
     * @param string $Sid 被审计会话的Sid
     * @param string $Uin 审计者的编号
     * @param string $Time 审计动作发生的时间
     * @param string $ClientIp 审计者的Ip
     * @param integer $Operation 审计动作类型，1--回放、2--中断、3--监控
     * @param string $InstanceId 被审计主机的Id
     * @param string $DeviceName 被审计主机的主机名
     * @param string $Protocol 被审计会话所属的类型，如字符会话
     * @param string $PrivateIp 被审计主机的内部Ip
     * @param string $PublicIp 被审计主机的外部Ip
     * @param string $SubAccountUin 审计者的子账号
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
        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }
    }
}
