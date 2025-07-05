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
 * ModifyQACate请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method string getName() 获取分类名称

 * @method void setName(string $Name) 设置分类名称

 * @method string getCateBizId() 获取分类业务ID
 * @method void setCateBizId(string $CateBizId) 设置分类业务ID
 */
class ModifyQACateRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var string 分类名称

     */
    public $Name;

    /**
     * @var string 分类业务ID
     */
    public $CateBizId;

    /**
     * @param string $BotBizId 应用ID
     * @param string $Name 分类名称

     * @param string $CateBizId 分类业务ID
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }
    }
}
