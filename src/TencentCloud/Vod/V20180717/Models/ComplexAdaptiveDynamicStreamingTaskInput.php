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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自适应码流任务的输入参数。
 *
 * @method ComplexAdaptiveDynamicStreamingTaskStreamPara getStreamPara() 获取自适应码流参数。
 * @method void setStreamPara(ComplexAdaptiveDynamicStreamingTaskStreamPara $StreamPara) 设置自适应码流参数。
 */
class ComplexAdaptiveDynamicStreamingTaskInput extends AbstractModel
{
    /**
     * @var ComplexAdaptiveDynamicStreamingTaskStreamPara 自适应码流参数。
     */
    public $StreamPara;

    /**
     * @param ComplexAdaptiveDynamicStreamingTaskStreamPara $StreamPara 自适应码流参数。
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
        if (array_key_exists("StreamPara",$param) and $param["StreamPara"] !== null) {
            $this->StreamPara = new ComplexAdaptiveDynamicStreamingTaskStreamPara();
            $this->StreamPara->deserialize($param["StreamPara"]);
        }
    }
}
