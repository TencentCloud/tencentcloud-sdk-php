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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 场景信息
 *
 * @method string getSceneId() 获取场景id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneId(string $SceneId) 设置场景id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSceneName() 获取场景名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneName(string $SceneName) 设置场景名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取场景版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置场景版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class SceneInfo extends AbstractModel
{
    /**
     * @var string 场景id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneId;

    /**
     * @var string 场景名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneName;

    /**
     * @var string 场景版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @param string $SceneId 场景id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SceneName 场景名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 场景版本
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
