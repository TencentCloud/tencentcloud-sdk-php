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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源分区信息
 *
 * @method string getName() 获取<p>分区名称</p>
 * @method void setName(string $Name) 设置<p>分区名称</p>
 * @method string getPartitionCode() 获取<p>分区编码</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>分区编码</p>
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>状态：11-发货中，1-运行中，2-隔离中，3-已销毁</p>
 * @method void setStatus(integer $Status) 设置<p>状态：11-发货中，1-运行中，2-隔离中，3-已销毁</p>
 * @method integer getQueueCount() 获取<p>队列数量</p>
 * @method void setQueueCount(integer $QueueCount) 设置<p>队列数量</p>
 * @method array getResourceQuota() 获取<p>资源配置（配额）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceQuota(array $ResourceQuota) 设置<p>资源配置（配额）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSchedulableLimitList() 获取<p>各计费项的单 worker/executor 最大可调度资源量列表，用于约束提交作业时可申请的规格上限；仅包含分区已有的非 GPU 计费项，无可返回项时为空数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulableLimitList(array $SchedulableLimitList) 设置<p>各计费项的单 worker/executor 最大可调度资源量列表，用于约束提交作业时可申请的规格上限；仅包含分区已有的非 GPU 计费项，无可返回项时为空数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取<p>计费类型：1-包年包月，0-按量计费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>计费类型：1-包年包月，0-按量计费</p>
 * @method integer getRenewFlag() 获取<p>续费标志：0-默认，1-自动续费，2-不自动续费（仅预付费有效）；按量计费分区无该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标志：0-默认，1-自动续费，2-不自动续费（仅预付费有效）；按量计费分区无该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourcePoolKind() 获取<p>资源池形态：SYSTEM（系统）/ USER（用户）/ EXTERNAL_TKE（纳管外部 TKE 集群）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePoolKind(string $ResourcePoolKind) 设置<p>资源池形态：SYSTEM（系统）/ USER（用户）/ EXTERNAL_TKE（纳管外部 TKE 集群）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalClusterId() 获取<p>纳管外部集群的原始 ID（例如 EMR 实例 ID emr-xxx），仅 EXTERNAL_TKE 等纳管场景有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalClusterId(string $ExternalClusterId) 设置<p>纳管外部集群的原始 ID（例如 EMR 实例 ID emr-xxx），仅 EXTERNAL_TKE 等纳管场景有值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>资源已绑定的标签列表，由标签平台 GetResources 接口实时查询得到；列表场景下仅对当前页分区加载，单分区标签查询失败时降级留空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>资源已绑定的标签列表，由标签平台 GetResources 接口实时查询得到；列表场景下仅对当前页分区加载，单分区标签查询失败时降级留空</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PartitionInfo extends AbstractModel
{
    /**
     * @var string <p>分区名称</p>
     */
    public $Name;

    /**
     * @var string <p>分区编码</p>
     */
    public $PartitionCode;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>状态：11-发货中，1-运行中，2-隔离中，3-已销毁</p>
     */
    public $Status;

    /**
     * @var integer <p>队列数量</p>
     */
    public $QueueCount;

    /**
     * @var array <p>资源配置（配额）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceQuota;

    /**
     * @var array <p>各计费项的单 worker/executor 最大可调度资源量列表，用于约束提交作业时可申请的规格上限；仅包含分区已有的非 GPU 计费项，无可返回项时为空数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulableLimitList;

    /**
     * @var integer <p>计费类型：1-包年包月，0-按量计费</p>
     */
    public $PayMode;

    /**
     * @var integer <p>续费标志：0-默认，1-自动续费，2-不自动续费（仅预付费有效）；按量计费分区无该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string <p>资源池形态：SYSTEM（系统）/ USER（用户）/ EXTERNAL_TKE（纳管外部 TKE 集群）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePoolKind;

    /**
     * @var string <p>纳管外部集群的原始 ID（例如 EMR 实例 ID emr-xxx），仅 EXTERNAL_TKE 等纳管场景有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalClusterId;

    /**
     * @var array <p>资源已绑定的标签列表，由标签平台 GetResources 接口实时查询得到；列表场景下仅对当前页分区加载，单分区标签查询失败时降级留空</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $Name <p>分区名称</p>
     * @param string $PartitionCode <p>分区编码</p>
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>状态：11-发货中，1-运行中，2-隔离中，3-已销毁</p>
     * @param integer $QueueCount <p>队列数量</p>
     * @param array $ResourceQuota <p>资源配置（配额）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SchedulableLimitList <p>各计费项的单 worker/executor 最大可调度资源量列表，用于约束提交作业时可申请的规格上限；仅包含分区已有的非 GPU 计费项，无可返回项时为空数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode <p>计费类型：1-包年包月，0-按量计费</p>
     * @param integer $RenewFlag <p>续费标志：0-默认，1-自动续费，2-不自动续费（仅预付费有效）；按量计费分区无该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourcePoolKind <p>资源池形态：SYSTEM（系统）/ USER（用户）/ EXTERNAL_TKE（纳管外部 TKE 集群）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalClusterId <p>纳管外部集群的原始 ID（例如 EMR 实例 ID emr-xxx），仅 EXTERNAL_TKE 等纳管场景有值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>资源已绑定的标签列表，由标签平台 GetResources 接口实时查询得到；列表场景下仅对当前页分区加载，单分区标签查询失败时降级留空</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("QueueCount",$param) and $param["QueueCount"] !== null) {
            $this->QueueCount = $param["QueueCount"];
        }

        if (array_key_exists("ResourceQuota",$param) and $param["ResourceQuota"] !== null) {
            $this->ResourceQuota = [];
            foreach ($param["ResourceQuota"] as $key => $value){
                $obj = new ResourceQuota();
                $obj->deserialize($value);
                array_push($this->ResourceQuota, $obj);
            }
        }

        if (array_key_exists("SchedulableLimitList",$param) and $param["SchedulableLimitList"] !== null) {
            $this->SchedulableLimitList = [];
            foreach ($param["SchedulableLimitList"] as $key => $value){
                $obj = new SchedulableLimit();
                $obj->deserialize($value);
                array_push($this->SchedulableLimitList, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ResourcePoolKind",$param) and $param["ResourcePoolKind"] !== null) {
            $this->ResourcePoolKind = $param["ResourcePoolKind"];
        }

        if (array_key_exists("ExternalClusterId",$param) and $param["ExternalClusterId"] !== null) {
            $this->ExternalClusterId = $param["ExternalClusterId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new CloudTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
