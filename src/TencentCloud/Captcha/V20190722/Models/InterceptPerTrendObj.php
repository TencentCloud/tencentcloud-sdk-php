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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拦截率趋势obj
 *
 * @method string getFtime() 获取时间参数
 * @method void setFtime(string $Ftime) 设置时间参数
 * @method float getRequestInterceptPer() 获取拦截率
 * @method void setRequestInterceptPer(float $RequestInterceptPer) 设置拦截率
 * @method float getAnswerInterceptPer() 获取答案拦截率
 * @method void setAnswerInterceptPer(float $AnswerInterceptPer) 设置答案拦截率
 * @method float getPolicyInterceptPer() 获取策略拦截率
 * @method void setPolicyInterceptPer(float $PolicyInterceptPer) 设置策略拦截率
 */
class InterceptPerTrendObj extends AbstractModel
{
    /**
     * @var string 时间参数
     */
    public $Ftime;

    /**
     * @var float 拦截率
     */
    public $RequestInterceptPer;

    /**
     * @var float 答案拦截率
     */
    public $AnswerInterceptPer;

    /**
     * @var float 策略拦截率
     */
    public $PolicyInterceptPer;

    /**
     * @param string $Ftime 时间参数
     * @param float $RequestInterceptPer 拦截率
     * @param float $AnswerInterceptPer 答案拦截率
     * @param float $PolicyInterceptPer 策略拦截率
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
        if (array_key_exists("Ftime",$param) and $param["Ftime"] !== null) {
            $this->Ftime = $param["Ftime"];
        }

        if (array_key_exists("RequestInterceptPer",$param) and $param["RequestInterceptPer"] !== null) {
            $this->RequestInterceptPer = $param["RequestInterceptPer"];
        }

        if (array_key_exists("AnswerInterceptPer",$param) and $param["AnswerInterceptPer"] !== null) {
            $this->AnswerInterceptPer = $param["AnswerInterceptPer"];
        }

        if (array_key_exists("PolicyInterceptPer",$param) and $param["PolicyInterceptPer"] !== null) {
            $this->PolicyInterceptPer = $param["PolicyInterceptPer"];
        }
    }
}
