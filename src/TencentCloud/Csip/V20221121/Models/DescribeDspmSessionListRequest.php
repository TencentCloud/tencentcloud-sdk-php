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
 * DescribeDspmSessionList请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getLimit() 获取<p>限制数目</p>
 * @method void setLimit(integer $Limit) 设置<p>限制数目</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLoginType() 获取<p>登陆状态(0 全部 1 成功 2 失败)</p>
 * @method void setLoginType(integer $LoginType) 设置<p>登陆状态(0 全部 1 成功 2 失败)</p>
 * @method string getDbName() 获取<p>数据库端口</p>
 * @method void setDbName(string $DbName) 设置<p>数据库端口</p>
 * @method integer getDbPort() 获取<p>数据库名称</p>
 * @method void setDbPort(integer $DbPort) 设置<p>数据库名称</p>
 * @method string getDbIp() 获取<p>数据库 IP</p>
 * @method void setDbIp(string $DbIp) 设置<p>数据库 IP</p>
 * @method integer getAssetsId() 获取<p>资产 ID</p>
 * @method void setAssetsId(integer $AssetsId) 设置<p>资产 ID</p>
 * @method string getSessionId() 获取<p>会话 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
 * @method string getClientSideIp() 获取<p>客户端 IP</p>
 * @method void setClientSideIp(string $ClientSideIp) 设置<p>客户端 IP</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method array getSourceTypes() 获取<p>流量来源  取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两者都传或不传则返回所有</p>
 * @method void setSourceTypes(array $SourceTypes) 设置<p>流量来源  取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两者都传或不传则返回所有</p>
 * @method array getDbTypes() 获取<p>[&quot;MySQL&quot;]</p>
 * @method void setDbTypes(array $DbTypes) 设置<p>[&quot;MySQL&quot;]</p>
 */
class DescribeDspmSessionListRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>限制数目</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>登陆状态(0 全部 1 成功 2 失败)</p>
     */
    public $LoginType;

    /**
     * @var string <p>数据库端口</p>
     */
    public $DbName;

    /**
     * @var integer <p>数据库名称</p>
     */
    public $DbPort;

    /**
     * @var string <p>数据库 IP</p>
     */
    public $DbIp;

    /**
     * @var integer <p>资产 ID</p>
     */
    public $AssetsId;

    /**
     * @var string <p>会话 ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>客户端 IP</p>
     */
    public $ClientSideIp;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var array <p>流量来源  取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两者都传或不传则返回所有</p>
     */
    public $SourceTypes;

    /**
     * @var array <p>[&quot;MySQL&quot;]</p>
     */
    public $DbTypes;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $Limit <p>限制数目</p>
     * @param integer $Offset <p>偏移量</p>
     * @param integer $LoginType <p>登陆状态(0 全部 1 成功 2 失败)</p>
     * @param string $DbName <p>数据库端口</p>
     * @param integer $DbPort <p>数据库名称</p>
     * @param string $DbIp <p>数据库 IP</p>
     * @param integer $AssetsId <p>资产 ID</p>
     * @param string $SessionId <p>会话 ID</p>
     * @param string $ClientSideIp <p>客户端 IP</p>
     * @param string $UserName <p>用户名</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param array $SourceTypes <p>流量来源  取值 Agent/Proxy/空；传Agent会返回Agent的日志，传Proxy会返回Proxy日志，两者都传或不传则返回所有</p>
     * @param array $DbTypes <p>[&quot;MySQL&quot;]</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LoginType",$param) and $param["LoginType"] !== null) {
            $this->LoginType = $param["LoginType"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("DbIp",$param) and $param["DbIp"] !== null) {
            $this->DbIp = $param["DbIp"];
        }

        if (array_key_exists("AssetsId",$param) and $param["AssetsId"] !== null) {
            $this->AssetsId = $param["AssetsId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ClientSideIp",$param) and $param["ClientSideIp"] !== null) {
            $this->ClientSideIp = $param["ClientSideIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("SourceTypes",$param) and $param["SourceTypes"] !== null) {
            $this->SourceTypes = $param["SourceTypes"];
        }

        if (array_key_exists("DbTypes",$param) and $param["DbTypes"] !== null) {
            $this->DbTypes = $param["DbTypes"];
        }
    }
}
