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
 * UpdateSQLScript请求参数结构体
 *
 * @method string getScriptId() 获取探索脚本Id
 * @method void setScriptId(string $ScriptId) 设置探索脚本Id
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method SQLScriptConfig getScriptConfig() 获取数据探索脚本配置
 * @method void setScriptConfig(SQLScriptConfig $ScriptConfig) 设置数据探索脚本配置
 * @method string getScriptContent() 获取脚本内容, 需要用Base64编码
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容, 需要用Base64编码
 */
class UpdateSQLScriptRequest extends AbstractModel
{
    /**
     * @var string 探索脚本Id
     */
    public $ScriptId;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var SQLScriptConfig 数据探索脚本配置
     */
    public $ScriptConfig;

    /**
     * @var string 脚本内容, 需要用Base64编码
     */
    public $ScriptContent;

    /**
     * @param string $ScriptId 探索脚本Id
     * @param string $ProjectId 项目Id
     * @param SQLScriptConfig $ScriptConfig 数据探索脚本配置
     * @param string $ScriptContent 脚本内容, 需要用Base64编码
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

        if (array_key_exists("ScriptConfig",$param) and $param["ScriptConfig"] !== null) {
            $this->ScriptConfig = new SQLScriptConfig();
            $this->ScriptConfig->deserialize($param["ScriptConfig"]);
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }
    }
}
