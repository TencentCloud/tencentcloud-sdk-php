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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeReplicaToMaster请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

 * @method integer getGroupId() 获取副本节点组 ID，请通过接口[DescribeInstanceZoneInfo](https://cloud.tencent.com/document/product/239/50312)获取多 AZ备节点组的 ID 信息。单 AZ，则无需配置该参数。
 * @method void setGroupId(integer $GroupId) 设置副本节点组 ID，请通过接口[DescribeInstanceZoneInfo](https://cloud.tencent.com/document/product/239/50312)获取多 AZ备节点组的 ID 信息。单 AZ，则无需配置该参数。
 */
class ChangeReplicaToMasterRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

     */
    public $InstanceId;

    /**
     * @var integer 副本节点组 ID，请通过接口[DescribeInstanceZoneInfo](https://cloud.tencent.com/document/product/239/50312)获取多 AZ备节点组的 ID 信息。单 AZ，则无需配置该参数。
     */
    public $GroupId;

    /**
     * @param string $InstanceId 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

     * @param integer $GroupId 副本节点组 ID，请通过接口[DescribeInstanceZoneInfo](https://cloud.tencent.com/document/product/239/50312)获取多 AZ备节点组的 ID 信息。单 AZ，则无需配置该参数。
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
