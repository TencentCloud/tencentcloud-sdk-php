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
 * DeleteAllAccessControlRule请求参数结构体
 *
 * @method integer getDirection() 获取方向，0：出站，1：入站
 * @method void setDirection(integer $Direction) 设置方向，0：出站，1：入站
 * @method string getEdgeId() 获取边ID
 * @method void setEdgeId(string $EdgeId) 设置边ID
 * @method string getArea() 获取nat地域
 * @method void setArea(string $Area) 设置nat地域
 */
class DeleteAllAccessControlRuleRequest extends AbstractModel
{
    /**
     * @var integer 方向，0：出站，1：入站
     */
    public $Direction;

    /**
     * @var string 边ID
     */
    public $EdgeId;

    /**
     * @var string nat地域
     */
    public $Area;

    /**
     * @param integer $Direction 方向，0：出站，1：入站
     * @param string $EdgeId 边ID
     * @param string $Area nat地域
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
