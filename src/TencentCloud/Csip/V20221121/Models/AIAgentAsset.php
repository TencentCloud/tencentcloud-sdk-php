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
 * @method string getID() 获取ID 标识
 * @method void setID(string $ID) 设置ID 标识
 * @method string getAgentName() 获取agent 名称
 * @method void setAgentName(string $AgentName) 设置agent 名称
 * @method array getAgentModel() 获取agent 使用模型名称
 * @method void setAgentModel(array $AgentModel) 设置agent 使用模型名称
 * @method string getInstanceID() 获取实例 ID
 * @method void setInstanceID(string $InstanceID) 设置实例 ID
 * @method array getMetadataRiskList() 获取metadata 风险列表。有如下枚举值: 1. AK_TMP  2. USER_DATA
 * @method void setMetadataRiskList(array $MetadataRiskList) 设置metadata 风险列表。有如下枚举值: 1. AK_TMP  2. USER_DATA
 * @method string getIdentityTimeFirst() 获取首次检出时间
 * @method void setIdentityTimeFirst(string $IdentityTimeFirst) 设置首次检出时间
 * @method string getIdentityTimeLast() 获取最近检出时间
 * @method void setIdentityTimeLast(string $IdentityTimeLast) 设置最近检出时间
 * @method string getIdentityMethod() 获取检出方式。有如下枚举值 1. FINGER 资产指纹方式检出 2. NETWORK 网络访问方式检出
 * @method void setIdentityMethod(string $IdentityMethod) 设置检出方式。有如下枚举值 1. FINGER 资产指纹方式检出 2. NETWORK 网络访问方式检出
 * @method string getExposureStatus() 获取暴露状态。有如下枚举值。1. EXPOSED；2.UNEXPOSED；
3. UNKNOWN;
 * @method void setExposureStatus(string $ExposureStatus) 设置暴露状态。有如下枚举值。1. EXPOSED；2.UNEXPOSED；
3. UNKNOWN;
 * @method string getMetadataRiskURL() 获取metadata 有风险时对应路径
 * @method void setMetadataRiskURL(string $MetadataRiskURL) 设置metadata 有风险时对应路径
 */
class AIAgentAsset extends AbstractModel
{
    /**
     * @var string ID 标识
     */
    public $ID;

    /**
     * @var string agent 名称
     */
    public $AgentName;

    /**
     * @var array agent 使用模型名称
     */
    public $AgentModel;

    /**
     * @var string 实例 ID
     */
    public $InstanceID;

    /**
     * @var array metadata 风险列表。有如下枚举值: 1. AK_TMP  2. USER_DATA
     */
    public $MetadataRiskList;

    /**
     * @var string 首次检出时间
     */
    public $IdentityTimeFirst;

    /**
     * @var string 最近检出时间
     */
    public $IdentityTimeLast;

    /**
     * @var string 检出方式。有如下枚举值 1. FINGER 资产指纹方式检出 2. NETWORK 网络访问方式检出
     */
    public $IdentityMethod;

    /**
     * @var string 暴露状态。有如下枚举值。1. EXPOSED；2.UNEXPOSED；
3. UNKNOWN;
     */
    public $ExposureStatus;

    /**
     * @var string metadata 有风险时对应路径
     */
    public $MetadataRiskURL;

    /**
     * @param string $ID ID 标识
     * @param string $AgentName agent 名称
     * @param array $AgentModel agent 使用模型名称
     * @param string $InstanceID 实例 ID
     * @param array $MetadataRiskList metadata 风险列表。有如下枚举值: 1. AK_TMP  2. USER_DATA
     * @param string $IdentityTimeFirst 首次检出时间
     * @param string $IdentityTimeLast 最近检出时间
     * @param string $IdentityMethod 检出方式。有如下枚举值 1. FINGER 资产指纹方式检出 2. NETWORK 网络访问方式检出
     * @param string $ExposureStatus 暴露状态。有如下枚举值。1. EXPOSED；2.UNEXPOSED；
3. UNKNOWN;
     * @param string $MetadataRiskURL metadata 有风险时对应路径
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
    }
}
