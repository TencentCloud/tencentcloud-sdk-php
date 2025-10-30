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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行资源包额外信息
 *
 * @method string getInlongGroupId() 获取集成资源组：InLong集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInlongGroupId(string $InlongGroupId) 设置集成资源组：InLong集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOceanusClusterId() 获取集成资源组：oceanus集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOceanusClusterId(string $OceanusClusterId) 设置集成资源组：oceanus集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProductResourceIdList() 获取计费相关：产品资源id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductResourceIdList(array $ProductResourceIdList) 设置计费相关：产品资源id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBillingSuccess() 获取当前资源包对应订单是否发货成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingSuccess(boolean $BillingSuccess) 设置当前资源包对应订单是否发货成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApigwServiceId() 获取apigw服务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApigwServiceId(string $ApigwServiceId) 设置apigw服务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApigwServiceName() 获取apigw服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApigwServiceName(string $ApigwServiceName) 设置apigw服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataProxySpec() 获取数据集成相关：dataProxy配置规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataProxySpec(integer $DataProxySpec) 设置数据集成相关：dataProxy配置规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataProxyNum() 获取dataProxy数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataProxyNum(integer $DataProxyNum) 设置dataProxy数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataProxyStatus() 获取dataProxy状态，同ExecutorGroupStatus
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataProxyStatus(integer $DataProxyStatus) 设置dataProxy状态，同ExecutorGroupStatus
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongManagerUrl() 获取inlongManager地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongManagerUrl(string $InLongManagerUrl) 设置inlongManager地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInLongVersion() 获取inlong版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInLongVersion(string $InLongVersion) 设置inlong版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorMachineIpList() 获取私有化资源组相关: 执行及机器ip列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorMachineIpList(string $ExecutorMachineIpList) 设置私有化资源组相关: 执行及机器ip列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExecutorResourcePackageExtInfo extends AbstractModel
{
    /**
     * @var string 集成资源组：InLong集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InlongGroupId;

    /**
     * @var string 集成资源组：oceanus集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OceanusClusterId;

    /**
     * @var array 计费相关：产品资源id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductResourceIdList;

    /**
     * @var boolean 当前资源包对应订单是否发货成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingSuccess;

    /**
     * @var string apigw服务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApigwServiceId;

    /**
     * @var string apigw服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApigwServiceName;

    /**
     * @var integer 数据集成相关：dataProxy配置规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataProxySpec;

    /**
     * @var integer dataProxy数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataProxyNum;

    /**
     * @var integer dataProxy状态，同ExecutorGroupStatus
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataProxyStatus;

    /**
     * @var string inlongManager地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongManagerUrl;

    /**
     * @var string inlong版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InLongVersion;

    /**
     * @var string 私有化资源组相关: 执行及机器ip列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorMachineIpList;

    /**
     * @param string $InlongGroupId 集成资源组：InLong集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OceanusClusterId 集成资源组：oceanus集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProductResourceIdList 计费相关：产品资源id列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $BillingSuccess 当前资源包对应订单是否发货成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApigwServiceId apigw服务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApigwServiceName apigw服务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataProxySpec 数据集成相关：dataProxy配置规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataProxyNum dataProxy数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataProxyStatus dataProxy状态，同ExecutorGroupStatus
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongManagerUrl inlongManager地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InLongVersion inlong版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorMachineIpList 私有化资源组相关: 执行及机器ip列表
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
        if (array_key_exists("InlongGroupId",$param) and $param["InlongGroupId"] !== null) {
            $this->InlongGroupId = $param["InlongGroupId"];
        }

        if (array_key_exists("OceanusClusterId",$param) and $param["OceanusClusterId"] !== null) {
            $this->OceanusClusterId = $param["OceanusClusterId"];
        }

        if (array_key_exists("ProductResourceIdList",$param) and $param["ProductResourceIdList"] !== null) {
            $this->ProductResourceIdList = $param["ProductResourceIdList"];
        }

        if (array_key_exists("BillingSuccess",$param) and $param["BillingSuccess"] !== null) {
            $this->BillingSuccess = $param["BillingSuccess"];
        }

        if (array_key_exists("ApigwServiceId",$param) and $param["ApigwServiceId"] !== null) {
            $this->ApigwServiceId = $param["ApigwServiceId"];
        }

        if (array_key_exists("ApigwServiceName",$param) and $param["ApigwServiceName"] !== null) {
            $this->ApigwServiceName = $param["ApigwServiceName"];
        }

        if (array_key_exists("DataProxySpec",$param) and $param["DataProxySpec"] !== null) {
            $this->DataProxySpec = $param["DataProxySpec"];
        }

        if (array_key_exists("DataProxyNum",$param) and $param["DataProxyNum"] !== null) {
            $this->DataProxyNum = $param["DataProxyNum"];
        }

        if (array_key_exists("DataProxyStatus",$param) and $param["DataProxyStatus"] !== null) {
            $this->DataProxyStatus = $param["DataProxyStatus"];
        }

        if (array_key_exists("InLongManagerUrl",$param) and $param["InLongManagerUrl"] !== null) {
            $this->InLongManagerUrl = $param["InLongManagerUrl"];
        }

        if (array_key_exists("InLongVersion",$param) and $param["InLongVersion"] !== null) {
            $this->InLongVersion = $param["InLongVersion"];
        }

        if (array_key_exists("ExecutorMachineIpList",$param) and $param["ExecutorMachineIpList"] !== null) {
            $this->ExecutorMachineIpList = $param["ExecutorMachineIpList"];
        }
    }
}
