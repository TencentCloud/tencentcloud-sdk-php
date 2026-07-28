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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库账号信息
 *
 * @method string getAccountName() 获取<p>数据库账号名</p>
 * @method void setAccountName(string $AccountName) 设置<p>数据库账号名</p>
 * @method string getHost() 获取<p>主机</p>
 * @method void setHost(string $Host) 设置<p>主机</p>
 * @method string getDescription() 获取<p>数据库账号描述</p>
 * @method void setDescription(string $Description) 设置<p>数据库账号描述</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method integer getMaxUserConnections() 获取<p>用户最大连接数</p>
 * @method void setMaxUserConnections(integer $MaxUserConnections) 设置<p>用户最大连接数</p>
 * @method integer getPasswordRotation() 获取<p>是否开启密码轮转(0:关闭;1:开启)</p>
 * @method void setPasswordRotation(integer $PasswordRotation) 设置<p>是否开启密码轮转(0:关闭;1:开启)</p>
 */
class Account extends AbstractModel
{
    /**
     * @var string <p>数据库账号名</p>
     */
    public $AccountName;

    /**
     * @var string <p>主机</p>
     */
    public $Host;

    /**
     * @var string <p>数据库账号描述</p>
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>用户最大连接数</p>
     */
    public $MaxUserConnections;

    /**
     * @var integer <p>是否开启密码轮转(0:关闭;1:开启)</p>
     */
    public $PasswordRotation;

    /**
     * @param string $AccountName <p>数据库账号名</p>
     * @param string $Host <p>主机</p>
     * @param string $Description <p>数据库账号描述</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param integer $MaxUserConnections <p>用户最大连接数</p>
     * @param integer $PasswordRotation <p>是否开启密码轮转(0:关闭;1:开启)</p>
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
        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }

        if (array_key_exists("PasswordRotation",$param) and $param["PasswordRotation"] !== null) {
            $this->PasswordRotation = $param["PasswordRotation"];
        }
    }
}
