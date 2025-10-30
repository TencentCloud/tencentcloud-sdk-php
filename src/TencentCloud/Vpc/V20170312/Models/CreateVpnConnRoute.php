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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建路由添加的指向此通道的路由
 *
 * @method string getDestinationCidrBlock() 获取目的端IDC网段
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置目的端IDC网段
 * @method integer getPriority() 获取优先级；可选值0，100。
 * @method void setPriority(integer $Priority) 设置优先级；可选值0，100。
 */
class CreateVpnConnRoute extends AbstractModel
{
    /**
     * @var string 目的端IDC网段
     */
    public $DestinationCidrBlock;

    /**
     * @var integer 优先级；可选值0，100。
     */
    public $Priority;

    /**
     * @param string $DestinationCidrBlock 目的端IDC网段
     * @param integer $Priority 优先级；可选值0，100。
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
        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
