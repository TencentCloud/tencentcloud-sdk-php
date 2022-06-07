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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源组节点信息
 *
 * @method string getInstanceId() 获取资源组节点id
 * @method void setInstanceId(string $InstanceId) 设置资源组节点id
 * @method ResourceInfo getUsedResource() 获取节点已用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedResource(ResourceInfo $UsedResource) 设置节点已用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceInfo getTotalResource() 获取节点总资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalResource(ResourceInfo $TotalResource) 设置节点总资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatus() 获取节点状态 
注意：此字段为枚举值
说明: 
DEPLOYING: 部署中
RUNNING: 运行中 
DEPLOY_FAILED: 部署失败
 RELEASING 释放中 
RELEASED：已释放 
EXCEPTION：异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(string $InstanceStatus) 设置节点状态 
注意：此字段为枚举值
说明: 
DEPLOYING: 部署中
RUNNING: 运行中 
DEPLOY_FAILED: 部署失败
 RELEASING 释放中 
RELEASED：已释放 
EXCEPTION：异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUin() 获取创建人
 * @method void setSubUin(string $SubUin) 设置创建人
 * @method string getCreateTime() 获取创建时间: 
注意：北京时间，比如: 2021-12-01 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间: 
注意：北京时间，比如: 2021-12-01 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取到期时间
注意：北京时间，比如：2021-12-11 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置到期时间
注意：北京时间，比如：2021-12-11 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoRenewFlag() 获取自动续费标识
注意：此字段为枚举值
说明：
NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期通知
NOTIFY_AND_AUTO_RENEW：自动续费且到期通知
DISABLE_NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期不通知
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(string $AutoRenewFlag) 设置自动续费标识
注意：此字段为枚举值
说明：
NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期通知
NOTIFY_AND_AUTO_RENEW：自动续费且到期通知
DISABLE_NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期不通知
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecId() 获取计费项ID
 * @method void setSpecId(string $SpecId) 设置计费项ID
 * @method string getSpecAlias() 获取计费项别名
 * @method void setSpecAlias(string $SpecAlias) 设置计费项别名
 */
class Instance extends AbstractModel
{
    /**
     * @var string 资源组节点id
     */
    public $InstanceId;

    /**
     * @var ResourceInfo 节点已用资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedResource;

    /**
     * @var ResourceInfo 节点总资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalResource;

    /**
     * @var string 节点状态 
注意：此字段为枚举值
说明: 
DEPLOYING: 部署中
RUNNING: 运行中 
DEPLOY_FAILED: 部署失败
 RELEASING 释放中 
RELEASED：已释放 
EXCEPTION：异常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var string 创建人
     */
    public $SubUin;

    /**
     * @var string 创建时间: 
注意：北京时间，比如: 2021-12-01 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 到期时间
注意：北京时间，比如：2021-12-11 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 自动续费标识
注意：此字段为枚举值
说明：
NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期通知
NOTIFY_AND_AUTO_RENEW：自动续费且到期通知
DISABLE_NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期不通知
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string 计费项ID
     */
    public $SpecId;

    /**
     * @var string 计费项别名
     */
    public $SpecAlias;

    /**
     * @param string $InstanceId 资源组节点id
     * @param ResourceInfo $UsedResource 节点已用资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceInfo $TotalResource 节点总资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatus 节点状态 
注意：此字段为枚举值
说明: 
DEPLOYING: 部署中
RUNNING: 运行中 
DEPLOY_FAILED: 部署失败
 RELEASING 释放中 
RELEASED：已释放 
EXCEPTION：异常
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin 创建人
     * @param string $CreateTime 创建时间: 
注意：北京时间，比如: 2021-12-01 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 到期时间
注意：北京时间，比如：2021-12-11 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoRenewFlag 自动续费标识
注意：此字段为枚举值
说明：
NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期通知
NOTIFY_AND_AUTO_RENEW：自动续费且到期通知
DISABLE_NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期不通知
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecId 计费项ID
     * @param string $SpecAlias 计费项别名
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UsedResource",$param) and $param["UsedResource"] !== null) {
            $this->UsedResource = new ResourceInfo();
            $this->UsedResource->deserialize($param["UsedResource"]);
        }

        if (array_key_exists("TotalResource",$param) and $param["TotalResource"] !== null) {
            $this->TotalResource = new ResourceInfo();
            $this->TotalResource->deserialize($param["TotalResource"]);
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("SpecAlias",$param) and $param["SpecAlias"] !== null) {
            $this->SpecAlias = $param["SpecAlias"];
        }
    }
}
