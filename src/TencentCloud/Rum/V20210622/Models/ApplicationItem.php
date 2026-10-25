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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method string getProjectKey() 获取<p>应用 Key</p>
 * @method void setProjectKey(string $ProjectKey) 设置<p>应用 Key</p>
 * @method string getInstanceId() 获取<p>业务系统 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID</p>
 * @method string getInstanceName() 获取<p>业务系统名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>业务系统名称</p>
 * @method string getName() 获取<p>应用名称</p>
 * @method void setName(string $Name) 设置<p>应用名称</p>
 * @method string getType() 获取<p>端类型</p>
 * @method void setType(string $Type) 设置<p>端类型</p>
 * @method string getDesc() 获取<p>描述</p>
 * @method void setDesc(string $Desc) 设置<p>描述</p>
 * @method boolean getExcludeIgnoredErrors() 获取<p>是否排除已忽略错误</p>
 * @method void setExcludeIgnoredErrors(boolean $ExcludeIgnoredErrors) 设置<p>是否排除已忽略错误</p>
 * @method integer getStatus() 获取<p>状态：2 运行 / 6 停止 / 7 删除</p>
 * @method void setStatus(integer $Status) 设置<p>状态：2 运行 / 6 停止 / 7 删除</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method array getApmInstanceIds() 获取<p>该应用绑定的腾讯云 APM 实例 ID 列表。空数组表示未绑定。</p>
 * @method void setApmInstanceIds(array $ApmInstanceIds) 设置<p>该应用绑定的腾讯云 APM 实例 ID 列表。空数组表示未绑定。</p>
 */
class ApplicationItem extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var string <p>应用 Key</p>
     */
    public $ProjectKey;

    /**
     * @var string <p>业务系统 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>业务系统名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>应用名称</p>
     */
    public $Name;

    /**
     * @var string <p>端类型</p>
     */
    public $Type;

    /**
     * @var string <p>描述</p>
     */
    public $Desc;

    /**
     * @var boolean <p>是否排除已忽略错误</p>
     */
    public $ExcludeIgnoredErrors;

    /**
     * @var integer <p>状态：2 运行 / 6 停止 / 7 删除</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var array <p>该应用绑定的腾讯云 APM 实例 ID 列表。空数组表示未绑定。</p>
     */
    public $ApmInstanceIds;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param string $ProjectKey <p>应用 Key</p>
     * @param string $InstanceId <p>业务系统 ID</p>
     * @param string $InstanceName <p>业务系统名称</p>
     * @param string $Name <p>应用名称</p>
     * @param string $Type <p>端类型</p>
     * @param string $Desc <p>描述</p>
     * @param boolean $ExcludeIgnoredErrors <p>是否排除已忽略错误</p>
     * @param integer $Status <p>状态：2 运行 / 6 停止 / 7 删除</p>
     * @param string $CreatedAt <p>创建时间</p>
     * @param array $ApmInstanceIds <p>该应用绑定的腾讯云 APM 实例 ID 列表。空数组表示未绑定。</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectKey",$param) and $param["ProjectKey"] !== null) {
            $this->ProjectKey = $param["ProjectKey"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ExcludeIgnoredErrors",$param) and $param["ExcludeIgnoredErrors"] !== null) {
            $this->ExcludeIgnoredErrors = $param["ExcludeIgnoredErrors"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ApmInstanceIds",$param) and $param["ApmInstanceIds"] !== null) {
            $this->ApmInstanceIds = $param["ApmInstanceIds"];
        }
    }
}
