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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计会话列表信息
 *
 * @method integer getSqlCount() 获取<p>审计日志数</p>
 * @method void setSqlCount(integer $SqlCount) 设置<p>审计日志数</p>
 * @method integer getLogoutTime() 获取<p>登出时间</p>
 * @method void setLogoutTime(integer $LogoutTime) 设置<p>登出时间</p>
 * @method string getClientIp() 获取<p>客户端 IP</p>
 * @method void setClientIp(string $ClientIp) 设置<p>客户端 IP</p>
 * @method integer getClientPort() 获取<p>客户端端口</p>
 * @method void setClientPort(integer $ClientPort) 设置<p>客户端端口</p>
 * @method string getDbIp() 获取<p>数据库 IP</p>
 * @method void setDbIp(string $DbIp) 设置<p>数据库 IP</p>
 * @method string getDbName() 获取<p>数据库名称</p>
 * @method void setDbName(string $DbName) 设置<p>数据库名称</p>
 * @method integer getDbPort() 获取<p>数据库端口</p>
 * @method void setDbPort(integer $DbPort) 设置<p>数据库端口</p>
 * @method string getDbUser() 获取<p>数据库用户</p>
 * @method void setDbUser(string $DbUser) 设置<p>数据库用户</p>
 * @method integer getInstanceId() 获取<p>审计单元 ID</p>
 * @method void setInstanceId(integer $InstanceId) 设置<p>审计单元 ID</p>
 * @method integer getOpTime() 获取<p>操作时间(时间)</p>
 * @method void setOpTime(integer $OpTime) 设置<p>操作时间(时间)</p>
 * @method integer getRetNo() 获取<p>返回码</p>
 * @method void setRetNo(integer $RetNo) 设置<p>返回码</p>
 * @method string getSessionId() 获取<p>会话Id</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话Id</p>
 * @method integer getLoginTime() 获取<p>登录时间</p>
 * @method void setLoginTime(integer $LoginTime) 设置<p>登录时间</p>
 * @method string getInstanceName() 获取<p>数据资产名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>数据资产名称</p>
 * @method string getAssetName() 获取<p>数据资产名称</p>
 * @method void setAssetName(string $AssetName) 设置<p>数据资产名称</p>
 * @method string getSourceType() 获取<p>流量来源</p>
 * @method void setSourceType(string $SourceType) 设置<p>流量来源</p>
 * @method string getSourceTypeEn() 获取<p>流量来源英文</p>
 * @method void setSourceTypeEn(string $SourceTypeEn) 设置<p>流量来源英文</p>
 * @method integer getAppId() 获取<p>资产所属账号app id</p>
 * @method void setAppId(integer $AppId) 设置<p>资产所属账号app id</p>
 * @method string getSourceTypeEnDisplayName() 获取<p>流量来源</p>
 * @method void setSourceTypeEnDisplayName(string $SourceTypeEnDisplayName) 设置<p>流量来源</p>
 * @method string getNickName() 获取<p>昵称</p>
 * @method void setNickName(string $NickName) 设置<p>昵称</p>
 * @method string getUin() 获取<p>用户ID</p>
 * @method void setUin(string $Uin) 设置<p>用户ID</p>
 * @method string getDbType() 获取<p>数据库类型</p><p>枚举值：</p><ul><li>MongoDB： mongodb</li></ul>
 * @method void setDbType(string $DbType) 设置<p>数据库类型</p><p>枚举值：</p><ul><li>MongoDB： mongodb</li></ul>
 * @method string getAssetType() 获取<p>资产类型</p><p>枚举值：</p><ul><li>cdb： mysql</li><li>mongodb： mongodb</li></ul>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p><p>枚举值：</p><ul><li>cdb： mysql</li><li>mongodb： mongodb</li></ul>
 */
class DspmAuditSessionInfo extends AbstractModel
{
    /**
     * @var integer <p>审计日志数</p>
     */
    public $SqlCount;

    /**
     * @var integer <p>登出时间</p>
     */
    public $LogoutTime;

    /**
     * @var string <p>客户端 IP</p>
     */
    public $ClientIp;

    /**
     * @var integer <p>客户端端口</p>
     */
    public $ClientPort;

    /**
     * @var string <p>数据库 IP</p>
     */
    public $DbIp;

    /**
     * @var string <p>数据库名称</p>
     */
    public $DbName;

    /**
     * @var integer <p>数据库端口</p>
     */
    public $DbPort;

    /**
     * @var string <p>数据库用户</p>
     */
    public $DbUser;

    /**
     * @var integer <p>审计单元 ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>操作时间(时间)</p>
     */
    public $OpTime;

    /**
     * @var integer <p>返回码</p>
     */
    public $RetNo;

    /**
     * @var string <p>会话Id</p>
     */
    public $SessionId;

    /**
     * @var integer <p>登录时间</p>
     */
    public $LoginTime;

    /**
     * @var string <p>数据资产名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>数据资产名称</p>
     */
    public $AssetName;

    /**
     * @var string <p>流量来源</p>
     */
    public $SourceType;

    /**
     * @var string <p>流量来源英文</p>
     */
    public $SourceTypeEn;

    /**
     * @var integer <p>资产所属账号app id</p>
     */
    public $AppId;

    /**
     * @var string <p>流量来源</p>
     */
    public $SourceTypeEnDisplayName;

    /**
     * @var string <p>昵称</p>
     */
    public $NickName;

    /**
     * @var string <p>用户ID</p>
     */
    public $Uin;

    /**
     * @var string <p>数据库类型</p><p>枚举值：</p><ul><li>MongoDB： mongodb</li></ul>
     */
    public $DbType;

    /**
     * @var string <p>资产类型</p><p>枚举值：</p><ul><li>cdb： mysql</li><li>mongodb： mongodb</li></ul>
     */
    public $AssetType;

    /**
     * @param integer $SqlCount <p>审计日志数</p>
     * @param integer $LogoutTime <p>登出时间</p>
     * @param string $ClientIp <p>客户端 IP</p>
     * @param integer $ClientPort <p>客户端端口</p>
     * @param string $DbIp <p>数据库 IP</p>
     * @param string $DbName <p>数据库名称</p>
     * @param integer $DbPort <p>数据库端口</p>
     * @param string $DbUser <p>数据库用户</p>
     * @param integer $InstanceId <p>审计单元 ID</p>
     * @param integer $OpTime <p>操作时间(时间)</p>
     * @param integer $RetNo <p>返回码</p>
     * @param string $SessionId <p>会话Id</p>
     * @param integer $LoginTime <p>登录时间</p>
     * @param string $InstanceName <p>数据资产名称</p>
     * @param string $AssetName <p>数据资产名称</p>
     * @param string $SourceType <p>流量来源</p>
     * @param string $SourceTypeEn <p>流量来源英文</p>
     * @param integer $AppId <p>资产所属账号app id</p>
     * @param string $SourceTypeEnDisplayName <p>流量来源</p>
     * @param string $NickName <p>昵称</p>
     * @param string $Uin <p>用户ID</p>
     * @param string $DbType <p>数据库类型</p><p>枚举值：</p><ul><li>MongoDB： mongodb</li></ul>
     * @param string $AssetType <p>资产类型</p><p>枚举值：</p><ul><li>cdb： mysql</li><li>mongodb： mongodb</li></ul>
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
        if (array_key_exists("SqlCount",$param) and $param["SqlCount"] !== null) {
            $this->SqlCount = $param["SqlCount"];
        }

        if (array_key_exists("LogoutTime",$param) and $param["LogoutTime"] !== null) {
            $this->LogoutTime = $param["LogoutTime"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ClientPort",$param) and $param["ClientPort"] !== null) {
            $this->ClientPort = $param["ClientPort"];
        }

        if (array_key_exists("DbIp",$param) and $param["DbIp"] !== null) {
            $this->DbIp = $param["DbIp"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("DbUser",$param) and $param["DbUser"] !== null) {
            $this->DbUser = $param["DbUser"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OpTime",$param) and $param["OpTime"] !== null) {
            $this->OpTime = $param["OpTime"];
        }

        if (array_key_exists("RetNo",$param) and $param["RetNo"] !== null) {
            $this->RetNo = $param["RetNo"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceTypeEn",$param) and $param["SourceTypeEn"] !== null) {
            $this->SourceTypeEn = $param["SourceTypeEn"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SourceTypeEnDisplayName",$param) and $param["SourceTypeEnDisplayName"] !== null) {
            $this->SourceTypeEnDisplayName = $param["SourceTypeEnDisplayName"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
