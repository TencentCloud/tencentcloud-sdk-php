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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyConcurrent请求参数结构体
 *
 * @method string getUserId() 获取唯一用户身份标识，由业务方自定义，平台不予理解。（可根据业务需要决定使用用户的唯一身份标识或是使用时间戳随机生成；在用户重连时应保持UserId不变）
 * @method void setUserId(string $UserId) 设置唯一用户身份标识，由业务方自定义，平台不予理解。（可根据业务需要决定使用用户的唯一身份标识或是使用时间戳随机生成；在用户重连时应保持UserId不变）
 * @method string getUserIp() 获取用户IP，用户客户端的公网IP，用于就近调度
 * @method void setUserIp(string $UserIp) 设置用户IP，用户客户端的公网IP，用于就近调度
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getApplicationVersionId() 获取应用版本ID
 * @method void setApplicationVersionId(string $ApplicationVersionId) 设置应用版本ID
 * @method string getApplicationId() 获取应用ID。如果是独享项目，将忽略该参数，使用项目绑定的应用。如果是共享项目，使用该参数来指定应用。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID。如果是独享项目，将忽略该参数，使用项目绑定的应用。如果是共享项目，使用该参数来指定应用。
 */
class ApplyConcurrentRequest extends AbstractModel
{
    /**
     * @var string 唯一用户身份标识，由业务方自定义，平台不予理解。（可根据业务需要决定使用用户的唯一身份标识或是使用时间戳随机生成；在用户重连时应保持UserId不变）
     */
    public $UserId;

    /**
     * @var string 用户IP，用户客户端的公网IP，用于就近调度
     */
    public $UserIp;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 应用版本ID
     */
    public $ApplicationVersionId;

    /**
     * @var string 应用ID。如果是独享项目，将忽略该参数，使用项目绑定的应用。如果是共享项目，使用该参数来指定应用。
     */
    public $ApplicationId;

    /**
     * @param string $UserId 唯一用户身份标识，由业务方自定义，平台不予理解。（可根据业务需要决定使用用户的唯一身份标识或是使用时间戳随机生成；在用户重连时应保持UserId不变）
     * @param string $UserIp 用户IP，用户客户端的公网IP，用于就近调度
     * @param string $ProjectId 项目ID
     * @param string $ApplicationVersionId 应用版本ID
     * @param string $ApplicationId 应用ID。如果是独享项目，将忽略该参数，使用项目绑定的应用。如果是共享项目，使用该参数来指定应用。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ApplicationVersionId",$param) and $param["ApplicationVersionId"] !== null) {
            $this->ApplicationVersionId = $param["ApplicationVersionId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
