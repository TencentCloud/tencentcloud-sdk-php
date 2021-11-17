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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopSecurityGroupRuleDispatch请求参数结构体
 *
 * @method integer getStopType() 获取值为1，中止全部
 * @method void setStopType(integer $StopType) 设置值为1，中止全部
 */
class StopSecurityGroupRuleDispatchRequest extends AbstractModel
{
    /**
     * @var integer 值为1，中止全部
     */
    public $StopType;

    /**
     * @param integer $StopType 值为1，中止全部
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
        if (array_key_exists("StopType",$param) and $param["StopType"] !== null) {
            $this->StopType = $param["StopType"];
        }
    }
}
