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
 * @method string getGlobalAcceleratorId() 获取全球加速实例ID。
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置全球加速实例ID。
 * @method string getName() 获取名称，最大长度不能超过60个字节。
 * @method void setName(string $Name) 设置名称，最大长度不能超过60个字节。
 * @method string getDescription() 获取描述信息，最大长度不能超过100个字节。
 * @method void setDescription(string $Description) 设置描述信息，最大长度不能超过100个字节。
 * @method string getCrossBorderType() 获取跨境类型。
 * @method void setCrossBorderType(string $CrossBorderType) 设置跨境类型。
 * @method boolean getCrossBorderPromiseFlag() 获取代表是否跨境服务承诺。
 * @method void setCrossBorderPromiseFlag(boolean $CrossBorderPromiseFlag) 设置代表是否跨境服务承诺。
 */
class ModifyGlobalAcceleratorRequest extends AbstractModel
{
    /**
     * @var string 全球加速实例ID。
     */
    public $GlobalAcceleratorId;

    /**
     * @var string 名称，最大长度不能超过60个字节。
     */
    public $Name;

    /**
     * @var string 描述信息，最大长度不能超过100个字节。
     */
    public $Description;

    /**
     * @var string 跨境类型。
     */
    public $CrossBorderType;

    /**
     * @var boolean 代表是否跨境服务承诺。
     */
    public $CrossBorderPromiseFlag;

    /**
     * @param string $GlobalAcceleratorId 全球加速实例ID。
     * @param string $Name 名称，最大长度不能超过60个字节。
     * @param string $Description 描述信息，最大长度不能超过100个字节。
     * @param string $CrossBorderType 跨境类型。
     * @param boolean $CrossBorderPromiseFlag 代表是否跨境服务承诺。
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
