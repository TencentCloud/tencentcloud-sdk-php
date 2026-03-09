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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRPCMethodList请求参数结构体
 *
 * @method string getInstanceId() 获取etcd实例ID
 * @method void setInstanceId(string $InstanceId) 设置etcd实例ID
 * @method string getPodName() 获取etcd集群pod名称
 * @method void setPodName(string $PodName) 设置etcd集群pod名称
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取最大长度
 * @method void setLimit(integer $Limit) 设置最大长度
 */
class DescribeRPCMethodListRequest extends AbstractModel
{
    /**
     * @var string etcd实例ID
     */
    public $InstanceId;

    /**
     * @var string etcd集群pod名称
     */
    public $PodName;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 最大长度
     */
    public $Limit;

    /**
     * @param string $InstanceId etcd实例ID
     * @param string $PodName etcd集群pod名称
     * @param integer $Offset 偏移量
     * @param integer $Limit 最大长度
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

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
