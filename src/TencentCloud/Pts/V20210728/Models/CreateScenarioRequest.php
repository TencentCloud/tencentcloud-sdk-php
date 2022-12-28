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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScenario请求参数结构体
 *
 * @method string getName() 获取场景名
 * @method void setName(string $Name) 设置场景名
 * @method string getType() 获取压测引擎类型
 * @method void setType(string $Type) 设置压测引擎类型
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getDescription() 获取场景描述
 * @method void setDescription(string $Description) 设置场景描述
 * @method Load getLoad() 获取施压配置
 * @method void setLoad(Load $Load) 设置施压配置
 * @method array getConfigs() 获取deprecated
 * @method void setConfigs(array $Configs) 设置deprecated
 * @method array getDatasets() 获取测试数据集
 * @method void setDatasets(array $Datasets) 设置测试数据集
 * @method array getExtensions() 获取deprecated
 * @method void setExtensions(array $Extensions) 设置deprecated
 * @method string getSLAId() 获取deprecated
 * @method void setSLAId(string $SLAId) 设置deprecated
 * @method string getCronId() 获取cron job ID
 * @method void setCronId(string $CronId) 设置cron job ID
 * @method array getScripts() 获取deprecated
 * @method void setScripts(array $Scripts) 设置deprecated
 * @method array getTestScripts() 获取测试脚本文件信息
 * @method void setTestScripts(array $TestScripts) 设置测试脚本文件信息
 * @method array getProtocols() 获取协议文件路径
 * @method void setProtocols(array $Protocols) 设置协议文件路径
 * @method array getRequestFiles() 获取请求文件路径
 * @method void setRequestFiles(array $RequestFiles) 设置请求文件路径
 * @method SLAPolicy getSLAPolicy() 获取SLA 策略
 * @method void setSLAPolicy(SLAPolicy $SLAPolicy) 设置SLA 策略
 * @method array getPlugins() 获取拓展包文件路径
 * @method void setPlugins(array $Plugins) 设置拓展包文件路径
 * @method DomainNameConfig getDomainNameConfig() 获取域名解析配置
 * @method void setDomainNameConfig(DomainNameConfig $DomainNameConfig) 设置域名解析配置
 * @method string getOwner() 获取创建人名
 * @method void setOwner(string $Owner) 设置创建人名
 */
class CreateScenarioRequest extends AbstractModel
{
    /**
     * @var string 场景名
     */
    public $Name;

    /**
     * @var string 压测引擎类型
     */
    public $Type;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 场景描述
     */
    public $Description;

    /**
     * @var Load 施压配置
     */
    public $Load;

    /**
     * @var array deprecated
     */
    public $Configs;

    /**
     * @var array 测试数据集
     */
    public $Datasets;

    /**
     * @var array deprecated
     */
    public $Extensions;

    /**
     * @var string deprecated
     */
    public $SLAId;

    /**
     * @var string cron job ID
     */
    public $CronId;

    /**
     * @var array deprecated
     */
    public $Scripts;

    /**
     * @var array 测试脚本文件信息
     */
    public $TestScripts;

    /**
     * @var array 协议文件路径
     */
    public $Protocols;

    /**
     * @var array 请求文件路径
     */
    public $RequestFiles;

    /**
     * @var SLAPolicy SLA 策略
     */
    public $SLAPolicy;

    /**
     * @var array 拓展包文件路径
     */
    public $Plugins;

    /**
     * @var DomainNameConfig 域名解析配置
     */
    public $DomainNameConfig;

    /**
     * @var string 创建人名
     */
    public $Owner;

    /**
     * @param string $Name 场景名
     * @param string $Type 压测引擎类型
     * @param string $ProjectId 项目ID
     * @param string $Description 场景描述
     * @param Load $Load 施压配置
     * @param array $Configs deprecated
     * @param array $Datasets 测试数据集
     * @param array $Extensions deprecated
     * @param string $SLAId deprecated
     * @param string $CronId cron job ID
     * @param array $Scripts deprecated
     * @param array $TestScripts 测试脚本文件信息
     * @param array $Protocols 协议文件路径
     * @param array $RequestFiles 请求文件路径
     * @param SLAPolicy $SLAPolicy SLA 策略
     * @param array $Plugins 拓展包文件路径
     * @param DomainNameConfig $DomainNameConfig 域名解析配置
     * @param string $Owner 创建人名
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Load",$param) and $param["Load"] !== null) {
            $this->Load = new Load();
            $this->Load->deserialize($param["Load"]);
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = $param["Configs"];
        }

        if (array_key_exists("Datasets",$param) and $param["Datasets"] !== null) {
            $this->Datasets = [];
            foreach ($param["Datasets"] as $key => $value){
                $obj = new TestData();
                $obj->deserialize($value);
                array_push($this->Datasets, $obj);
            }
        }

        if (array_key_exists("Extensions",$param) and $param["Extensions"] !== null) {
            $this->Extensions = $param["Extensions"];
        }

        if (array_key_exists("SLAId",$param) and $param["SLAId"] !== null) {
            $this->SLAId = $param["SLAId"];
        }

        if (array_key_exists("CronId",$param) and $param["CronId"] !== null) {
            $this->CronId = $param["CronId"];
        }

        if (array_key_exists("Scripts",$param) and $param["Scripts"] !== null) {
            $this->Scripts = $param["Scripts"];
        }

        if (array_key_exists("TestScripts",$param) and $param["TestScripts"] !== null) {
            $this->TestScripts = [];
            foreach ($param["TestScripts"] as $key => $value){
                $obj = new ScriptInfo();
                $obj->deserialize($value);
                array_push($this->TestScripts, $obj);
            }
        }

        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = [];
            foreach ($param["Protocols"] as $key => $value){
                $obj = new ProtocolInfo();
                $obj->deserialize($value);
                array_push($this->Protocols, $obj);
            }
        }

        if (array_key_exists("RequestFiles",$param) and $param["RequestFiles"] !== null) {
            $this->RequestFiles = [];
            foreach ($param["RequestFiles"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->RequestFiles, $obj);
            }
        }

        if (array_key_exists("SLAPolicy",$param) and $param["SLAPolicy"] !== null) {
            $this->SLAPolicy = new SLAPolicy();
            $this->SLAPolicy->deserialize($param["SLAPolicy"]);
        }

        if (array_key_exists("Plugins",$param) and $param["Plugins"] !== null) {
            $this->Plugins = [];
            foreach ($param["Plugins"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->Plugins, $obj);
            }
        }

        if (array_key_exists("DomainNameConfig",$param) and $param["DomainNameConfig"] !== null) {
            $this->DomainNameConfig = new DomainNameConfig();
            $this->DomainNameConfig->deserialize($param["DomainNameConfig"]);
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }
    }
}
