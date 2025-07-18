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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteReverseShellWhiteLists请求参数结构体
 *
 * @method array getWhiteListIdSet() 获取白名单ids
 * @method void setWhiteListIdSet(array $WhiteListIdSet) 设置白名单ids
 */
class DeleteReverseShellWhiteListsRequest extends AbstractModel
{
    /**
     * @var array 白名单ids
     */
    public $WhiteListIdSet;

    /**
     * @param array $WhiteListIdSet 白名单ids
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
        if (array_key_exists("WhiteListIdSet",$param) and $param["WhiteListIdSet"] !== null) {
            $this->WhiteListIdSet = $param["WhiteListIdSet"];
        }
    }
}
