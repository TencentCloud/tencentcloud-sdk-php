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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加登录审计白名单的主机信息实体
 *
 * @method string getQuuid() 获取<p>主机Quuid</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机Quuid</p>
 * @method string getUuid() 获取<p>Uuid主机</p>
 * @method void setUuid(string $Uuid) 设置<p>Uuid主机</p>
 */
class HostInfo extends AbstractModel
{
    /**
     * @var string <p>主机Quuid</p>
     */
    public $Quuid;

    /**
     * @var string <p>Uuid主机</p>
     */
    public $Uuid;

    /**
     * @param string $Quuid <p>主机Quuid</p>
     * @param string $Uuid <p>Uuid主机</p>
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
