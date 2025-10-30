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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunApplication请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID。
 * @method string getName() 获取任务批次名称。
 * @method void setName(string $Name) 设置任务批次名称。
 * @method string getEnvironmentId() 获取投递环境ID。
 * @method void setEnvironmentId(string $EnvironmentId) 设置投递环境ID。
 * @method string getProjectId() 获取项目ID。（不填使用指定地域下的默认项目）
 * @method void setProjectId(string $ProjectId) 设置项目ID。（不填使用指定地域下的默认项目）
 * @method string getDescription() 获取任务批次描述。
 * @method void setDescription(string $Description) 设置任务批次描述。
 * @method string getInputCosUri() 获取任务输入COS地址。（InputBase64和InputCosUri必选其一）
 * @method void setInputCosUri(string $InputCosUri) 设置任务输入COS地址。（InputBase64和InputCosUri必选其一）
 * @method string getInputBase64() 获取任务输入JSON。需要进行base64编码。（InputBase64和InputCosUri必选其一）
 * @method void setInputBase64(string $InputBase64) 设置任务输入JSON。需要进行base64编码。（InputBase64和InputCosUri必选其一）
 * @method string getTableId() 获取批量投递表格ID，不填表示单例投递。
 * @method void setTableId(string $TableId) 设置批量投递表格ID，不填表示单例投递。
 * @method array getTableRowUuids() 获取批量投递表格行UUID。不填表示表格全部行。
 * @method void setTableRowUuids(array $TableRowUuids) 设置批量投递表格行UUID。不填表示表格全部行。
 * @method integer getCacheClearDelay() 获取任务缓存清理时间（小时）。不填或0表示不清理。
 * @method void setCacheClearDelay(integer $CacheClearDelay) 设置任务缓存清理时间（小时）。不填或0表示不清理。
 * @method string getApplicationVersionId() 获取应用版本ID。不填表示使用当前最新版本。
 * @method void setApplicationVersionId(string $ApplicationVersionId) 设置应用版本ID。不填表示使用当前最新版本。
 * @method RunOption getOption() 获取WDL运行选项。
 * @method void setOption(RunOption $Option) 设置WDL运行选项。
 * @method NFOption getNFOption() 获取Nextflow运行选项。
 * @method void setNFOption(NFOption $NFOption) 设置Nextflow运行选项。
 * @method string getWorkDir() 获取工作目录，当前仅支持Nextflow。可填写指定缓存卷内的绝对路径或者COS路径，不填使用默认缓存卷内的默认路径。如果使用COS路径，NFOption中LaunchDir需填写指定缓存卷内的绝对路径作为启动路径。
 * @method void setWorkDir(string $WorkDir) 设置工作目录，当前仅支持Nextflow。可填写指定缓存卷内的绝对路径或者COS路径，不填使用默认缓存卷内的默认路径。如果使用COS路径，NFOption中LaunchDir需填写指定缓存卷内的绝对路径作为启动路径。
 * @method string getAccessMode() 获取访问模式，不填默认私有。取值范围
- PRIVATE：私有应用
- PUBLIC：公共应用
 * @method void setAccessMode(string $AccessMode) 设置访问模式，不填默认私有。取值范围
- PRIVATE：私有应用
- PUBLIC：公共应用
 * @method array getVolumeIds() 获取缓存卷ID，不填使用默认缓存卷，暂时仅支持Nextflow。
 * @method void setVolumeIds(array $VolumeIds) 设置缓存卷ID，不填使用默认缓存卷，暂时仅支持Nextflow。
 * @method boolean getResultNotification() 获取是否开启结果通知。
 * @method void setResultNotification(boolean $ResultNotification) 设置是否开启结果通知。
 * @method boolean getTimeoutNotification() 获取是否开启超时通知。
 * @method void setTimeoutNotification(boolean $TimeoutNotification) 设置是否开启超时通知。
 * @method integer getTimeoutNotificationMinutes() 获取任务超时通知时间（单位：分钟），支持5到2880分钟。
 * @method void setTimeoutNotificationMinutes(integer $TimeoutNotificationMinutes) 设置任务超时通知时间（单位：分钟），支持5到2880分钟。
 * @method array getEmailForNotification() 获取接受通知邮件地址列表。
 * @method void setEmailForNotification(array $EmailForNotification) 设置接受通知邮件地址列表。
 */
class RunApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用ID。
     */
    public $ApplicationId;

    /**
     * @var string 任务批次名称。
     */
    public $Name;

    /**
     * @var string 投递环境ID。
     */
    public $EnvironmentId;

    /**
     * @var string 项目ID。（不填使用指定地域下的默认项目）
     */
    public $ProjectId;

    /**
     * @var string 任务批次描述。
     */
    public $Description;

    /**
     * @var string 任务输入COS地址。（InputBase64和InputCosUri必选其一）
     */
    public $InputCosUri;

    /**
     * @var string 任务输入JSON。需要进行base64编码。（InputBase64和InputCosUri必选其一）
     */
    public $InputBase64;

    /**
     * @var string 批量投递表格ID，不填表示单例投递。
     */
    public $TableId;

    /**
     * @var array 批量投递表格行UUID。不填表示表格全部行。
     */
    public $TableRowUuids;

    /**
     * @var integer 任务缓存清理时间（小时）。不填或0表示不清理。
     */
    public $CacheClearDelay;

    /**
     * @var string 应用版本ID。不填表示使用当前最新版本。
     */
    public $ApplicationVersionId;

    /**
     * @var RunOption WDL运行选项。
     */
    public $Option;

    /**
     * @var NFOption Nextflow运行选项。
     */
    public $NFOption;

    /**
     * @var string 工作目录，当前仅支持Nextflow。可填写指定缓存卷内的绝对路径或者COS路径，不填使用默认缓存卷内的默认路径。如果使用COS路径，NFOption中LaunchDir需填写指定缓存卷内的绝对路径作为启动路径。
     */
    public $WorkDir;

    /**
     * @var string 访问模式，不填默认私有。取值范围
- PRIVATE：私有应用
- PUBLIC：公共应用
     */
    public $AccessMode;

    /**
     * @var array 缓存卷ID，不填使用默认缓存卷，暂时仅支持Nextflow。
     */
    public $VolumeIds;

    /**
     * @var boolean 是否开启结果通知。
     */
    public $ResultNotification;

    /**
     * @var boolean 是否开启超时通知。
     */
    public $TimeoutNotification;

    /**
     * @var integer 任务超时通知时间（单位：分钟），支持5到2880分钟。
     */
    public $TimeoutNotificationMinutes;

    /**
     * @var array 接受通知邮件地址列表。
     */
    public $EmailForNotification;

    /**
     * @param string $ApplicationId 应用ID。
     * @param string $Name 任务批次名称。
     * @param string $EnvironmentId 投递环境ID。
     * @param string $ProjectId 项目ID。（不填使用指定地域下的默认项目）
     * @param string $Description 任务批次描述。
     * @param string $InputCosUri 任务输入COS地址。（InputBase64和InputCosUri必选其一）
     * @param string $InputBase64 任务输入JSON。需要进行base64编码。（InputBase64和InputCosUri必选其一）
     * @param string $TableId 批量投递表格ID，不填表示单例投递。
     * @param array $TableRowUuids 批量投递表格行UUID。不填表示表格全部行。
     * @param integer $CacheClearDelay 任务缓存清理时间（小时）。不填或0表示不清理。
     * @param string $ApplicationVersionId 应用版本ID。不填表示使用当前最新版本。
     * @param RunOption $Option WDL运行选项。
     * @param NFOption $NFOption Nextflow运行选项。
     * @param string $WorkDir 工作目录，当前仅支持Nextflow。可填写指定缓存卷内的绝对路径或者COS路径，不填使用默认缓存卷内的默认路径。如果使用COS路径，NFOption中LaunchDir需填写指定缓存卷内的绝对路径作为启动路径。
     * @param string $AccessMode 访问模式，不填默认私有。取值范围
- PRIVATE：私有应用
- PUBLIC：公共应用
     * @param array $VolumeIds 缓存卷ID，不填使用默认缓存卷，暂时仅支持Nextflow。
     * @param boolean $ResultNotification 是否开启结果通知。
     * @param boolean $TimeoutNotification 是否开启超时通知。
     * @param integer $TimeoutNotificationMinutes 任务超时通知时间（单位：分钟），支持5到2880分钟。
     * @param array $EmailForNotification 接受通知邮件地址列表。
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InputCosUri",$param) and $param["InputCosUri"] !== null) {
            $this->InputCosUri = $param["InputCosUri"];
        }

        if (array_key_exists("InputBase64",$param) and $param["InputBase64"] !== null) {
            $this->InputBase64 = $param["InputBase64"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableRowUuids",$param) and $param["TableRowUuids"] !== null) {
            $this->TableRowUuids = $param["TableRowUuids"];
        }

        if (array_key_exists("CacheClearDelay",$param) and $param["CacheClearDelay"] !== null) {
            $this->CacheClearDelay = $param["CacheClearDelay"];
        }

        if (array_key_exists("ApplicationVersionId",$param) and $param["ApplicationVersionId"] !== null) {
            $this->ApplicationVersionId = $param["ApplicationVersionId"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = new RunOption();
            $this->Option->deserialize($param["Option"]);
        }

        if (array_key_exists("NFOption",$param) and $param["NFOption"] !== null) {
            $this->NFOption = new NFOption();
            $this->NFOption->deserialize($param["NFOption"]);
        }

        if (array_key_exists("WorkDir",$param) and $param["WorkDir"] !== null) {
            $this->WorkDir = $param["WorkDir"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("VolumeIds",$param) and $param["VolumeIds"] !== null) {
            $this->VolumeIds = $param["VolumeIds"];
        }

        if (array_key_exists("ResultNotification",$param) and $param["ResultNotification"] !== null) {
            $this->ResultNotification = $param["ResultNotification"];
        }

        if (array_key_exists("TimeoutNotification",$param) and $param["TimeoutNotification"] !== null) {
            $this->TimeoutNotification = $param["TimeoutNotification"];
        }

        if (array_key_exists("TimeoutNotificationMinutes",$param) and $param["TimeoutNotificationMinutes"] !== null) {
            $this->TimeoutNotificationMinutes = $param["TimeoutNotificationMinutes"];
        }

        if (array_key_exists("EmailForNotification",$param) and $param["EmailForNotification"] !== null) {
            $this->EmailForNotification = $param["EmailForNotification"];
        }
    }
}
