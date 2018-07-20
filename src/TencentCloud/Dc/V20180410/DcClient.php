<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Dc\V20180410;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dc\V20180410\Models as Models;

/**
* @method Models\AcceptDirectConnectTunnelResponse AcceptDirectConnectTunnel(Models\AcceptDirectConnectTunnelRequest $req) 接受专线通道申请
* @method Models\CreateDirectConnectTunnelResponse CreateDirectConnectTunnel(Models\CreateDirectConnectTunnelRequest $req) 用于创建专线通道的接口
* @method Models\DeleteDirectConnectTunnelResponse DeleteDirectConnectTunnel(Models\DeleteDirectConnectTunnelRequest $req) 删除专线通道
* @method Models\DescribeDirectConnectTunnelsResponse DescribeDirectConnectTunnels(Models\DescribeDirectConnectTunnelsRequest $req) 用于查询专线通道列表。
* @method Models\ModifyDirectConnectTunnelAttributeResponse ModifyDirectConnectTunnelAttribute(Models\ModifyDirectConnectTunnelAttributeRequest $req) 修改专线通道属性
* @method Models\RejectDirectConnectTunnelResponse RejectDirectConnectTunnel(Models\RejectDirectConnectTunnelRequest $req) 拒绝专线通道申请
 */

class DcClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "dc.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-04-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("dc")."\\"."V20180410\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
