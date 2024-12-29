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
 * DescribeNodeDataDisks请求参数结构体
 *
 * @method string getInstanceId() 获取EMR集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置EMR集群实例ID
 * @method array getCvmInstanceIds() 获取节点CVM实例Id列表
 * @method void setCvmInstanceIds(array $CvmInstanceIds) 设置节点CVM实例Id列表
 */
class DescribeNodeDataDisksRequest extends AbstractModel
{
    /**
     * @var string EMR集群实例ID
     */
    public $InstanceId;

    /**
     * @var array 节点CVM实例Id列表
     */
    public $CvmInstanceIds;

    /**
     * @param string $InstanceId EMR集群实例ID
     * @param array $CvmInstanceIds 节点CVM实例Id列表
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

        if (array_key_exists("CvmInstanceIds",$param) and $param["CvmInstanceIds"] !== null) {
            $this->CvmInstanceIds = $param["CvmInstanceIds"];
        }
    }
}
