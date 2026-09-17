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
 * 资源分区详情
 *
 * @method string getPartitionCode() 获取<p>分区编码</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>分区编码</p>
 * @method string getPartitionName() 获取<p>分区名称</p>
 * @method void setPartitionName(string $PartitionName) 设置<p>分区名称</p>
 * @method string getDescription() 获取<p>分区描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>分区描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegion() 获取<p>地域</p>
 * @method void setRegion(integer $Region) 设置<p>地域</p>
 * @method string getProductInfo() 获取<p>产品信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductInfo(string $ProductInfo) 设置<p>产品信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourcePoolCode() 获取<p>资源池编码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePoolCode(string $ResourcePoolCode) 设置<p>资源池编码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceQuota() 获取<p>资源配额列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceQuota(array $ResourceQuota) 设置<p>资源配额列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSchedulableLimitList() 获取<p>各计费项的单 worker/executor 最大可调度资源量列表，用于约束提交作业时可申请的规格上限；仅包含分区已有的非 GPU 计费项，无可返回项时为空数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulableLimitList(array $SchedulableLimitList) 设置<p>各计费项的单 worker/executor 最大可调度资源量列表，用于约束提交作业时可申请的规格上限；仅包含分区已有的非 GPU 计费项，无可返回项时为空数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取<p>付费模式</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式</p>
 * @method integer getRenewFlag() 获取<p>续费标志</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标志</p>
 * @method string getScheduler() 获取<p>调度器类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduler(string $Scheduler) 设置<p>调度器类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>状态</p>
 * @method void setStatus(integer $Status) 设置<p>状态</p>
 * @method string getExpireTime() 获取<p>过期时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
 * @method string getIsolatedTimestamp() 获取<p>过期时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
 * @method void setIsolatedTimestamp(string $IsolatedTimestamp) 设置<p>过期时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
 * @method array getTags() 获取<p>资源已绑定的标签列表，由标签平台 GetResources 接口实时查询得到</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>资源已绑定的标签列表，由标签平台 GetResources 接口实时查询得到</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourcePoolKind() 获取<p>资源池形态：SYSTEM（系统）/ USER（用户）/ EXTERNAL_TKE（纳管外部 TKE 集群）</p>
 * @method void setResourcePoolKind(string $ResourcePoolKind) 设置<p>资源池形态：SYSTEM（系统）/ USER（用户）/ EXTERNAL_TKE（纳管外部 TKE 集群）</p>
 * @method string getExternalClusterId() 获取<p>纳管外部集群的原始 ID（例如 EMR 实例 ID emr-xxx），仅 EXTERNAL_TKE 等纳管场景有值</p>
 * @method void setExternalClusterId(string $ExternalClusterId) 设置<p>纳管外部集群的原始 ID（例如 EMR 实例 ID emr-xxx），仅 EXTERNAL_TKE 等纳管场景有值</p>
 */
class PartitionDetail extends AbstractModel
{
    /**
     * @var string <p>分区编码</p>
     */
    public $PartitionCode;

    /**
     * @var string <p>分区名称</p>
     */
    public $PartitionName;

    /**
     * @var string <p>分区描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>产品信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductInfo;

    /**
     * @var string <p>资源池编码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePoolCode;

    /**
     * @var array <p>资源配额列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceQuota;

    /**
     * @var array <p>各计费项的单 worker/executor 最大可调度资源量列表，用于约束提交作业时可申请的规格上限；仅包含分区已有的非 GPU 计费项，无可返回项时为空数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulableLimitList;

    /**
     * @var integer <p>付费模式</p>
     */
    public $PayMode;

    /**
     * @var integer <p>续费标志</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>调度器类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scheduler;

    /**
     * @var integer <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>过期时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>过期时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
     */
    public $IsolatedTimestamp;

    /**
     * @var array <p>资源已绑定的标签列表，由标签平台 GetResources 接口实时查询得到</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>资源池形态：SYSTEM（系统）/ USER（用户）/ EXTERNAL_TKE（纳管外部 TKE 集群）</p>
     */
    public $ResourcePoolKind;

    /**
     * @var string <p>纳管外部集群的原始 ID（例如 EMR 实例 ID emr-xxx），仅 EXTERNAL_TKE 等纳管场景有值</p>
     */
    public $ExternalClusterId;

    /**
     * @param string $PartitionCode <p>分区编码</p>
     * @param string $PartitionName <p>分区名称</p>
     * @param string $Description <p>分区描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Region <p>地域</p>
     * @param string $ProductInfo <p>产品信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourcePoolCode <p>资源池编码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceQuota <p>资源配额列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SchedulableLimitList <p>各计费项的单 worker/executor 最大可调度资源量列表，用于约束提交作业时可申请的规格上限；仅包含分区已有的非 GPU 计费项，无可返回项时为空数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode <p>付费模式</p>
     * @param integer $RenewFlag <p>续费标志</p>
     * @param string $Scheduler <p>调度器类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>状态</p>
     * @param string $ExpireTime <p>过期时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
     * @param string $IsolatedTimestamp <p>过期时间</p><p>参数格式：yyyy-MM-dd hh:mm:ss</p>
     * @param array $Tags <p>资源已绑定的标签列表，由标签平台 GetResources 接口实时查询得到</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourcePoolKind <p>资源池形态：SYSTEM（系统）/ USER（用户）/ EXTERNAL_TKE（纳管外部 TKE 集群）</p>
     * @param string $ExternalClusterId <p>纳管外部集群的原始 ID（例如 EMR 实例 ID emr-xxx），仅 EXTERNAL_TKE 等纳管场景有值</p>
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
        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProductInfo",$param) and $param["ProductInfo"] !== null) {
            $this->ProductInfo = $param["ProductInfo"];
        }

        if (array_key_exists("ResourcePoolCode",$param) and $param["ResourcePoolCode"] !== null) {
            $this->ResourcePoolCode = $param["ResourcePoolCode"];
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

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolatedTimestamp",$param) and $param["IsolatedTimestamp"] !== null) {
            $this->IsolatedTimestamp = $param["IsolatedTimestamp"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new CloudTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ResourcePoolKind",$param) and $param["ResourcePoolKind"] !== null) {
            $this->ResourcePoolKind = $param["ResourcePoolKind"];
        }

        if (array_key_exists("ExternalClusterId",$param) and $param["ExternalClusterId"] !== null) {
            $this->ExternalClusterId = $param["ExternalClusterId"];
        }
    }
}
