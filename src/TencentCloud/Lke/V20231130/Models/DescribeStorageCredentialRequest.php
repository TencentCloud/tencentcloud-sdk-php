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
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method string getFileType() 获取文件类型,正常的文件名类型后缀，例如 xlsx、pdf、 docx、png 等
 * @method void setFileType(string $FileType) 设置文件类型,正常的文件名类型后缀，例如 xlsx、pdf、 docx、png 等
 * @method boolean getIsPublic() 获取IsPublic为空用于上传文件时选择场景，当上传为图片文件是IsPublic为true，上传文档文件时场景IsPublic为false
 * @method void setIsPublic(boolean $IsPublic) 设置IsPublic为空用于上传文件时选择场景，当上传为图片文件是IsPublic为true，上传文档文件时场景IsPublic为false
 * @method string getTypeKey() 获取存储类型: offline:离线文件，realtime:实时文件；为空默认为offline
 * @method void setTypeKey(string $TypeKey) 设置存储类型: offline:离线文件，realtime:实时文件；为空默认为offline
 */
class DescribeStorageCredentialRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var string 文件类型,正常的文件名类型后缀，例如 xlsx、pdf、 docx、png 等
     */
    public $FileType;

    /**
     * @var boolean IsPublic为空用于上传文件时选择场景，当上传为图片文件是IsPublic为true，上传文档文件时场景IsPublic为false
     */
    public $IsPublic;

    /**
     * @var string 存储类型: offline:离线文件，realtime:实时文件；为空默认为offline
     */
    public $TypeKey;

    /**
     * @param string $BotBizId 应用ID
     * @param string $FileType 文件类型,正常的文件名类型后缀，例如 xlsx、pdf、 docx、png 等
     * @param boolean $IsPublic IsPublic为空用于上传文件时选择场景，当上传为图片文件是IsPublic为true，上传文档文件时场景IsPublic为false
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("TypeKey",$param) and $param["TypeKey"] !== null) {
            $this->TypeKey = $param["TypeKey"];
        }
    }
}
