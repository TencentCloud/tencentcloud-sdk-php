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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitSqlTask请求参数结构体
 *
 * @method string getDatabaseType() 获取数据库类型
 * @method void setDatabaseType(string $DatabaseType) 设置数据库类型
 * @method integer getDatasourceId() 获取数据源Id
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源Id
 * @method string getGroupId() 获取资源组Id
 * @method void setGroupId(string $GroupId) 设置资源组Id
 * @method string getScriptId() 获取脚本文件id
 * @method void setScriptId(string $ScriptId) 设置脚本文件id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getEngineId() 获取执行引擎实例ID
 * @method void setEngineId(string $EngineId) 设置执行引擎实例ID
 * @method string getScriptContent() 获取脚本内容
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容
 * @method string getResourceQueue() 获取资源队列
 * @method void setResourceQueue(string $ResourceQueue) 设置资源队列
 * @method string getDatasourceType() 获取数据库类型
 * @method void setDatasourceType(string $DatasourceType) 设置数据库类型
 * @method string getComputeResource() 获取计算资源名称
 * @method void setComputeResource(string $ComputeResource) 设置计算资源名称
 * @method string getRunParams() 获取高级运行参数
 * @method void setRunParams(string $RunParams) 设置高级运行参数
 * @method string getConfParams() 获取高级设置
 * @method void setConfParams(string $ConfParams) 设置高级设置
 * @method boolean getScriptEncryption() 获取脚本内容是否base64加密
 * @method void setScriptEncryption(boolean $ScriptEncryption) 设置脚本内容是否base64加密
 */
class SubmitSqlTaskRequest extends AbstractModel
{
    /**
     * @var string 数据库类型
     */
    public $DatabaseType;

    /**
     * @var integer 数据源Id
     */
    public $DatasourceId;

    /**
     * @var string 资源组Id
     */
    public $GroupId;

    /**
     * @var string 脚本文件id
     */
    public $ScriptId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string 执行引擎实例ID
     */
    public $EngineId;

    /**
     * @var string 脚本内容
     */
    public $ScriptContent;

    /**
     * @var string 资源队列
     */
    public $ResourceQueue;

    /**
     * @var string 数据库类型
     */
    public $DatasourceType;

    /**
     * @var string 计算资源名称
     */
    public $ComputeResource;

    /**
     * @var string 高级运行参数
     */
    public $RunParams;

    /**
     * @var string 高级设置
     */
    public $ConfParams;

    /**
     * @var boolean 脚本内容是否base64加密
     */
    public $ScriptEncryption;

    /**
     * @param string $DatabaseType 数据库类型
     * @param integer $DatasourceId 数据源Id
     * @param string $GroupId 资源组Id
     * @param string $ScriptId 脚本文件id
     * @param string $ProjectId 项目id
     * @param string $DatabaseName 数据库名称
     * @param string $EngineId 执行引擎实例ID
     * @param string $ScriptContent 脚本内容
     * @param string $ResourceQueue 资源队列
     * @param string $DatasourceType 数据库类型
     * @param string $ComputeResource 计算资源名称
     * @param string $RunParams 高级运行参数
     * @param string $ConfParams 高级设置
     * @param boolean $ScriptEncryption 脚本内容是否base64加密
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
        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("EngineId",$param) and $param["EngineId"] !== null) {
            $this->EngineId = $param["EngineId"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("ResourceQueue",$param) and $param["ResourceQueue"] !== null) {
            $this->ResourceQueue = $param["ResourceQueue"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("ComputeResource",$param) and $param["ComputeResource"] !== null) {
            $this->ComputeResource = $param["ComputeResource"];
        }

        if (array_key_exists("RunParams",$param) and $param["RunParams"] !== null) {
            $this->RunParams = $param["RunParams"];
        }

        if (array_key_exists("ConfParams",$param) and $param["ConfParams"] !== null) {
            $this->ConfParams = $param["ConfParams"];
        }

        if (array_key_exists("ScriptEncryption",$param) and $param["ScriptEncryption"] !== null) {
            $this->ScriptEncryption = $param["ScriptEncryption"];
        }
    }
}
