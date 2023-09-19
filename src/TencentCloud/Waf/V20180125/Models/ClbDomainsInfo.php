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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * clb域名详情
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainId() 获取域名id
 * @method void setDomainId(string $DomainId) 设置域名id
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getEdition() 获取waf类型
 * @method void setEdition(string $Edition) 设置waf类型
 * @method integer getIsCdn() 获取是否是cdn
 * @method void setIsCdn(integer $IsCdn) 设置是否是cdn
 * @method array getLoadBalancerSet() 获取负载均衡算法
 * @method void setLoadBalancerSet(array $LoadBalancerSet) 设置负载均衡算法
 * @method integer getFlowMode() 获取镜像模式
 * @method void setFlowMode(integer $FlowMode) 设置镜像模式
 * @method integer getState() 获取绑定clb状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置绑定clb状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlbType() 获取负载均衡类型，clb或者apisix
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlbType(string $AlbType) 设置负载均衡类型，clb或者apisix
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpHeaders() 获取IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpHeaders(array $IpHeaders) 设置IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCdcClusters() 获取cdc类型会增加集群信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdcClusters(string $CdcClusters) 设置cdc类型会增加集群信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloudType() 获取云类型:public:公有云；private:私有云;hybrid:混合云
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudType(string $CloudType) 设置云类型:public:公有云；private:私有云;hybrid:混合云
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClbDomainsInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名id
     */
    public $DomainId;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string waf类型
     */
    public $Edition;

    /**
     * @var integer 是否是cdn
     */
    public $IsCdn;

    /**
     * @var array 负载均衡算法
     */
    public $LoadBalancerSet;

    /**
     * @var integer 镜像模式
     */
    public $FlowMode;

    /**
     * @var integer 绑定clb状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 负载均衡类型，clb或者apisix
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlbType;

    /**
     * @var array IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpHeaders;

    /**
     * @var string cdc类型会增加集群信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdcClusters;

    /**
     * @var string 云类型:public:公有云；private:私有云;hybrid:混合云
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudType;

    /**
     * @param string $Domain 域名
     * @param string $DomainId 域名id
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名
     * @param string $Edition waf类型
     * @param integer $IsCdn 是否是cdn
     * @param array $LoadBalancerSet 负载均衡算法
     * @param integer $FlowMode 镜像模式
     * @param integer $State 绑定clb状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlbType 负载均衡类型，clb或者apisix
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IpHeaders IsCdn=3时，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CdcClusters cdc类型会增加集群信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloudType 云类型:public:公有云；private:私有云;hybrid:混合云
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("LoadBalancerSet",$param) and $param["LoadBalancerSet"] !== null) {
            $this->LoadBalancerSet = [];
            foreach ($param["LoadBalancerSet"] as $key => $value){
                $obj = new LoadBalancerPackageNew();
                $obj->deserialize($value);
                array_push($this->LoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("CdcClusters",$param) and $param["CdcClusters"] !== null) {
            $this->CdcClusters = $param["CdcClusters"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
