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
 * DistributePhotoToAndroidInstances请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取安卓实例 ID 列表
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置安卓实例 ID 列表
 * @method string getPhotoURL() 获取照片下载 URL
 * @method void setPhotoURL(string $PhotoURL) 设置照片下载 URL
 */
class DistributePhotoToAndroidInstancesRequest extends AbstractModel
{
    /**
     * @var array 安卓实例 ID 列表
     */
    public $AndroidInstanceIds;

    /**
     * @var string 照片下载 URL
     */
    public $PhotoURL;

    /**
     * @param array $AndroidInstanceIds 安卓实例 ID 列表
     * @param string $PhotoURL 照片下载 URL
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
        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }

        if (array_key_exists("PhotoURL",$param) and $param["PhotoURL"] !== null) {
            $this->PhotoURL = $param["PhotoURL"];
        }
    }
}
