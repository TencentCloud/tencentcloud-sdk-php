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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunSQLScript请求参数结构体
 *
 * @method string getScriptId() 获取脚本id
 * @method void setScriptId(string $ScriptId) 设置脚本id
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getScriptContent() 获取脚本内容，不传则默认执行已保存的全量脚本内容；若传递则要用Base64编码
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容，不传则默认执行已保存的全量脚本内容；若传递则要用Base64编码
 * @method string getParams() 获取高级运行参数，JSON格式base64编码
 * @method void setParams(string $Params) 设置高级运行参数，JSON格式base64编码
 */
class RunSQLScriptRequest extends AbstractModel
{
    /**
     * @var string 脚本id
     */
    public $ScriptId;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 脚本内容，不传则默认执行已保存的全量脚本内容；若传递则要用Base64编码
     */
    public $ScriptContent;

    /**
     * @var string 高级运行参数，JSON格式base64编码
     */
    public $Params;

    /**
     * @param string $ScriptId 脚本id
     * @param string $ProjectId 项目ID
     * @param string $ScriptContent 脚本内容，不传则默认执行已保存的全量脚本内容；若传递则要用Base64编码
     * @param string $Params 高级运行参数，JSON格式base64编码
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
        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
