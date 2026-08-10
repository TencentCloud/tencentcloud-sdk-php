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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机漏洞组件概要
 *
 * @method string getName() 获取<p>组件名称</p>
 * @method void setName(string $Name) 设置<p>组件名称</p>
 * @method integer getRelateHostCount() 获取<p>关联主机数</p>
 * @method void setRelateHostCount(integer $RelateHostCount) 设置<p>关联主机数</p>
 */
class VulComponentSummary extends AbstractModel
{
    /**
     * @var string <p>组件名称</p>
     */
    public $Name;

    /**
     * @var integer <p>关联主机数</p>
     */
    public $RelateHostCount;

    /**
     * @param string $Name <p>组件名称</p>
     * @param integer $RelateHostCount <p>关联主机数</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RelateHostCount",$param) and $param["RelateHostCount"] !== null) {
            $this->RelateHostCount = $param["RelateHostCount"];
        }
    }
}
