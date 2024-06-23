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
 * GetDocPreview请求参数结构体
 *
 * @method string getDocBizId() 获取文档业务ID
 * @method void setDocBizId(string $DocBizId) 设置文档业务ID
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method string getTypeKey() 获取存储类型: offline:离线文件，realtime:实时文件；为空默认为offline
 * @method void setTypeKey(string $TypeKey) 设置存储类型: offline:离线文件，realtime:实时文件；为空默认为offline
 */
class GetDocPreviewRequest extends AbstractModel
{
    /**
     * @var string 文档业务ID
     */
    public $DocBizId;

    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var string 存储类型: offline:离线文件，realtime:实时文件；为空默认为offline
     */
    public $TypeKey;

    /**
     * @param string $DocBizId 文档业务ID
     * @param string $BotBizId 应用ID
     * @param string $TypeKey 存储类型: offline:离线文件，realtime:实时文件；为空默认为offline
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
        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("TypeKey",$param) and $param["TypeKey"] !== null) {
            $this->TypeKey = $param["TypeKey"];
        }
    }
}
