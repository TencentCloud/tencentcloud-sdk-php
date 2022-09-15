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
namespace TencentCloud\Mmps\V20200710\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicDiagnosisResourceUsageInfo请求参数结构体
 *
 * @method integer getMode() 获取诊断模式 1:基础诊断，2:深度诊断
 * @method void setMode(integer $Mode) 设置诊断模式 1:基础诊断，2:深度诊断
 */
class DescribeBasicDiagnosisResourceUsageInfoRequest extends AbstractModel
{
    /**
     * @var integer 诊断模式 1:基础诊断，2:深度诊断
     */
    public $Mode;

    /**
     * @param integer $Mode 诊断模式 1:基础诊断，2:深度诊断
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
