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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kong网关被动健康检查配置
 *
 * @method string getType() 获取后端target协议类型，被动健康检查支持http和tcp，主动健康检查支持http
 * @method void setType(string $Type) 设置后端target协议类型，被动健康检查支持http和tcp，主动健康检查支持http
 */
class KongPassiveHealthCheck extends AbstractModel
{
    /**
     * @var string 后端target协议类型，被动健康检查支持http和tcp，主动健康检查支持http
     */
    public $Type;

    /**
     * @param string $Type 后端target协议类型，被动健康检查支持http和tcp，主动健康检查支持http
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
    }
}
