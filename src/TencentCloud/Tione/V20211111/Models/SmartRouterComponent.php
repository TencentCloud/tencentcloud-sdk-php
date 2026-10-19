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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能路由组件（运行时视图，对齐 ModelService.RoleSpec + ServiceInfo.Status）
 *
 * @method string getName() 获取<p>组件名称：{ServiceGroupId}-gateway / {ServiceGroupId}-scheduler</p>
 * @method void setName(string $Name) 设置<p>组件名称：{ServiceGroupId}-gateway / {ServiceGroupId}-scheduler</p>
 * @method string getType() 获取<p>组件类型：&quot;Gateway&quot; / &quot;Scheduler&quot;</p>
 * @method void setType(string $Type) 设置<p>组件类型：&quot;Gateway&quot; / &quot;Scheduler&quot;</p>
 * @method ImageInfo getImageInfo() 获取<p>组件镜像（从 K8s Deployment 实时查询）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置<p>组件镜像（从 K8s Deployment 实时查询）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartRouterResourceConfig getResourceConfig() 获取<p>期望配置（Replicas/Cpu/Memory/Env）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceConfig(SmartRouterResourceConfig $ResourceConfig) 设置<p>期望配置（Replicas/Cpu/Memory/Env）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>组件状态：CREATING 创建中 / CREATE_FAILED 创建失败 / Normal 正常运行中 / Stopped 已停止 / Stopping 停止中 / Abnormal 异常 / Pending 启动中 / Waiting 就绪中</p>
 * @method void setStatus(string $Status) 设置<p>组件状态：CREATING 创建中 / CREATE_FAILED 创建失败 / Normal 正常运行中 / Stopped 已停止 / Stopping 停止中 / Abnormal 异常 / Pending 启动中 / Waiting 就绪中</p>
 * @method SmartRouterResourceSpec getResourceSpec() 获取<p>资源规格（查询时回显用户创建/修改时的资源选择）。公有云场景展示：ChargeType / Zone / ResourceSupplyAttribute；内网版场景展示：QueueId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceSpec(SmartRouterResourceSpec $ResourceSpec) 设置<p>资源规格（查询时回显用户创建/修改时的资源选择）。公有云场景展示：ChargeType / Zone / ResourceSupplyAttribute；内网版场景展示：QueueId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessStatus() 获取<p>业务状态（组件级计费状态，Gateway/Scheduler 独立判定）：Billing 计费中 / Normal 正常（未计费或已停止计费）/ WhitelistUsing 白名单使用中（免计费）</p>
 * @method void setBusinessStatus(string $BusinessStatus) 设置<p>业务状态（组件级计费状态，Gateway/Scheduler 独立判定）：Billing 计费中 / Normal 正常（未计费或已停止计费）/ WhitelistUsing 白名单使用中（免计费）</p>
 * @method string getBillingInfo() 获取<p>费用信息（组件级计费明细 JSON 字符串，格式与 Service.BillingInfo 一致，前端可复用同一渲染逻辑）</p>
 * @method void setBillingInfo(string $BillingInfo) 设置<p>费用信息（组件级计费明细 JSON 字符串，格式与 Service.BillingInfo 一致，前端可复用同一渲染逻辑）</p>
 */
class SmartRouterComponent extends AbstractModel
{
    /**
     * @var string <p>组件名称：{ServiceGroupId}-gateway / {ServiceGroupId}-scheduler</p>
     */
    public $Name;

    /**
     * @var string <p>组件类型：&quot;Gateway&quot; / &quot;Scheduler&quot;</p>
     */
    public $Type;

    /**
     * @var ImageInfo <p>组件镜像（从 K8s Deployment 实时查询）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageInfo;

    /**
     * @var SmartRouterResourceConfig <p>期望配置（Replicas/Cpu/Memory/Env）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceConfig;

    /**
     * @var string <p>组件状态：CREATING 创建中 / CREATE_FAILED 创建失败 / Normal 正常运行中 / Stopped 已停止 / Stopping 停止中 / Abnormal 异常 / Pending 启动中 / Waiting 就绪中</p>
     */
    public $Status;

    /**
     * @var SmartRouterResourceSpec <p>资源规格（查询时回显用户创建/修改时的资源选择）。公有云场景展示：ChargeType / Zone / ResourceSupplyAttribute；内网版场景展示：QueueId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceSpec;

    /**
     * @var string <p>业务状态（组件级计费状态，Gateway/Scheduler 独立判定）：Billing 计费中 / Normal 正常（未计费或已停止计费）/ WhitelistUsing 白名单使用中（免计费）</p>
     */
    public $BusinessStatus;

    /**
     * @var string <p>费用信息（组件级计费明细 JSON 字符串，格式与 Service.BillingInfo 一致，前端可复用同一渲染逻辑）</p>
     */
    public $BillingInfo;

    /**
     * @param string $Name <p>组件名称：{ServiceGroupId}-gateway / {ServiceGroupId}-scheduler</p>
     * @param string $Type <p>组件类型：&quot;Gateway&quot; / &quot;Scheduler&quot;</p>
     * @param ImageInfo $ImageInfo <p>组件镜像（从 K8s Deployment 实时查询）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartRouterResourceConfig $ResourceConfig <p>期望配置（Replicas/Cpu/Memory/Env）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>组件状态：CREATING 创建中 / CREATE_FAILED 创建失败 / Normal 正常运行中 / Stopped 已停止 / Stopping 停止中 / Abnormal 异常 / Pending 启动中 / Waiting 就绪中</p>
     * @param SmartRouterResourceSpec $ResourceSpec <p>资源规格（查询时回显用户创建/修改时的资源选择）。公有云场景展示：ChargeType / Zone / ResourceSupplyAttribute；内网版场景展示：QueueId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessStatus <p>业务状态（组件级计费状态，Gateway/Scheduler 独立判定）：Billing 计费中 / Normal 正常（未计费或已停止计费）/ WhitelistUsing 白名单使用中（免计费）</p>
     * @param string $BillingInfo <p>费用信息（组件级计费明细 JSON 字符串，格式与 Service.BillingInfo 一致，前端可复用同一渲染逻辑）</p>
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

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new SmartRouterResourceConfig();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new SmartRouterResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("BusinessStatus",$param) and $param["BusinessStatus"] !== null) {
            $this->BusinessStatus = $param["BusinessStatus"];
        }

        if (array_key_exists("BillingInfo",$param) and $param["BillingInfo"] !== null) {
            $this->BillingInfo = $param["BillingInfo"];
        }
    }
}
