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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRemoteDisksDeniedActions请求参数结构体
 *
 * @method array getRemoteDiskIds() 获取<p>单副本SSD硬盘ID列表。每次批量请求单副本SSD硬盘的上限为 100。</p>
 * @method void setRemoteDiskIds(array $RemoteDiskIds) 设置<p>单副本SSD硬盘ID列表。每次批量请求单副本SSD硬盘的上限为 100。</p>
 */
class DescribeRemoteDisksDeniedActionsRequest extends AbstractModel
{
    /**
     * @var array <p>单副本SSD硬盘ID列表。每次批量请求单副本SSD硬盘的上限为 100。</p>
     */
    public $RemoteDiskIds;

    /**
     * @param array $RemoteDiskIds <p>单副本SSD硬盘ID列表。每次批量请求单副本SSD硬盘的上限为 100。</p>
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
        if (array_key_exists("RemoteDiskIds",$param) and $param["RemoteDiskIds"] !== null) {
            $this->RemoteDiskIds = $param["RemoteDiskIds"];
        }
    }
}
