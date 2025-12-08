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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelServiceCallInfo请求参数结构体
 *
 * @method string getServiceGroupId() 获取服务组id
 * @method void setServiceGroupId(string $ServiceGroupId) 设置服务组id
 * @method string getServiceCategory() 获取服务分类
 * @method void setServiceCategory(string $ServiceCategory) 设置服务分类
 */
class DescribeModelServiceCallInfoRequest extends AbstractModel
{
    /**
     * @var string 服务组id
     */
    public $ServiceGroupId;

    /**
     * @var string 服务分类
     * @deprecated
     */
    public $ServiceCategory;

    /**
     * @param string $ServiceGroupId 服务组id
     * @param string $ServiceCategory 服务分类
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
        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("ServiceCategory",$param) and $param["ServiceCategory"] !== null) {
            $this->ServiceCategory = $param["ServiceCategory"];
        }
    }
}
