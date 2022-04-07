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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetRouteOnOff请求参数结构体
 *
 * @method integer getRouteID() 获取无
 * @method void setRouteID(integer $RouteID) 设置无
 * @method string getStatus() 获取on 或 off
 * @method void setStatus(string $Status) 设置on 或 off
 */
class SetRouteOnOffRequest extends AbstractModel
{
    /**
     * @var integer 无
     */
    public $RouteID;

    /**
     * @var string on 或 off
     */
    public $Status;

    /**
     * @param integer $RouteID 无
     * @param string $Status on 或 off
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
        if (array_key_exists("RouteID",$param) and $param["RouteID"] !== null) {
            $this->RouteID = $param["RouteID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
