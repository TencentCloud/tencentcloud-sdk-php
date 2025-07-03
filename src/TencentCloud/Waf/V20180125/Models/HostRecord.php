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
 * 负载均衡型WAF域名信息
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainId() 获取域名唯一ID
 * @method void setDomainId(string $DomainId) 设置域名唯一ID
 * @method string getMainDomain() 获取主域名，入参时为空
 * @method void setMainDomain(string $MainDomain) 设置主域名，入参时为空
 * @method integer getMode() 获取规则引擎防护模式。
0：观察模式
1：拦截模式
 * @method void setMode(integer $Mode) 设置规则引擎防护模式。
0：观察模式
1：拦截模式
 * @method integer getStatus() 获取waf和负载均衡器的绑定关系。
0：未绑定
1：已绑定
 * @method void setStatus(integer $Status) 设置waf和负载均衡器的绑定关系。
0：未绑定
1：已绑定
 * @method integer getState() 获取clbwaf域名监听器状态。
0：操作成功
4：正在绑定LB
6：正在解绑LB 
7：解绑LB失败 
8：绑定LB失败 
10：内部错误
 * @method void setState(integer $State) 设置clbwaf域名监听器状态。
0：操作成功
4：正在绑定LB
6：正在解绑LB 
7：解绑LB失败 
8：绑定LB失败 
10：内部错误
 * @method integer getEngine() 获取规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
 * @method void setEngine(integer $Engine) 设置规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
 * @method integer getIsCdn() 获取waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
 * @method void setIsCdn(integer $IsCdn) 设置waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
 * @method array getLoadBalancerSet() 获取绑定的负载均衡器信息列表
 * @method void setLoadBalancerSet(array $LoadBalancerSet) 设置绑定的负载均衡器信息列表
 * @method string getRegion() 获取域名绑定的LB的地域，以逗号分割多个地域
 * @method void setRegion(string $Region) 设置域名绑定的LB的地域，以逗号分割多个地域
 * @method string getEdition() 获取域名所属实例类型。负载均衡型WAF为"clb-waf"
 * @method void setEdition(string $Edition) 设置域名所属实例类型。负载均衡型WAF为"clb-waf"
 * @method integer getFlowMode() 获取负载均衡型WAF域名的流量模式。
1：清洗模式
0：镜像模式
 * @method void setFlowMode(integer $FlowMode) 设置负载均衡型WAF域名的流量模式。
1：清洗模式
0：镜像模式
 * @method integer getClsStatus() 获取是否开启访问日志。
1：开启
0：关闭
 * @method void setClsStatus(integer $ClsStatus) 设置是否开启访问日志。
1：开启
0：关闭
 * @method integer getLevel() 获取防护等级，可选值100,200,300
 * @method void setLevel(integer $Level) 设置防护等级，可选值100,200,300
 * @method array getCdcClusters() 获取域名需要下发到的cdc集群列表。仅CDC场景下填充
 * @method void setCdcClusters(array $CdcClusters) 设置域名需要下发到的cdc集群列表。仅CDC场景下填充
 * @method string getAlbType() 获取应用型负载均衡类型，默认clb。 
clb：七层负载均衡器类型 
apisix：apisix网关型
tsegw：云原生API网关
scf：云函数
 * @method void setAlbType(string $AlbType) 设置应用型负载均衡类型，默认clb。 
clb：七层负载均衡器类型 
apisix：apisix网关型
tsegw：云原生API网关
scf：云函数
 * @method array getIpHeaders() 获取IsCdn=3时，需要填此参数，表示自定义header
 * @method void setIpHeaders(array $IpHeaders) 设置IsCdn=3时，需要填此参数，表示自定义header
 * @method integer getEngineType() 获取规则引擎类型。
1: menshen
2: tiga
 * @method void setEngineType(integer $EngineType) 设置规则引擎类型。
1: menshen
2: tiga
 * @method string getCloudType() 获取云类型。
public:公有云
private:私有云
hybrid:混合云
 * @method void setCloudType(string $CloudType) 设置云类型。
public:公有云
private:私有云
hybrid:混合云
 * @method string getNote() 获取域名备注信息
 * @method void setNote(string $Note) 设置域名备注信息
 */
class HostRecord extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名唯一ID
     */
    public $DomainId;

    /**
     * @var string 主域名，入参时为空
     */
    public $MainDomain;

    /**
     * @var integer 规则引擎防护模式。
0：观察模式
1：拦截模式
     */
    public $Mode;

    /**
     * @var integer waf和负载均衡器的绑定关系。
0：未绑定
1：已绑定
     */
    public $Status;

    /**
     * @var integer clbwaf域名监听器状态。
0：操作成功
4：正在绑定LB
6：正在解绑LB 
7：解绑LB失败 
8：绑定LB失败 
10：内部错误
     */
    public $State;

    /**
     * @var integer 规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
     */
    public $Engine;

    /**
     * @var integer waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
     */
    public $IsCdn;

    /**
     * @var array 绑定的负载均衡器信息列表
     */
    public $LoadBalancerSet;

    /**
     * @var string 域名绑定的LB的地域，以逗号分割多个地域
     */
    public $Region;

    /**
     * @var string 域名所属实例类型。负载均衡型WAF为"clb-waf"
     */
    public $Edition;

    /**
     * @var integer 负载均衡型WAF域名的流量模式。
1：清洗模式
0：镜像模式
     */
    public $FlowMode;

    /**
     * @var integer 是否开启访问日志。
1：开启
0：关闭
     */
    public $ClsStatus;

    /**
     * @var integer 防护等级，可选值100,200,300
     */
    public $Level;

    /**
     * @var array 域名需要下发到的cdc集群列表。仅CDC场景下填充
     */
    public $CdcClusters;

    /**
     * @var string 应用型负载均衡类型，默认clb。 
clb：七层负载均衡器类型 
apisix：apisix网关型
tsegw：云原生API网关
scf：云函数
     */
    public $AlbType;

    /**
     * @var array IsCdn=3时，需要填此参数，表示自定义header
     */
    public $IpHeaders;

    /**
     * @var integer 规则引擎类型。
1: menshen
2: tiga
     */
    public $EngineType;

    /**
     * @var string 云类型。
public:公有云
private:私有云
hybrid:混合云
     */
    public $CloudType;

    /**
     * @var string 域名备注信息
     */
    public $Note;

    /**
     * @param string $Domain 域名
     * @param string $DomainId 域名唯一ID
     * @param string $MainDomain 主域名，入参时为空
     * @param integer $Mode 规则引擎防护模式。
0：观察模式
1：拦截模式
     * @param integer $Status waf和负载均衡器的绑定关系。
0：未绑定
1：已绑定
     * @param integer $State clbwaf域名监听器状态。
0：操作成功
4：正在绑定LB
6：正在解绑LB 
7：解绑LB失败 
8：绑定LB失败 
10：内部错误
     * @param integer $Engine 规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
     * @param integer $IsCdn waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
     * @param array $LoadBalancerSet 绑定的负载均衡器信息列表
     * @param string $Region 域名绑定的LB的地域，以逗号分割多个地域
     * @param string $Edition 域名所属实例类型。负载均衡型WAF为"clb-waf"
     * @param integer $FlowMode 负载均衡型WAF域名的流量模式。
1：清洗模式
0：镜像模式
     * @param integer $ClsStatus 是否开启访问日志。
1：开启
0：关闭
     * @param integer $Level 防护等级，可选值100,200,300
     * @param array $CdcClusters 域名需要下发到的cdc集群列表。仅CDC场景下填充
     * @param string $AlbType 应用型负载均衡类型，默认clb。 
clb：七层负载均衡器类型 
apisix：apisix网关型
tsegw：云原生API网关
scf：云函数
     * @param array $IpHeaders IsCdn=3时，需要填此参数，表示自定义header
     * @param integer $EngineType 规则引擎类型。
1: menshen
2: tiga
     * @param string $CloudType 云类型。
public:公有云
private:私有云
hybrid:混合云
     * @param string $Note 域名备注信息
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

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
