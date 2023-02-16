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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBPFakeAPPList请求参数结构体
 *
 * @method string getFakeAPPs() 获取批量模版
 * @method void setFakeAPPs(string $FakeAPPs) 设置批量模版
 */
class CreateBPFakeAPPListRequest extends AbstractModel
{
    /**
     * @var string 批量模版
     */
    public $FakeAPPs;

    /**
     * @param string $FakeAPPs 批量模版
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
        if (array_key_exists("FakeAPPs",$param) and $param["FakeAPPs"] !== null) {
            $this->FakeAPPs = $param["FakeAPPs"];
        }
    }
}
