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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回调ACK
 *
 * @method integer getStdRetCode() 获取异步ACK-CODE
 * @method void setStdRetCode(integer $StdRetCode) 设置异步ACK-CODE
 * @method string getStdRetMsg() 获取异步ACK
 * @method void setStdRetMsg(string $StdRetMsg) 设置异步ACK
 */
class CallBackAck extends AbstractModel
{
    /**
     * @var integer 异步ACK-CODE
     */
    public $StdRetCode;

    /**
     * @var string 异步ACK
     */
    public $StdRetMsg;

    /**
     * @param integer $StdRetCode 异步ACK-CODE
     * @param string $StdRetMsg 异步ACK
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
        if (array_key_exists("StdRetCode",$param) and $param["StdRetCode"] !== null) {
            $this->StdRetCode = $param["StdRetCode"];
        }

        if (array_key_exists("StdRetMsg",$param) and $param["StdRetMsg"] !== null) {
            $this->StdRetMsg = $param["StdRetMsg"];
        }
    }
}
