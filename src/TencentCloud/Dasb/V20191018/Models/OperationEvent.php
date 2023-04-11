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
 * 操作日志
 *
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getRealName() 获取姓名
 * @method void setRealName(string $RealName) 设置姓名
 * @method string getTime() 获取操作时间
 * @method void setTime(string $Time) 设置操作时间
 * @method string getSourceIp() 获取来源IP
 * @method void setSourceIp(string $SourceIp) 设置来源IP
 * @method integer getKind() 获取操作类型
 * @method void setKind(integer $Kind) 设置操作类型
 * @method string getOperation() 获取具体操作内容
 * @method void setOperation(string $Operation) 设置具体操作内容
 * @method integer getResult() 获取操作结果，1-成功，2-失败
 * @method void setResult(integer $Result) 设置操作结果，1-成功，2-失败
 */
class OperationEvent extends AbstractModel
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
     * @var integer 操作类型
     */
    public $Kind;

    /**
     * @var string 具体操作内容
     */
    public $Operation;

    /**
     * @var integer 操作结果，1-成功，2-失败
     */
    public $Result;

    /**
     * @param string $UserName 用户名
     * @param string $RealName 姓名
     * @param string $Time 操作时间
     * @param string $SourceIp 来源IP
     * @param integer $Kind 操作类型
     * @param string $Operation 具体操作内容
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

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
