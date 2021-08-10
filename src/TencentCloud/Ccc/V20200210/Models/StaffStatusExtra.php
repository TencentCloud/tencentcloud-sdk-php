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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 坐席状态补充信息
 *
 * @method string getType() 获取im - 文本 | tel - 电话 | all - 全媒体
 * @method void setType(string $Type) 设置im - 文本 | tel - 电话 | all - 全媒体
 * @method string getDirect() 获取in - 呼入 | out - 呼出
 * @method void setDirect(string $Direct) 设置in - 呼入 | out - 呼出
 */
class StaffStatusExtra extends AbstractModel
{
    /**
     * @var string im - 文本 | tel - 电话 | all - 全媒体
     */
    public $Type;

    /**
     * @var string in - 呼入 | out - 呼出
     */
    public $Direct;

    /**
     * @param string $Type im - 文本 | tel - 电话 | all - 全媒体
     * @param string $Direct in - 呼入 | out - 呼出
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Direct",$param) and $param["Direct"] !== null) {
            $this->Direct = $param["Direct"];
        }
    }
}
