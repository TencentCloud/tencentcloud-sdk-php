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
 * RateMsgRecord请求参数结构体
 *
 * @method string getBotAppKey() 获取机器人appKey
 * @method void setBotAppKey(string $BotAppKey) 设置机器人appKey
 * @method string getRecordId() 获取消息ID
 * @method void setRecordId(string $RecordId) 设置消息ID
 * @method integer getScore() 获取1点赞2点踩
 * @method void setScore(integer $Score) 设置1点赞2点踩
 * @method array getReasons() 获取原因
 * @method void setReasons(array $Reasons) 设置原因
 */
class RateMsgRecordRequest extends AbstractModel
{
    /**
     * @var string 机器人appKey
     */
    public $BotAppKey;

    /**
     * @var string 消息ID
     */
    public $RecordId;

    /**
     * @var integer 1点赞2点踩
     */
    public $Score;

    /**
     * @var array 原因
     */
    public $Reasons;

    /**
     * @param string $BotAppKey 机器人appKey
     * @param string $RecordId 消息ID
     * @param integer $Score 1点赞2点踩
     * @param array $Reasons 原因
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
        if (array_key_exists("BotAppKey",$param) and $param["BotAppKey"] !== null) {
            $this->BotAppKey = $param["BotAppKey"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }
    }
}
