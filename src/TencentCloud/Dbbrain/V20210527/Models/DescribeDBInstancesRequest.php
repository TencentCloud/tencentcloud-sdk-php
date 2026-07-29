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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>实例ID列表，最多支持100个。支持多种数据库产品的实例ID，系统会根据实例ID前缀自动识别产品类型。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例ID列表，最多支持100个。支持多种数据库产品的实例ID，系统会根据实例ID前缀自动识别产品类型。</p>
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>实例ID列表，最多支持100个。支持多种数据库产品的实例ID，系统会根据实例ID前缀自动识别产品类型。</p>
     */
    public $InstanceIds;

    /**
     * @param array $InstanceIds <p>实例ID列表，最多支持100个。支持多种数据库产品的实例ID，系统会根据实例ID前缀自动识别产品类型。</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
