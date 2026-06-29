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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号详细信息
 *
 * @method string getNotes() 获取<p>账号备注信息</p>
 * @method void setNotes(string $Notes) 设置<p>账号备注信息</p>
 * @method string getHost() 获取<p>账号的域名</p>
 * @method void setHost(string $Host) 设置<p>账号的域名</p>
 * @method string getUser() 获取<p>账号的名称</p>
 * @method void setUser(string $User) 设置<p>账号的名称</p>
 * @method string getModifyTime() 获取<p>账号信息修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>账号信息修改时间</p>
 * @method string getModifyPasswordTime() 获取<p>修改密码的时间</p>
 * @method void setModifyPasswordTime(string $ModifyPasswordTime) 设置<p>修改密码的时间</p>
 * @method string getCreateTime() 获取<p>该值已废弃</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>该值已废弃</p>
 * @method integer getMaxUserConnections() 获取<p>用户最大可用实例连接数</p>
 * @method void setMaxUserConnections(integer $MaxUserConnections) 设置<p>用户最大可用实例连接数</p>
 * @method boolean getOpenCam() 获取<p>用户账号是否开启了密码轮转</p>
 * @method void setOpenCam(boolean $OpenCam) 设置<p>用户账号是否开启了密码轮转</p>
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string <p>账号备注信息</p>
     */
    public $Notes;

    /**
     * @var string <p>账号的域名</p>
     */
    public $Host;

    /**
     * @var string <p>账号的名称</p>
     */
    public $User;

    /**
     * @var string <p>账号信息修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>修改密码的时间</p>
     */
    public $ModifyPasswordTime;

    /**
     * @var string <p>该值已废弃</p>
     * @deprecated
     */
    public $CreateTime;

    /**
     * @var integer <p>用户最大可用实例连接数</p>
     */
    public $MaxUserConnections;

    /**
     * @var boolean <p>用户账号是否开启了密码轮转</p>
     */
    public $OpenCam;

    /**
     * @param string $Notes <p>账号备注信息</p>
     * @param string $Host <p>账号的域名</p>
     * @param string $User <p>账号的名称</p>
     * @param string $ModifyTime <p>账号信息修改时间</p>
     * @param string $ModifyPasswordTime <p>修改密码的时间</p>
     * @param string $CreateTime <p>该值已废弃</p>
     * @param integer $MaxUserConnections <p>用户最大可用实例连接数</p>
     * @param boolean $OpenCam <p>用户账号是否开启了密码轮转</p>
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
        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ModifyPasswordTime",$param) and $param["ModifyPasswordTime"] !== null) {
            $this->ModifyPasswordTime = $param["ModifyPasswordTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }

        if (array_key_exists("OpenCam",$param) and $param["OpenCam"] !== null) {
            $this->OpenCam = $param["OpenCam"];
        }
    }
}
