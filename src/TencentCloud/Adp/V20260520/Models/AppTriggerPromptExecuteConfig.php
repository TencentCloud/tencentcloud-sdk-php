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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AppTriggerPromptExecuteConfig
 *
 * @method string getExecutePrompt() 获取
 * @method void setExecutePrompt(string $ExecutePrompt) 设置
 * @method AppTriggerParamBindingConfig getParamBindingsApi() 获取
 * @method void setParamBindingsApi(AppTriggerParamBindingConfig $ParamBindingsApi) 设置
 */
class AppTriggerPromptExecuteConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $ExecutePrompt;

    /**
     * @var AppTriggerParamBindingConfig 
     */
    public $ParamBindingsApi;

    /**
     * @param string $ExecutePrompt 
     * @param AppTriggerParamBindingConfig $ParamBindingsApi 
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
        if (array_key_exists("ExecutePrompt",$param) and $param["ExecutePrompt"] !== null) {
            $this->ExecutePrompt = $param["ExecutePrompt"];
        }

        if (array_key_exists("ParamBindingsApi",$param) and $param["ParamBindingsApi"] !== null) {
            $this->ParamBindingsApi = new AppTriggerParamBindingConfig();
            $this->ParamBindingsApi->deserialize($param["ParamBindingsApi"]);
        }
    }
}
