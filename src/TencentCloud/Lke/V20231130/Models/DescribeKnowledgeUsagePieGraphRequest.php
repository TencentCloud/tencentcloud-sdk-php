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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKnowledgeUsagePieGraph请求参数结构体
 *
 * @method array getAppBizIds() 获取应用ID数组
 * @method void setAppBizIds(array $AppBizIds) 设置应用ID数组
 * @method string getSpaceId() 获取空间ID，用于限定查询范围。不填时查询所有空间的数据
 * @method void setSpaceId(string $SpaceId) 设置空间ID，用于限定查询范围。不填时查询所有空间的数据
 */
class DescribeKnowledgeUsagePieGraphRequest extends AbstractModel
{
    /**
     * @var array 应用ID数组
     */
    public $AppBizIds;

    /**
     * @var string 空间ID，用于限定查询范围。不填时查询所有空间的数据
     */
    public $SpaceId;

    /**
     * @param array $AppBizIds 应用ID数组
     * @param string $SpaceId 空间ID，用于限定查询范围。不填时查询所有空间的数据
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
        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }
    }
}
