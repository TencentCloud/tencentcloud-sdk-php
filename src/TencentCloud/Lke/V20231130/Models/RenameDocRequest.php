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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenameDoc请求参数结构体
 *
 * @method string getLoginUin() 获取登录用户主账号(集成商模式必填)	
 * @method void setLoginUin(string $LoginUin) 设置登录用户主账号(集成商模式必填)	
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)	
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method string getDocBizId() 获取文档ID
 * @method void setDocBizId(string $DocBizId) 设置文档ID
 * @method string getNewName() 获取新文档名，需要带上后缀
 * @method void setNewName(string $NewName) 设置新文档名，需要带上后缀
 */
class RenameDocRequest extends AbstractModel
{
    /**
     * @var string 登录用户主账号(集成商模式必填)	
     */
    public $LoginUin;

    /**
     * @var string 登录用户子账号(集成商模式必填)	
     */
    public $LoginSubAccountUin;

    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var string 文档ID
     */
    public $DocBizId;

    /**
     * @var string 新文档名，需要带上后缀
     */
    public $NewName;

    /**
     * @param string $LoginUin 登录用户主账号(集成商模式必填)	
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)	
     * @param string $BotBizId 应用ID
     * @param string $DocBizId 文档ID
     * @param string $NewName 新文档名，需要带上后缀
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
        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }
    }
}
