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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志结果
 *
 * @method integer getDBId() 获取<p>数据库ID</p>
 * @method void setDBId(integer $DBId) 设置<p>数据库ID</p>
 * @method integer getCommandLatency() 获取<p>命令延迟（毫秒）</p>
 * @method void setCommandLatency(integer $CommandLatency) 设置<p>命令延迟（毫秒）</p>
 * @method string getTimestamp() 获取<p>创建时间（格式：2006-01-02 15:04:05.000）</p>
 * @method void setTimestamp(string $Timestamp) 设置<p>创建时间（格式：2006-01-02 15:04:05.000）</p>
 * @method string getClientAddr() 获取<p>客户端地址</p>
 * @method void setClientAddr(string $ClientAddr) 设置<p>客户端地址</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getCommandType() 获取<p>命令类型</p>
 * @method void setCommandType(string $CommandType) 设置<p>命令类型</p>
 * @method string getCacheCode() 获取<p>缓存代码，后端redis节点</p>
 * @method void setCacheCode(string $CacheCode) 设置<p>缓存代码，后端redis节点</p>
 * @method string getCommandDetail() 获取<p>命令详情</p>
 * @method void setCommandDetail(string $CommandDetail) 设置<p>命令详情</p>
 * @method string getErrMsg() 获取<p>错误信息</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误信息</p>
 */
class LogResult extends AbstractModel
{
    /**
     * @var integer <p>数据库ID</p>
     */
    public $DBId;

    /**
     * @var integer <p>命令延迟（毫秒）</p>
     */
    public $CommandLatency;

    /**
     * @var string <p>创建时间（格式：2006-01-02 15:04:05.000）</p>
     */
    public $Timestamp;

    /**
     * @var string <p>客户端地址</p>
     */
    public $ClientAddr;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>命令类型</p>
     */
    public $CommandType;

    /**
     * @var string <p>缓存代码，后端redis节点</p>
     */
    public $CacheCode;

    /**
     * @var string <p>命令详情</p>
     */
    public $CommandDetail;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrMsg;

    /**
     * @param integer $DBId <p>数据库ID</p>
     * @param integer $CommandLatency <p>命令延迟（毫秒）</p>
     * @param string $Timestamp <p>创建时间（格式：2006-01-02 15:04:05.000）</p>
     * @param string $ClientAddr <p>客户端地址</p>
     * @param string $UserName <p>用户名</p>
     * @param string $CommandType <p>命令类型</p>
     * @param string $CacheCode <p>缓存代码，后端redis节点</p>
     * @param string $CommandDetail <p>命令详情</p>
     * @param string $ErrMsg <p>错误信息</p>
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
        if (array_key_exists("DBId",$param) and $param["DBId"] !== null) {
            $this->DBId = $param["DBId"];
        }

        if (array_key_exists("CommandLatency",$param) and $param["CommandLatency"] !== null) {
            $this->CommandLatency = $param["CommandLatency"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("CommandType",$param) and $param["CommandType"] !== null) {
            $this->CommandType = $param["CommandType"];
        }

        if (array_key_exists("CacheCode",$param) and $param["CacheCode"] !== null) {
            $this->CacheCode = $param["CacheCode"];
        }

        if (array_key_exists("CommandDetail",$param) and $param["CommandDetail"] !== null) {
            $this->CommandDetail = $param["CommandDetail"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
