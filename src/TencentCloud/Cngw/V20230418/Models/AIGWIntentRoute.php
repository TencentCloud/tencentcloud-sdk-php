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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关意图路由配置
 *
 * @method string getIntentModelServiceId() 获取<p>意图识别模型id</p>
 * @method void setIntentModelServiceId(string $IntentModelServiceId) 设置<p>意图识别模型id</p>
 * @method float getConfidenceThreshold() 获取<p>置信度</p>
 * @method void setConfidenceThreshold(float $ConfidenceThreshold) 设置<p>置信度</p>
 * @method string getDefaultModelServiceId() 获取<p>默认服务id</p>
 * @method void setDefaultModelServiceId(string $DefaultModelServiceId) 设置<p>默认服务id</p>
 * @method array getRules() 获取<p>规则</p>
 * @method void setRules(array $Rules) 设置<p>规则</p>
 */
class AIGWIntentRoute extends AbstractModel
{
    /**
     * @var string <p>意图识别模型id</p>
     */
    public $IntentModelServiceId;

    /**
     * @var float <p>置信度</p>
     */
    public $ConfidenceThreshold;

    /**
     * @var string <p>默认服务id</p>
     */
    public $DefaultModelServiceId;

    /**
     * @var array <p>规则</p>
     */
    public $Rules;

    /**
     * @param string $IntentModelServiceId <p>意图识别模型id</p>
     * @param float $ConfidenceThreshold <p>置信度</p>
     * @param string $DefaultModelServiceId <p>默认服务id</p>
     * @param array $Rules <p>规则</p>
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
        if (array_key_exists("IntentModelServiceId",$param) and $param["IntentModelServiceId"] !== null) {
            $this->IntentModelServiceId = $param["IntentModelServiceId"];
        }

        if (array_key_exists("ConfidenceThreshold",$param) and $param["ConfidenceThreshold"] !== null) {
            $this->ConfidenceThreshold = $param["ConfidenceThreshold"];
        }

        if (array_key_exists("DefaultModelServiceId",$param) and $param["DefaultModelServiceId"] !== null) {
            $this->DefaultModelServiceId = $param["DefaultModelServiceId"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new AIGWIntentRouteRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
