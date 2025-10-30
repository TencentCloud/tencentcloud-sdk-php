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
 * CreateSQLScript请求参数结构体
 *
 * @method string getScriptName() 获取脚本名称
 * @method void setScriptName(string $ScriptName) 设置脚本名称
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getParentFolderPath() 获取父文件夹path，/aaa/bbb/ccc，根目录为空字符串或/
 * @method void setParentFolderPath(string $ParentFolderPath) 设置父文件夹path，/aaa/bbb/ccc，根目录为空字符串或/
 * @method SQLScriptConfig getScriptConfig() 获取数据探索脚本配置
 * @method void setScriptConfig(SQLScriptConfig $ScriptConfig) 设置数据探索脚本配置
 * @method string getScriptContent() 获取脚本内容，如有值，则要将内容进行base64编码
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容，如有值，则要将内容进行base64编码
 * @method string getAccessScope() 获取权限范围：SHARED, PRIVATE
 * @method void setAccessScope(string $AccessScope) 设置权限范围：SHARED, PRIVATE
 */
class CreateSQLScriptRequest extends AbstractModel
{
    /**
     * @var string 脚本名称
     */
    public $ScriptName;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 父文件夹path，/aaa/bbb/ccc，根目录为空字符串或/
     */
    public $ParentFolderPath;

    /**
     * @var SQLScriptConfig 数据探索脚本配置
     */
    public $ScriptConfig;

    /**
     * @var string 脚本内容，如有值，则要将内容进行base64编码
     */
    public $ScriptContent;

    /**
     * @var string 权限范围：SHARED, PRIVATE
     */
    public $AccessScope;

    /**
     * @param string $ScriptName 脚本名称
     * @param string $ProjectId 项目Id
     * @param string $ParentFolderPath 父文件夹path，/aaa/bbb/ccc，根目录为空字符串或/
     * @param SQLScriptConfig $ScriptConfig 数据探索脚本配置
     * @param string $ScriptContent 脚本内容，如有值，则要将内容进行base64编码
     * @param string $AccessScope 权限范围：SHARED, PRIVATE
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
        if (array_key_exists("ScriptName",$param) and $param["ScriptName"] !== null) {
            $this->ScriptName = $param["ScriptName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("ScriptConfig",$param) and $param["ScriptConfig"] !== null) {
            $this->ScriptConfig = new SQLScriptConfig();
            $this->ScriptConfig->deserialize($param["ScriptConfig"]);
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }
    }
}
