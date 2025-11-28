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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态并发配置
 *
 * @method string getNodeSpec() 获取GPU机型名
 * @method void setNodeSpec(string $NodeSpec) 设置GPU机型名
 * @method integer getNum() 获取并发个数
 * @method void setNum(integer $Num) 设置并发个数
 */
class MixNodeConfig extends AbstractModel
{
    /**
     * @var string GPU机型名
     */
    public $NodeSpec;

    /**
     * @var integer 并发个数
     */
    public $Num;

    /**
     * @param string $NodeSpec GPU机型名
     * @param integer $Num 并发个数
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
        if (array_key_exists("NodeSpec",$param) and $param["NodeSpec"] !== null) {
            $this->NodeSpec = $param["NodeSpec"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
