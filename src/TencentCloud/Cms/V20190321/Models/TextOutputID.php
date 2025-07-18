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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息类输出ID参数
 *
 * @method string getMsgID() 获取接入业务的唯一ID
 * @method void setMsgID(string $MsgID) 设置接入业务的唯一ID
 * @method string getUin() 获取用户账号uin，对应请求协议里的Content.User.Uin。旁路结果有回带，串联结果无该字段
 * @method void setUin(string $Uin) 设置用户账号uin，对应请求协议里的Content.User.Uin。旁路结果有回带，串联结果无该字段
 */
class TextOutputID extends AbstractModel
{
    /**
     * @var string 接入业务的唯一ID
     */
    public $MsgID;

    /**
     * @var string 用户账号uin，对应请求协议里的Content.User.Uin。旁路结果有回带，串联结果无该字段
     */
    public $Uin;

    /**
     * @param string $MsgID 接入业务的唯一ID
     * @param string $Uin 用户账号uin，对应请求协议里的Content.User.Uin。旁路结果有回带，串联结果无该字段
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
        if (array_key_exists("MsgID",$param) and $param["MsgID"] !== null) {
            $this->MsgID = $param["MsgID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
