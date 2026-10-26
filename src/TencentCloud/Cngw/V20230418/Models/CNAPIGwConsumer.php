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
 * 消费者结构
 *
 * @method string getConsumerId() 获取<p>消费者 ID。</p>
 * @method void setConsumerId(string $ConsumerId) 设置<p>消费者 ID。</p>
 * @method string getName() 获取<p>名字</p>
 * @method void setName(string $Name) 设置<p>名字</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>更新时间 yyyy-MM-dd hh:mm:ss</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>更新时间 yyyy-MM-dd hh:mm:ss</p>
 * @method string getPriority() 获取<p>消费者优先级</p><p>枚举值：</p><ul><li>High： 高优</li><li>Medium： 中优</li><li>Low： 低优</li></ul>
 * @method void setPriority(string $Priority) 设置<p>消费者优先级</p><p>枚举值：</p><ul><li>High： 高优</li><li>Medium： 中优</li><li>Low： 低优</li></ul>
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConsumerGroups() 获取<p>消费者分组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerGroups(array $ConsumerGroups) 设置<p>消费者分组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSyncStatus() 获取<p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li></ul>
 * @method void setSyncStatus(string $SyncStatus) 设置<p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li></ul>
 * @method string getSourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>ModelService： 模型服务</li><li>Consumer： 消费者</li><li>SecretKey： 密钥</li></ul>
 * @method void setSourceType(string $SourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>ModelService： 模型服务</li><li>Consumer： 消费者</li><li>SecretKey： 密钥</li></ul>
 * @method string getSyncedVersion() 获取<p>同步版本</p>
 * @method void setSyncedVersion(string $SyncedVersion) 设置<p>同步版本</p>
 * @method string getDisplayName() 获取<p>消费者展示名称；目录同步对象可与登录名不同。</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>消费者展示名称；目录同步对象可与登录名不同。</p>
 * @method string getUserName() 获取<p>消费者登录名称。</p>
 * @method void setUserName(string $UserName) 设置<p>消费者登录名称。</p>
 * @method string getStatus() 获取<p>目录消费者状态：active / disabled / soft_deleted。保留存量接口原始值，不转换为 AIGW 枚举。</p>
 * @method void setStatus(string $Status) 设置<p>目录消费者状态：active / disabled / soft_deleted。保留存量接口原始值，不转换为 AIGW 枚举。</p>
 * @method string getOrigin() 获取<p>消费者来源：manual / sync；保留目录隔离和同步对象只读规则。</p>
 * @method void setOrigin(string $Origin) 设置<p>消费者来源：manual / sync；保留目录隔离和同步对象只读规则。</p>
 * @method string getSyncSourceId() 获取<p>产生该消费者的同步源 ID；手工消费者可为空。</p>
 * @method void setSyncSourceId(string $SyncSourceId) 设置<p>产生该消费者的同步源 ID；手工消费者可为空。</p>
 * @method string getExternalId() 获取<p>对象在外部目录中的稳定标识；手工消费者可为空。</p>
 * @method void setExternalId(string $ExternalId) 设置<p>对象在外部目录中的稳定标识；手工消费者可为空。</p>
 */
class CNAPIGwConsumer extends AbstractModel
{
    /**
     * @var string <p>消费者 ID。</p>
     */
    public $ConsumerId;

    /**
     * @var string <p>名字</p>
     */
    public $Name;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间 yyyy-MM-dd hh:mm:ss</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>消费者优先级</p><p>枚举值：</p><ul><li>High： 高优</li><li>Medium： 中优</li><li>Low： 低优</li></ul>
     */
    public $Priority;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array <p>消费者分组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerGroups;

    /**
     * @var string <p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li></ul>
     */
    public $SyncStatus;

    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>ModelService： 模型服务</li><li>Consumer： 消费者</li><li>SecretKey： 密钥</li></ul>
     */
    public $SourceType;

    /**
     * @var string <p>同步版本</p>
     */
    public $SyncedVersion;

    /**
     * @var string <p>消费者展示名称；目录同步对象可与登录名不同。</p>
     */
    public $DisplayName;

    /**
     * @var string <p>消费者登录名称。</p>
     */
    public $UserName;

    /**
     * @var string <p>目录消费者状态：active / disabled / soft_deleted。保留存量接口原始值，不转换为 AIGW 枚举。</p>
     */
    public $Status;

    /**
     * @var string <p>消费者来源：manual / sync；保留目录隔离和同步对象只读规则。</p>
     */
    public $Origin;

    /**
     * @var string <p>产生该消费者的同步源 ID；手工消费者可为空。</p>
     */
    public $SyncSourceId;

    /**
     * @var string <p>对象在外部目录中的稳定标识；手工消费者可为空。</p>
     */
    public $ExternalId;

    /**
     * @param string $ConsumerId <p>消费者 ID。</p>
     * @param string $Name <p>名字</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>更新时间 yyyy-MM-dd hh:mm:ss</p>
     * @param string $Priority <p>消费者优先级</p><p>枚举值：</p><ul><li>High： 高优</li><li>Medium： 中优</li><li>Low： 低优</li></ul>
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConsumerGroups <p>消费者分组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SyncStatus <p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li></ul>
     * @param string $SourceType <p>资源类型</p><p>枚举值：</p><ul><li>ModelService： 模型服务</li><li>Consumer： 消费者</li><li>SecretKey： 密钥</li></ul>
     * @param string $SyncedVersion <p>同步版本</p>
     * @param string $DisplayName <p>消费者展示名称；目录同步对象可与登录名不同。</p>
     * @param string $UserName <p>消费者登录名称。</p>
     * @param string $Status <p>目录消费者状态：active / disabled / soft_deleted。保留存量接口原始值，不转换为 AIGW 枚举。</p>
     * @param string $Origin <p>消费者来源：manual / sync；保留目录隔离和同步对象只读规则。</p>
     * @param string $SyncSourceId <p>产生该消费者的同步源 ID；手工消费者可为空。</p>
     * @param string $ExternalId <p>对象在外部目录中的稳定标识；手工消费者可为空。</p>
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
        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConsumerGroups",$param) and $param["ConsumerGroups"] !== null) {
            $this->ConsumerGroups = [];
            foreach ($param["ConsumerGroups"] as $key => $value){
                $obj = new CNAPIGwConsumerGroup();
                $obj->deserialize($value);
                array_push($this->ConsumerGroups, $obj);
            }
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SyncedVersion",$param) and $param["SyncedVersion"] !== null) {
            $this->SyncedVersion = $param["SyncedVersion"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("SyncSourceId",$param) and $param["SyncSourceId"] !== null) {
            $this->SyncSourceId = $param["SyncSourceId"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }
    }
}
