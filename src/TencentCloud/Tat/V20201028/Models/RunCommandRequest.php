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
 * RunCommand请求参数结构体
 *
 * @method string getContent() 获取<p>命令脚本内容。 需 Base64 编码后传入。</p><p>当 EnableParameter = true 时，支持两种动态参数占位符：</p><ul><li>普通参数 {{key}}：例如脚本 <code>echo {{word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>，实际执行 <code>echo hello</code>，执行记录显示 <code>{&quot;word&quot;: &quot;hello&quot;}</code>。</li><li>隐藏参数 {{tat-hidden:key}}：用于敏感信息脱敏。例如脚本 <code>echo {{tat-hidden:word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>（传参 Key 不带前缀），实际执行 <code>echo hello</code>，记录显示 <code>{&quot;word&quot;: &quot;******&quot;}</code>。</li></ul><p>参数格式：Base64 编码字符串</p><p>入参限制：Base64 编码后的字符串长度不能超过 64KB</p>
 * @method void setContent(string $Content) 设置<p>命令脚本内容。 需 Base64 编码后传入。</p><p>当 EnableParameter = true 时，支持两种动态参数占位符：</p><ul><li>普通参数 {{key}}：例如脚本 <code>echo {{word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>，实际执行 <code>echo hello</code>，执行记录显示 <code>{&quot;word&quot;: &quot;hello&quot;}</code>。</li><li>隐藏参数 {{tat-hidden:key}}：用于敏感信息脱敏。例如脚本 <code>echo {{tat-hidden:word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>（传参 Key 不带前缀），实际执行 <code>echo hello</code>，记录显示 <code>{&quot;word&quot;: &quot;******&quot;}</code>。</li></ul><p>参数格式：Base64 编码字符串</p><p>入参限制：Base64 编码后的字符串长度不能超过 64KB</p>
 * @method array getInstanceIds() 获取<p>待执行命令的实例ID列表，上限200。</p><p>可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：</p><ul><li>CVM</li><li>Lighthouse</li><li>TAT 托管实例</li></ul>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>待执行命令的实例ID列表，上限200。</p><p>可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：</p><ul><li>CVM</li><li>Lighthouse</li><li>TAT 托管实例</li></ul>
 * @method string getCommandName() 获取<p>命令名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
 * @method void setCommandName(string $CommandName) 设置<p>命令名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
 * @method string getDescription() 获取<p>命令描述。不超过120字符。</p>
 * @method void setDescription(string $Description) 设置<p>命令描述。不超过120字符。</p>
 * @method string getCommandType() 获取<p>命令类型，目前支持取值：SHELL、POWERSHELL、BAT。默认：SHELL。</p>
 * @method void setCommandType(string $CommandType) 设置<p>命令类型，目前支持取值：SHELL、POWERSHELL、BAT。默认：SHELL。</p>
 * @method string getWorkingDirectory() 获取<p>命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。</p>
 * @method void setWorkingDirectory(string $WorkingDirectory) 设置<p>命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。</p>
 * @method integer getTimeout() 获取<p>命令超时时间，默认60秒。取值范围[1, 86400]。</p>
 * @method void setTimeout(integer $Timeout) 设置<p>命令超时时间，默认60秒。取值范围[1, 86400]。</p>
 * @method boolean getSaveCommand() 获取<p>是否保存命令，取值范围：</p><li> true：保存</li><li> false：不保存</li>默认为 false。
 * @method void setSaveCommand(boolean $SaveCommand) 设置<p>是否保存命令，取值范围：</p><li> true：保存</li><li> false：不保存</li>默认为 false。
 * @method boolean getEnableParameter() 获取<p>是否启用自定义参数功能。<br>一旦创建，此值不提供修改。<br>取值范围：</p><li> true：启用 </li><li> false：不启用 </li>默认值：false。
 * @method void setEnableParameter(boolean $EnableParameter) 设置<p>是否启用自定义参数功能。<br>一旦创建，此值不提供修改。<br>取值范围：</p><li> true：启用 </li><li> false：不启用 </li>默认值：false。
 * @method string getDefaultParameters() 获取<p>启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>如果 Parameters 未提供，将使用这里的默认值进行替换。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
 * @method void setDefaultParameters(string $DefaultParameters) 设置<p>启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>如果 Parameters 未提供，将使用这里的默认值进行替换。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
 * @method array getDefaultParameterConfs() 获取<p>自定义参数数组。 如果 Parameters 未提供，将使用这里的默认值进行替换。 自定义参数最多20个。<br>如果 Parameters 未提供，将使用这里的默认值进行替换。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。</p>
 * @method void setDefaultParameterConfs(array $DefaultParameterConfs) 设置<p>自定义参数数组。 如果 Parameters 未提供，将使用这里的默认值进行替换。 自定义参数最多20个。<br>如果 Parameters 未提供，将使用这里的默认值进行替换。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。</p>
 * @method string getParameters() 获取<p>Command 的自定义参数。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>如果未提供该参数取值，将使用 DefaultParameters 或 DefaultParameterConfs 进行替换。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
 * @method void setParameters(string $Parameters) 设置<p>Command 的自定义参数。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>如果未提供该参数取值，将使用 DefaultParameters 或 DefaultParameterConfs 进行替换。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
 * @method array getTags() 获取<p>如果保存命令，可为命令设置标签。列表长度不超过10。</p>
 * @method void setTags(array $Tags) 设置<p>如果保存命令，可为命令设置标签。列表长度不超过10。</p>
 * @method string getUsername() 获取<p>在 CVM 或 Lighthouse 实例中执行命令的用户名称。<br>使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。</p>
 * @method void setUsername(string $Username) 设置<p>在 CVM 或 Lighthouse 实例中执行命令的用户名称。<br>使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。</p>
 * @method string getOutputCOSBucketUrl() 获取<p>指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。</p>
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) 设置<p>指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。</p>
 * @method string getOutputCOSKeyPrefix() 获取<p>指定日志在cos bucket中的目录，目录命名有如下规则：</p><ol><li>可用数字、中英文和可见字符的组合，长度最多为60。</li><li>用 / 分割路径，可快速创建子目录。</li><li>不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称。</li></ol>
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) 设置<p>指定日志在cos bucket中的目录，目录命名有如下规则：</p><ol><li>可用数字、中英文和可见字符的组合，长度最多为60。</li><li>用 / 分割路径，可快速创建子目录。</li><li>不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称。</li></ol>
 */
class RunCommandRequest extends AbstractModel
{
    /**
     * @var string <p>命令脚本内容。 需 Base64 编码后传入。</p><p>当 EnableParameter = true 时，支持两种动态参数占位符：</p><ul><li>普通参数 {{key}}：例如脚本 <code>echo {{word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>，实际执行 <code>echo hello</code>，执行记录显示 <code>{&quot;word&quot;: &quot;hello&quot;}</code>。</li><li>隐藏参数 {{tat-hidden:key}}：用于敏感信息脱敏。例如脚本 <code>echo {{tat-hidden:word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>（传参 Key 不带前缀），实际执行 <code>echo hello</code>，记录显示 <code>{&quot;word&quot;: &quot;******&quot;}</code>。</li></ul><p>参数格式：Base64 编码字符串</p><p>入参限制：Base64 编码后的字符串长度不能超过 64KB</p>
     */
    public $Content;

    /**
     * @var array <p>待执行命令的实例ID列表，上限200。</p><p>可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：</p><ul><li>CVM</li><li>Lighthouse</li><li>TAT 托管实例</li></ul>
     */
    public $InstanceIds;

    /**
     * @var string <p>命令名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
     */
    public $CommandName;

    /**
     * @var string <p>命令描述。不超过120字符。</p>
     */
    public $Description;

    /**
     * @var string <p>命令类型，目前支持取值：SHELL、POWERSHELL、BAT。默认：SHELL。</p>
     */
    public $CommandType;

    /**
     * @var string <p>命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。</p>
     */
    public $WorkingDirectory;

    /**
     * @var integer <p>命令超时时间，默认60秒。取值范围[1, 86400]。</p>
     */
    public $Timeout;

    /**
     * @var boolean <p>是否保存命令，取值范围：</p><li> true：保存</li><li> false：不保存</li>默认为 false。
     */
    public $SaveCommand;

    /**
     * @var boolean <p>是否启用自定义参数功能。<br>一旦创建，此值不提供修改。<br>取值范围：</p><li> true：启用 </li><li> false：不启用 </li>默认值：false。
     */
    public $EnableParameter;

    /**
     * @var string <p>启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>如果 Parameters 未提供，将使用这里的默认值进行替换。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
     */
    public $DefaultParameters;

    /**
     * @var array <p>自定义参数数组。 如果 Parameters 未提供，将使用这里的默认值进行替换。 自定义参数最多20个。<br>如果 Parameters 未提供，将使用这里的默认值进行替换。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。</p>
     */
    public $DefaultParameterConfs;

    /**
     * @var string <p>Command 的自定义参数。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>如果未提供该参数取值，将使用 DefaultParameters 或 DefaultParameterConfs 进行替换。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
     */
    public $Parameters;

    /**
     * @var array <p>如果保存命令，可为命令设置标签。列表长度不超过10。</p>
     */
    public $Tags;

    /**
     * @var string <p>在 CVM 或 Lighthouse 实例中执行命令的用户名称。<br>使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。</p>
     */
    public $Username;

    /**
     * @var string <p>指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。</p>
     */
    public $OutputCOSBucketUrl;

    /**
     * @var string <p>指定日志在cos bucket中的目录，目录命名有如下规则：</p><ol><li>可用数字、中英文和可见字符的组合，长度最多为60。</li><li>用 / 分割路径，可快速创建子目录。</li><li>不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称。</li></ol>
     */
    public $OutputCOSKeyPrefix;

    /**
     * @param string $Content <p>命令脚本内容。 需 Base64 编码后传入。</p><p>当 EnableParameter = true 时，支持两种动态参数占位符：</p><ul><li>普通参数 {{key}}：例如脚本 <code>echo {{word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>，实际执行 <code>echo hello</code>，执行记录显示 <code>{&quot;word&quot;: &quot;hello&quot;}</code>。</li><li>隐藏参数 {{tat-hidden:key}}：用于敏感信息脱敏。例如脚本 <code>echo {{tat-hidden:word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>（传参 Key 不带前缀），实际执行 <code>echo hello</code>，记录显示 <code>{&quot;word&quot;: &quot;******&quot;}</code>。</li></ul><p>参数格式：Base64 编码字符串</p><p>入参限制：Base64 编码后的字符串长度不能超过 64KB</p>
     * @param array $InstanceIds <p>待执行命令的实例ID列表，上限200。</p><p>可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：</p><ul><li>CVM</li><li>Lighthouse</li><li>TAT 托管实例</li></ul>
     * @param string $CommandName <p>命令名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
     * @param string $Description <p>命令描述。不超过120字符。</p>
     * @param string $CommandType <p>命令类型，目前支持取值：SHELL、POWERSHELL、BAT。默认：SHELL。</p>
     * @param string $WorkingDirectory <p>命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。</p>
     * @param integer $Timeout <p>命令超时时间，默认60秒。取值范围[1, 86400]。</p>
     * @param boolean $SaveCommand <p>是否保存命令，取值范围：</p><li> true：保存</li><li> false：不保存</li>默认为 false。
     * @param boolean $EnableParameter <p>是否启用自定义参数功能。<br>一旦创建，此值不提供修改。<br>取值范围：</p><li> true：启用 </li><li> false：不启用 </li>默认值：false。
     * @param string $DefaultParameters <p>启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>如果 Parameters 未提供，将使用这里的默认值进行替换。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
     * @param array $DefaultParameterConfs <p>自定义参数数组。 如果 Parameters 未提供，将使用这里的默认值进行替换。 自定义参数最多20个。<br>如果 Parameters 未提供，将使用这里的默认值进行替换。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。</p>
     * @param string $Parameters <p>Command 的自定义参数。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>仅在命令的 EnableParameter 为 true 时，才允许设置此参数。<br>如果未提供该参数取值，将使用 DefaultParameters 或 DefaultParameterConfs 进行替换。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
     * @param array $Tags <p>如果保存命令，可为命令设置标签。列表长度不超过10。</p>
     * @param string $Username <p>在 CVM 或 Lighthouse 实例中执行命令的用户名称。<br>使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。</p>
     * @param string $OutputCOSBucketUrl <p>指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。</p>
     * @param string $OutputCOSKeyPrefix <p>指定日志在cos bucket中的目录，目录命名有如下规则：</p><ol><li>可用数字、中英文和可见字符的组合，长度最多为60。</li><li>用 / 分割路径，可快速创建子目录。</li><li>不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称。</li></ol>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("CommandName",$param) and $param["CommandName"] !== null) {
            $this->CommandName = $param["CommandName"];
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

        if (array_key_exists("SaveCommand",$param) and $param["SaveCommand"] !== null) {
            $this->SaveCommand = $param["SaveCommand"];
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

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
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
