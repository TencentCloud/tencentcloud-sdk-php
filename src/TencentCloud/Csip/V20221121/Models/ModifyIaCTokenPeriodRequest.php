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
 * ModifyIaCTokenPeriod请求参数结构体
 *
 * @method integer getId() 获取<p>ID</p>
 * @method void setId(integer $Id) 设置<p>ID</p>
 * @method integer getPeriod() 获取<p>扫描结果存储周期</p>
 * @method void setPeriod(integer $Period) 设置<p>扫描结果存储周期</p>
 */
class ModifyIaCTokenPeriodRequest extends AbstractModel
{
    /**
     * @var integer <p>ID</p>
     */
    public $Id;

    /**
     * @var integer <p>扫描结果存储周期</p>
     */
    public $Period;

    /**
     * @param integer $Id <p>ID</p>
     * @param integer $Period <p>扫描结果存储周期</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
