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

namespace TencentCloud\Lcic\V20220817;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Lcic\V20220817\Models as Models;

/**
 * @method Models\BindDocumentToRoomResponse BindDocumentToRoom(Models\BindDocumentToRoomRequest $req) 绑定文档到房间
 * @method Models\CreateDocumentResponse CreateDocument(Models\CreateDocumentRequest $req) 创建房间内可以使用的文档。
 * @method Models\CreateRoomResponse CreateRoom(Models\CreateRoomRequest $req) 创建房间
 * @method Models\CreateSupervisorResponse CreateSupervisor(Models\CreateSupervisorRequest $req) 创建巡课
 * @method Models\DeleteRoomResponse DeleteRoom(Models\DeleteRoomRequest $req) 删除房间
 * @method Models\DescribeRoomResponse DescribeRoom(Models\DescribeRoomRequest $req) 获取房间信息
 * @method Models\DescribeRoomStatisticsResponse DescribeRoomStatistics(Models\DescribeRoomStatisticsRequest $req) 获取房间统计信息，仅可在房间结束后调用。
 * @method Models\DescribeUserResponse DescribeUser(Models\DescribeUserRequest $req) 获取用户信息
 * @method Models\LoginOriginIdResponse LoginOriginId(Models\LoginOriginIdRequest $req) 使用源账号登录，源账号为注册时填入的originId
 * @method Models\LoginUserResponse LoginUser(Models\LoginUserRequest $req) 登录
 * @method Models\ModifyAppResponse ModifyApp(Models\ModifyAppRequest $req) 修改应用
 * @method Models\RegisterUserResponse RegisterUser(Models\RegisterUserRequest $req) 注册用户
 * @method Models\SetAppCustomContentResponse SetAppCustomContent(Models\SetAppCustomContentRequest $req) 设置应用的自定义内容，包括应用图标，自定义的代码等。如果已存在，则为更新。更新js、css内容后，要生效也需要调用该接口
 * @method Models\UnbindDocumentFromRoomResponse UnbindDocumentFromRoom(Models\UnbindDocumentFromRoomRequest $req) 文档从房间解绑
 */

class LcicClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lcic.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "lcic";

    /**
     * @var string
     */
    protected $version = "2022-08-17";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("lcic")."\\"."V20220817\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
