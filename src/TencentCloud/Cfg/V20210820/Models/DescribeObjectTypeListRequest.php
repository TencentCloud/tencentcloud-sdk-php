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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeObjectTypeList请求参数结构体
 *
 * @method integer getSupportType() 获取所支持的对象
0：全平台产品
1：平台接入的对象
2：应用所支持的部分对象
 * @method void setSupportType(integer $SupportType) 设置所支持的对象
0：全平台产品
1：平台接入的对象
2：应用所支持的部分对象
 */
class DescribeObjectTypeListRequest extends AbstractModel
{
    /**
     * @var integer 所支持的对象
0：全平台产品
1：平台接入的对象
2：应用所支持的部分对象
     */
    public $SupportType;

    /**
     * @param integer $SupportType 所支持的对象
0：全平台产品
1：平台接入的对象
2：应用所支持的部分对象
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
        if (array_key_exists("SupportType",$param) and $param["SupportType"] !== null) {
            $this->SupportType = $param["SupportType"];
        }
    }
}
