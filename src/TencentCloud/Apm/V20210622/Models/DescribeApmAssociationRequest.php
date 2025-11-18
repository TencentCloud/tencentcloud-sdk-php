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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmAssociation请求参数结构体
 *
 * @method string getProductName() 获取关联的产品名，当前只支持Prometheus
 * @method void setProductName(string $ProductName) 设置关联的产品名，当前只支持Prometheus
 * @method string getInstanceId() 获取业务系统名
 * @method void setInstanceId(string $InstanceId) 设置业务系统名
 */
class DescribeApmAssociationRequest extends AbstractModel
{
    /**
     * @var string 关联的产品名，当前只支持Prometheus
     */
    public $ProductName;

    /**
     * @var string 业务系统名
     */
    public $InstanceId;

    /**
     * @param string $ProductName 关联的产品名，当前只支持Prometheus
     * @param string $InstanceId 业务系统名
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
