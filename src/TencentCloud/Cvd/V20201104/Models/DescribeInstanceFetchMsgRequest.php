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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceFetchMsg请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getUserId() 获取绑定实例的UserID，为后续多会话预留参数
 * @method void setUserId(string $UserId) 设置绑定实例的UserID，为后续多会话预留参数
 * @method string getDesktopName() 获取拉取桌面title，用户可自行定义，默认为云桌面实例名称
 * @method void setDesktopName(string $DesktopName) 设置拉取桌面title，用户可自行定义，默认为云桌面实例名称
 * @method boolean getForce() 获取是否抢占桌面，即桌面使用过程中，抢占登录。
true：抢占登录
false：非抢占登录
默认为抢占登录
 * @method void setForce(boolean $Force) 设置是否抢占桌面，即桌面使用过程中，抢占登录。
true：抢占登录
false：非抢占登录
默认为抢占登录
 * @method boolean getIsInternal() 获取是否内网登录桌面
 * @method void setIsInternal(boolean $IsInternal) 设置是否内网登录桌面
 */
class DescribeInstanceFetchMsgRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 绑定实例的UserID，为后续多会话预留参数
     */
    public $UserId;

    /**
     * @var string 拉取桌面title，用户可自行定义，默认为云桌面实例名称
     */
    public $DesktopName;

    /**
     * @var boolean 是否抢占桌面，即桌面使用过程中，抢占登录。
true：抢占登录
false：非抢占登录
默认为抢占登录
     */
    public $Force;

    /**
     * @var boolean 是否内网登录桌面
     */
    public $IsInternal;

    /**
     * @param string $InstanceId 实例Id
     * @param string $UserId 绑定实例的UserID，为后续多会话预留参数
     * @param string $DesktopName 拉取桌面title，用户可自行定义，默认为云桌面实例名称
     * @param boolean $Force 是否抢占桌面，即桌面使用过程中，抢占登录。
true：抢占登录
false：非抢占登录
默认为抢占登录
     * @param boolean $IsInternal 是否内网登录桌面
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("DesktopName",$param) and $param["DesktopName"] !== null) {
            $this->DesktopName = $param["DesktopName"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }
    }
}
