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
namespace TencentCloud\Dataintegration\V20220613\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量消息
 *
 * @method string getBody() 获取消息体
 * @method void setBody(string $Body) 设置消息体
 * @method string getKey() 获取消息的键名
 * @method void setKey(string $Key) 设置消息的键名
 */
class BatchContent extends AbstractModel
{
    /**
     * @var string 消息体
     */
    public $Body;

    /**
     * @var string 消息的键名
     */
    public $Key;

    /**
     * @param string $Body 消息体
     * @param string $Key 消息的键名
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
