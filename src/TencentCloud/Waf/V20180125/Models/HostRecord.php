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
 * clb-waf防护域名
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainId() 获取域名ID
 * @method void setDomainId(string $DomainId) 设置域名ID
 * @method string getMainDomain() 获取主域名，入参时为空
 * @method void setMainDomain(string $MainDomain) 设置主域名，入参时为空
 * @method integer getMode() 获取waf模式，同saas waf保持一致
 * @method void setMode(integer $Mode) 设置waf模式，同saas waf保持一致
 * @method integer getStatus() 获取waf和LD的绑定，0：没有绑定，1：绑定
 * @method void setStatus(integer $Status) 设置waf和LD的绑定，0：没有绑定，1：绑定
 * @method integer getState() 获取域名状态，0：正常，1：未检测到流量，2：即将过期，3：过期
 * @method void setState(integer $State) 设置域名状态，0：正常，1：未检测到流量，2：即将过期，3：过期
 * @method integer getEngine() 获取使用的规则，同saas waf保持一致
 * @method void setEngine(integer $Engine) 设置使用的规则，同saas waf保持一致
 * @method integer getIsCdn() 获取是否开启代理，0：不开启，1：开启
 * @method void setIsCdn(integer $IsCdn) 设置是否开启代理，0：不开启，1：开启
 * @method array getLoadBalancerSet() 获取绑定的LB列表
 * @method void setLoadBalancerSet(array $LoadBalancerSet) 设置绑定的LB列表
 * @method string getRegion() 获取域名绑定的LB的地域，以,分割多个地域
 * @method void setRegion(string $Region) 设置域名绑定的LB的地域，以,分割多个地域
 * @method string getEdition() 获取产品分类，取值为：sparta-waf、clb-waf、cdn-waf
 * @method void setEdition(string $Edition) 设置产品分类，取值为：sparta-waf、clb-waf、cdn-waf
 * @method integer getFlowMode() 获取WAF的流量模式，1：清洗模式，0：镜像模式
 * @method void setFlowMode(integer $FlowMode) 设置WAF的流量模式，1：清洗模式，0：镜像模式
 * @method integer getClsStatus() 获取是否开启访问日志，1：开启，0：关闭
 * @method void setClsStatus(integer $ClsStatus) 设置是否开启访问日志，1：开启，0：关闭
 * @method integer getLevel() 获取防护等级，可选值100,200,300
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置防护等级，可选值100,200,300
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCdcClusters() 获取域名需要下发到的cdc集群列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdcClusters(array $CdcClusters) 设置域名需要下发到的cdc集群列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlbType() 获取应用型负载均衡类型: clb或者apisix，默认clb
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlbType(string $AlbType) 设置应用型负载均衡类型: clb或者apisix，默认clb
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpHeaders() 获取IsCdn=3时，需要填此参数，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpHeaders(array $IpHeaders) 设置IsCdn=3时，需要填此参数，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEngineType() 获取规则引擎类型， 1: menshen,   2:tiga
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineType(integer $EngineType) 设置规则引擎类型， 1: menshen,   2:tiga
注意：此字段可能返回 null，表示取不到有效值。
 */
class HostRecord extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名ID
     */
    public $DomainId;

    /**
     * @var string 主域名，入参时为空
     */
    public $MainDomain;

    /**
     * @var integer waf模式，同saas waf保持一致
     */
    public $Mode;

    /**
     * @var integer waf和LD的绑定，0：没有绑定，1：绑定
     */
    public $Status;

    /**
     * @var integer 域名状态，0：正常，1：未检测到流量，2：即将过期，3：过期
     */
    public $State;

    /**
     * @var integer 使用的规则，同saas waf保持一致
     */
    public $Engine;

    /**
     * @var integer 是否开启代理，0：不开启，1：开启
     */
    public $IsCdn;

    /**
     * @var array 绑定的LB列表
     */
    public $LoadBalancerSet;

    /**
     * @var string 域名绑定的LB的地域，以,分割多个地域
     */
    public $Region;

    /**
     * @var string 产品分类，取值为：sparta-waf、clb-waf、cdn-waf
     */
    public $Edition;

    /**
     * @var integer WAF的流量模式，1：清洗模式，0：镜像模式
     */
    public $FlowMode;

    /**
     * @var integer 是否开启访问日志，1：开启，0：关闭
     */
    public $ClsStatus;

    /**
     * @var integer 防护等级，可选值100,200,300
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var array 域名需要下发到的cdc集群列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdcClusters;

    /**
     * @var string 应用型负载均衡类型: clb或者apisix，默认clb
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlbType;

    /**
     * @var array IsCdn=3时，需要填此参数，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpHeaders;

    /**
     * @var integer 规则引擎类型， 1: menshen,   2:tiga
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineType;

    /**
     * @param string $Domain 域名
     * @param string $DomainId 域名ID
     * @param string $MainDomain 主域名，入参时为空
     * @param integer $Mode waf模式，同saas waf保持一致
     * @param integer $Status waf和LD的绑定，0：没有绑定，1：绑定
     * @param integer $State 域名状态，0：正常，1：未检测到流量，2：即将过期，3：过期
     * @param integer $Engine 使用的规则，同saas waf保持一致
     * @param integer $IsCdn 是否开启代理，0：不开启，1：开启
     * @param array $LoadBalancerSet 绑定的LB列表
     * @param string $Region 域名绑定的LB的地域，以,分割多个地域
     * @param string $Edition 产品分类，取值为：sparta-waf、clb-waf、cdn-waf
     * @param integer $FlowMode WAF的流量模式，1：清洗模式，0：镜像模式
     * @param integer $ClsStatus 是否开启访问日志，1：开启，0：关闭
     * @param integer $Level 防护等级，可选值100,200,300
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CdcClusters 域名需要下发到的cdc集群列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlbType 应用型负载均衡类型: clb或者apisix，默认clb
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IpHeaders IsCdn=3时，需要填此参数，表示自定义header
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EngineType 规则引擎类型， 1: menshen,   2:tiga
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

        if (array_key_exists("MainDomain",$param) and $param["MainDomain"] !== null) {
            $this->MainDomain = $param["MainDomain"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("LoadBalancerSet",$param) and $param["LoadBalancerSet"] !== null) {
            $this->LoadBalancerSet = [];
            foreach ($param["LoadBalancerSet"] as $key => $value){
                $obj = new LoadBalancer();
                $obj->deserialize($value);
                array_push($this->LoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }

        if (array_key_exists("ClsStatus",$param) and $param["ClsStatus"] !== null) {
            $this->ClsStatus = $param["ClsStatus"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CdcClusters",$param) and $param["CdcClusters"] !== null) {
            $this->CdcClusters = $param["CdcClusters"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}
