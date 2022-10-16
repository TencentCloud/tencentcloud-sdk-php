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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyLivenessToken请求参数结构体
 *
 * @method string getSecureLevel() 获取枚举值，取值范围：1、2、3、4
各个含义如下
1-静默
2-眨眼
3-光线
4-眨眼+光线 （默认）
 * @method void setSecureLevel(string $SecureLevel) 设置枚举值，取值范围：1、2、3、4
各个含义如下
1-静默
2-眨眼
3-光线
4-眨眼+光线 （默认）
 */
class ApplyLivenessTokenRequest extends AbstractModel
{
    /**
     * @var string 枚举值，取值范围：1、2、3、4
各个含义如下
1-静默
2-眨眼
3-光线
4-眨眼+光线 （默认）
     */
    public $SecureLevel;

    /**
     * @param string $SecureLevel 枚举值，取值范围：1、2、3、4
各个含义如下
1-静默
2-眨眼
3-光线
4-眨眼+光线 （默认）
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
        if (array_key_exists("SecureLevel",$param) and $param["SecureLevel"] !== null) {
            $this->SecureLevel = $param["SecureLevel"];
        }
    }
}
