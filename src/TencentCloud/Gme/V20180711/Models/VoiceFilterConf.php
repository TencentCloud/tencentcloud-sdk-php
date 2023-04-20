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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音过滤服务配置数据
 *
 * @method string getStatus() 获取语音过滤服务开关，取值：open/close
 * @method void setStatus(string $Status) 设置语音过滤服务开关，取值：open/close
 * @method array getSceneInfos() 获取场景配置信息，如开关状态，回调地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneInfos(array $SceneInfos) 设置场景配置信息，如开关状态，回调地址。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VoiceFilterConf extends AbstractModel
{
    /**
     * @var string 语音过滤服务开关，取值：open/close
     */
    public $Status;

    /**
     * @var array 场景配置信息，如开关状态，回调地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneInfos;

    /**
     * @param string $Status 语音过滤服务开关，取值：open/close
     * @param array $SceneInfos 场景配置信息，如开关状态，回调地址。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SceneInfos",$param) and $param["SceneInfos"] !== null) {
            $this->SceneInfos = [];
            foreach ($param["SceneInfos"] as $key => $value){
                $obj = new SceneInfo();
                $obj->deserialize($value);
                array_push($this->SceneInfos, $obj);
            }
        }
    }
}
