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
 * GroupDoc请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method array getBizIds() 获取操作对象的业务ID列表
 * @method void setBizIds(array $BizIds) 设置操作对象的业务ID列表
 * @method string getCateBizId() 获取分组 ID
 * @method void setCateBizId(string $CateBizId) 设置分组 ID
 */
class GroupDocRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var array 操作对象的业务ID列表
     */
    public $BizIds;

    /**
     * @var string 分组 ID
     */
    public $CateBizId;

    /**
     * @param string $BotBizId 应用ID
     * @param array $BizIds 操作对象的业务ID列表
     * @param string $CateBizId 分组 ID
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

        if (array_key_exists("BizIds",$param) and $param["BizIds"] !== null) {
            $this->BizIds = $param["BizIds"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }
    }
}
