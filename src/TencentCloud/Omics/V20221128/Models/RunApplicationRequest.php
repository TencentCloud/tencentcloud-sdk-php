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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunApplication请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID。
 * @method string getProjectId() 获取项目ID。
 * @method void setProjectId(string $ProjectId) 设置项目ID。
 * @method string getName() 获取任务批次名称。
 * @method void setName(string $Name) 设置任务批次名称。
 * @method string getEnvironmentId() 获取投递环境ID。
 * @method void setEnvironmentId(string $EnvironmentId) 设置投递环境ID。
 * @method string getInputBase64() 获取任务输入JSON。需要进行base64编码。
 * @method void setInputBase64(string $InputBase64) 设置任务输入JSON。需要进行base64编码。
 * @method integer getCacheClearDelay() 获取任务缓存清理时间。不填表示不清理。
 * @method void setCacheClearDelay(integer $CacheClearDelay) 设置任务缓存清理时间。不填表示不清理。
 * @method RunOption getOption() 获取运行选项。
 * @method void setOption(RunOption $Option) 设置运行选项。
 * @method string getDescription() 获取任务批次描述。
 * @method void setDescription(string $Description) 设置任务批次描述。
 * @method string getTableId() 获取批量投递表格ID，不填表示单例投递。
 * @method void setTableId(string $TableId) 设置批量投递表格ID，不填表示单例投递。
 * @method array getTableRowUuids() 获取批量投递表格行UUID。不填表示表格全部行。
 * @method void setTableRowUuids(array $TableRowUuids) 设置批量投递表格行UUID。不填表示表格全部行。
 */
class RunApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用ID。
     */
    public $ApplicationId;

    /**
     * @var string 项目ID。
     */
    public $ProjectId;

    /**
     * @var string 任务批次名称。
     */
    public $Name;

    /**
     * @var string 投递环境ID。
     */
    public $EnvironmentId;

    /**
     * @var string 任务输入JSON。需要进行base64编码。
     */
    public $InputBase64;

    /**
     * @var integer 任务缓存清理时间。不填表示不清理。
     */
    public $CacheClearDelay;

    /**
     * @var RunOption 运行选项。
     */
    public $Option;

    /**
     * @var string 任务批次描述。
     */
    public $Description;

    /**
     * @var string 批量投递表格ID，不填表示单例投递。
     */
    public $TableId;

    /**
     * @var array 批量投递表格行UUID。不填表示表格全部行。
     */
    public $TableRowUuids;

    /**
     * @param string $ApplicationId 应用ID。
     * @param string $ProjectId 项目ID。
     * @param string $Name 任务批次名称。
     * @param string $EnvironmentId 投递环境ID。
     * @param string $InputBase64 任务输入JSON。需要进行base64编码。
     * @param integer $CacheClearDelay 任务缓存清理时间。不填表示不清理。
     * @param RunOption $Option 运行选项。
     * @param string $Description 任务批次描述。
     * @param string $TableId 批量投递表格ID，不填表示单例投递。
     * @param array $TableRowUuids 批量投递表格行UUID。不填表示表格全部行。
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("InputBase64",$param) and $param["InputBase64"] !== null) {
            $this->InputBase64 = $param["InputBase64"];
        }

        if (array_key_exists("CacheClearDelay",$param) and $param["CacheClearDelay"] !== null) {
            $this->CacheClearDelay = $param["CacheClearDelay"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = new RunOption();
            $this->Option->deserialize($param["Option"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableRowUuids",$param) and $param["TableRowUuids"] !== null) {
            $this->TableRowUuids = $param["TableRowUuids"];
        }
    }
}
