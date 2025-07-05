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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例pod信息， pod 名称
 *
 * @method string getName() 获取Pod名称。
 * @method void setName(string $Name) 设置Pod名称。
 * @method string getStatus() 获取pod状态
 * @method void setStatus(string $Status) 设置pod状态
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var string Pod名称。
     */
    public $Name;

    /**
     * @var string pod状态
     */
    public $Status;

    /**
     * @param string $Name Pod名称。
     * @param string $Status pod状态
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
