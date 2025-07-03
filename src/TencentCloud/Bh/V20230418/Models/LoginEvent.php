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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录日志
 *
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getRealName() 获取姓名
 * @method void setRealName(string $RealName) 设置姓名
 * @method string getTime() 获取操作时间
 * @method void setTime(string $Time) 设置操作时间
 * @method string getSourceIp() 获取来源IP
 * @method void setSourceIp(string $SourceIp) 设置来源IP
 * @method integer getEntry() 获取登录入口：1-字符界面,2-图形界面，3-web页面, 4-API
 * @method void setEntry(integer $Entry) 设置登录入口：1-字符界面,2-图形界面，3-web页面, 4-API
 * @method integer getResult() 获取操作结果，1-成功，2-失败
 * @method void setResult(integer $Result) 设置操作结果，1-成功，2-失败
 */
class LoginEvent extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 姓名
     */
    public $RealName;

    /**
     * @var string 操作时间
     */
    public $Time;

    /**
     * @var string 来源IP
     */
    public $SourceIp;

    /**
     * @var integer 登录入口：1-字符界面,2-图形界面，3-web页面, 4-API
     */
    public $Entry;

    /**
     * @var integer 操作结果，1-成功，2-失败
     */
    public $Result;

    /**
     * @param string $UserName 用户名
     * @param string $RealName 姓名
     * @param string $Time 操作时间
     * @param string $SourceIp 来源IP
     * @param integer $Entry 登录入口：1-字符界面,2-图形界面，3-web页面, 4-API
     * @param integer $Result 操作结果，1-成功，2-失败
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("Entry",$param) and $param["Entry"] !== null) {
            $this->Entry = $param["Entry"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
