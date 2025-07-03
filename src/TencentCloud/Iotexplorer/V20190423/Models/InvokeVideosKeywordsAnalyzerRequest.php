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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InvokeVideosKeywordsAnalyzer请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getStartTimeMs() 获取开始时间。

注：
1. 单位为毫秒（ms）
2. 时间区间必须控制在某一个自然天内，不支持跨天
 * @method void setStartTimeMs(integer $StartTimeMs) 设置开始时间。

注：
1. 单位为毫秒（ms）
2. 时间区间必须控制在某一个自然天内，不支持跨天
 * @method integer getEndTimeMs() 获取结束时间。

注：
1. 单位为毫秒（ms）
2. 时间区间必须控制在某一个自然天内，不支持跨天
 * @method void setEndTimeMs(integer $EndTimeMs) 设置结束时间。

注：
1. 单位为毫秒（ms）
2. 时间区间必须控制在某一个自然天内，不支持跨天
 * @method integer getKeywordsMaxNum() 获取返回的关键字最大数量，默认为5；最大不能超过10
 * @method void setKeywordsMaxNum(integer $KeywordsMaxNum) 设置返回的关键字最大数量，默认为5；最大不能超过10
 */
class InvokeVideosKeywordsAnalyzerRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 开始时间。

注：
1. 单位为毫秒（ms）
2. 时间区间必须控制在某一个自然天内，不支持跨天
     */
    public $StartTimeMs;

    /**
     * @var integer 结束时间。

注：
1. 单位为毫秒（ms）
2. 时间区间必须控制在某一个自然天内，不支持跨天
     */
    public $EndTimeMs;

    /**
     * @var integer 返回的关键字最大数量，默认为5；最大不能超过10
     */
    public $KeywordsMaxNum;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param integer $StartTimeMs 开始时间。

注：
1. 单位为毫秒（ms）
2. 时间区间必须控制在某一个自然天内，不支持跨天
     * @param integer $EndTimeMs 结束时间。

注：
1. 单位为毫秒（ms）
2. 时间区间必须控制在某一个自然天内，不支持跨天
     * @param integer $KeywordsMaxNum 返回的关键字最大数量，默认为5；最大不能超过10
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("StartTimeMs",$param) and $param["StartTimeMs"] !== null) {
            $this->StartTimeMs = $param["StartTimeMs"];
        }

        if (array_key_exists("EndTimeMs",$param) and $param["EndTimeMs"] !== null) {
            $this->EndTimeMs = $param["EndTimeMs"];
        }

        if (array_key_exists("KeywordsMaxNum",$param) and $param["KeywordsMaxNum"] !== null) {
            $this->KeywordsMaxNum = $param["KeywordsMaxNum"];
        }
    }
}
