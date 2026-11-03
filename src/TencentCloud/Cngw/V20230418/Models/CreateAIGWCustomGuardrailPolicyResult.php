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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建自定义安全护栏策略结果
 *
 * @method boolean getSuccess() 获取<p>本次配置同步是否全部成功。即使云 API 未返回 Response.Error，仍须检查此值、SyncStatus 和 FailedResources。</p>
 * @method void setSuccess(boolean $Success) 设置<p>本次配置同步是否全部成功。即使云 API 未返回 Response.Error，仍须检查此值、SyncStatus 和 FailedResources。</p>
 * @method string getPolicyId() 获取<p>新建策略 ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>新建策略 ID</p>
 * @method array getAddedResources() 获取<p>本次同步成功的业务资源引用；Modify 返回的不是严格的新增差集。</p>
 * @method void setAddedResources(array $AddedResources) 设置<p>本次同步成功的业务资源引用；Modify 返回的不是严格的新增差集。</p>
 * @method array getFailedResources() 获取<p>失败资源及原因；非空表示配置同步仍需处理，不要因 HTTP 200 判定全部成功。</p>
 * @method void setFailedResources(array $FailedResources) 设置<p>失败资源及原因；非空表示配置同步仍需处理，不要因 HTTP 200 判定全部成功。</p>
 * @method string getSyncStatus() 获取<p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
 * @method void setSyncStatus(string $SyncStatus) 设置<p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
 */
class CreateAIGWCustomGuardrailPolicyResult extends AbstractModel
{
    /**
     * @var boolean <p>本次配置同步是否全部成功。即使云 API 未返回 Response.Error，仍须检查此值、SyncStatus 和 FailedResources。</p>
     */
    public $Success;

    /**
     * @var string <p>新建策略 ID</p>
     */
    public $PolicyId;

    /**
     * @var array <p>本次同步成功的业务资源引用；Modify 返回的不是严格的新增差集。</p>
     */
    public $AddedResources;

    /**
     * @var array <p>失败资源及原因；非空表示配置同步仍需处理，不要因 HTTP 200 判定全部成功。</p>
     */
    public $FailedResources;

    /**
     * @var string <p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
     */
    public $SyncStatus;

    /**
     * @param boolean $Success <p>本次配置同步是否全部成功。即使云 API 未返回 Response.Error，仍须检查此值、SyncStatus 和 FailedResources。</p>
     * @param string $PolicyId <p>新建策略 ID</p>
     * @param array $AddedResources <p>本次同步成功的业务资源引用；Modify 返回的不是严格的新增差集。</p>
     * @param array $FailedResources <p>失败资源及原因；非空表示配置同步仍需处理，不要因 HTTP 200 判定全部成功。</p>
     * @param string $SyncStatus <p>同步状态：pending 待同步，synced 已完成本次配置同步，partial 部分失败，failed 失败。需结合 FailedResources/SyncError；synced 不等于已完成所有数据面实例的业务端到端验证。</p>
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
        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("AddedResources",$param) and $param["AddedResources"] !== null) {
            $this->AddedResources = [];
            foreach ($param["AddedResources"] as $key => $value){
                $obj = new CustomGuardrailResourceRef();
                $obj->deserialize($value);
                array_push($this->AddedResources, $obj);
            }
        }

        if (array_key_exists("FailedResources",$param) and $param["FailedResources"] !== null) {
            $this->FailedResources = [];
            foreach ($param["FailedResources"] as $key => $value){
                $obj = new CustomGuardrailSyncFailure();
                $obj->deserialize($value);
                array_push($this->FailedResources, $obj);
            }
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }
    }
}
