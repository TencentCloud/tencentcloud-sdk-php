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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取通道实例ID。
 * @method void setInstanceId(string $InstanceId) 设置通道实例ID。
 * @method string getStatus() 获取通道状态。
其中：
RUNNING，运行中；
CREATING，创建中；
DESTROYING，销毁中；
OPENING，开启中；
CLOSING，关闭中；
CLOSED，已关闭；
ADJUSTING，配置变更中；
ISOLATING，隔离中；
ISOLATED，已隔离；
UNKNOWN，未知状态。
 * @method void setStatus(string $Status) 设置通道状态。
其中：
RUNNING，运行中；
CREATING，创建中；
DESTROYING，销毁中；
OPENING，开启中；
CLOSING，关闭中；
CLOSED，已关闭；
ADJUSTING，配置变更中；
ISOLATING，隔离中；
ISOLATED，已隔离；
UNKNOWN，未知状态。
 */

/**
 *通道状态信息
 */
class ProxyStatus extends AbstractModel
{
    /**
     * @var string 通道实例ID。
     */
    public $InstanceId;

    /**
     * @var string 通道状态。
其中：
RUNNING，运行中；
CREATING，创建中；
DESTROYING，销毁中；
OPENING，开启中；
CLOSING，关闭中；
CLOSED，已关闭；
ADJUSTING，配置变更中；
ISOLATING，隔离中；
ISOLATED，已隔离；
UNKNOWN，未知状态。
     */
    public $Status;
    /**
     * @param string $InstanceId 通道实例ID。
     * @param string $Status 通道状态。
其中：
RUNNING，运行中；
CREATING，创建中；
DESTROYING，销毁中；
OPENING，开启中；
CLOSING，关闭中；
CLOSED，已关闭；
ADJUSTING，配置变更中；
ISOLATING，隔离中；
ISOLATED，已隔离；
UNKNOWN，未知状态。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
