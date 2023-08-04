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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListOrganizationChannelNumbers请求参数结构体
 *
 * @method array getOrganizationId() 获取组织ID，json数组格式，最多一次支持10个组织
 * @method void setOrganizationId(array $OrganizationId) 设置组织ID，json数组格式，最多一次支持10个组织
 */
class ListOrganizationChannelNumbersRequest extends AbstractModel
{
    /**
     * @var array 组织ID，json数组格式，最多一次支持10个组织
     */
    public $OrganizationId;

    /**
     * @param array $OrganizationId 组织ID，json数组格式，最多一次支持10个组织
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }
    }
}
