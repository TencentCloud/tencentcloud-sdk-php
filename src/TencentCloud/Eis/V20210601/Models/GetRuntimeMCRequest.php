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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRuntimeMC请求参数结构体
 *
 * @method integer getRuntimeId() 获取运行时id
 * @method void setRuntimeId(integer $RuntimeId) 设置运行时id
 * @method string getZone() 获取运行时地域
 * @method void setZone(string $Zone) 设置运行时地域
 */
class GetRuntimeMCRequest extends AbstractModel
{
    /**
     * @var integer 运行时id
     */
    public $RuntimeId;

    /**
     * @var string 运行时地域
     */
    public $Zone;

    /**
     * @param integer $RuntimeId 运行时id
     * @param string $Zone 运行时地域
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
        if (array_key_exists("RuntimeId",$param) and $param["RuntimeId"] !== null) {
            $this->RuntimeId = $param["RuntimeId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
