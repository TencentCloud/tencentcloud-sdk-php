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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryZoneResource请求参数结构体
 *
 * @method array getZones() 获取要检查的可用区
 * @method void setZones(array $Zones) 设置要检查的可用区
 * @method string getOptType() 获取操作类型（create数据节点创建，masterCreate专用主节点创建，scaleUp数据节点纵向扩容，masterAdd添加专用主节点，masterScaleUp专用主节点纵向扩容）
 * @method void setOptType(string $OptType) 设置操作类型（create数据节点创建，masterCreate专用主节点创建，scaleUp数据节点纵向扩容，masterAdd添加专用主节点，masterScaleUp专用主节点纵向扩容）
 * @method string getInstanceId() 获取实例ID(变配检查需要传递)
 * @method void setInstanceId(string $InstanceId) 设置实例ID(变配检查需要传递)
 * @method integer getDeployMode() 获取集群部署方式
<li>0, 单可用区部署</li>
<li>1, 多可用区部署</li>
 * @method void setDeployMode(integer $DeployMode) 设置集群部署方式
<li>0, 单可用区部署</li>
<li>1, 多可用区部署</li>
 * @method string getChargeType() 获取计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>
 * @method void setChargeType(string $ChargeType) 设置计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>
 * @method string getEsVersion() 获取ES版本号如5.6.4，6.4.3，6.8.2，7.5.1
 * @method void setEsVersion(string $EsVersion) 设置ES版本号如5.6.4，6.4.3，6.8.2，7.5.1
 * @method string getCdcId() 获取cdcId，使用cdc子网时传递
 * @method void setCdcId(string $CdcId) 设置cdcId，使用cdc子网时传递
 */
class QueryZoneResourceRequest extends AbstractModel
{
    /**
     * @var array 要检查的可用区
     */
    public $Zones;

    /**
     * @var string 操作类型（create数据节点创建，masterCreate专用主节点创建，scaleUp数据节点纵向扩容，masterAdd添加专用主节点，masterScaleUp专用主节点纵向扩容）
     */
    public $OptType;

    /**
     * @var string 实例ID(变配检查需要传递)
     */
    public $InstanceId;

    /**
     * @var integer 集群部署方式
<li>0, 单可用区部署</li>
<li>1, 多可用区部署</li>
     */
    public $DeployMode;

    /**
     * @var string 计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>
     */
    public $ChargeType;

    /**
     * @var string ES版本号如5.6.4，6.4.3，6.8.2，7.5.1
     */
    public $EsVersion;

    /**
     * @var string cdcId，使用cdc子网时传递
     */
    public $CdcId;

    /**
     * @param array $Zones 要检查的可用区
     * @param string $OptType 操作类型（create数据节点创建，masterCreate专用主节点创建，scaleUp数据节点纵向扩容，masterAdd添加专用主节点，masterScaleUp专用主节点纵向扩容）
     * @param string $InstanceId 实例ID(变配检查需要传递)
     * @param integer $DeployMode 集群部署方式
<li>0, 单可用区部署</li>
<li>1, 多可用区部署</li>
     * @param string $ChargeType 计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>
     * @param string $EsVersion ES版本号如5.6.4，6.4.3，6.8.2，7.5.1
     * @param string $CdcId cdcId，使用cdc子网时传递
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
        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("OptType",$param) and $param["OptType"] !== null) {
            $this->OptType = $param["OptType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
