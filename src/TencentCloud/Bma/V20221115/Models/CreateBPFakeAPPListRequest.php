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
 * @method string getFakeAPPs() 获取仿冒应用下载链接。请严格按照模版进行填写：https://bma-privacy-detection-1251316161.cosgz.myqcloud.com/20221206/f8c7521fbd84f4c4e7c2a25ac233857e/批量仿冒应用举报模板.xlsx
 * @method void setFakeAPPs(string $FakeAPPs) 设置仿冒应用下载链接。请严格按照模版进行填写：https://bma-privacy-detection-1251316161.cosgz.myqcloud.com/20221206/f8c7521fbd84f4c4e7c2a25ac233857e/批量仿冒应用举报模板.xlsx
 */
class CreateBPFakeAPPListRequest extends AbstractModel
{
    /**
     * @var string 仿冒应用下载链接。请严格按照模版进行填写：https://bma-privacy-detection-1251316161.cosgz.myqcloud.com/20221206/f8c7521fbd84f4c4e7c2a25ac233857e/批量仿冒应用举报模板.xlsx
     */
    public $FakeAPPs;

    /**
     * @param string $FakeAPPs 仿冒应用下载链接。请严格按照模版进行填写：https://bma-privacy-detection-1251316161.cosgz.myqcloud.com/20221206/f8c7521fbd84f4c4e7c2a25ac233857e/批量仿冒应用举报模板.xlsx
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
