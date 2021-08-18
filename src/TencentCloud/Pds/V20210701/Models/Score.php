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
namespace TencentCloud\Pds\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 信誉分
 *
 * @method integer getStar() 获取用户信誉分
 * @method void setStar(integer $Star) 设置用户信誉分
 */
class Score extends AbstractModel
{
    /**
     * @var integer 用户信誉分
     */
    public $Star;

    /**
     * @param integer $Star 用户信誉分
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
