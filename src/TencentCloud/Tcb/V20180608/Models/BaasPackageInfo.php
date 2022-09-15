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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新套餐套餐详情
 *
 * @method string getPackageName() 获取DAU产品套餐ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置DAU产品套餐ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageTitle() 获取DAU套餐中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageTitle(string $PackageTitle) 设置DAU套餐中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取套餐分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置套餐分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupTitle() 获取套餐分组中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupTitle(string $GroupTitle) 设置套餐分组中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillTags() 获取json格式化计费标签，例如：
{"pid":2, "cids":{"create": 2, "renew": 2, "modify": 2}, "productCode":"p_tcb_mp", "subProductCode":"sp_tcb_mp_cloudbase_dau"}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillTags(string $BillTags) 设置json格式化计费标签，例如：
{"pid":2, "cids":{"create": 2, "renew": 2, "modify": 2}, "productCode":"p_tcb_mp", "subProductCode":"sp_tcb_mp_cloudbase_dau"}
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceLimit() 获取json格式化用户资源限制，例如：
{"Qps":1000,"InvokeNum":{"TimeUnit":"m", "Unit":"万次", "MaxSize": 100},"Capacity":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}, "Cdn":{"Flux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}, "BackFlux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}},"Scf":{"Concurrency":1000,"OutFlux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100},"MemoryUse":{"TimeUnit":"m", "Unit":"WGBS", "MaxSize": 100000}}}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceLimit(string $ResourceLimit) 设置json格式化用户资源限制，例如：
{"Qps":1000,"InvokeNum":{"TimeUnit":"m", "Unit":"万次", "MaxSize": 100},"Capacity":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}, "Cdn":{"Flux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}, "BackFlux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}},"Scf":{"Concurrency":1000,"OutFlux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100},"MemoryUse":{"TimeUnit":"m", "Unit":"WGBS", "MaxSize": 100000}}}
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdvanceLimit() 获取json格式化高级限制，例如：
{"CMSEnable":false,"ProvisionedConcurrencyMem":512000, "PictureProcessing":false, "SecurityAudit":false, "RealTimePush":false, "TemplateMessageBatchPush":false, "Payment":false}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanceLimit(string $AdvanceLimit) 设置json格式化高级限制，例如：
{"CMSEnable":false,"ProvisionedConcurrencyMem":512000, "PictureProcessing":false, "SecurityAudit":false, "RealTimePush":false, "TemplateMessageBatchPush":false, "Payment":false}
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageDescription() 获取套餐描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageDescription(string $PackageDescription) 设置套餐描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsExternal() 获取是否对外展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsExternal(boolean $IsExternal) 设置是否对外展示
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaasPackageInfo extends AbstractModel
{
    /**
     * @var string DAU产品套餐ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string DAU套餐中文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageTitle;

    /**
     * @var string 套餐分组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 套餐分组中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupTitle;

    /**
     * @var string json格式化计费标签，例如：
{"pid":2, "cids":{"create": 2, "renew": 2, "modify": 2}, "productCode":"p_tcb_mp", "subProductCode":"sp_tcb_mp_cloudbase_dau"}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillTags;

    /**
     * @var string json格式化用户资源限制，例如：
{"Qps":1000,"InvokeNum":{"TimeUnit":"m", "Unit":"万次", "MaxSize": 100},"Capacity":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}, "Cdn":{"Flux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}, "BackFlux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}},"Scf":{"Concurrency":1000,"OutFlux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100},"MemoryUse":{"TimeUnit":"m", "Unit":"WGBS", "MaxSize": 100000}}}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceLimit;

    /**
     * @var string json格式化高级限制，例如：
{"CMSEnable":false,"ProvisionedConcurrencyMem":512000, "PictureProcessing":false, "SecurityAudit":false, "RealTimePush":false, "TemplateMessageBatchPush":false, "Payment":false}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvanceLimit;

    /**
     * @var string 套餐描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageDescription;

    /**
     * @var boolean 是否对外展示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsExternal;

    /**
     * @param string $PackageName DAU产品套餐ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageTitle DAU套餐中文名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 套餐分组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupTitle 套餐分组中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillTags json格式化计费标签，例如：
{"pid":2, "cids":{"create": 2, "renew": 2, "modify": 2}, "productCode":"p_tcb_mp", "subProductCode":"sp_tcb_mp_cloudbase_dau"}
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceLimit json格式化用户资源限制，例如：
{"Qps":1000,"InvokeNum":{"TimeUnit":"m", "Unit":"万次", "MaxSize": 100},"Capacity":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}, "Cdn":{"Flux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}, "BackFlux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100}},"Scf":{"Concurrency":1000,"OutFlux":{"TimeUnit":"m", "Unit":"GB", "MaxSize": 100},"MemoryUse":{"TimeUnit":"m", "Unit":"WGBS", "MaxSize": 100000}}}
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdvanceLimit json格式化高级限制，例如：
{"CMSEnable":false,"ProvisionedConcurrencyMem":512000, "PictureProcessing":false, "SecurityAudit":false, "RealTimePush":false, "TemplateMessageBatchPush":false, "Payment":false}
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageDescription 套餐描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsExternal 是否对外展示
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
        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageTitle",$param) and $param["PackageTitle"] !== null) {
            $this->PackageTitle = $param["PackageTitle"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupTitle",$param) and $param["GroupTitle"] !== null) {
            $this->GroupTitle = $param["GroupTitle"];
        }

        if (array_key_exists("BillTags",$param) and $param["BillTags"] !== null) {
            $this->BillTags = $param["BillTags"];
        }

        if (array_key_exists("ResourceLimit",$param) and $param["ResourceLimit"] !== null) {
            $this->ResourceLimit = $param["ResourceLimit"];
        }

        if (array_key_exists("AdvanceLimit",$param) and $param["AdvanceLimit"] !== null) {
            $this->AdvanceLimit = $param["AdvanceLimit"];
        }

        if (array_key_exists("PackageDescription",$param) and $param["PackageDescription"] !== null) {
            $this->PackageDescription = $param["PackageDescription"];
        }

        if (array_key_exists("IsExternal",$param) and $param["IsExternal"] !== null) {
            $this->IsExternal = $param["IsExternal"];
        }
    }
}
