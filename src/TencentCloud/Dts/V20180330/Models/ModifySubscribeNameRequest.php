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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubscribeName请求参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅实例的ID
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅实例的ID
 * @method string getSubscribeName() 获取数据订阅实例的名称，长度限制为[1,60]
 * @method void setSubscribeName(string $SubscribeName) 设置数据订阅实例的名称，长度限制为[1,60]
 */
class ModifySubscribeNameRequest extends AbstractModel
{
    /**
     * @var string 数据订阅实例的ID
     */
    public $SubscribeId;

    /**
     * @var string 数据订阅实例的名称，长度限制为[1,60]
     */
    public $SubscribeName;

    /**
     * @param string $SubscribeId 数据订阅实例的ID
     * @param string $SubscribeName 数据订阅实例的名称，长度限制为[1,60]
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeName",$param) and $param["SubscribeName"] !== null) {
            $this->SubscribeName = $param["SubscribeName"];
        }
    }
}
