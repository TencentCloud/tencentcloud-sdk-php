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
 * ModifyCommand请求参数结构体
 *
 * @method string getCommandId() 获取<p>命令ID。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取。</p>
 * @method void setCommandId(string $CommandId) 设置<p>命令ID。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取。</p>
 * @method string getCommandName() 获取<p>命令名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
 * @method void setCommandName(string $CommandName) 设置<p>命令名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
 * @method string getDescription() 获取<p>命令描述。不超过120字符。</p>
 * @method void setDescription(string $Description) 设置<p>命令描述。不超过120字符。</p>
 * @method string getContent() 获取<p>命令脚本内容。 需 Base64 编码后传入。</p><p>当 EnableParameter = true 时，支持两种动态参数占位符：</p><ul><li>普通参数 {{key}}：例如脚本 <code>echo {{word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>，实际执行 <code>echo hello</code>，执行记录显示 <code>{&quot;word&quot;: &quot;hello&quot;}</code>。</li><li>隐藏参数 {{tat-hidden:key}}：用于敏感信息脱敏。例如脚本 <code>echo {{tat-hidden:word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>（传参 Key 不带前缀），实际执行 <code>echo hello</code>，记录显示 <code>{&quot;word&quot;: &quot;******&quot;}</code>。</li></ul><p>参数格式：Base64 编码字符串</p><p>入参限制：Base64 编码后的字符串长度不能超过 64KB</p>
 * @method void setContent(string $Content) 设置<p>命令脚本内容。 需 Base64 编码后传入。</p><p>当 EnableParameter = true 时，支持两种动态参数占位符：</p><ul><li>普通参数 {{key}}：例如脚本 <code>echo {{word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>，实际执行 <code>echo hello</code>，执行记录显示 <code>{&quot;word&quot;: &quot;hello&quot;}</code>。</li><li>隐藏参数 {{tat-hidden:key}}：用于敏感信息脱敏。例如脚本 <code>echo {{tat-hidden:word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>（传参 Key 不带前缀），实际执行 <code>echo hello</code>，记录显示 <code>{&quot;word&quot;: &quot;******&quot;}</code>。</li></ul><p>参数格式：Base64 编码字符串</p><p>入参限制：Base64 编码后的字符串长度不能超过 64KB</p>
 * @method string getCommandType() 获取<p>命令类型，目前支持取值：SHELL、POWERSHELL、BAT。</p>
 * @method void setCommandType(string $CommandType) 设置<p>命令类型，目前支持取值：SHELL、POWERSHELL、BAT。</p>
 * @method string getWorkingDirectory() 获取<p>命令执行路径。</p>
 * @method void setWorkingDirectory(string $WorkingDirectory) 设置<p>命令执行路径。</p>
 * @method integer getTimeout() 获取<p>命令超时时间。</p><p>取值范围：[1, 86400]</p><p>单位：秒</p><p>默认值：60</p><p>指定 OutputCOSBucketUrl 参数时，超时时间将包含命令输出上传 COS 的耗时</p>
 * @method void setTimeout(integer $Timeout) 设置<p>命令超时时间。</p><p>取值范围：[1, 86400]</p><p>单位：秒</p><p>默认值：60</p><p>指定 OutputCOSBucketUrl 参数时，超时时间将包含命令输出上传 COS 的耗时</p>
 * @method string getDefaultParameters() 获取<p>启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>采取整体全覆盖式修改，即修改时必须提供所有新默认值。<br>仅在命令的 EnableParameter 为 true 时，才允许修改此参数。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取命令的 EnableParameter 设置。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
 * @method void setDefaultParameters(string $DefaultParameters) 设置<p>启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>采取整体全覆盖式修改，即修改时必须提供所有新默认值。<br>仅在命令的 EnableParameter 为 true 时，才允许修改此参数。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取命令的 EnableParameter 设置。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
 * @method array getDefaultParameterConfs() 获取<p>自定义参数数组。如果 InvokeCommand 时未提供参数取值，将使用这里的默认值进行替换。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>仅在命令的 EnableParameter 为 true 时，才允许修改此参数。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取命令的 EnableParameter 设置。<br>自定义参数最多20个。</p>
 * @method void setDefaultParameterConfs(array $DefaultParameterConfs) 设置<p>自定义参数数组。如果 InvokeCommand 时未提供参数取值，将使用这里的默认值进行替换。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>仅在命令的 EnableParameter 为 true 时，才允许修改此参数。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取命令的 EnableParameter 设置。<br>自定义参数最多20个。</p>
 * @method string getUsername() 获取<p>在 CVM 或 Lighthouse 实例中执行命令的用户名称。<br>使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。</p>
 * @method void setUsername(string $Username) 设置<p>在 CVM 或 Lighthouse 实例中执行命令的用户名称。<br>使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。</p>
 * @method string getOutputCOSBucketUrl() 获取<p>指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。</p>
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) 设置<p>指定日志上传的cos bucket 地址，必须以https开头，如 https://BucketName-123454321.cos.ap-beijing.myqcloud.com。</p>
 * @method string getOutputCOSKeyPrefix() 获取<p>指定日志在cos bucket中的目录，目录命名有如下规则：</p><ol><li>可用数字、中英文和可见字符的组合，长度最多为60。</li><li>用 / 分割路径，可快速创建子目录。</li><li>不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称。</li></ol>
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) 设置<p>指定日志在cos bucket中的目录，目录命名有如下规则：</p><ol><li>可用数字、中英文和可见字符的组合，长度最多为60。</li><li>用 / 分割路径，可快速创建子目录。</li><li>不允许连续 / ；不允许以 / 开头；不允许以..作为文件夹名称。</li></ol>
 */
class ModifyCommandRequest extends AbstractModel
{
    /**
     * @var string <p>命令ID。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取。</p>
     */
    public $CommandId;

    /**
     * @var string <p>命令名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
     */
    public $CommandName;

    /**
     * @var string <p>命令描述。不超过120字符。</p>
     */
    public $Description;

    /**
     * @var string <p>命令脚本内容。 需 Base64 编码后传入。</p><p>当 EnableParameter = true 时，支持两种动态参数占位符：</p><ul><li>普通参数 {{key}}：例如脚本 <code>echo {{word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>，实际执行 <code>echo hello</code>，执行记录显示 <code>{&quot;word&quot;: &quot;hello&quot;}</code>。</li><li>隐藏参数 {{tat-hidden:key}}：用于敏感信息脱敏。例如脚本 <code>echo {{tat-hidden:word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>（传参 Key 不带前缀），实际执行 <code>echo hello</code>，记录显示 <code>{&quot;word&quot;: &quot;******&quot;}</code>。</li></ul><p>参数格式：Base64 编码字符串</p><p>入参限制：Base64 编码后的字符串长度不能超过 64KB</p>
     */
    public $Content;

    /**
     * @var string <p>命令类型，目前支持取值：SHELL、POWERSHELL、BAT。</p>
     */
    public $CommandType;

    /**
     * @var string <p>命令执行路径。</p>
     */
    public $WorkingDirectory;

    /**
     * @var integer <p>命令超时时间。</p><p>取值范围：[1, 86400]</p><p>单位：秒</p><p>默认值：60</p><p>指定 OutputCOSBucketUrl 参数时，超时时间将包含命令输出上传 COS 的耗时</p>
     */
    public $Timeout;

    /**
     * @var string <p>启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>采取整体全覆盖式修改，即修改时必须提供所有新默认值。<br>仅在命令的 EnableParameter 为 true 时，才允许修改此参数。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取命令的 EnableParameter 设置。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
     */
    public $DefaultParameters;

    /**
     * @var array <p>自定义参数数组。如果 InvokeCommand 时未提供参数取值，将使用这里的默认值进行替换。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>仅在命令的 EnableParameter 为 true 时，才允许修改此参数。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取命令的 EnableParameter 设置。<br>自定义参数最多20个。</p>
     */
    public $DefaultParameterConfs;

    /**
     * @var string <p>在 CVM 或 Lighthouse 实例中执行命令的用户名称。<br>使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。</p>
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
     * @param string $CommandId <p>命令ID。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取。</p>
     * @param string $CommandName <p>命令名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
     * @param string $Description <p>命令描述。不超过120字符。</p>
     * @param string $Content <p>命令脚本内容。 需 Base64 编码后传入。</p><p>当 EnableParameter = true 时，支持两种动态参数占位符：</p><ul><li>普通参数 {{key}}：例如脚本 <code>echo {{word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>，实际执行 <code>echo hello</code>，执行记录显示 <code>{&quot;word&quot;: &quot;hello&quot;}</code>。</li><li>隐藏参数 {{tat-hidden:key}}：用于敏感信息脱敏。例如脚本 <code>echo {{tat-hidden:word}}</code> 配合参数 <code>{&quot;word&quot;: &quot;hello&quot;}</code>（传参 Key 不带前缀），实际执行 <code>echo hello</code>，记录显示 <code>{&quot;word&quot;: &quot;******&quot;}</code>。</li></ul><p>参数格式：Base64 编码字符串</p><p>入参限制：Base64 编码后的字符串长度不能超过 64KB</p>
     * @param string $CommandType <p>命令类型，目前支持取值：SHELL、POWERSHELL、BAT。</p>
     * @param string $WorkingDirectory <p>命令执行路径。</p>
     * @param integer $Timeout <p>命令超时时间。</p><p>取值范围：[1, 86400]</p><p>单位：秒</p><p>默认值：60</p><p>指定 OutputCOSBucketUrl 参数时，超时时间将包含命令输出上传 COS 的耗时</p>
     * @param string $DefaultParameters <p>启用自定义参数功能时，自定义参数的默认取值。字段类型为json encoded string。如：{&quot;varA&quot;: &quot;222&quot;}。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>采取整体全覆盖式修改，即修改时必须提供所有新默认值。<br>仅在命令的 EnableParameter 为 true 时，才允许修改此参数。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取命令的 EnableParameter 设置。<br>key为自定义参数名称，value为该参数的默认取值。kv均为字符串型。<br>自定义参数最多20个。<br>自定义参数名称需符合以下规范：字符数目上限64，可选范围【a-zA-Z0-9-_】。</p>
     * @param array $DefaultParameterConfs <p>自定义参数数组。如果 InvokeCommand 时未提供参数取值，将使用这里的默认值进行替换。<br>参数不支持同时指定 <code>DefaultParameters</code> 和 <code>DefaultParameterConfs</code> 。<br>仅在命令的 EnableParameter 为 true 时，才允许修改此参数。可通过 <a href="https://cloud.tencent.com/document/api/1340/52681">DescribeCommands(查询命令详情)</a> 接口获取命令的 EnableParameter 设置。<br>自定义参数最多20个。</p>
     * @param string $Username <p>在 CVM 或 Lighthouse 实例中执行命令的用户名称。<br>使用最小权限执行命令是权限管理的最佳实践，建议您以普通用户身份执行云助手命令。</p>
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
        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("CommandName",$param) and $param["CommandName"] !== null) {
            $this->CommandName = $param["CommandName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
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
