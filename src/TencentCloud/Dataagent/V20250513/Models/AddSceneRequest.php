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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddScene请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method Scene getScene() 获取场景
 * @method void setScene(Scene $Scene) 设置场景
 * @method integer getUseScope() 获取1仅自己使用，2指定用户，0全员
 * @method void setUseScope(integer $UseScope) 设置1仅自己使用，2指定用户，0全员
 * @method array getAuthorityUins() 获取可使用用户列表
 * @method void setAuthorityUins(array $AuthorityUins) 设置可使用用户列表
 */
class AddSceneRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var Scene 场景
     */
    public $Scene;

    /**
     * @var integer 1仅自己使用，2指定用户，0全员
     */
    public $UseScope;

    /**
     * @var array 可使用用户列表
     */
    public $AuthorityUins;

    /**
     * @param string $InstanceId 实例ID
     * @param Scene $Scene 场景
     * @param integer $UseScope 1仅自己使用，2指定用户，0全员
     * @param array $AuthorityUins 可使用用户列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = new Scene();
            $this->Scene->deserialize($param["Scene"]);
        }

        if (array_key_exists("UseScope",$param) and $param["UseScope"] !== null) {
            $this->UseScope = $param["UseScope"];
        }

        if (array_key_exists("AuthorityUins",$param) and $param["AuthorityUins"] !== null) {
            $this->AuthorityUins = $param["AuthorityUins"];
        }
    }
}
