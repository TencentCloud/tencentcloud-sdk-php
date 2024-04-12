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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetMsgRecord请求参数结构体
 *
 * @method integer getType() 获取类型
 * @method void setType(integer $Type) 设置类型
 * @method integer getCount() 获取数量
 * @method void setCount(integer $Count) 设置数量
 * @method string getSessionId() 获取会话sessionid
 * @method void setSessionId(string $SessionId) 设置会话sessionid
 * @method string getLastRecordId() 获取最后一条记录ID
 * @method void setLastRecordId(string $LastRecordId) 设置最后一条记录ID
 * @method string getBotAppKey() 获取机器人AppKey
 * @method void setBotAppKey(string $BotAppKey) 设置机器人AppKey
 */
class GetMsgRecordRequest extends AbstractModel
{
    /**
     * @var integer 类型
     */
    public $Type;

    /**
     * @var integer 数量
     */
    public $Count;

    /**
     * @var string 会话sessionid
     */
    public $SessionId;

    /**
     * @var string 最后一条记录ID
     */
    public $LastRecordId;

    /**
     * @var string 机器人AppKey
     */
    public $BotAppKey;

    /**
     * @param integer $Type 类型
     * @param integer $Count 数量
     * @param string $SessionId 会话sessionid
     * @param string $LastRecordId 最后一条记录ID
     * @param string $BotAppKey 机器人AppKey
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("LastRecordId",$param) and $param["LastRecordId"] !== null) {
            $this->LastRecordId = $param["LastRecordId"];
        }

        if (array_key_exists("BotAppKey",$param) and $param["BotAppKey"] !== null) {
            $this->BotAppKey = $param["BotAppKey"];
        }
    }
}
