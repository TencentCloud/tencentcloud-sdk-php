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
 * 命令详情。
 *
 * @method string getCommandId() 获取<p>命令ID。</p>
 * @method void setCommandId(string $CommandId) 设置<p>命令ID。</p>
 * @method string getCommandName() 获取<p>命令名称。</p>
 * @method void setCommandName(string $CommandName) 设置<p>命令名称。</p>
 * @method string getDescription() 获取<p>命令描述。</p>
 * @method void setDescription(string $Description) 设置<p>命令描述。</p>
 * @method string getContent() 获取<p>Base64编码后的命令内容。</p>
 * @method void setContent(string $Content) 设置<p>Base64编码后的命令内容。</p>
 * @method string getCommandType() 获取<p>命令类型。取值为 SHELL、POWERSHELL、BAT 之一。</p>
 * @method void setCommandType(string $CommandType) 设置<p>命令类型。取值为 SHELL、POWERSHELL、BAT 之一。</p>
 * @method string getWorkingDirectory() 获取<p>命令执行路径。</p>
 * @method void setWorkingDirectory(string $WorkingDirectory) 设置<p>命令执行路径。</p>
 * @method integer getTimeout() 获取<p>命令超时时间。</p><p>单位：秒</p><p>指定 OutputCOSBucketUrl 参数时，超时时间将包含命令输出上传 COS 的耗时</p>
 * @method void setTimeout(integer $Timeout) 设置<p>命令超时时间。</p><p>单位：秒</p><p>指定 OutputCOSBucketUrl 参数时，超时时间将包含命令输出上传 COS 的耗时</p>
 * @method string getCreatedTime() 获取<p>命令创建时间。格式为：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>命令创建时间。格式为：YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getUpdatedTime() 获取<p>命令更新时间。格式为：YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setUpdatedTime(string $UpdatedTime) 设置<p>命令更新时间。格式为：YYYY-MM-DDThh:mm:ssZ</p>
 * @method boolean getEnableParameter() 获取<p>是否启用自定义参数功能。</p>
 * @method void setEnableParameter(boolean $EnableParameter) 设置<p>是否启用自定义参数功能。</p>
 * @method string getDefaultParameters() 获取<p>自定义参数的默认取值。</p>
 * @method void setDefaultParameters(string $DefaultParameters) 设置<p>自定义参数的默认取值。</p>
 * @method array getDefaultParameterConfs() 获取<p>自定义参数的默认取值。</p>
 * @method void setDefaultParameterConfs(array $DefaultParameterConfs) 设置<p>自定义参数的默认取值。</p>
 * @method array getScenes() 获取<p>命令关联的场景</p>
 * @method void setScenes(array $Scenes) 设置<p>命令关联的场景</p>
 * @method string getFormattedDescription() 获取<p>命令的结构化描述。公共命令有值，用户命令为空字符串。</p>
 * @method void setFormattedDescription(string $FormattedDescription) 设置<p>命令的结构化描述。公共命令有值，用户命令为空字符串。</p>
 * @method string getCreatedBy() 获取<p>命令创建者。</p><p>枚举值：</p><ul><li>TAT： 公共命令</li><li>USER： 个人创建的命令</li></ul>
 * @method void setCreatedBy(string $CreatedBy) 设置<p>命令创建者。</p><p>枚举值：</p><ul><li>TAT： 公共命令</li><li>USER： 个人创建的命令</li></ul>
 * @method array getTags() 获取<p>命令关联的标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>命令关联的标签列表。</p>
 * @method string getUsername() 获取<p>在实例上执行命令的用户名。</p>
 * @method void setUsername(string $Username) 设置<p>在实例上执行命令的用户名。</p>
 * @method string getOutputCOSBucketUrl() 获取<p>日志上传的cos bucket 地址。</p>
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) 设置<p>日志上传的cos bucket 地址。</p>
 * @method string getOutputCOSKeyPrefix() 获取<p>日志在cos bucket中的目录。</p>
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) 设置<p>日志在cos bucket中的目录。</p>
 */
class Command extends AbstractModel
{
    /**
     * @var string <p>命令ID。</p>
     */
    public $CommandId;

    /**
     * @var string <p>命令名称。</p>
     */
    public $CommandName;

    /**
     * @var string <p>命令描述。</p>
     */
    public $Description;

    /**
     * @var string <p>Base64编码后的命令内容。</p>
     */
    public $Content;

    /**
     * @var string <p>命令类型。取值为 SHELL、POWERSHELL、BAT 之一。</p>
     */
    public $CommandType;

    /**
     * @var string <p>命令执行路径。</p>
     */
    public $WorkingDirectory;

    /**
     * @var integer <p>命令超时时间。</p><p>单位：秒</p><p>指定 OutputCOSBucketUrl 参数时，超时时间将包含命令输出上传 COS 的耗时</p>
     */
    public $Timeout;

    /**
     * @var string <p>命令创建时间。格式为：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>命令更新时间。格式为：YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $UpdatedTime;

    /**
     * @var boolean <p>是否启用自定义参数功能。</p>
     */
    public $EnableParameter;

    /**
     * @var string <p>自定义参数的默认取值。</p>
     */
    public $DefaultParameters;

    /**
     * @var array <p>自定义参数的默认取值。</p>
     */
    public $DefaultParameterConfs;

    /**
     * @var array <p>命令关联的场景</p>
     */
    public $Scenes;

    /**
     * @var string <p>命令的结构化描述。公共命令有值，用户命令为空字符串。</p>
     */
    public $FormattedDescription;

    /**
     * @var string <p>命令创建者。</p><p>枚举值：</p><ul><li>TAT： 公共命令</li><li>USER： 个人创建的命令</li></ul>
     */
    public $CreatedBy;

    /**
     * @var array <p>命令关联的标签列表。</p>
     */
    public $Tags;

    /**
     * @var string <p>在实例上执行命令的用户名。</p>
     */
    public $Username;

    /**
     * @var string <p>日志上传的cos bucket 地址。</p>
     */
    public $OutputCOSBucketUrl;

    /**
     * @var string <p>日志在cos bucket中的目录。</p>
     */
    public $OutputCOSKeyPrefix;

    /**
     * @param string $CommandId <p>命令ID。</p>
     * @param string $CommandName <p>命令名称。</p>
     * @param string $Description <p>命令描述。</p>
     * @param string $Content <p>Base64编码后的命令内容。</p>
     * @param string $CommandType <p>命令类型。取值为 SHELL、POWERSHELL、BAT 之一。</p>
     * @param string $WorkingDirectory <p>命令执行路径。</p>
     * @param integer $Timeout <p>命令超时时间。</p><p>单位：秒</p><p>指定 OutputCOSBucketUrl 参数时，超时时间将包含命令输出上传 COS 的耗时</p>
     * @param string $CreatedTime <p>命令创建时间。格式为：YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $UpdatedTime <p>命令更新时间。格式为：YYYY-MM-DDThh:mm:ssZ</p>
     * @param boolean $EnableParameter <p>是否启用自定义参数功能。</p>
     * @param string $DefaultParameters <p>自定义参数的默认取值。</p>
     * @param array $DefaultParameterConfs <p>自定义参数的默认取值。</p>
     * @param array $Scenes <p>命令关联的场景</p>
     * @param string $FormattedDescription <p>命令的结构化描述。公共命令有值，用户命令为空字符串。</p>
     * @param string $CreatedBy <p>命令创建者。</p><p>枚举值：</p><ul><li>TAT： 公共命令</li><li>USER： 个人创建的命令</li></ul>
     * @param array $Tags <p>命令关联的标签列表。</p>
     * @param string $Username <p>在实例上执行命令的用户名。</p>
     * @param string $OutputCOSBucketUrl <p>日志上传的cos bucket 地址。</p>
     * @param string $OutputCOSKeyPrefix <p>日志在cos bucket中的目录。</p>
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
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

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }

        if (array_key_exists("FormattedDescription",$param) and $param["FormattedDescription"] !== null) {
            $this->FormattedDescription = $param["FormattedDescription"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
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
