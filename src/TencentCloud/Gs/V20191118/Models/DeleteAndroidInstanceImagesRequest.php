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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAndroidInstanceImages请求参数结构体
 *
 * @method array getAndroidInstanceImageIds() 获取镜像 ID 列表
 * @method void setAndroidInstanceImageIds(array $AndroidInstanceImageIds) 设置镜像 ID 列表
 */
class DeleteAndroidInstanceImagesRequest extends AbstractModel
{
    /**
     * @var array 镜像 ID 列表
     */
    public $AndroidInstanceImageIds;

    /**
     * @param array $AndroidInstanceImageIds 镜像 ID 列表
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
        if (array_key_exists("AndroidInstanceImageIds",$param) and $param["AndroidInstanceImageIds"] !== null) {
            $this->AndroidInstanceImageIds = $param["AndroidInstanceImageIds"];
        }
    }
}
