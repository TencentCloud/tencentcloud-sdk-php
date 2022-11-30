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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 使用场景信息
 *
 * @method string getSceneId() 获取使用场景Id
 * @method void setSceneId(string $SceneId) 设置使用场景Id
 * @method string getDisplayName() 获取使用场景展示名称
 * @method void setDisplayName(string $DisplayName) 设置使用场景展示名称
 * @method string getDescription() 获取使用场景描述
 * @method void setDescription(string $Description) 设置使用场景描述
 */
class Scene extends AbstractModel
{
    /**
     * @var string 使用场景Id
     */
    public $SceneId;

    /**
     * @var string 使用场景展示名称
     */
    public $DisplayName;

    /**
     * @var string 使用场景描述
     */
    public $Description;

    /**
     * @param string $SceneId 使用场景Id
     * @param string $DisplayName 使用场景展示名称
     * @param string $Description 使用场景描述
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
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
