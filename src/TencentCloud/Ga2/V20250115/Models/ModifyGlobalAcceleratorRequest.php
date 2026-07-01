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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGlobalAccelerator请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取<p>全球加速实例ID。</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>全球加速实例ID。</p>
 * @method string getName() 获取<p>名称，最大长度不能超过60个字节。</p>
 * @method void setName(string $Name) 设置<p>名称，最大长度不能超过60个字节。</p>
 * @method string getDescription() 获取<p>描述信息，最大长度不能超过100个字节。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息，最大长度不能超过100个字节。</p>
 * @method string getCrossBorderType() 获取<p>跨境类型。</p><p>枚举值：</p><ul><li>HighQuality： 精品跨境。</li><li>Unicom： 联通跨境。</li></ul>
 * @method void setCrossBorderType(string $CrossBorderType) 设置<p>跨境类型。</p><p>枚举值：</p><ul><li>HighQuality： 精品跨境。</li><li>Unicom： 联通跨境。</li></ul>
 * @method boolean getCrossBorderPromiseFlag() 获取<p>代表是否填写跨境服务承诺书。</p><p>当CrossBorderType传入时，此字段必须填ture，代表填写跨境承诺书。</p>
 * @method void setCrossBorderPromiseFlag(boolean $CrossBorderPromiseFlag) 设置<p>代表是否填写跨境服务承诺书。</p><p>当CrossBorderType传入时，此字段必须填ture，代表填写跨境承诺书。</p>
 */
class ModifyGlobalAcceleratorRequest extends AbstractModel
{
    /**
     * @var string <p>全球加速实例ID。</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>名称，最大长度不能超过60个字节。</p>
     */
    public $Name;

    /**
     * @var string <p>描述信息，最大长度不能超过100个字节。</p>
     */
    public $Description;

    /**
     * @var string <p>跨境类型。</p><p>枚举值：</p><ul><li>HighQuality： 精品跨境。</li><li>Unicom： 联通跨境。</li></ul>
     */
    public $CrossBorderType;

    /**
     * @var boolean <p>代表是否填写跨境服务承诺书。</p><p>当CrossBorderType传入时，此字段必须填ture，代表填写跨境承诺书。</p>
     */
    public $CrossBorderPromiseFlag;

    /**
     * @param string $GlobalAcceleratorId <p>全球加速实例ID。</p>
     * @param string $Name <p>名称，最大长度不能超过60个字节。</p>
     * @param string $Description <p>描述信息，最大长度不能超过100个字节。</p>
     * @param string $CrossBorderType <p>跨境类型。</p><p>枚举值：</p><ul><li>HighQuality： 精品跨境。</li><li>Unicom： 联通跨境。</li></ul>
     * @param boolean $CrossBorderPromiseFlag <p>代表是否填写跨境服务承诺书。</p><p>当CrossBorderType传入时，此字段必须填ture，代表填写跨境承诺书。</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CrossBorderType",$param) and $param["CrossBorderType"] !== null) {
            $this->CrossBorderType = $param["CrossBorderType"];
        }

        if (array_key_exists("CrossBorderPromiseFlag",$param) and $param["CrossBorderPromiseFlag"] !== null) {
            $this->CrossBorderPromiseFlag = $param["CrossBorderPromiseFlag"];
        }
    }
}
