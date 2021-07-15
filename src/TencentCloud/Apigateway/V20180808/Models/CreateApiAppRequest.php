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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApiApp请求参数结构体
 *
 * @method string getApiAppName() 获取用户自定义应用名称。
 * @method void setApiAppName(string $ApiAppName) 设置用户自定义应用名称。
 * @method string getApiAppDesc() 获取应用描述
 * @method void setApiAppDesc(string $ApiAppDesc) 设置应用描述
 */
class CreateApiAppRequest extends AbstractModel
{
    /**
     * @var string 用户自定义应用名称。
     */
    public $ApiAppName;

    /**
     * @var string 应用描述
     */
    public $ApiAppDesc;

    /**
     * @param string $ApiAppName 用户自定义应用名称。
     * @param string $ApiAppDesc 应用描述
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
        if (array_key_exists("ApiAppName",$param) and $param["ApiAppName"] !== null) {
            $this->ApiAppName = $param["ApiAppName"];
        }

        if (array_key_exists("ApiAppDesc",$param) and $param["ApiAppDesc"] !== null) {
            $this->ApiAppDesc = $param["ApiAppDesc"];
        }
    }
}
