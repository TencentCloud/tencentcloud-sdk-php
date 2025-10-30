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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserLifecycle请求参数结构体
 *
 * @method string getLibraryId() 获取媒体库 ID。
 * @method void setLibraryId(string $LibraryId) 设置媒体库 ID。
 * @method UserFilter getFilter() 获取用于唯一查找用户的过滤器。
 * @method void setFilter(UserFilter $Filter) 设置用于唯一查找用户的过滤器。
 */
class DescribeUserLifecycleRequest extends AbstractModel
{
    /**
     * @var string 媒体库 ID。
     */
    public $LibraryId;

    /**
     * @var UserFilter 用于唯一查找用户的过滤器。
     */
    public $Filter;

    /**
     * @param string $LibraryId 媒体库 ID。
     * @param UserFilter $Filter 用于唯一查找用户的过滤器。
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
        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new UserFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
