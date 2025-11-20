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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncUserToIOA请求参数结构体
 *
 * @method array getUserIdSet() 获取需要同步到ioa的本地用户的id集合
 * @method void setUserIdSet(array $UserIdSet) 设置需要同步到ioa的本地用户的id集合
 */
class SyncUserToIOARequest extends AbstractModel
{
    /**
     * @var array 需要同步到ioa的本地用户的id集合
     */
    public $UserIdSet;

    /**
     * @param array $UserIdSet 需要同步到ioa的本地用户的id集合
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
        if (array_key_exists("UserIdSet",$param) and $param["UserIdSet"] !== null) {
            $this->UserIdSet = $param["UserIdSet"];
        }
    }
}
