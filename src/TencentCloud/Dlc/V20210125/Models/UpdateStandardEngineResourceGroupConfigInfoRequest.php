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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateStandardEngineResourceGroupConfigInfo请求参数结构体
 *
 * @method string getEngineResourceGroupName() 获取引擎资源组名称
 * @method void setEngineResourceGroupName(string $EngineResourceGroupName) 设置引擎资源组名称
 * @method array getUpdateConfContext() 获取需要更新的配置
 * @method void setUpdateConfContext(array $UpdateConfContext) 设置需要更新的配置
 * @method integer getIsEffectiveNow() 获取是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
 * @method void setIsEffectiveNow(integer $IsEffectiveNow) 设置是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
 */
class UpdateStandardEngineResourceGroupConfigInfoRequest extends AbstractModel
{
    /**
     * @var string 引擎资源组名称
     */
    public $EngineResourceGroupName;

    /**
     * @var array 需要更新的配置
     */
    public $UpdateConfContext;

    /**
     * @var integer 是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
     */
    public $IsEffectiveNow;

    /**
     * @param string $EngineResourceGroupName 引擎资源组名称
     * @param array $UpdateConfContext 需要更新的配置
     * @param integer $IsEffectiveNow 是否立即重启资源组生效，0--立即生效，1--只保持不重启生效
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
        if (array_key_exists("EngineResourceGroupName",$param) and $param["EngineResourceGroupName"] !== null) {
            $this->EngineResourceGroupName = $param["EngineResourceGroupName"];
        }

        if (array_key_exists("UpdateConfContext",$param) and $param["UpdateConfContext"] !== null) {
            $this->UpdateConfContext = [];
            foreach ($param["UpdateConfContext"] as $key => $value){
                $obj = new UpdateConfContext();
                $obj->deserialize($value);
                array_push($this->UpdateConfContext, $obj);
            }
        }

        if (array_key_exists("IsEffectiveNow",$param) and $param["IsEffectiveNow"] !== null) {
            $this->IsEffectiveNow = $param["IsEffectiveNow"];
        }
    }
}
