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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建模型版本返回
 *
 * @method boolean getCreated() 获取创建成功
 * @method void setCreated(boolean $Created) 设置创建成功
 */
class CreateModelVersionRsp extends AbstractModel
{
    /**
     * @var boolean 创建成功
     */
    public $Created;

    /**
     * @param boolean $Created 创建成功
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
        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }
    }
}
