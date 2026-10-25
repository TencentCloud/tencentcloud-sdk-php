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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTDEMApplication请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID（必填）</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID（必填）</p>
 * @method string getName() 获取<p>应用名称（可选）</p>
 * @method void setName(string $Name) 设置<p>应用名称（可选）</p>
 * @method string getDesc() 获取<p>应用描述（可选）</p>
 * @method void setDesc(string $Desc) 设置<p>应用描述（可选）</p>
 * @method boolean getExcludeIgnoredErrors() 获取<p>是否排除已忽略错误</p>
 * @method void setExcludeIgnoredErrors(boolean $ExcludeIgnoredErrors) 设置<p>是否排除已忽略错误</p>
 * @method array getApmInstanceIds() 获取<p>APM 实例 ID 列表</p>
 * @method void setApmInstanceIds(array $ApmInstanceIds) 设置<p>APM 实例 ID 列表</p>
 */
class ModifyTDEMApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID（必填）</p>
     */
    public $AppId;

    /**
     * @var string <p>应用名称（可选）</p>
     */
    public $Name;

    /**
     * @var string <p>应用描述（可选）</p>
     */
    public $Desc;

    /**
     * @var boolean <p>是否排除已忽略错误</p>
     */
    public $ExcludeIgnoredErrors;

    /**
     * @var array <p>APM 实例 ID 列表</p>
     */
    public $ApmInstanceIds;

    /**
     * @param string $AppId <p>应用 ID（必填）</p>
     * @param string $Name <p>应用名称（可选）</p>
     * @param string $Desc <p>应用描述（可选）</p>
     * @param boolean $ExcludeIgnoredErrors <p>是否排除已忽略错误</p>
     * @param array $ApmInstanceIds <p>APM 实例 ID 列表</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ExcludeIgnoredErrors",$param) and $param["ExcludeIgnoredErrors"] !== null) {
            $this->ExcludeIgnoredErrors = $param["ExcludeIgnoredErrors"];
        }

        if (array_key_exists("ApmInstanceIds",$param) and $param["ApmInstanceIds"] !== null) {
            $this->ApmInstanceIds = $param["ApmInstanceIds"];
        }
    }
}
