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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境信息。
 *
 * @method string getEnvId() 获取环境 ID。
 * @method void setEnvId(string $EnvId) 设置环境 ID。
 * @method string getEnvType() 获取环境类型，取值有：
<li>production: 生产环境；</li><li>staging: 测试环境。</li>
 * @method void setEnvType(string $EnvType) 设置环境类型，取值有：
<li>production: 生产环境；</li><li>staging: 测试环境。</li>
 * @method string getStatus() 获取环境状态，取值有：
<li>creating：创建中；</li>
<li>running：稳定运行中，可进行版本变更；</li>
<li>version_deploying：版本部署中，不能进行新的变更。</li>
 * @method void setStatus(string $Status) 设置环境状态，取值有：
<li>creating：创建中；</li>
<li>running：稳定运行中，可进行版本变更；</li>
<li>version_deploying：版本部署中，不能进行新的变更。</li>
 * @method array getScope() 获取当前环境的配置生效范围：
<li>当 EnvType 取值为 production 时，该参数值为 ["ALL"]，代表全网生效；</li>
<li>当 EnvType 取值为 staging 时，会返回测试节点 IP，可用于绑定 host 测试。</li>
 * @method void setScope(array $Scope) 设置当前环境的配置生效范围：
<li>当 EnvType 取值为 production 时，该参数值为 ["ALL"]，代表全网生效；</li>
<li>当 EnvType 取值为 staging 时，会返回测试节点 IP，可用于绑定 host 测试。</li>
 * @method array getCurrentConfigGroupVersionInfos() 获取当前环境中各配置组实际生效的版本，根据 Status 的取值有以下两种情况：
<li>当 Status 取值为 version_deploying 时，本字段返回的值为执行变更动作之前生效的版本，即新版本部署期间，实际生效的版本为执行变更动作之前的版本；</li>
<li>当 Status 取值为 running 时，本字段返回的值即为当前实际生效的版本。</li>
 * @method void setCurrentConfigGroupVersionInfos(array $CurrentConfigGroupVersionInfos) 设置当前环境中各配置组实际生效的版本，根据 Status 的取值有以下两种情况：
<li>当 Status 取值为 version_deploying 时，本字段返回的值为执行变更动作之前生效的版本，即新版本部署期间，实际生效的版本为执行变更动作之前的版本；</li>
<li>当 Status 取值为 running 时，本字段返回的值即为当前实际生效的版本。</li>
 * @method string getCreateTime() 获取创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method string getUpdateTime() 获取更新时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 */
class EnvInfo extends AbstractModel
{
    /**
     * @var string 环境 ID。
     */
    public $EnvId;

    /**
     * @var string 环境类型，取值有：
<li>production: 生产环境；</li><li>staging: 测试环境。</li>
     */
    public $EnvType;

    /**
     * @var string 环境状态，取值有：
<li>creating：创建中；</li>
<li>running：稳定运行中，可进行版本变更；</li>
<li>version_deploying：版本部署中，不能进行新的变更。</li>
     */
    public $Status;

    /**
     * @var array 当前环境的配置生效范围：
<li>当 EnvType 取值为 production 时，该参数值为 ["ALL"]，代表全网生效；</li>
<li>当 EnvType 取值为 staging 时，会返回测试节点 IP，可用于绑定 host 测试。</li>
     */
    public $Scope;

    /**
     * @var array 当前环境中各配置组实际生效的版本，根据 Status 的取值有以下两种情况：
<li>当 Status 取值为 version_deploying 时，本字段返回的值为执行变更动作之前生效的版本，即新版本部署期间，实际生效的版本为执行变更动作之前的版本；</li>
<li>当 Status 取值为 running 时，本字段返回的值即为当前实际生效的版本。</li>
     */
    public $CurrentConfigGroupVersionInfos;

    /**
     * @var string 创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $UpdateTime;

    /**
     * @param string $EnvId 环境 ID。
     * @param string $EnvType 环境类型，取值有：
<li>production: 生产环境；</li><li>staging: 测试环境。</li>
     * @param string $Status 环境状态，取值有：
<li>creating：创建中；</li>
<li>running：稳定运行中，可进行版本变更；</li>
<li>version_deploying：版本部署中，不能进行新的变更。</li>
     * @param array $Scope 当前环境的配置生效范围：
<li>当 EnvType 取值为 production 时，该参数值为 ["ALL"]，代表全网生效；</li>
<li>当 EnvType 取值为 staging 时，会返回测试节点 IP，可用于绑定 host 测试。</li>
     * @param array $CurrentConfigGroupVersionInfos 当前环境中各配置组实际生效的版本，根据 Status 的取值有以下两种情况：
<li>当 Status 取值为 version_deploying 时，本字段返回的值为执行变更动作之前生效的版本，即新版本部署期间，实际生效的版本为执行变更动作之前的版本；</li>
<li>当 Status 取值为 running 时，本字段返回的值即为当前实际生效的版本。</li>
     * @param string $CreateTime 创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     * @param string $UpdateTime 更新时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("CurrentConfigGroupVersionInfos",$param) and $param["CurrentConfigGroupVersionInfos"] !== null) {
            $this->CurrentConfigGroupVersionInfos = [];
            foreach ($param["CurrentConfigGroupVersionInfos"] as $key => $value){
                $obj = new ConfigGroupVersionInfo();
                $obj->deserialize($value);
                array_push($this->CurrentConfigGroupVersionInfos, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
