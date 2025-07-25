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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCommand请求参数结构体
 *
 * @method string getCommandName() 获取命令名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
 * @method void setCommandName(string $CommandName) 设置命令名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
 * @method string getContent() 获取Base64编码后的命令内容，长度不可超过64KB。
 * @method void setContent(string $Content) 设置Base64编码后的命令内容，长度不可超过64KB。
 * @method string getDescription() 获取命令描述。不超过120字符。
 * @method void setDescription(string $Description) 设置命令描述。不超过120字符。
 * @method string getCommandType() 获取命令类型，目前支持取值：SHELL、POWERSHELL、BAT。默认：SHELL。
 * @method void setCommandType(string $CommandType) 设置命令类型，目前支持取值：SHELL、POWERSHELL、BAT。默认：SHELL。
 * @method string getWorkingDirectory() 获取命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。
 * @method void setWorkingDirectory(string $WorkingDirectory) 设置命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。
 * @method integer getTimeout() 获取命令超时时间，默认60秒。取值范围[1, 86400]。
 * @method void setTimeout(integer $Timeout) 设置命令超时时间，默认60秒。取值范围[1, 86400]。
 * @method boolean getEnableParameter() 获取是否启用自定义参数功能。
一旦创建，此值不提供修改。
默认值：false。
 * @method void setEnableParameter(boolean $EnableParameter) 设置是否启用自定义参数功能。
一旦创建，此值不提供修改。
默认值：false。
 * @method string getDefaultParameters() 获取启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{"varA": "222"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果InvokeCommand时未提供参数取值，将使用这里的默认值进行替换。
参数不支持同时指定 `DefaultParameters` 和 `DefaultParameterConfs` 。
仅在 EnableParameter 参数为 true 时，才允许设置此参数。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
 * @method void setDefaultParameters(string $DefaultParameters) 设置启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{"varA": "222"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果InvokeCommand时未提供参数取值，将使用这里的默认值进行替换。
参数不支持同时指定 `DefaultParameters` 和 `DefaultParameterConfs` 。
仅在 EnableParameter 参数为 true 时，才允许设置此参数。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
 * @method array getDefaultParameterConfs() 获取自定义参数数组。
如果InvokeCommand时未提供参数取值，将使用这里的默认值进行替换。
参数不支持同时指定 `DefaultParameters` 和 `DefaultParameterConfs` 。
仅在 EnableParameter 参数为 true 时，才允许设置此参数。
自定义参数最多20个。
 * @method void setDefaultParameterConfs(array $DefaultParameterConfs) 设置自定义参数数组。
如果InvokeCommand时未提供参数取值，将使用这里的默认值进行替换。
参数不支持同时指定 `DefaultParameters` 和 `DefaultParameterConfs` 。
仅在 EnableParameter 参数为 true 时，才允许设置此参数。
自定义参数最多20个。
 * @method array getTags() 获取为命令关联的标签，列表长度不超过10。
 * @method void setTags(array $Tags) 设置为命令关联的标签，列表长度不超过10。
 * @method string getUsername() 获取在 CVM 或 Lighthouse 实例中执行命令的用户名称。
使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。
 * @method void setUsername(string $Username) 设置在 CVM 或 Lighthouse 实例中执行命令的用户名称。
使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。
 * @method string getOutputCOSBucketUrl() 获取指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) 设置指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。
 * @method string getOutputCOSKeyPrefix() 获取指定日志在cos bucket中的目录，目录命名有如下规则：
1. 可用数字、中英文和可见字符的组合，长度最多为60。
2. 用 / 分割路径，可快速创建子目录。
3. 不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) 设置指定日志在cos bucket中的目录，目录命名有如下规则：
1. 可用数字、中英文和可见字符的组合，长度最多为60。
2. 用 / 分割路径，可快速创建子目录。
3. 不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称
 */
class CreateCommandRequest extends AbstractModel
{
    /**
     * @var string 命令名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
     */
    public $CommandName;

    /**
     * @var string Base64编码后的命令内容，长度不可超过64KB。
     */
    public $Content;

    /**
     * @var string 命令描述。不超过120字符。
     */
    public $Description;

    /**
     * @var string 命令类型，目前支持取值：SHELL、POWERSHELL、BAT。默认：SHELL。
     */
    public $CommandType;

    /**
     * @var string 命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。
     */
    public $WorkingDirectory;

    /**
     * @var integer 命令超时时间，默认60秒。取值范围[1, 86400]。
     */
    public $Timeout;

    /**
     * @var boolean 是否启用自定义参数功能。
一旦创建，此值不提供修改。
默认值：false。
     */
    public $EnableParameter;

    /**
     * @var string 启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{"varA": "222"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果InvokeCommand时未提供参数取值，将使用这里的默认值进行替换。
参数不支持同时指定 `DefaultParameters` 和 `DefaultParameterConfs` 。
仅在 EnableParameter 参数为 true 时，才允许设置此参数。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
     */
    public $DefaultParameters;

    /**
     * @var array 自定义参数数组。
如果InvokeCommand时未提供参数取值，将使用这里的默认值进行替换。
参数不支持同时指定 `DefaultParameters` 和 `DefaultParameterConfs` 。
仅在 EnableParameter 参数为 true 时，才允许设置此参数。
自定义参数最多20个。
     */
    public $DefaultParameterConfs;

    /**
     * @var array 为命令关联的标签，列表长度不超过10。
     */
    public $Tags;

    /**
     * @var string 在 CVM 或 Lighthouse 实例中执行命令的用户名称。
使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。
     */
    public $Username;

    /**
     * @var string 指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。
     */
    public $OutputCOSBucketUrl;

    /**
     * @var string 指定日志在cos bucket中的目录，目录命名有如下规则：
1. 可用数字、中英文和可见字符的组合，长度最多为60。
2. 用 / 分割路径，可快速创建子目录。
3. 不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称
     */
    public $OutputCOSKeyPrefix;

    /**
     * @param string $CommandName 命令名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
     * @param string $Content Base64编码后的命令内容，长度不可超过64KB。
     * @param string $Description 命令描述。不超过120字符。
     * @param string $CommandType 命令类型，目前支持取值：SHELL、POWERSHELL、BAT。默认：SHELL。
     * @param string $WorkingDirectory 命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。
     * @param integer $Timeout 命令超时时间，默认60秒。取值范围[1, 86400]。
     * @param boolean $EnableParameter 是否启用自定义参数功能。
一旦创建，此值不提供修改。
默认值：false。
     * @param string $DefaultParameters 启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{"varA": "222"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果InvokeCommand时未提供参数取值，将使用这里的默认值进行替换。
参数不支持同时指定 `DefaultParameters` 和 `DefaultParameterConfs` 。
仅在 EnableParameter 参数为 true 时，才允许设置此参数。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
     * @param array $DefaultParameterConfs 自定义参数数组。
如果InvokeCommand时未提供参数取值，将使用这里的默认值进行替换。
参数不支持同时指定 `DefaultParameters` 和 `DefaultParameterConfs` 。
仅在 EnableParameter 参数为 true 时，才允许设置此参数。
自定义参数最多20个。
     * @param array $Tags 为命令关联的标签，列表长度不超过10。
     * @param string $Username 在 CVM 或 Lighthouse 实例中执行命令的用户名称。
使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。
     * @param string $OutputCOSBucketUrl 指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。
     * @param string $OutputCOSKeyPrefix 指定日志在cos bucket中的目录，目录命名有如下规则：
1. 可用数字、中英文和可见字符的组合，长度最多为60。
2. 用 / 分割路径，可快速创建子目录。
3. 不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称
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
        if (array_key_exists("CommandName",$param) and $param["CommandName"] !== null) {
            $this->CommandName = $param["CommandName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CommandType",$param) and $param["CommandType"] !== null) {
            $this->CommandType = $param["CommandType"];
        }

        if (array_key_exists("WorkingDirectory",$param) and $param["WorkingDirectory"] !== null) {
            $this->WorkingDirectory = $param["WorkingDirectory"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("EnableParameter",$param) and $param["EnableParameter"] !== null) {
            $this->EnableParameter = $param["EnableParameter"];
        }

        if (array_key_exists("DefaultParameters",$param) and $param["DefaultParameters"] !== null) {
            $this->DefaultParameters = $param["DefaultParameters"];
        }

        if (array_key_exists("DefaultParameterConfs",$param) and $param["DefaultParameterConfs"] !== null) {
            $this->DefaultParameterConfs = [];
            foreach ($param["DefaultParameterConfs"] as $key => $value){
                $obj = new DefaultParameterConf();
                $obj->deserialize($value);
                array_push($this->DefaultParameterConfs, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("OutputCOSBucketUrl",$param) and $param["OutputCOSBucketUrl"] !== null) {
            $this->OutputCOSBucketUrl = $param["OutputCOSBucketUrl"];
        }

        if (array_key_exists("OutputCOSKeyPrefix",$param) and $param["OutputCOSKeyPrefix"] !== null) {
            $this->OutputCOSKeyPrefix = $param["OutputCOSKeyPrefix"];
        }
    }
}
