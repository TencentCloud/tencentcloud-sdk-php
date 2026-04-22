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
 * @method string getFormListString() 获取<p>筛选条件</p>
 * @method void setFormListString(string $FormListString) 设置<p>筛选条件</p>
 * @method string getFormListAString() 获取<p>仅对比模式下填写，筛选条件A</p>
 * @method void setFormListAString(string $FormListAString) 设置<p>仅对比模式下填写，筛选条件A</p>
 * @method string getFormListBString() 获取<p>仅对比模式下填写，筛选条件B</p>
 * @method void setFormListBString(string $FormListBString) 设置<p>仅对比模式下填写，筛选条件B</p>
 * @method string getRequestHeader() 获取<p>请求头</p>
 * @method void setRequestHeader(string $RequestHeader) 设置<p>请求头</p>
 * @method string getExtraData() 获取<p>拓展字段</p>
 * @method void setExtraData(string $ExtraData) 设置<p>拓展字段</p>
 */
class DescribeTokenRequest extends AbstractModel
{
    /**
     * @var string <p>筛选条件</p>
     */
    public $FormListString;

    /**
     * @var string <p>仅对比模式下填写，筛选条件A</p>
     */
    public $FormListAString;

    /**
     * @var string <p>仅对比模式下填写，筛选条件B</p>
     */
    public $FormListBString;

    /**
     * @var string <p>请求头</p>
     */
    public $RequestHeader;

    /**
     * @var string <p>拓展字段</p>
     */
    public $ExtraData;

    /**
     * @param string $FormListString <p>筛选条件</p>
     * @param string $FormListAString <p>仅对比模式下填写，筛选条件A</p>
     * @param string $FormListBString <p>仅对比模式下填写，筛选条件B</p>
     * @param string $RequestHeader <p>请求头</p>
     * @param string $ExtraData <p>拓展字段</p>
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
