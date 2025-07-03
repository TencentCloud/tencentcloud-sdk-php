<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * CreateAndroidInstanceImage请求参数结构体
 *
 * @method string getAndroidInstanceImageName() 获取安卓实例镜像名称
 * @method void setAndroidInstanceImageName(string $AndroidInstanceImageName) 设置安卓实例镜像名称
 * @method string getAndroidInstanceId() 获取安卓实例 ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置安卓实例 ID
 */
class CreateAndroidInstanceImageRequest extends AbstractModel
{
    /**
     * @var string 安卓实例镜像名称
     */
    public $AndroidInstanceImageName;

    /**
     * @var string 安卓实例 ID
     */
    public $AndroidInstanceId;

    /**
     * @param string $AndroidInstanceImageName 安卓实例镜像名称
     * @param string $AndroidInstanceId 安卓实例 ID
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
        if (array_key_exists("AndroidInstanceImageName",$param) and $param["AndroidInstanceImageName"] !== null) {
            $this->AndroidInstanceImageName = $param["AndroidInstanceImageName"];
        }

        if (array_key_exists("AndroidInstanceId",$param) and $param["AndroidInstanceId"] !== null) {
            $this->AndroidInstanceId = $param["AndroidInstanceId"];
        }
    }
}
