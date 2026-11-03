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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mcp是否需要密码
 *
 * @method boolean getHivePasswordRequired() 获取<p>hive是否需要密码</p>
 * @method void setHivePasswordRequired(boolean $HivePasswordRequired) 设置<p>hive是否需要密码</p>
 * @method boolean getTrinoPasswordRequired() 获取<p>trino是否需要密码</p>
 * @method void setTrinoPasswordRequired(boolean $TrinoPasswordRequired) 设置<p>trino是否需要密码</p>
 */
class McpPasswordInfo extends AbstractModel
{
    /**
     * @var boolean <p>hive是否需要密码</p>
     */
    public $HivePasswordRequired;

    /**
     * @var boolean <p>trino是否需要密码</p>
     */
    public $TrinoPasswordRequired;

    /**
     * @param boolean $HivePasswordRequired <p>hive是否需要密码</p>
     * @param boolean $TrinoPasswordRequired <p>trino是否需要密码</p>
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
        if (array_key_exists("HivePasswordRequired",$param) and $param["HivePasswordRequired"] !== null) {
            $this->HivePasswordRequired = $param["HivePasswordRequired"];
        }

        if (array_key_exists("TrinoPasswordRequired",$param) and $param["TrinoPasswordRequired"] !== null) {
            $this->TrinoPasswordRequired = $param["TrinoPasswordRequired"];
        }
    }
}
