<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取符合条件的实例数量。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的实例数量。
 * @method array getAddressTemplateGroupSet() 获取IP地址模板。
 * @method void setAddressTemplateGroupSet(array $AddressTemplateGroupSet) 设置IP地址模板。
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeAddressTemplateGroups返回参数结构体
 */
class DescribeAddressTemplateGroupsResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的实例数量。
     */
    public $TotalCount;

    /**
     * @var array IP地址模板。
     */
    public $AddressTemplateGroupSet;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param integer $TotalCount 符合条件的实例数量。
     * @param array $AddressTemplateGroupSet IP地址模板。
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AddressTemplateGroupSet",$param) and $param["AddressTemplateGroupSet"] !== null) {
            $this->AddressTemplateGroupSet = [];
            foreach ($param["AddressTemplateGroupSet"] as $key => $value){
                $obj = new AddressTemplateGroup();
                $obj->deserialize($value);
                array_push($this->AddressTemplateGroupSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
