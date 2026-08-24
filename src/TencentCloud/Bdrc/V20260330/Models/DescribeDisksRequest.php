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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDisks请求参数结构体
 *
 * @method array getDiskIds() 获取要查询信息的云盘ID列表
 * @method void setDiskIds(array $DiskIds) 设置要查询信息的云盘ID列表
 * @method string getDiskRegion() 获取云盘所在地域
 * @method void setDiskRegion(string $DiskRegion) 设置云盘所在地域
 */
class DescribeDisksRequest extends AbstractModel
{
    /**
     * @var array 要查询信息的云盘ID列表
     */
    public $DiskIds;

    /**
     * @var string 云盘所在地域
     */
    public $DiskRegion;

    /**
     * @param array $DiskIds 要查询信息的云盘ID列表
     * @param string $DiskRegion 云盘所在地域
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("DiskRegion",$param) and $param["DiskRegion"] !== null) {
            $this->DiskRegion = $param["DiskRegion"];
        }
    }
}
