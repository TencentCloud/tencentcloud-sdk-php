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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileConfigWithDetailResp请求参数结构体
 *
 * @method string getConfigName() 获取配置名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”、“_”），且不能以分隔符开头或结尾。
 * @method void setConfigName(string $ConfigName) 设置配置名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”、“_”），且不能以分隔符开头或结尾。
 * @method string getConfigVersion() 获取配置项版本，只能包含小写字母、数字及分隔符("-"，".")，且必须以小写字母或数字开头、以小写字母或数字结尾，中间不能有连续的"-"或"."。
 * @method void setConfigVersion(string $ConfigVersion) 设置配置项版本，只能包含小写字母、数字及分隔符("-"，".")，且必须以小写字母或数字开头、以小写字母或数字结尾，中间不能有连续的"-"或"."。
 * @method string getConfigFileName() 获取配置项文件名，不超过60个字符，只能包含英文、数字、"-"（英文）、"_"（英文）、"."（英文）。
 * @method void setConfigFileName(string $ConfigFileName) 设置配置项文件名，不超过60个字符，只能包含英文、数字、"-"（英文）、"_"（英文）、"."（英文）。
 * @method string getConfigFileValue() 获取配置项文件内容（原始内容编码需要 utf-8 格式，如果 ConfigFileCode 为 gbk，后台会进行转换）。
 * @method void setConfigFileValue(string $ConfigFileValue) 设置配置项文件内容（原始内容编码需要 utf-8 格式，如果 ConfigFileCode 为 gbk，后台会进行转换）。
 * @method string getApplicationId() 获取配置项关联应用ID。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
 * @method void setApplicationId(string $ApplicationId) 设置配置项关联应用ID。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
 * @method string getConfigFilePath() 获取发布路径。
 * @method void setConfigFilePath(string $ConfigFilePath) 设置发布路径。
 * @method string getConfigVersionDesc() 获取配置项版本描述，最多支持200个字符。
 * @method void setConfigVersionDesc(string $ConfigVersionDesc) 设置配置项版本描述，最多支持200个字符。
 * @method string getConfigFileCode() 获取配置项文件编码，utf-8 或 gbk。注：如果选择 gbk，需要新版本 tsf-consul-template （公有云虚拟机需要使用 1.32 tsf-agent，容器需要从文档中获取最新的 tsf-consul-template-docker.tar.gz）的支持。
 * @method void setConfigFileCode(string $ConfigFileCode) 设置配置项文件编码，utf-8 或 gbk。注：如果选择 gbk，需要新版本 tsf-consul-template （公有云虚拟机需要使用 1.32 tsf-agent，容器需要从文档中获取最新的 tsf-consul-template-docker.tar.gz）的支持。
 * @method string getConfigPostCmd() 获取后置命令。
 * @method void setConfigPostCmd(string $ConfigPostCmd) 设置后置命令。
 * @method boolean getEncodeWithBase64() 获取Base64编码的配置项
 * @method void setEncodeWithBase64(boolean $EncodeWithBase64) 设置Base64编码的配置项
 * @method array getProgramIdList() 获取需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
 * @method void setProgramIdList(array $ProgramIdList) 设置需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
 */
class CreateFileConfigWithDetailRespRequest extends AbstractModel
{
    /**
     * @var string 配置名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”、“_”），且不能以分隔符开头或结尾。
     */
    public $ConfigName;

    /**
     * @var string 配置项版本，只能包含小写字母、数字及分隔符("-"，".")，且必须以小写字母或数字开头、以小写字母或数字结尾，中间不能有连续的"-"或"."。
     */
    public $ConfigVersion;

    /**
     * @var string 配置项文件名，不超过60个字符，只能包含英文、数字、"-"（英文）、"_"（英文）、"."（英文）。
     */
    public $ConfigFileName;

    /**
     * @var string 配置项文件内容（原始内容编码需要 utf-8 格式，如果 ConfigFileCode 为 gbk，后台会进行转换）。
     */
    public $ConfigFileValue;

    /**
     * @var string 配置项关联应用ID。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
     */
    public $ApplicationId;

    /**
     * @var string 发布路径。
     */
    public $ConfigFilePath;

    /**
     * @var string 配置项版本描述，最多支持200个字符。
     */
    public $ConfigVersionDesc;

    /**
     * @var string 配置项文件编码，utf-8 或 gbk。注：如果选择 gbk，需要新版本 tsf-consul-template （公有云虚拟机需要使用 1.32 tsf-agent，容器需要从文档中获取最新的 tsf-consul-template-docker.tar.gz）的支持。
     */
    public $ConfigFileCode;

    /**
     * @var string 后置命令。
     */
    public $ConfigPostCmd;

    /**
     * @var boolean Base64编码的配置项
     */
    public $EncodeWithBase64;

    /**
     * @var array 需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
     */
    public $ProgramIdList;

    /**
     * @param string $ConfigName 配置名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”、“_”），且不能以分隔符开头或结尾。
     * @param string $ConfigVersion 配置项版本，只能包含小写字母、数字及分隔符("-"，".")，且必须以小写字母或数字开头、以小写字母或数字结尾，中间不能有连续的"-"或"."。
     * @param string $ConfigFileName 配置项文件名，不超过60个字符，只能包含英文、数字、"-"（英文）、"_"（英文）、"."（英文）。
     * @param string $ConfigFileValue 配置项文件内容（原始内容编码需要 utf-8 格式，如果 ConfigFileCode 为 gbk，后台会进行转换）。
     * @param string $ApplicationId 配置项关联应用ID。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
     * @param string $ConfigFilePath 发布路径。
     * @param string $ConfigVersionDesc 配置项版本描述，最多支持200个字符。
     * @param string $ConfigFileCode 配置项文件编码，utf-8 或 gbk。注：如果选择 gbk，需要新版本 tsf-consul-template （公有云虚拟机需要使用 1.32 tsf-agent，容器需要从文档中获取最新的 tsf-consul-template-docker.tar.gz）的支持。
     * @param string $ConfigPostCmd 后置命令。
     * @param boolean $EncodeWithBase64 Base64编码的配置项
     * @param array $ProgramIdList 需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
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
        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigVersion",$param) and $param["ConfigVersion"] !== null) {
            $this->ConfigVersion = $param["ConfigVersion"];
        }

        if (array_key_exists("ConfigFileName",$param) and $param["ConfigFileName"] !== null) {
            $this->ConfigFileName = $param["ConfigFileName"];
        }

        if (array_key_exists("ConfigFileValue",$param) and $param["ConfigFileValue"] !== null) {
            $this->ConfigFileValue = $param["ConfigFileValue"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ConfigFilePath",$param) and $param["ConfigFilePath"] !== null) {
            $this->ConfigFilePath = $param["ConfigFilePath"];
        }

        if (array_key_exists("ConfigVersionDesc",$param) and $param["ConfigVersionDesc"] !== null) {
            $this->ConfigVersionDesc = $param["ConfigVersionDesc"];
        }

        if (array_key_exists("ConfigFileCode",$param) and $param["ConfigFileCode"] !== null) {
            $this->ConfigFileCode = $param["ConfigFileCode"];
        }

        if (array_key_exists("ConfigPostCmd",$param) and $param["ConfigPostCmd"] !== null) {
            $this->ConfigPostCmd = $param["ConfigPostCmd"];
        }

        if (array_key_exists("EncodeWithBase64",$param) and $param["EncodeWithBase64"] !== null) {
            $this->EncodeWithBase64 = $param["EncodeWithBase64"];
        }

        if (array_key_exists("ProgramIdList",$param) and $param["ProgramIdList"] !== null) {
            $this->ProgramIdList = $param["ProgramIdList"];
        }
    }
}
