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
namespace TencentCloud\Pds\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 信誉分，1-5从低到高
 *
 * @method integer getStar() 获取信誉分，1-5从低到高
 * @method void setStar(integer $Star) 设置信誉分，1-5从低到高
 */
class Score extends AbstractModel
{
    /**
     * @var integer 信誉分，1-5从低到高
     */
    public $Star;

    /**
     * @param integer $Star 信誉分，1-5从低到高
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
        if (array_key_exists("Star",$param) and $param["Star"] !== null) {
            $this->Star = $param["Star"];
        }
    }
}
