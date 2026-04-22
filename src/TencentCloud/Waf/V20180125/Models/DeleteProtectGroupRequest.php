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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteProtectGroup请求参数结构体
 *
 * @method array getGroupIds() 获取防护对象组ID列表，支持批量删除
 * @method void setGroupIds(array $GroupIds) 设置防护对象组ID列表，支持批量删除
 */
class DeleteProtectGroupRequest extends AbstractModel
{
    /**
     * @var array 防护对象组ID列表，支持批量删除
     */
    public $GroupIds;

    /**
     * @param array $GroupIds 防护对象组ID列表，支持批量删除
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
        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
