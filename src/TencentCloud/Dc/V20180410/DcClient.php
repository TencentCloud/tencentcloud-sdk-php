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

namespace TencentCloud\Dc\V20180410;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dc\V20180410\Models as Models;

/**
* @method Models\AcceptDirectConnectTunnelResponse AcceptDirectConnectTunnel(Models\AcceptDirectConnectTunnelRequest $req) 接受专用通道申请
* @method Models\CreateDirectConnectTunnelResponse CreateDirectConnectTunnel(Models\CreateDirectConnectTunnelRequest $req) 用于创建专用通道的接口
* @method Models\DeleteDirectConnectTunnelResponse DeleteDirectConnectTunnel(Models\DeleteDirectConnectTunnelRequest $req) 删除专用通道
* @method Models\DescribeDirectConnectTunnelsResponse DescribeDirectConnectTunnels(Models\DescribeDirectConnectTunnelsRequest $req) 用于查询专用通道列表。
* @method Models\ModifyDirectConnectTunnelAttributeResponse ModifyDirectConnectTunnelAttribute(Models\ModifyDirectConnectTunnelAttributeRequest $req) 修改专用通道属性
* @method Models\RejectDirectConnectTunnelResponse RejectDirectConnectTunnel(Models\RejectDirectConnectTunnelRequest $req) 拒绝专用通道申请
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
