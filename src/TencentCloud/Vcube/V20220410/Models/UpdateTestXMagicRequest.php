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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateTestXMagic请求参数结构体
 *
 * @method integer getXMagicId() 获取优图美视功能Id
 * @method void setXMagicId(integer $XMagicId) 设置优图美视功能Id
 * @method string getResourceId() 获取XMagic套餐包Id
 * @method void setResourceId(string $ResourceId) 设置XMagic套餐包Id
 */
class UpdateTestXMagicRequest extends AbstractModel
{
    /**
     * @var integer 优图美视功能Id
     */
    public $XMagicId;

    /**
     * @var string XMagic套餐包Id
     */
    public $ResourceId;

    /**
     * @param integer $XMagicId 优图美视功能Id
     * @param string $ResourceId XMagic套餐包Id
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
        if (array_key_exists("XMagicId",$param) and $param["XMagicId"] !== null) {
            $this->XMagicId = $param["XMagicId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
