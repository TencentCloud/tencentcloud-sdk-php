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
 * DeleteModelService请求参数结构体
 *
 * @method string getServiceId() 获取服务id
 * @method void setServiceId(string $ServiceId) 设置服务id
 * @method string getServiceCategory() 获取服务分类
 * @method void setServiceCategory(string $ServiceCategory) 设置服务分类
 */
class DeleteModelServiceRequest extends AbstractModel
{
    /**
     * @var string 服务id
     */
    public $ServiceId;

    /**
     * @var string 服务分类
     * @deprecated
     */
    public $ServiceCategory;

    /**
     * @param string $ServiceId 服务id
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceCategory",$param) and $param["ServiceCategory"] !== null) {
            $this->ServiceCategory = $param["ServiceCategory"];
        }
    }
}
