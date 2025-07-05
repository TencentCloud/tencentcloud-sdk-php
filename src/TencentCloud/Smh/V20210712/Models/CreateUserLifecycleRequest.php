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
 * CreateUserLifecycle请求参数结构体
 *
 * @method string getLibraryId() 获取媒体库 ID。
 * @method void setLibraryId(string $LibraryId) 设置媒体库 ID。
 * @method UserFilter getFilter() 获取用于唯一查找用户的过滤器。
 * @method void setFilter(UserFilter $Filter) 设置用于唯一查找用户的过滤器。
 * @method string getIsolateTime() 获取隔离时间，当时间超过该时间点后，指定用户将无法登录，但他的账号信息、文件资源会被保留，可以通过再次调用本接口更新隔离时间，恢复登录。如不指定，则代表不设置隔离时间，且当前用户已经设置的隔离时间会被删除。
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间，当时间超过该时间点后，指定用户将无法登录，但他的账号信息、文件资源会被保留，可以通过再次调用本接口更新隔离时间，恢复登录。如不指定，则代表不设置隔离时间，且当前用户已经设置的隔离时间会被删除。
 * @method string getDestroyTime() 获取销毁时间，当时间超过该时间点后，指定用户的资源将被销毁且无法通过再次调用此接口更新时间。如果同时指定了 IsolateTime 则不能早于 IsolateTime 指定的时间。如不指定，则代表不设置销毁时间，且当前用户已经设置的销毁时间会被删除。
 * @method void setDestroyTime(string $DestroyTime) 设置销毁时间，当时间超过该时间点后，指定用户的资源将被销毁且无法通过再次调用此接口更新时间。如果同时指定了 IsolateTime 则不能早于 IsolateTime 指定的时间。如不指定，则代表不设置销毁时间，且当前用户已经设置的销毁时间会被删除。
 */
class CreateUserLifecycleRequest extends AbstractModel
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
     * @var string 隔离时间，当时间超过该时间点后，指定用户将无法登录，但他的账号信息、文件资源会被保留，可以通过再次调用本接口更新隔离时间，恢复登录。如不指定，则代表不设置隔离时间，且当前用户已经设置的隔离时间会被删除。
     */
    public $IsolateTime;

    /**
     * @var string 销毁时间，当时间超过该时间点后，指定用户的资源将被销毁且无法通过再次调用此接口更新时间。如果同时指定了 IsolateTime 则不能早于 IsolateTime 指定的时间。如不指定，则代表不设置销毁时间，且当前用户已经设置的销毁时间会被删除。
     */
    public $DestroyTime;

    /**
     * @param string $LibraryId 媒体库 ID。
     * @param UserFilter $Filter 用于唯一查找用户的过滤器。
     * @param string $IsolateTime 隔离时间，当时间超过该时间点后，指定用户将无法登录，但他的账号信息、文件资源会被保留，可以通过再次调用本接口更新隔离时间，恢复登录。如不指定，则代表不设置隔离时间，且当前用户已经设置的隔离时间会被删除。
     * @param string $DestroyTime 销毁时间，当时间超过该时间点后，指定用户的资源将被销毁且无法通过再次调用此接口更新时间。如果同时指定了 IsolateTime 则不能早于 IsolateTime 指定的时间。如不指定，则代表不设置销毁时间，且当前用户已经设置的销毁时间会被删除。
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

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }
    }
}
