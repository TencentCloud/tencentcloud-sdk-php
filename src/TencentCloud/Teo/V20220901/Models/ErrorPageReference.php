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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义错误页面被引用的来源
 *
 * @method string getBusinessId() 获取引用的业务 ID，如自定义拦截规则 ID。
 * @method void setBusinessId(string $BusinessId) 设置引用的业务 ID，如自定义拦截规则 ID。
 */
class ErrorPageReference extends AbstractModel
{
    /**
     * @var string 引用的业务 ID，如自定义拦截规则 ID。
     */
    public $BusinessId;

    /**
     * @param string $BusinessId 引用的业务 ID，如自定义拦截规则 ID。
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
        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }
    }
}
