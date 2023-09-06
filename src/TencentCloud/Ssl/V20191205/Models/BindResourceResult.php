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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定资源结果
 *
 * @method string getResourceType() 获取资源类型：clb、cdn、waf、live、vod、ddos、tke、apigateway、tcb、teo（edgeOne）
 * @method void setResourceType(string $ResourceType) 设置资源类型：clb、cdn、waf、live、vod、ddos、tke、apigateway、tcb、teo（edgeOne）
 * @method array getBindResourceRegionResult() 获取绑定资源地域结果
 * @method void setBindResourceRegionResult(array $BindResourceRegionResult) 设置绑定资源地域结果
 */
class BindResourceResult extends AbstractModel
{
    /**
     * @var string 资源类型：clb、cdn、waf、live、vod、ddos、tke、apigateway、tcb、teo（edgeOne）
     */
    public $ResourceType;

    /**
     * @var array 绑定资源地域结果
     */
    public $BindResourceRegionResult;

    /**
     * @param string $ResourceType 资源类型：clb、cdn、waf、live、vod、ddos、tke、apigateway、tcb、teo（edgeOne）
     * @param array $BindResourceRegionResult 绑定资源地域结果
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("BindResourceRegionResult",$param) and $param["BindResourceRegionResult"] !== null) {
            $this->BindResourceRegionResult = [];
            foreach ($param["BindResourceRegionResult"] as $key => $value){
                $obj = new BindResourceRegionResult();
                $obj->deserialize($value);
                array_push($this->BindResourceRegionResult, $obj);
            }
        }
    }
}
