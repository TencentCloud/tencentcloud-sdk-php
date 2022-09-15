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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetProductsForbiddenStatus请求参数结构体
 *
 * @method array getProductId() 获取要设置禁用状态的产品列表
 * @method void setProductId(array $ProductId) 设置要设置禁用状态的产品列表
 * @method integer getStatus() 获取0启用，1禁用
 * @method void setStatus(integer $Status) 设置0启用，1禁用
 */
class SetProductsForbiddenStatusRequest extends AbstractModel
{
    /**
     * @var array 要设置禁用状态的产品列表
     */
    public $ProductId;

    /**
     * @var integer 0启用，1禁用
     */
    public $Status;

    /**
     * @param array $ProductId 要设置禁用状态的产品列表
     * @param integer $Status 0启用，1禁用
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
