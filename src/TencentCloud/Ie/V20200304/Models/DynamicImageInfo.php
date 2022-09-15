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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动图参数
 *
 * @method integer getQuality() 获取画面质量，范围：1~100。
<li>对于webp格式，默认：75</li>
<li>对于gif格式，小于10为低质量，大于50为高质量，其它为普通。默认：低质量。</li>
 * @method void setQuality(integer $Quality) 设置画面质量，范围：1~100。
<li>对于webp格式，默认：75</li>
<li>对于gif格式，小于10为低质量，大于50为高质量，其它为普通。默认：低质量。</li>
 */
class DynamicImageInfo extends AbstractModel
{
    /**
     * @var integer 画面质量，范围：1~100。
<li>对于webp格式，默认：75</li>
<li>对于gif格式，小于10为低质量，大于50为高质量，其它为普通。默认：低质量。</li>
     */
    public $Quality;

    /**
     * @param integer $Quality 画面质量，范围：1~100。
<li>对于webp格式，默认：75</li>
<li>对于gif格式，小于10为低质量，大于50为高质量，其它为普通。默认：低质量。</li>
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
        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }
    }
}
