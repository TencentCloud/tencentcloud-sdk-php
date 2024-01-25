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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitPythonTask请求参数结构体
 *
 * @method string getGroupId() 获取资源组Id
 * @method void setGroupId(string $GroupId) 设置资源组Id
 * @method string getScriptContent() 获取脚本内容
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getScriptType() 获取脚本类型
 * @method void setScriptType(string $ScriptType) 设置脚本类型
 * @method string getScriptName() 获取脚本名称(PYTHON2/PYTHON3)
 * @method void setScriptName(string $ScriptName) 设置脚本名称(PYTHON2/PYTHON3)
 * @method string getScriptPath() 获取脚本文件路径
 * @method void setScriptPath(string $ScriptPath) 设置脚本文件路径
 * @method string getRunParams() 获取高级运行参数
 * @method void setRunParams(string $RunParams) 设置高级运行参数
 * @method string getScriptId() 获取脚本ID
 * @method void setScriptId(string $ScriptId) 设置脚本ID
 * @method boolean getScriptEncryption() 获取脚本内容是否base64加密
 * @method void setScriptEncryption(boolean $ScriptEncryption) 设置脚本内容是否base64加密
 */
class SubmitPythonTaskRequest extends AbstractModel
{
    /**
     * @var string 资源组Id
     */
    public $GroupId;

    /**
     * @var string 脚本内容
     */
    public $ScriptContent;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 脚本类型
     */
    public $ScriptType;

    /**
     * @var string 脚本名称(PYTHON2/PYTHON3)
     */
    public $ScriptName;

    /**
     * @var string 脚本文件路径
     */
    public $ScriptPath;

    /**
     * @var string 高级运行参数
     */
    public $RunParams;

    /**
     * @var string 脚本ID
     */
    public $ScriptId;

    /**
     * @var boolean 脚本内容是否base64加密
     */
    public $ScriptEncryption;

    /**
     * @param string $GroupId 资源组Id
     * @param string $ScriptContent 脚本内容
     * @param string $ProjectId 项目id
     * @param string $ScriptType 脚本类型
     * @param string $ScriptName 脚本名称(PYTHON2/PYTHON3)
     * @param string $ScriptPath 脚本文件路径
     * @param string $RunParams 高级运行参数
     * @param string $ScriptId 脚本ID
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScriptType",$param) and $param["ScriptType"] !== null) {
            $this->ScriptType = $param["ScriptType"];
        }

        if (array_key_exists("ScriptName",$param) and $param["ScriptName"] !== null) {
            $this->ScriptName = $param["ScriptName"];
        }

        if (array_key_exists("ScriptPath",$param) and $param["ScriptPath"] !== null) {
            $this->ScriptPath = $param["ScriptPath"];
        }

        if (array_key_exists("RunParams",$param) and $param["RunParams"] !== null) {
            $this->RunParams = $param["RunParams"];
        }

        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("ScriptEncryption",$param) and $param["ScriptEncryption"] !== null) {
            $this->ScriptEncryption = $param["ScriptEncryption"];
        }
    }
}
