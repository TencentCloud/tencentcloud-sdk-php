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
 * libra分析集群源数据库信息
 *
 * @method string getSrcInstanceType() 获取源端类型
 * @method void setSrcInstanceType(string $SrcInstanceType) 设置源端类型
 * @method string getAccessType() 获取网络类型
 * @method void setAccessType(string $AccessType) 设置网络类型
 * @method string getSrcInstanceId() 获取源端实例ID
 * @method void setSrcInstanceId(string $SrcInstanceId) 设置源端实例ID
 * @method string getSrcClusterId() 获取源端集群ID
 * @method void setSrcClusterId(string $SrcClusterId) 设置源端集群ID
 * @method string getIP() 获取地址
 * @method void setIP(string $IP) 设置地址
 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 * @method string getUser() 获取用户名
 * @method void setUser(string $User) 设置用户名
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method string getSqlMode() 获取源端sql_mode
 * @method void setSqlMode(string $SqlMode) 设置源端sql_mode
 * @method integer getSrcAppId() 获取源端应用id
 * @method void setSrcAppId(integer $SrcAppId) 设置源端应用id
 * @method string getSrcUin() 获取源端账号
 * @method void setSrcUin(string $SrcUin) 设置源端账号
 * @method string getSrcSubAccountUin() 获取源端子账号
 * @method void setSrcSubAccountUin(string $SrcSubAccountUin) 设置源端子账号
 * @method string getAccountMode() 获取账号
 * @method void setAccountMode(string $AccountMode) 设置账号
 * @method string getRegion() 获取源端实例地域
 * @method void setRegion(string $Region) 设置源端实例地域
 * @method string getOperation() 获取对源端实例的操作
 * @method void setOperation(string $Operation) 设置对源端实例的操作
 */
class LibraDBClusterSrcInfo extends AbstractModel
{
    /**
     * @var string 源端类型
     */
    public $SrcInstanceType;

    /**
     * @var string 网络类型
     */
    public $AccessType;

    /**
     * @var string 源端实例ID
     */
    public $SrcInstanceId;

    /**
     * @var string 源端集群ID
     */
    public $SrcClusterId;

    /**
     * @var string 地址
     */
    public $IP;

    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @var string 用户名
     */
    public $User;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var string 源端sql_mode
     */
    public $SqlMode;

    /**
     * @var integer 源端应用id
     */
    public $SrcAppId;

    /**
     * @var string 源端账号
     */
    public $SrcUin;

    /**
     * @var string 源端子账号
     */
    public $SrcSubAccountUin;

    /**
     * @var string 账号
     */
    public $AccountMode;

    /**
     * @var string 源端实例地域
     */
    public $Region;

    /**
     * @var string 对源端实例的操作
     */
    public $Operation;

    /**
     * @param string $SrcInstanceType 源端类型
     * @param string $AccessType 网络类型
     * @param string $SrcInstanceId 源端实例ID
     * @param string $SrcClusterId 源端集群ID
     * @param string $IP 地址
     * @param string $Port 端口
     * @param string $User 用户名
     * @param string $Password 密码
     * @param string $SqlMode 源端sql_mode
     * @param integer $SrcAppId 源端应用id
     * @param string $SrcUin 源端账号
     * @param string $SrcSubAccountUin 源端子账号
     * @param string $AccountMode 账号
     * @param string $Region 源端实例地域
     * @param string $Operation 对源端实例的操作
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
        if (array_key_exists("SrcInstanceType",$param) and $param["SrcInstanceType"] !== null) {
            $this->SrcInstanceType = $param["SrcInstanceType"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("SrcClusterId",$param) and $param["SrcClusterId"] !== null) {
            $this->SrcClusterId = $param["SrcClusterId"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SqlMode",$param) and $param["SqlMode"] !== null) {
            $this->SqlMode = $param["SqlMode"];
        }

        if (array_key_exists("SrcAppId",$param) and $param["SrcAppId"] !== null) {
            $this->SrcAppId = $param["SrcAppId"];
        }

        if (array_key_exists("SrcUin",$param) and $param["SrcUin"] !== null) {
            $this->SrcUin = $param["SrcUin"];
        }

        if (array_key_exists("SrcSubAccountUin",$param) and $param["SrcSubAccountUin"] !== null) {
            $this->SrcSubAccountUin = $param["SrcSubAccountUin"];
        }

        if (array_key_exists("AccountMode",$param) and $param["AccountMode"] !== null) {
            $this->AccountMode = $param["AccountMode"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
