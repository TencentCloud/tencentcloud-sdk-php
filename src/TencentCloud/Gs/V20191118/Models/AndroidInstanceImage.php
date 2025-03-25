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
 * 安卓实例镜像信息
 *
 * @method string getAndroidInstanceImageId() 获取镜像 ID
 * @method void setAndroidInstanceImageId(string $AndroidInstanceImageId) 设置镜像 ID
 * @method string getAndroidInstanceImageName() 获取镜像名称，由业务方自定义，仅用于展示
 * @method void setAndroidInstanceImageName(string $AndroidInstanceImageName) 设置镜像名称，由业务方自定义，仅用于展示
 * @method string getAndroidInstanceImageState() 获取镜像状态
 * @method void setAndroidInstanceImageState(string $AndroidInstanceImageState) 设置镜像状态
 * @method string getAndroidInstanceImageZone() 获取镜像可用区
 * @method void setAndroidInstanceImageZone(string $AndroidInstanceImageZone) 设置镜像可用区
 */
class AndroidInstanceImage extends AbstractModel
{
    /**
     * @var string 镜像 ID
     */
    public $AndroidInstanceImageId;

    /**
     * @var string 镜像名称，由业务方自定义，仅用于展示
     */
    public $AndroidInstanceImageName;

    /**
     * @var string 镜像状态
     */
    public $AndroidInstanceImageState;

    /**
     * @var string 镜像可用区
     */
    public $AndroidInstanceImageZone;

    /**
     * @param string $AndroidInstanceImageId 镜像 ID
     * @param string $AndroidInstanceImageName 镜像名称，由业务方自定义，仅用于展示
     * @param string $AndroidInstanceImageState 镜像状态
     * @param string $AndroidInstanceImageZone 镜像可用区
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
        if (array_key_exists("AndroidInstanceImageId",$param) and $param["AndroidInstanceImageId"] !== null) {
            $this->AndroidInstanceImageId = $param["AndroidInstanceImageId"];
        }

        if (array_key_exists("AndroidInstanceImageName",$param) and $param["AndroidInstanceImageName"] !== null) {
            $this->AndroidInstanceImageName = $param["AndroidInstanceImageName"];
        }

        if (array_key_exists("AndroidInstanceImageState",$param) and $param["AndroidInstanceImageState"] !== null) {
            $this->AndroidInstanceImageState = $param["AndroidInstanceImageState"];
        }

        if (array_key_exists("AndroidInstanceImageZone",$param) and $param["AndroidInstanceImageZone"] !== null) {
            $this->AndroidInstanceImageZone = $param["AndroidInstanceImageZone"];
        }
    }
}
