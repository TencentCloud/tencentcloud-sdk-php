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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 总览统计数据
 *
 * @method integer getExpired() 获取过期license数量
 * @method void setExpired(integer $Expired) 设置过期license数量
 * @method integer getValid() 获取有效license数量
 * @method void setValid(integer $Valid) 设置有效license数量
 * @method integer getNear() 获取临期license数量
 * @method void setNear(integer $Near) 设置临期license数量
 */
class Overview extends AbstractModel
{
    /**
     * @var integer 过期license数量
     */
    public $Expired;

    /**
     * @var integer 有效license数量
     */
    public $Valid;

    /**
     * @var integer 临期license数量
     */
    public $Near;

    /**
     * @param integer $Expired 过期license数量
     * @param integer $Valid 有效license数量
     * @param integer $Near 临期license数量
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
        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("Valid",$param) and $param["Valid"] !== null) {
            $this->Valid = $param["Valid"];
        }

        if (array_key_exists("Near",$param) and $param["Near"] !== null) {
            $this->Near = $param["Near"];
        }
    }
}
