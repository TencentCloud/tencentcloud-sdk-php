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

namespace TencentCloud\Clb\V20180317;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Clb\V20180317\Models as Models;

/**
* @method Models\AutoRewriteResponse AutoRewrite(Models\AutoRewriteRequest $req) 用户需要先创建出一个HTTPS:443监听器，并在其下创建转发规则。通过调用本接口，系统会自动创建出一个HTTP:80监听器（如果之前不存在），并在其下创建转发规则，与HTTPS:443监听器下的Domains（在入参中指定）对应。创建成功后可以通过HTTP:80地址自动跳转为HTTPS:443地址进行访问。
* @method Models\BatchDeregisterTargetsResponse BatchDeregisterTargets(Models\BatchDeregisterTargetsRequest $req) 批量解绑四七层后端服务。
* @method Models\BatchModifyTargetWeightResponse BatchModifyTargetWeight(Models\BatchModifyTargetWeightRequest $req) BatchModifyTargetWeight接口用于批量修改负载均衡监听器绑定的后端机器的转发权重，暂时只支持HTTP/HTTPS监听器。不支持传统型负载均衡。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\BatchRegisterTargetsResponse BatchRegisterTargets(Models\BatchRegisterTargetsRequest $req) 批量绑定虚拟主机或弹性网卡，支持跨域绑定，只支持四层（TCP、UDP）协议绑定。
* @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) 在一个负载均衡实例下创建监听器。
本接口为异步接口，接口返回成功后，需以返回的 RequestId 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
* @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) CreateLoadBalancer 接口用来创建负载均衡实例（本接口只支持购买按量计费的负载均衡，包年包月的负载均衡请通过控制台购买）。为了使用负载均衡服务，您必须购买一个或多个负载均衡实例。成功调用该接口后，会返回负载均衡实例的唯一 ID。负载均衡实例的类型分为：公网、内网。详情可参考产品说明中的产品类型。
注意：(1)指定可用区申请负载均衡、跨zone容灾【如需使用，请提交工单（ https://console.cloud.tencent.com/workorder/category ）申请】；(2)目前只有北京、上海、广州支持IPv6；
本接口为异步接口，接口成功返回后，可使用 DescribeLoadBalancers 接口查询负载均衡实例的状态（如创建中、正常），以确定是否创建成功。
* @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) CreateRule 接口用于在一个已存在的负载均衡七层监听器下创建转发规则，七层监听器中，后端服务必须绑定到规则上而非监听器上。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) 本接口用来删除负载均衡实例下的监听器（四层和七层）。
本接口为异步接口，接口返回成功后，需以得到的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
* @method Models\DeleteLoadBalancerResponse DeleteLoadBalancer(Models\DeleteLoadBalancerRequest $req) DeleteLoadBalancer 接口用以删除指定的一个或多个负载均衡实例。
本接口为异步接口，接口返回成功后，需以返回的 RequestId 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
* @method Models\DeleteRewriteResponse DeleteRewrite(Models\DeleteRewriteRequest $req) DeleteRewrite 接口支持删除指定转发规则之间的重定向关系。
* @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) DeleteRule 接口用来删除负载均衡实例七层监听器下的转发规则。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\DeregisterTargetsResponse DeregisterTargets(Models\DeregisterTargetsRequest $req) DeregisterTargets 接口用来将一台或多台后端服务从负载均衡的监听器或转发规则上解绑，对于四层监听器，只需指定监听器ID即可，对于七层监听器，还需通过LocationId或Domain+Url指定转发规则。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\DeregisterTargetsFromClassicalLBResponse DeregisterTargetsFromClassicalLB(Models\DeregisterTargetsFromClassicalLBRequest $req) DeregisterTargetsFromClassicalLB 接口用于解绑负载均衡后端服务。
本接口为异步接口，接口返回成功后，需以返回的 RequestId 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
* @method Models\DescribeClassicalLBByInstanceIdResponse DescribeClassicalLBByInstanceId(Models\DescribeClassicalLBByInstanceIdRequest $req) DescribeClassicalLBByInstanceId用于通过后端实例ID获取传统型负载均衡ID列表
* @method Models\DescribeClassicalLBHealthStatusResponse DescribeClassicalLBHealthStatus(Models\DescribeClassicalLBHealthStatusRequest $req) DescribeClassicalLBHealthStatus用于获取传统型负载均衡后端的健康状态
* @method Models\DescribeClassicalLBListenersResponse DescribeClassicalLBListeners(Models\DescribeClassicalLBListenersRequest $req) DescribeClassicalLBListeners 接口用于获取传统型负载均衡的监听器信息。
* @method Models\DescribeClassicalLBTargetsResponse DescribeClassicalLBTargets(Models\DescribeClassicalLBTargetsRequest $req) DescribeClassicalLBTargets用于获取传统型负载均衡绑定的后端服务
* @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) DescribeListeners 接口可根据负载均衡器 ID，监听器的协议或端口作为过滤条件获取监听器列表。如果不指定任何过滤条件，默认返该负载均衡器下的默认数据长度（20 个）的监听器。
* @method Models\DescribeLoadBalancersResponse DescribeLoadBalancers(Models\DescribeLoadBalancersRequest $req) 查询负载均衡实例列表

* @method Models\DescribeRewriteResponse DescribeRewrite(Models\DescribeRewriteRequest $req) DescribeRewrite 接口可根据负载均衡实例ID，查询一个负载均衡实例下转发规则的重定向关系。如果不指定监听器ID或转发规则ID，则返回该负载均衡实例下的所有重定向关系。
* @method Models\DescribeTargetHealthResponse DescribeTargetHealth(Models\DescribeTargetHealthRequest $req) DescribeTargetHealth 接口用来获取负载均衡后端服务的健康检查结果，不支持传统型负载均衡。
* @method Models\DescribeTargetsResponse DescribeTargets(Models\DescribeTargetsRequest $req) DescribeTargets 接口用来查询负载均衡实例的某些监听器绑定的后端服务列表。
* @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 本接口用于查询异步任务的执行状态，对于非查询类的接口（创建/删除负载均衡实例、监听器、规则以及绑定或解绑后端服务等），在接口调用成功后，都需要使用本接口查询任务最终是否执行成功。
* @method Models\ManualRewriteResponse ManualRewrite(Models\ManualRewriteRequest $req) 用户手动配置原访问地址和重定向地址，系统自动将原访问地址的请求重定向至对应路径的目的地址。同一域名下可以配置多条路径作为重定向策略，实现http/https之间请求的自动跳转。设置重定向时，需满足如下约束条件：若A已经重定向至B，则A不能再重定向至C（除非先删除老的重定向关系，再建立新的重定向关系），B不能重定向至任何其它地址。
* @method Models\ModifyDomainResponse ModifyDomain(Models\ModifyDomainRequest $req) ModifyDomain接口用来修改负载均衡七层监听器下的域名。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\ModifyDomainAttributesResponse ModifyDomainAttributes(Models\ModifyDomainAttributesRequest $req) ModifyDomainAttributes接口用于修改负载均衡7层监听器转发规则的域名级别属性，如修改域名、修改DefaultServer、开启/关闭Http2、修改证书。
本接口为异步接口，本接口返回成功后，需以返回的RequestId为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\ModifyListenerResponse ModifyListener(Models\ModifyListenerRequest $req) ModifyListener接口用来修改负载均衡监听器的属性，包括监听器名称、健康检查参数、证书信息、转发策略等。本接口不支持传统型负载均衡。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\ModifyLoadBalancerAttributesResponse ModifyLoadBalancerAttributes(Models\ModifyLoadBalancerAttributesRequest $req) 修改负载均衡实例的属性。支持修改负载均衡实例的名称、设置负载均衡的跨域属性。
* @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) ModifyRule 接口用来修改负载均衡七层监听器下的转发规则的各项属性，包括转发路径、健康检查属性、转发策略等。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\ModifyTargetPortResponse ModifyTargetPort(Models\ModifyTargetPortRequest $req) ModifyTargetPort接口用于修改监听器绑定的后端服务的端口。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\ModifyTargetWeightResponse ModifyTargetWeight(Models\ModifyTargetWeightRequest $req) ModifyTargetWeight 接口用于修改负载均衡绑定的后端服务的转发权重。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\RegisterTargetsResponse RegisterTargets(Models\RegisterTargetsRequest $req) RegisterTargets 接口用来将一台或多台后端服务绑定到负载均衡的监听器（或7层转发规则），在此之前您需要先行创建相关的4层监听器或7层转发规则。对于四层监听器（TCP、UDP），只需指定监听器ID即可，对于七层监听器（HTTP、HTTPS），还需通过LocationId或者Domain+Url指定转发规则。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\RegisterTargetsWithClassicalLBResponse RegisterTargetsWithClassicalLB(Models\RegisterTargetsWithClassicalLBRequest $req) RegisterTargetsWithClassicalLB 接口用于绑定后端服务到传统型负载均衡。
本接口为异步接口，接口返回成功后，需以返回的 RequestId 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
* @method Models\ReplaceCertForLoadBalancersResponse ReplaceCertForLoadBalancers(Models\ReplaceCertForLoadBalancersRequest $req) ReplaceCertForLoadBalancers 接口用以替换负载均衡实例所关联的证书，对于各个地域的负载均衡，如果指定的老的证书ID与其有关联关系，则会先解除关联，再建立新证书与该负载均衡的关联关系。
此接口支持替换服务端证书或客户端证书。
需要使用的新证书，可以通过传入证书ID来指定，如果不指定证书ID，则必须传入证书内容等相关信息，用以新建证书并绑定至负载均衡。
注：本接口仅可从广州地域调用，其他地域存在域名解析问题，会报错。
* @method Models\SetLoadBalancerSecurityGroupsResponse SetLoadBalancerSecurityGroups(Models\SetLoadBalancerSecurityGroupsRequest $req) SetLoadBalancerSecurityGroups 接口支持对一个公网负载均衡实例执行设置（绑定、解绑）安全组操作。查询一个负载均衡实例目前已绑定的安全组，可使用 DescribeLoadBalancers 接口。本接口是set语义，
绑定操作时，入参需要传入负载均衡实例要绑定的所有安全组（已绑定的+新增绑定的）。
解绑操作时，入参需要传入负载均衡实例执行解绑后所绑定的所有安全组；如果要解绑所有安全组，可不传此参数，或传入空数组。注意：内网负载均衡不支持绑定安全组。
* @method Models\SetSecurityGroupForLoadbalancersResponse SetSecurityGroupForLoadbalancers(Models\SetSecurityGroupForLoadbalancersRequest $req) 绑定或解绑一个安全组到多个公网负载均衡实例。注意：内网负载均衡不支持绑定安全组。
 */

class ClbClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "clb.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-03-17";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("clb")."\\"."V20180317\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
