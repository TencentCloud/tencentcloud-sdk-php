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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDedicatedClusterImageCache请求参数结构体
 *
 * @method string getDedicatedClusterId() 获取集群ID
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置集群ID
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 */
class CreateDedicatedClusterImageCacheRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $DedicatedClusterId;

    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @param string $DedicatedClusterId 集群ID
     * @param string $ImageId 镜像ID
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }
    }
}
