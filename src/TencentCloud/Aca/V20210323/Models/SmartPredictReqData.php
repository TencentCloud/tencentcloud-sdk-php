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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能预测接口请求对象
 *
 * @method RequestCase getRequestCase() 获取病历和处方信息
 * @method void setRequestCase(RequestCase $RequestCase) 设置病历和处方信息
 * @method integer getRequestType() 获取0--默认值，同时返回**疾病预测**和**用药审查**结果<br>1--仅返回**疾病预测**结果<br>2--仅返回**用药审查**结果<br>已同时激活两个模块时，可按需使用 
 * @method void setRequestType(integer $RequestType) 设置0--默认值，同时返回**疾病预测**和**用药审查**结果<br>1--仅返回**疾病预测**结果<br>2--仅返回**用药审查**结果<br>已同时激活两个模块时，可按需使用 
 */
class SmartPredictReqData extends AbstractModel
{
    /**
     * @var RequestCase 病历和处方信息
     */
    public $RequestCase;

    /**
     * @var integer 0--默认值，同时返回**疾病预测**和**用药审查**结果<br>1--仅返回**疾病预测**结果<br>2--仅返回**用药审查**结果<br>已同时激活两个模块时，可按需使用 
     */
    public $RequestType;

    /**
     * @param RequestCase $RequestCase 病历和处方信息
     * @param integer $RequestType 0--默认值，同时返回**疾病预测**和**用药审查**结果<br>1--仅返回**疾病预测**结果<br>2--仅返回**用药审查**结果<br>已同时激活两个模块时，可按需使用 
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
        if (array_key_exists("RequestCase",$param) and $param["RequestCase"] !== null) {
            $this->RequestCase = new RequestCase();
            $this->RequestCase->deserialize($param["RequestCase"]);
        }

        if (array_key_exists("RequestType",$param) and $param["RequestType"] !== null) {
            $this->RequestType = $param["RequestType"];
        }
    }
}
