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
namespace TencentCloud\Icr\V20211014\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回包的meta data
 *
 * @method integer getCode() 获取无
 * @method void setCode(integer $Code) 设置无
 * @method string getMessage() 获取无
 * @method void setMessage(string $Message) 设置无
 * @method string getSessionID() 获取无
 * @method void setSessionID(string $SessionID) 设置无
 * @method string getSessionDelta() 获取无
 * @method void setSessionDelta(string $SessionDelta) 设置无
 */
class RspMetadata extends AbstractModel
{
    /**
     * @var integer 无
     */
    public $Code;

    /**
     * @var string 无
     */
    public $Message;

    /**
     * @var string 无
     */
    public $SessionID;

    /**
     * @var string 无
     */
    public $SessionDelta;

    /**
     * @param integer $Code 无
     * @param string $Message 无
     * @param string $SessionID 无
     * @param string $SessionDelta 无
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }

        if (array_key_exists("SessionDelta",$param) and $param["SessionDelta"] !== null) {
            $this->SessionDelta = $param["SessionDelta"];
        }
    }
}
