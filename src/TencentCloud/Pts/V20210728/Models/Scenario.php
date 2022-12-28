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
 * 场景列表
 *
 * @method string getScenarioId() 获取场景ID
 * @method void setScenarioId(string $ScenarioId) 设置场景ID
 * @method string getName() 获取场景名
 * @method void setName(string $Name) 设置场景名
 * @method string getDescription() 获取场景描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置场景描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取场景类型，如pts-http, pts-js, pts-trpc, pts-jmeter
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置场景类型，如pts-http, pts-js, pts-trpc, pts-jmeter
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取场景状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置场景状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method Load getLoad() 获取施压配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoad(Load $Load) 设置施压配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncodedScripts() 获取deprecated
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncodedScripts(string $EncodedScripts) 设置deprecated
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfigs() 获取deprecated
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigs(array $Configs) 设置deprecated
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtensions() 获取deprecated
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtensions(array $Extensions) 设置deprecated
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatasets() 获取测试数据集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasets(array $Datasets) 设置测试数据集
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSLAId() 获取SLA规则的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSLAId(string $SLAId) 设置SLA规则的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCronId() 获取Cron Job规则的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronId(string $CronId) 设置Cron Job规则的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取场景创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置场景创建时间
 * @method string getUpdatedAt() 获取场景修改时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置场景修改时间
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取App ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置App ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取子用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置子用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTestScripts() 获取测试脚本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTestScripts(array $TestScripts) 设置测试脚本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtocols() 获取协议文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocols(array $Protocols) 设置协议文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRequestFiles() 获取请求文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestFiles(array $RequestFiles) 设置请求文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method SLAPolicy getSLAPolicy() 获取SLA 策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSLAPolicy(SLAPolicy $SLAPolicy) 设置SLA 策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPlugins() 获取扩展包信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlugins(array $Plugins) 设置扩展包信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DomainNameConfig getDomainNameConfig() 获取域名解析配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainNameConfig(DomainNameConfig $DomainNameConfig) 设置域名解析配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNotificationHooks() 获取通知事件回调
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotificationHooks(array $NotificationHooks) 设置通知事件回调
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取创建人员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置创建人员
注意：此字段可能返回 null，表示取不到有效值。
 */
class Scenario extends AbstractModel
{
    /**
     * @var string 场景ID
     */
    public $ScenarioId;

    /**
     * @var string 场景名
     */
    public $Name;

    /**
     * @var string 场景描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 场景类型，如pts-http, pts-js, pts-trpc, pts-jmeter
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 场景状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var Load 施压配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Load;

    /**
     * @var string deprecated
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncodedScripts;

    /**
     * @var array deprecated
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Configs;

    /**
     * @var array deprecated
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extensions;

    /**
     * @var array 测试数据集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Datasets;

    /**
     * @var string SLA规则的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SLAId;

    /**
     * @var string Cron Job规则的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronId;

    /**
     * @var string 场景创建时间
     */
    public $CreatedAt;

    /**
     * @var string 场景修改时间
     */
    public $UpdatedAt;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer App ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 子用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var array 测试脚本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TestScripts;

    /**
     * @var array 协议文件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocols;

    /**
     * @var array 请求文件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestFiles;

    /**
     * @var SLAPolicy SLA 策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SLAPolicy;

    /**
     * @var array 扩展包信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Plugins;

    /**
     * @var DomainNameConfig 域名解析配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainNameConfig;

    /**
     * @var array 通知事件回调
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotificationHooks;

    /**
     * @var string 创建人员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @param string $ScenarioId 场景ID
     * @param string $Name 场景名
     * @param string $Description 场景描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 场景类型，如pts-http, pts-js, pts-trpc, pts-jmeter
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 场景状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param Load $Load 施压配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncodedScripts deprecated
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Configs deprecated
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Extensions deprecated
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Datasets 测试数据集
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SLAId SLA规则的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CronId Cron Job规则的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 场景创建时间
     * @param string $UpdatedAt 场景修改时间
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId App ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 子用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TestScripts 测试脚本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Protocols 协议文件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RequestFiles 请求文件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param SLAPolicy $SLAPolicy SLA 策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Plugins 扩展包信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DomainNameConfig $DomainNameConfig 域名解析配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NotificationHooks 通知事件回调
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 创建人员
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Load",$param) and $param["Load"] !== null) {
            $this->Load = new Load();
            $this->Load->deserialize($param["Load"]);
        }

        if (array_key_exists("EncodedScripts",$param) and $param["EncodedScripts"] !== null) {
            $this->EncodedScripts = $param["EncodedScripts"];
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = $param["Configs"];
        }

        if (array_key_exists("Extensions",$param) and $param["Extensions"] !== null) {
            $this->Extensions = $param["Extensions"];
        }

        if (array_key_exists("Datasets",$param) and $param["Datasets"] !== null) {
            $this->Datasets = [];
            foreach ($param["Datasets"] as $key => $value){
                $obj = new TestData();
                $obj->deserialize($value);
                array_push($this->Datasets, $obj);
            }
        }

        if (array_key_exists("SLAId",$param) and $param["SLAId"] !== null) {
            $this->SLAId = $param["SLAId"];
        }

        if (array_key_exists("CronId",$param) and $param["CronId"] !== null) {
            $this->CronId = $param["CronId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
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

        if (array_key_exists("NotificationHooks",$param) and $param["NotificationHooks"] !== null) {
            $this->NotificationHooks = [];
            foreach ($param["NotificationHooks"] as $key => $value){
                $obj = new NotificationHook();
                $obj->deserialize($value);
                array_push($this->NotificationHooks, $obj);
            }
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }
    }
}
