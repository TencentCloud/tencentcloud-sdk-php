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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRegisterCode返回参数结构体
 *
 * @method string getRegisterCodeId() 获取注册码ID。
 * @method void setRegisterCodeId(string $RegisterCodeId) 设置注册码ID。
 * @method string getRegisterCodeValue() 获取注册码值。
 * @method void setRegisterCodeValue(string $RegisterCodeValue) 设置注册码值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateRegisterCodeResponse extends AbstractModel
{
    /**
     * @var string 注册码ID。
     */
    public $RegisterCodeId;

    /**
     * @var string 注册码值。
     */
    public $RegisterCodeValue;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RegisterCodeId 注册码ID。
     * @param string $RegisterCodeValue 注册码值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RegisterCodeId",$param) and $param["RegisterCodeId"] !== null) {
            $this->RegisterCodeId = $param["RegisterCodeId"];
        }

        if (array_key_exists("RegisterCodeValue",$param) and $param["RegisterCodeValue"] !== null) {
            $this->RegisterCodeValue = $param["RegisterCodeValue"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
