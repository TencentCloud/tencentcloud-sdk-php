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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共用组件信息
 *
 * @method string getServiceName() 获取共用组件名
 * @method void setServiceName(string $ServiceName) 设置共用组件名
 * @method string getInstanceId() 获取共用组件集群
 * @method void setInstanceId(string $InstanceId) 设置共用组件集群
 */
class DependService extends AbstractModel
{
    /**
     * @var string 共用组件名
     */
    public $ServiceName;

    /**
     * @var string 共用组件集群
     */
    public $InstanceId;

    /**
     * @param string $ServiceName 共用组件名
     * @param string $InstanceId 共用组件集群
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
