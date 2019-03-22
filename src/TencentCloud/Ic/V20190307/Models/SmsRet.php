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
namespace TencentCloud\Ic\V20190307\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCode() 获取该iccid请求状态
 * @method void setCode(string $Code) 设置该iccid请求状态
 * @method string getMsg() 获取短信发送返回信息
 * @method void setMsg(string $Msg) 设置短信发送返回信息
 * @method string getIccid() 获取卡片id
 * @method void setIccid(string $Iccid) 设置卡片id
 * @method string getSid() 获取流水id
 * @method void setSid(string $Sid) 设置流水id
 */

/**
 *短信流水信息
 */
class SmsRet extends AbstractModel
{
    /**
     * @var string 该iccid请求状态
     */
    public $Code;

    /**
     * @var string 短信发送返回信息
     */
    public $Msg;

    /**
     * @var string 卡片id
     */
    public $Iccid;

    /**
     * @var string 流水id
     */
    public $Sid;
    /**
     * @param string $Code 该iccid请求状态
     * @param string $Msg 短信发送返回信息
     * @param string $Iccid 卡片id
     * @param string $Sid 流水id
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Iccid",$param) and $param["Iccid"] !== null) {
            $this->Iccid = $param["Iccid"];
        }

        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }
    }
}
