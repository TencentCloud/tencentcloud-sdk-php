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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCCCBuyInfoList请求参数结构体
 *
 * @method array getSdkAppIds() 获取应用ID列表，不传时查询所有应用
 * @method void setSdkAppIds(array $SdkAppIds) 设置应用ID列表，不传时查询所有应用
 */
class DescribeCCCBuyInfoListRequest extends AbstractModel
{
    /**
     * @var array 应用ID列表，不传时查询所有应用
     */
    public $SdkAppIds;

    /**
     * @param array $SdkAppIds 应用ID列表，不传时查询所有应用
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
        if (array_key_exists("SdkAppIds",$param) and $param["SdkAppIds"] !== null) {
            $this->SdkAppIds = $param["SdkAppIds"];
        }
    }
}
