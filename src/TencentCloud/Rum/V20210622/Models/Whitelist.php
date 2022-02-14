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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 白名单
 *
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getTtl() 获取截止时间
 * @method void setTtl(string $Ttl) 设置截止时间
 * @method string getID() 获取白名单自增ID
 * @method void setID(string $ID) 设置白名单自增ID
 * @method string getWhitelistUin() 获取业务唯一标识
 * @method void setWhitelistUin(string $WhitelistUin) 设置业务唯一标识
 * @method string getCreateUser() 获取创建者ID
 * @method void setCreateUser(string $CreateUser) 设置创建者ID
 * @method string getAid() 获取aid标识
 * @method void setAid(string $Aid) 设置aid标识
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class Whitelist extends AbstractModel
{
    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 截止时间
     */
    public $Ttl;

    /**
     * @var string 白名单自增ID
     */
    public $ID;

    /**
     * @var string 业务唯一标识
     */
    public $WhitelistUin;

    /**
     * @var string 创建者ID
     */
    public $CreateUser;

    /**
     * @var string aid标识
     */
    public $Aid;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $Remark 备注
     * @param string $InstanceID 实例ID
     * @param string $Ttl 截止时间
     * @param string $ID 白名单自增ID
     * @param string $WhitelistUin 业务唯一标识
     * @param string $CreateUser 创建者ID
     * @param string $Aid aid标识
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("WhitelistUin",$param) and $param["WhitelistUin"] !== null) {
            $this->WhitelistUin = $param["WhitelistUin"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("Aid",$param) and $param["Aid"] !== null) {
            $this->Aid = $param["Aid"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
