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
 * DescribeStorageCredential请求参数结构体
 *
 * @method string getBotBizId() 获取机器人ID
 * @method void setBotBizId(string $BotBizId) 设置机器人ID
 * @method string getFileType() 获取文件类型
 * @method void setFileType(string $FileType) 设置文件类型
 * @method boolean getIsPublic() 获取权限场景，是否公有权限
 * @method void setIsPublic(boolean $IsPublic) 设置权限场景，是否公有权限
 */
class DescribeStorageCredentialRequest extends AbstractModel
{
    /**
     * @var string 机器人ID
     */
    public $BotBizId;

    /**
     * @var string 文件类型
     */
    public $FileType;

    /**
     * @var boolean 权限场景，是否公有权限
     */
    public $IsPublic;

    /**
     * @param string $BotBizId 机器人ID
     * @param string $FileType 文件类型
     * @param boolean $IsPublic 权限场景，是否公有权限
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }
    }
}
