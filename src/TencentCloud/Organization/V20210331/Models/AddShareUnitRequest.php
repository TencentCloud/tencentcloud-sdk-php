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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddShareUnit请求参数结构体
 *
 * @method string getName() 获取共享单元名称。仅支持大小写字母、数字、-、以及_的组合，3-128个字符。
 * @method void setName(string $Name) 设置共享单元名称。仅支持大小写字母、数字、-、以及_的组合，3-128个字符。
 * @method string getArea() 获取共享单元地域。可通过接口[DescribeShareAreas](https://cloud.tencent.com/document/product/850/103050)获取支持共享的地域。
 * @method void setArea(string $Area) 设置共享单元地域。可通过接口[DescribeShareAreas](https://cloud.tencent.com/document/product/850/103050)获取支持共享的地域。
 * @method string getDescription() 获取共享单元描述。最大128个字符。
 * @method void setDescription(string $Description) 设置共享单元描述。最大128个字符。
 * @method integer getShareScope() 获取共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号，默认值：1
 * @method void setShareScope(integer $ShareScope) 设置共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号，默认值：1
 */
class AddShareUnitRequest extends AbstractModel
{
    /**
     * @var string 共享单元名称。仅支持大小写字母、数字、-、以及_的组合，3-128个字符。
     */
    public $Name;

    /**
     * @var string 共享单元地域。可通过接口[DescribeShareAreas](https://cloud.tencent.com/document/product/850/103050)获取支持共享的地域。
     */
    public $Area;

    /**
     * @var string 共享单元描述。最大128个字符。
     */
    public $Description;

    /**
     * @var integer 共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号，默认值：1
     */
    public $ShareScope;

    /**
     * @param string $Name 共享单元名称。仅支持大小写字母、数字、-、以及_的组合，3-128个字符。
     * @param string $Area 共享单元地域。可通过接口[DescribeShareAreas](https://cloud.tencent.com/document/product/850/103050)获取支持共享的地域。
     * @param string $Description 共享单元描述。最大128个字符。
     * @param integer $ShareScope 共享范围。取值：1-仅允许集团组织内共享 2-允许共享给任意账号，默认值：1
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ShareScope",$param) and $param["ShareScope"] !== null) {
            $this->ShareScope = $param["ShareScope"];
        }
    }
}
