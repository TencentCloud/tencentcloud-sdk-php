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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenConfigRecorder请求参数结构体
 *
 * @method integer getFromMode() 获取<p>1:从控制中心调用</p>
 * @method void setFromMode(integer $FromMode) 设置<p>1:从控制中心调用</p>
 */
class OpenConfigRecorderRequest extends AbstractModel
{
    /**
     * @var integer <p>1:从控制中心调用</p>
     */
    public $FromMode;

    /**
     * @param integer $FromMode <p>1:从控制中心调用</p>
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
        if (array_key_exists("FromMode",$param) and $param["FromMode"] !== null) {
            $this->FromMode = $param["FromMode"];
        }
    }
}
