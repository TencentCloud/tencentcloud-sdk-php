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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InvokeCommand请求参数结构体
 *
 * @method string getCommandId() 获取待触发的命令ID。
 * @method void setCommandId(string $CommandId) 设置待触发的命令ID。
 * @method array getInstanceIds() 获取待执行命令的实例ID列表，上限100。
 * @method void setInstanceIds(array $InstanceIds) 设置待执行命令的实例ID列表，上限100。
 * @method string getParameters() 获取Command 的自定义参数。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果未提供该参数取值，将使用 Command 的 DefaultParameters 进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
 * @method void setParameters(string $Parameters) 设置Command 的自定义参数。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果未提供该参数取值，将使用 Command 的 DefaultParameters 进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
 * @method string getUsername() 获取在 CVM 或 Lighthouse 实例中执行命令的用户名称。
使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。若不填，默认以 Command 配置的 Username 执行。
 * @method void setUsername(string $Username) 设置在 CVM 或 Lighthouse 实例中执行命令的用户名称。
使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。若不填，默认以 Command 配置的 Username 执行。
 * @method string getWorkingDirectory() 获取命令执行路径, 默认以Command配置的WorkingDirectory执行。
 * @method void setWorkingDirectory(string $WorkingDirectory) 设置命令执行路径, 默认以Command配置的WorkingDirectory执行。
 * @method integer getTimeout() 获取命令超时时间，取值范围[1, 86400]。默认以Command配置的Timeout执行。
 * @method void setTimeout(integer $Timeout) 设置命令超时时间，取值范围[1, 86400]。默认以Command配置的Timeout执行。
 * @method string getOutputCOSBucketUrl() 获取指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) 设置指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。
 * @method string getOutputCOSKeyPrefix() 获取指定日志在cos bucket中的目录，目录命名有如下规则：
1. 可用数字、中英文和可见字符的组合，长度最多为60。
2. 用 / 分割路径，可快速创建子目录。
3. 不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称。
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) 设置指定日志在cos bucket中的目录，目录命名有如下规则：
1. 可用数字、中英文和可见字符的组合，长度最多为60。
2. 用 / 分割路径，可快速创建子目录。
3. 不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称。
 */
class InvokeCommandRequest extends AbstractModel
{
    /**
     * @var string 待触发的命令ID。
     */
    public $CommandId;

    /**
     * @var array 待执行命令的实例ID列表，上限100。
     */
    public $InstanceIds;

    /**
     * @var string Command 的自定义参数。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果未提供该参数取值，将使用 Command 的 DefaultParameters 进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
     */
    public $Parameters;

    /**
     * @var string 在 CVM 或 Lighthouse 实例中执行命令的用户名称。
使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。若不填，默认以 Command 配置的 Username 执行。
     */
    public $Username;

    /**
     * @var string 命令执行路径, 默认以Command配置的WorkingDirectory执行。
     */
    public $WorkingDirectory;

    /**
     * @var integer 命令超时时间，取值范围[1, 86400]。默认以Command配置的Timeout执行。
     */
    public $Timeout;

    /**
     * @var string 指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。
     */
    public $OutputCOSBucketUrl;

    /**
     * @var string 指定日志在cos bucket中的目录，目录命名有如下规则：
1. 可用数字、中英文和可见字符的组合，长度最多为60。
2. 用 / 分割路径，可快速创建子目录。
3. 不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称。
     */
    public $OutputCOSKeyPrefix;

    /**
     * @param string $CommandId 待触发的命令ID。
     * @param array $InstanceIds 待执行命令的实例ID列表，上限100。
     * @param string $Parameters Command 的自定义参数。字段类型为json encoded string。如：{\"varA\": \"222\"}。
key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。
如果未提供该参数取值，将使用 Command 的 DefaultParameters 进行替换。
自定义参数最多20个。
自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。
     * @param string $Username 在 CVM 或 Lighthouse 实例中执行命令的用户名称。
使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。若不填，默认以 Command 配置的 Username 执行。
     * @param string $WorkingDirectory 命令执行路径, 默认以Command配置的WorkingDirectory执行。
     * @param integer $Timeout 命令超时时间，取值范围[1, 86400]。默认以Command配置的Timeout执行。
     * @param string $OutputCOSBucketUrl 指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。
     * @param string $OutputCOSKeyPrefix 指定日志在cos bucket中的目录，目录命名有如下规则：
1. 可用数字、中英文和可见字符的组合，长度最多为60。
2. 用 / 分割路径，可快速创建子目录。
3. 不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称。
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
        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("WorkingDirectory",$param) and $param["WorkingDirectory"] !== null) {
            $this->WorkingDirectory = $param["WorkingDirectory"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("OutputCOSBucketUrl",$param) and $param["OutputCOSBucketUrl"] !== null) {
            $this->OutputCOSBucketUrl = $param["OutputCOSBucketUrl"];
        }

        if (array_key_exists("OutputCOSKeyPrefix",$param) and $param["OutputCOSKeyPrefix"] !== null) {
            $this->OutputCOSKeyPrefix = $param["OutputCOSKeyPrefix"];
        }
    }
}
