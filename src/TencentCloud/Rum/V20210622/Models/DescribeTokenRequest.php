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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeToken请求参数结构体
 *
 * @method string getFormListString() 获取筛选条件
 * @method void setFormListString(string $FormListString) 设置筛选条件
 * @method string getFormListAString() 获取仅对比模式下填写，筛选条件A
 * @method void setFormListAString(string $FormListAString) 设置仅对比模式下填写，筛选条件A
 * @method string getFormListBString() 获取仅对比模式下填写，筛选条件B
 * @method void setFormListBString(string $FormListBString) 设置仅对比模式下填写，筛选条件B
 * @method string getRequestHeader() 获取请求头
 * @method void setRequestHeader(string $RequestHeader) 设置请求头
 * @method string getExtraData() 获取拓展字段
 * @method void setExtraData(string $ExtraData) 设置拓展字段
 */
class DescribeTokenRequest extends AbstractModel
{
    /**
     * @var string 筛选条件
     */
    public $FormListString;

    /**
     * @var string 仅对比模式下填写，筛选条件A
     */
    public $FormListAString;

    /**
     * @var string 仅对比模式下填写，筛选条件B
     */
    public $FormListBString;

    /**
     * @var string 请求头
     */
    public $RequestHeader;

    /**
     * @var string 拓展字段
     */
    public $ExtraData;

    /**
     * @param string $FormListString 筛选条件
     * @param string $FormListAString 仅对比模式下填写，筛选条件A
     * @param string $FormListBString 仅对比模式下填写，筛选条件B
     * @param string $RequestHeader 请求头
     * @param string $ExtraData 拓展字段
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
        if (array_key_exists("FormListString",$param) and $param["FormListString"] !== null) {
            $this->FormListString = $param["FormListString"];
        }

        if (array_key_exists("FormListAString",$param) and $param["FormListAString"] !== null) {
            $this->FormListAString = $param["FormListAString"];
        }

        if (array_key_exists("FormListBString",$param) and $param["FormListBString"] !== null) {
            $this->FormListBString = $param["FormListBString"];
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = $param["RequestHeader"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }
    }
}
