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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ai Agent 资产信息列表项
 *
 * @method string getID() 获取<p>ID 标识</p>
 * @method void setID(string $ID) 设置<p>ID 标识</p>
 * @method string getAgentName() 获取<p>agent 名称</p>
 * @method void setAgentName(string $AgentName) 设置<p>agent 名称</p>
 * @method array getAgentModel() 获取<p>agent 使用模型名称</p>
 * @method void setAgentModel(array $AgentModel) 设置<p>agent 使用模型名称</p>
 * @method string getInstanceID() 获取<p>实例 ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例 ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method array getMetadataRiskList() 获取<p>metadata 风险列表。有如下枚举值: 1. AK_TMP  2. USER_DATA</p>
 * @method void setMetadataRiskList(array $MetadataRiskList) 设置<p>metadata 风险列表。有如下枚举值: 1. AK_TMP  2. USER_DATA</p>
 * @method string getIdentityTimeFirst() 获取<p>首次检出时间</p>
 * @method void setIdentityTimeFirst(string $IdentityTimeFirst) 设置<p>首次检出时间</p>
 * @method string getIdentityTimeLast() 获取<p>最近检出时间</p>
 * @method void setIdentityTimeLast(string $IdentityTimeLast) 设置<p>最近检出时间</p>
 * @method string getIdentityMethod() 获取<p>检出方式。有如下枚举值 1. FINGER 资产指纹方式检出 2. NETWORK 网络访问方式检出</p>
 * @method void setIdentityMethod(string $IdentityMethod) 设置<p>检出方式。有如下枚举值 1. FINGER 资产指纹方式检出 2. NETWORK 网络访问方式检出</p>
 * @method string getExposureStatus() 获取<p>暴露状态。有如下枚举值。1. EXPOSED；2.UNEXPOSED；</p><ol start="3"><li>UNKNOWN;</li></ol>
 * @method void setExposureStatus(string $ExposureStatus) 设置<p>暴露状态。有如下枚举值。1. EXPOSED；2.UNEXPOSED；</p><ol start="3"><li>UNKNOWN;</li></ol>
 * @method string getMetadataRiskURL() 获取<p>metadata 有风险时对应路径</p>
 * @method void setMetadataRiskURL(string $MetadataRiskURL) 设置<p>metadata 有风险时对应路径</p>
 * @method SkillState getSkillState() 获取<p>无</p>
 * @method void setSkillState(SkillState $SkillState) 设置<p>无</p>
 */
class AIAgentAsset extends AbstractModel
{
    /**
     * @var string <p>ID 标识</p>
     */
    public $ID;

    /**
     * @var string <p>agent 名称</p>
     */
    public $AgentName;

    /**
     * @var array <p>agent 使用模型名称</p>
     */
    public $AgentModel;

    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var array <p>metadata 风险列表。有如下枚举值: 1. AK_TMP  2. USER_DATA</p>
     */
    public $MetadataRiskList;

    /**
     * @var string <p>首次检出时间</p>
     */
    public $IdentityTimeFirst;

    /**
     * @var string <p>最近检出时间</p>
     */
    public $IdentityTimeLast;

    /**
     * @var string <p>检出方式。有如下枚举值 1. FINGER 资产指纹方式检出 2. NETWORK 网络访问方式检出</p>
     */
    public $IdentityMethod;

    /**
     * @var string <p>暴露状态。有如下枚举值。1. EXPOSED；2.UNEXPOSED；</p><ol start="3"><li>UNKNOWN;</li></ol>
     */
    public $ExposureStatus;

    /**
     * @var string <p>metadata 有风险时对应路径</p>
     */
    public $MetadataRiskURL;

    /**
     * @var SkillState <p>无</p>
     */
    public $SkillState;

    /**
     * @param string $ID <p>ID 标识</p>
     * @param string $AgentName <p>agent 名称</p>
     * @param array $AgentModel <p>agent 使用模型名称</p>
     * @param string $InstanceID <p>实例 ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param array $MetadataRiskList <p>metadata 风险列表。有如下枚举值: 1. AK_TMP  2. USER_DATA</p>
     * @param string $IdentityTimeFirst <p>首次检出时间</p>
     * @param string $IdentityTimeLast <p>最近检出时间</p>
     * @param string $IdentityMethod <p>检出方式。有如下枚举值 1. FINGER 资产指纹方式检出 2. NETWORK 网络访问方式检出</p>
     * @param string $ExposureStatus <p>暴露状态。有如下枚举值。1. EXPOSED；2.UNEXPOSED；</p><ol start="3"><li>UNKNOWN;</li></ol>
     * @param string $MetadataRiskURL <p>metadata 有风险时对应路径</p>
     * @param SkillState $SkillState <p>无</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("AgentModel",$param) and $param["AgentModel"] !== null) {
            $this->AgentModel = $param["AgentModel"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("MetadataRiskList",$param) and $param["MetadataRiskList"] !== null) {
            $this->MetadataRiskList = $param["MetadataRiskList"];
        }

        if (array_key_exists("IdentityTimeFirst",$param) and $param["IdentityTimeFirst"] !== null) {
            $this->IdentityTimeFirst = $param["IdentityTimeFirst"];
        }

        if (array_key_exists("IdentityTimeLast",$param) and $param["IdentityTimeLast"] !== null) {
            $this->IdentityTimeLast = $param["IdentityTimeLast"];
        }

        if (array_key_exists("IdentityMethod",$param) and $param["IdentityMethod"] !== null) {
            $this->IdentityMethod = $param["IdentityMethod"];
        }

        if (array_key_exists("ExposureStatus",$param) and $param["ExposureStatus"] !== null) {
            $this->ExposureStatus = $param["ExposureStatus"];
        }

        if (array_key_exists("MetadataRiskURL",$param) and $param["MetadataRiskURL"] !== null) {
            $this->MetadataRiskURL = $param["MetadataRiskURL"];
        }

        if (array_key_exists("SkillState",$param) and $param["SkillState"] !== null) {
            $this->SkillState = new SkillState();
            $this->SkillState->deserialize($param["SkillState"]);
        }
    }
}
