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
* @method Models\AutoRewriteResponse AutoRewrite(Models\AutoRewriteRequest $req) 系统自动为已存在的HTTPS:443监听器创建HTTP监听器进行转发，默认使用80端口。创建成功后可以通过HTTP:80地址自动跳转为HTTPS:443地址进行访问。
* @method Models\BatchModifyTargetWeightResponse BatchModifyTargetWeight(Models\BatchModifyTargetWeightRequest $req) BatchModifyTargetWeight接口用于批量修改监听器绑定的后端机器的转发权重，当前接口只支持应用型HTTP/HTTPS监听器。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) 在一个负载均衡实例下创建监听器。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) CreateLoadBalancer 接口用来创建负载均衡实例。为了使用负载均衡服务，您必须要购买一个或者多个负载均衡实例。通过成功调用该接口，会返回负载均衡实例的唯一 ID。用户可以购买的负载均衡实例类型分为：公网（应用型）、内网（应用型）。可以参考产品说明的产品类型。
本接口成功返回后，可使用查询负载均衡实例列表接口DescribeLoadBalancers查询负载均衡实例的状态，以确定是否创建成功。
* @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) CreateRule 接口用于在一个已存在的应用型负载均衡七层监听器下创建转发规则，七层监听器中，后端机器必须绑定到规则上而非监听器上。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) 本接口用来删除应用型（四层和七层）负载均衡实例下的监听器。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\DeleteLoadBalancerResponse DeleteLoadBalancer(Models\DeleteLoadBalancerRequest $req) DeleteLoadBalancer 接口用来删除用户指定的一个负载均衡实例。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\DeleteRewriteResponse DeleteRewrite(Models\DeleteRewriteRequest $req) DeleteRewrite 接口支持删除指定转发规则之间的重定向关系。
* @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) DeleteRule 接口用来删除应用型负载均衡实例七层监听器下的转发规则。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\DeregisterTargetsResponse DeregisterTargets(Models\DeregisterTargetsRequest $req) DeregisterTargets 接口用来将一台或多台后端机器从应用型负载均衡的监听器上解绑，对于四层监听器（TCP、UDP），只需指定监听器ID即可，对于七层监听器（HTTP、HTTPS），还需通过LocationId或者Domain+Url指定转发规则。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\DeregisterTargetsFromClassicalLBResponse DeregisterTargetsFromClassicalLB(Models\DeregisterTargetsFromClassicalLBRequest $req) DeregisterTargetsFromClassicalLB用于解绑后端服务器
* @method Models\DescribeClassicalLBByInstanceIdResponse DescribeClassicalLBByInstanceId(Models\DescribeClassicalLBByInstanceIdRequest $req) DescribeClassicalLBByInstanceId用于通过后端实例ID获取传统型负载均衡ID列表
* @method Models\DescribeClassicalLBHealthStatusResponse DescribeClassicalLBHealthStatus(Models\DescribeClassicalLBHealthStatusRequest $req) DescribeClassicalLBHealthStatus用于获取传统型负载均衡后端的健康状态
* @method Models\DescribeClassicalLBListenersResponse DescribeClassicalLBListeners(Models\DescribeClassicalLBListenersRequest $req) DescribeClassicalLBListeners用于获取传统型负载均衡信息
* @method Models\DescribeClassicalLBTargetsResponse DescribeClassicalLBTargets(Models\DescribeClassicalLBTargetsRequest $req) DescribeClassicalLBTargets用于获取传统型负载均衡绑定的后端服务
* @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) DescribeListeners 接口可根据负载均衡器 ID，监听器的协议或者端口作为过滤条件获取监听器列表。如果不指定任何过滤条件，默认返该负载均衡器下的默认数据长度（20 个）的监听器。
* @method Models\DescribeLoadBalancersResponse DescribeLoadBalancers(Models\DescribeLoadBalancersRequest $req) 查询负载均衡实例列表

* @method Models\DescribeRewriteResponse DescribeRewrite(Models\DescribeRewriteRequest $req) DescribeRewrite 接口可根据负载均衡实例ID，查询一个负载均衡实例下转发规则的重定向关系。如果不指定监听器ID或转发规则ID，则返回该负载均衡实例下的所有重定向关系。
* @method Models\DescribeTargetHealthResponse DescribeTargetHealth(Models\DescribeTargetHealthRequest $req) DescribeTargetHealth 接口用来获取应用型负载均衡后端的健康检查结果。
* @method Models\DescribeTargetsResponse DescribeTargets(Models\DescribeTargetsRequest $req) DescribeTargets 接口用来查询应用型负载均衡实例的某些监听器后端绑定的机器列表。
* @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 本接口用于查询异步执行任务的状态，对于非查询类的接口（创建/删除负载均衡实例、监听器、规则以及绑定或解绑后端机器等），在调用成功后都需要使用本接口查询任务是否最终执行成功。
* @method Models\ManualRewriteResponse ManualRewrite(Models\ManualRewriteRequest $req) 用户手动配置原访问地址和重定向地址，系统自动将原访问地址的请求重定向至对应路径的目的地址。同一域名下可以配置多条路径作为重定向策略，实现http/https之间请求的自动跳转。
* @method Models\ModifyDomainResponse ModifyDomain(Models\ModifyDomainRequest $req) ModifyDomain接口用来修改应用型负载均衡七层监听器下的域名。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\ModifyListenerResponse ModifyListener(Models\ModifyListenerRequest $req) ModifyListener接口用来修改应用型负载均衡监听器的属性，包括监听器名称、健康检查参数、证书信息、转发策略等。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\ModifyLoadBalancerAttributesResponse ModifyLoadBalancerAttributes(Models\ModifyLoadBalancerAttributesRequest $req) 修改负载均衡实例的属性，支持修改负载均衡实例的名称、设置负载均衡的跨域属性。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) ModifyRule 接口用来修改应用型负载均衡七层监听器下的转发规则的各项属性，包括转发路径、健康检查属性、转发策略等。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\ModifyTargetPortResponse ModifyTargetPort(Models\ModifyTargetPortRequest $req) ModifyTargetPort接口用于修改监听器绑定的后端云服务器的端口。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\ModifyTargetWeightResponse ModifyTargetWeight(Models\ModifyTargetWeightRequest $req) ModifyTargetWeight 接口用于修改监听器绑定的后端机器的转发权重。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\RegisterTargetsResponse RegisterTargets(Models\RegisterTargetsRequest $req) RegisterTargets 接口用来将一台或多台后端机器注册到应用型负载均衡的监听器，对于四层监听器（TCP、UDP），只需指定监听器ID即可，对于七层监听器（HTTP、HTTPS），还需通过LocationId或者Domain+Url指定转发规则。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
* @method Models\RegisterTargetsWithClassicalLBResponse RegisterTargetsWithClassicalLB(Models\RegisterTargetsWithClassicalLBRequest $req) RegisterTargetsWithClassicalLB用于绑定后端服务到传统型负载均衡
* @method Models\SetLoadBalancerSecurityGroupsResponse SetLoadBalancerSecurityGroups(Models\SetLoadBalancerSecurityGroupsRequest $req) SetLoadBalancerSecurityGroups 接口支持对一个负载均衡实例执行设置（绑定、解绑）安全组操作，查询一个负载均衡实例目前已绑定的安全组，可使用 DescribeLoadBalancers 接口。
绑定操作时，入参需要传入负载均衡实例要绑定的所有安全组（已绑定的+新增绑定的）。
解绑操作时，入参需要传入负载均衡实例执行解绑后所绑定的所有安全组；如果要解绑所有安全组，可传入空数组。
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
