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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 信息登记数据
 *
 * @method string getValue() 获取<p>值</p>
 * @method void setValue(string $Value) 设置<p>值</p>
 * @method integer getFieldId() 获取<p>属性ID(只支持32位)</p>
 * @method void setFieldId(integer $FieldId) 设置<p>属性ID(只支持32位)</p>
 * @method string getMid() 获取<p>设备唯一标识码</p>
 * @method void setMid(string $Mid) 设置<p>设备唯一标识码</p>
 * @method string getTitle() 获取<p>名称</p>
 * @method void setTitle(string $Title) 设置<p>名称</p>
 * @method integer getType() 获取<p>类型(只支持32位)</p>
 * @method void setType(integer $Type) 设置<p>类型(只支持32位)</p>
 * @method string getOptions() 获取<p>可选数据</p>
 * @method void setOptions(string $Options) 设置<p>可选数据</p>
 * @method string getIsMust() 获取<p>必填数据</p>
 * @method void setIsMust(string $IsMust) 设置<p>必填数据</p>
 * @method string getIsCustom() 获取<p>必填数据</p>
 * @method void setIsCustom(string $IsCustom) 设置<p>必填数据</p>
 */
class DeviceProfile extends AbstractModel
{
    /**
     * @var string <p>值</p>
     */
    public $Value;

    /**
     * @var integer <p>属性ID(只支持32位)</p>
     */
    public $FieldId;

    /**
     * @var string <p>设备唯一标识码</p>
     */
    public $Mid;

    /**
     * @var string <p>名称</p>
     */
    public $Title;

    /**
     * @var integer <p>类型(只支持32位)</p>
     */
    public $Type;

    /**
     * @var string <p>可选数据</p>
     */
    public $Options;

    /**
     * @var string <p>必填数据</p>
     */
    public $IsMust;

    /**
     * @var string <p>必填数据</p>
     */
    public $IsCustom;

    /**
     * @param string $Value <p>值</p>
     * @param integer $FieldId <p>属性ID(只支持32位)</p>
     * @param string $Mid <p>设备唯一标识码</p>
     * @param string $Title <p>名称</p>
     * @param integer $Type <p>类型(只支持32位)</p>
     * @param string $Options <p>可选数据</p>
     * @param string $IsMust <p>必填数据</p>
     * @param string $IsCustom <p>必填数据</p>
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("FieldId",$param) and $param["FieldId"] !== null) {
            $this->FieldId = $param["FieldId"];
        }

        if (array_key_exists("Mid",$param) and $param["Mid"] !== null) {
            $this->Mid = $param["Mid"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = $param["Options"];
        }

        if (array_key_exists("IsMust",$param) and $param["IsMust"] !== null) {
            $this->IsMust = $param["IsMust"];
        }

        if (array_key_exists("IsCustom",$param) and $param["IsCustom"] !== null) {
            $this->IsCustom = $param["IsCustom"];
        }
    }
}
