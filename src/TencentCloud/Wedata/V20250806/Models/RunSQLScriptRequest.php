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
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getScriptId() 获取脚本id。如果不填则需要传入 ScriptConfig、ScriptContent，此时为免脚本临时运行模式，服务端不保存脚本
 * @method void setScriptId(string $ScriptId) 设置脚本id。如果不填则需要传入 ScriptConfig、ScriptContent，此时为免脚本临时运行模式，服务端不保存脚本
 * @method SQLScriptConfig getScriptConfig() 获取脚本配置。免脚本临时运行模式（未传 ScriptId）下必填，其中 DatasourceId 必填、ExecutorGroupId 选填（缺省时使用项目管理-数据分析配置中的执行资源组）；传入 ScriptId 时本字段被忽略，配置取自已保存的脚本
 * @method void setScriptConfig(SQLScriptConfig $ScriptConfig) 设置脚本配置。免脚本临时运行模式（未传 ScriptId）下必填，其中 DatasourceId 必填、ExecutorGroupId 选填（缺省时使用项目管理-数据分析配置中的执行资源组）；传入 ScriptId 时本字段被忽略，配置取自已保存的脚本
 * @method string getScriptContent() 获取脚本内容，支持传递代码原文或者 Base64 编码，服务端自动识别。传 ScriptId 时不传则执行已保存的全量脚本内容；免脚本临时运行模式下必填。注意：若原文恰好由 Base64 字符集组成且长度为 4 的倍数（如 descTBLS），会被识别为已编码，此类内容请显式 Base64 编码后传入
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容，支持传递代码原文或者 Base64 编码，服务端自动识别。传 ScriptId 时不传则执行已保存的全量脚本内容；免脚本临时运行模式下必填。注意：若原文恰好由 Base64 字符集组成且长度为 4 的倍数（如 descTBLS），会被识别为已编码，此类内容请显式 Base64 编码后传入
 * @method string getParams() 获取高级运行参数，支持传递 JSON 格式原文或者 Base64 编码，服务端自动识别。示例：{"executorNum":1} 或 eyJleGVjdXRvck51bSI6MX0=
 * @method void setParams(string $Params) 设置高级运行参数，支持传递 JSON 格式原文或者 Base64 编码，服务端自动识别。示例：{"executorNum":1} 或 eyJleGVjdXRvck51bSI6MX0=
 */
class RunSQLScriptRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 脚本id。如果不填则需要传入 ScriptConfig、ScriptContent，此时为免脚本临时运行模式，服务端不保存脚本
     */
    public $ScriptId;

    /**
     * @var SQLScriptConfig 脚本配置。免脚本临时运行模式（未传 ScriptId）下必填，其中 DatasourceId 必填、ExecutorGroupId 选填（缺省时使用项目管理-数据分析配置中的执行资源组）；传入 ScriptId 时本字段被忽略，配置取自已保存的脚本
     */
    public $ScriptConfig;

    /**
     * @var string 脚本内容，支持传递代码原文或者 Base64 编码，服务端自动识别。传 ScriptId 时不传则执行已保存的全量脚本内容；免脚本临时运行模式下必填。注意：若原文恰好由 Base64 字符集组成且长度为 4 的倍数（如 descTBLS），会被识别为已编码，此类内容请显式 Base64 编码后传入
     */
    public $ScriptContent;

    /**
     * @var string 高级运行参数，支持传递 JSON 格式原文或者 Base64 编码，服务端自动识别。示例：{"executorNum":1} 或 eyJleGVjdXRvck51bSI6MX0=
     */
    public $Params;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ScriptId 脚本id。如果不填则需要传入 ScriptConfig、ScriptContent，此时为免脚本临时运行模式，服务端不保存脚本
     * @param SQLScriptConfig $ScriptConfig 脚本配置。免脚本临时运行模式（未传 ScriptId）下必填，其中 DatasourceId 必填、ExecutorGroupId 选填（缺省时使用项目管理-数据分析配置中的执行资源组）；传入 ScriptId 时本字段被忽略，配置取自已保存的脚本
     * @param string $ScriptContent 脚本内容，支持传递代码原文或者 Base64 编码，服务端自动识别。传 ScriptId 时不传则执行已保存的全量脚本内容；免脚本临时运行模式下必填。注意：若原文恰好由 Base64 字符集组成且长度为 4 的倍数（如 descTBLS），会被识别为已编码，此类内容请显式 Base64 编码后传入
     * @param string $Params 高级运行参数，支持传递 JSON 格式原文或者 Base64 编码，服务端自动识别。示例：{"executorNum":1} 或 eyJleGVjdXRvck51bSI6MX0=
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("ScriptConfig",$param) and $param["ScriptConfig"] !== null) {
            $this->ScriptConfig = new SQLScriptConfig();
            $this->ScriptConfig->deserialize($param["ScriptConfig"]);
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
