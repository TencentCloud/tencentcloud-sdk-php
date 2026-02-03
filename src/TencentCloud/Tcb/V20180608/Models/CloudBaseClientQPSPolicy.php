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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * http访问服务客户端限频
 *
 * @method string getLimitBy() 获取UserID 或 ClientIP 或 None，如果为 None 代表不限制
 * @method void setLimitBy(string $LimitBy) 设置UserID 或 ClientIP 或 None，如果为 None 代表不限制
 * @method integer getLimitValue() 获取限制值
 * @method void setLimitValue(integer $LimitValue) 设置限制值
 */
class CloudBaseClientQPSPolicy extends AbstractModel
{
    /**
     * @var string UserID 或 ClientIP 或 None，如果为 None 代表不限制
     */
    public $LimitBy;

    /**
     * @var integer 限制值
     */
    public $LimitValue;

    /**
     * @param string $LimitBy UserID 或 ClientIP 或 None，如果为 None 代表不限制
     * @param integer $LimitValue 限制值
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
        if (array_key_exists("LimitBy",$param) and $param["LimitBy"] !== null) {
            $this->LimitBy = $param["LimitBy"];
        }

        if (array_key_exists("LimitValue",$param) and $param["LimitValue"] !== null) {
            $this->LimitValue = $param["LimitValue"];
        }
    }
}
