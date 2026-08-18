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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消耗分类
 *
 * @method string getConsumptionScene() 获取<p>消耗场景（如推理/训练/评测等）</p>
 * @method void setConsumptionScene(string $ConsumptionScene) 设置<p>消耗场景（如推理/训练/评测等）</p>
 * @method string getConsumptionTarget() 获取<p>消耗目标（如具体模型名/插件名/平台功能名）</p>
 * @method void setConsumptionTarget(string $ConsumptionTarget) 设置<p>消耗目标（如具体模型名/插件名/平台功能名）</p>
 * @method string getConsumptionType() 获取<p>消耗类型，取值集合由业务方定义（如 model/plugin/platform 等）</p>
 * @method void setConsumptionType(string $ConsumptionType) 设置<p>消耗类型，取值集合由业务方定义（如 model/plugin/platform 等）</p>
 * @method string getPackageName() 获取<p>套餐包名称</p>
 * @method void setPackageName(string $PackageName) 设置<p>套餐包名称</p>
 */
class ConsumptionClassification extends AbstractModel
{
    /**
     * @var string <p>消耗场景（如推理/训练/评测等）</p>
     */
    public $ConsumptionScene;

    /**
     * @var string <p>消耗目标（如具体模型名/插件名/平台功能名）</p>
     */
    public $ConsumptionTarget;

    /**
     * @var string <p>消耗类型，取值集合由业务方定义（如 model/plugin/platform 等）</p>
     */
    public $ConsumptionType;

    /**
     * @var string <p>套餐包名称</p>
     */
    public $PackageName;

    /**
     * @param string $ConsumptionScene <p>消耗场景（如推理/训练/评测等）</p>
     * @param string $ConsumptionTarget <p>消耗目标（如具体模型名/插件名/平台功能名）</p>
     * @param string $ConsumptionType <p>消耗类型，取值集合由业务方定义（如 model/plugin/platform 等）</p>
     * @param string $PackageName <p>套餐包名称</p>
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
        if (array_key_exists("ConsumptionScene",$param) and $param["ConsumptionScene"] !== null) {
            $this->ConsumptionScene = $param["ConsumptionScene"];
        }

        if (array_key_exists("ConsumptionTarget",$param) and $param["ConsumptionTarget"] !== null) {
            $this->ConsumptionTarget = $param["ConsumptionTarget"];
        }

        if (array_key_exists("ConsumptionType",$param) and $param["ConsumptionType"] !== null) {
            $this->ConsumptionType = $param["ConsumptionType"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
