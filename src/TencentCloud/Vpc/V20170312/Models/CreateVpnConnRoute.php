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
 * @method string getDestinationCidrBlock() 获取<p>目的端IDC网段</p>
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置<p>目的端IDC网段</p>
 * @method integer getPriority() 获取<p>优先级；可选值0，100。</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级；可选值0，100。</p>
 * @method string getDescription() 获取<p>路由备注；可选值</p>
 * @method void setDescription(string $Description) 设置<p>路由备注；可选值</p>
 */
class CreateVpnConnRoute extends AbstractModel
{
    /**
     * @var string <p>目的端IDC网段</p>
     */
    public $DestinationCidrBlock;

    /**
     * @var integer <p>优先级；可选值0，100。</p>
     */
    public $Priority;

    /**
     * @var string <p>路由备注；可选值</p>
     */
    public $Description;

    /**
     * @param string $DestinationCidrBlock <p>目的端IDC网段</p>
     * @param integer $Priority <p>优先级；可选值0，100。</p>
     * @param string $Description <p>路由备注；可选值</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
