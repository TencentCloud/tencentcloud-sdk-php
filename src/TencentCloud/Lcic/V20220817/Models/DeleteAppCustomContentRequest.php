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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAppCustomContent请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用ID。
 * @method void setSdkAppId(integer $SdkAppId) 设置应用ID。
 * @method array getScenes() 获取指定需要删除的已设置的scene场景自定义元素，如果为空则删除应用下已设置的所有自定义元素。
 * @method void setScenes(array $Scenes) 设置指定需要删除的已设置的scene场景自定义元素，如果为空则删除应用下已设置的所有自定义元素。
 */
class DeleteAppCustomContentRequest extends AbstractModel
{
    /**
     * @var integer 应用ID。
     */
    public $SdkAppId;

    /**
     * @var array 指定需要删除的已设置的scene场景自定义元素，如果为空则删除应用下已设置的所有自定义元素。
     */
    public $Scenes;

    /**
     * @param integer $SdkAppId 应用ID。
     * @param array $Scenes 指定需要删除的已设置的scene场景自定义元素，如果为空则删除应用下已设置的所有自定义元素。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }
    }
}
