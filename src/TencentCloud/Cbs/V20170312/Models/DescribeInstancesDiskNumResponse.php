<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getAttachedDiskCount() 获取当前云服务器已挂载弹性云盘数量。
 * @method void setAttachedDiskCount(integer $AttachedDiskCount) 设置当前云服务器已挂载弹性云盘数量。
 * @method integer getMaxAttachCount() 获取当前云服务器最大可挂载弹性云盘数量。
 * @method void setMaxAttachCount(integer $MaxAttachCount) 设置当前云服务器最大可挂载弹性云盘数量。
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeInstancesDiskNum返回参数结构体
 */
class DescribeInstancesDiskNumResponse extends AbstractModel
{
    /**
     * @var integer 当前云服务器已挂载弹性云盘数量。
     */
    public $AttachedDiskCount;

    /**
     * @var integer 当前云服务器最大可挂载弹性云盘数量。
     */
    public $MaxAttachCount;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param integer $AttachedDiskCount 当前云服务器已挂载弹性云盘数量。
     * @param integer $MaxAttachCount 当前云服务器最大可挂载弹性云盘数量。
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AttachedDiskCount",$param) and $param["AttachedDiskCount"] !== null) {
            $this->AttachedDiskCount = $param["AttachedDiskCount"];
        }

        if (array_key_exists("MaxAttachCount",$param) and $param["MaxAttachCount"] !== null) {
            $this->MaxAttachCount = $param["MaxAttachCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
