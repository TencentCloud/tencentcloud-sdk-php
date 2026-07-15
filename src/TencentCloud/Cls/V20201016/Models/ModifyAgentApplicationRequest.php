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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAgentApplication请求参数结构体
 *
 * @method string getApplicationId() 获取<p>应用id</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>应用id</p>
 * @method string getApplicationName() 获取<p>应用名称</p><p>参数格式：- 不能为空字符串- 不能包含字符<code>|</code>- 不能超过64字符</p>
 * @method void setApplicationName(string $ApplicationName) 设置<p>应用名称</p><p>参数格式：- 不能为空字符串- 不能包含字符<code>|</code>- 不能超过64字符</p>
 */
class ModifyAgentApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>应用名称</p><p>参数格式：- 不能为空字符串- 不能包含字符<code>|</code>- 不能超过64字符</p>
     */
    public $ApplicationName;

    /**
     * @param string $ApplicationId <p>应用id</p>
     * @param string $ApplicationName <p>应用名称</p><p>参数格式：- 不能为空字符串- 不能包含字符<code>|</code>- 不能超过64字符</p>
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }
    }
}
