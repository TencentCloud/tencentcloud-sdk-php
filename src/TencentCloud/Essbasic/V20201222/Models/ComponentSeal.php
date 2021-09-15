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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (ComponentSeal) 用于描述“签署区ID”到“印章ID”的映射。
 *
 * @method string getComponentId() 获取签署区ID
 * @method void setComponentId(string $ComponentId) 设置签署区ID
 * @method string getSealId() 获取印章ID
 * @method void setSealId(string $SealId) 设置印章ID
 */
class ComponentSeal extends AbstractModel
{
    /**
     * @var string 签署区ID
     */
    public $ComponentId;

    /**
     * @var string 印章ID
     */
    public $SealId;

    /**
     * @param string $ComponentId 签署区ID
     * @param string $SealId 印章ID
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
        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }
    }
}
