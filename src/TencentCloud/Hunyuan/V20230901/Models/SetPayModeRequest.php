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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetPayMode请求参数结构体
 *
 * @method integer getPayMode() 获取设置后付费状态，0：后付费打开；1：后付费关闭
 * @method void setPayMode(integer $PayMode) 设置设置后付费状态，0：后付费打开；1：后付费关闭
 */
class SetPayModeRequest extends AbstractModel
{
    /**
     * @var integer 设置后付费状态，0：后付费打开；1：后付费关闭
     */
    public $PayMode;

    /**
     * @param integer $PayMode 设置后付费状态，0：后付费打开；1：后付费关闭
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
