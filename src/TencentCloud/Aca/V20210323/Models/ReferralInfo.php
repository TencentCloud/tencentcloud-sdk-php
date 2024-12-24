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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转诊提醒
 *
 * @method boolean getHit() 获取命中
 * @method void setHit(boolean $Hit) 设置命中
 * @method string getTips() 获取提示
 * @method void setTips(string $Tips) 设置提示
 */
class ReferralInfo extends AbstractModel
{
    /**
     * @var boolean 命中
     */
    public $Hit;

    /**
     * @var string 提示
     */
    public $Tips;

    /**
     * @param boolean $Hit 命中
     * @param string $Tips 提示
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
        if (array_key_exists("Hit",$param) and $param["Hit"] !== null) {
            $this->Hit = $param["Hit"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }
    }
}
