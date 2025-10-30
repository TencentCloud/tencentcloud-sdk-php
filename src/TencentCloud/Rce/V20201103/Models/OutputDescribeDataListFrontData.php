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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询黑白名单数据出参
 *
 * @method integer getCode() 获取错误码，0 表示成功，非0表示失败错误码。 0：成功 1002：参数错误 4300：未开通服务 6000：系统内部错误
 * @method void setCode(integer $Code) 设置错误码，0 表示成功，非0表示失败错误码。 0：成功 1002：参数错误 4300：未开通服务 6000：系统内部错误
 * @method string getMessage() 获取错误信息
 * @method void setMessage(string $Message) 设置错误信息
 * @method OuntputDescribeDataListInfo getValue() 获取黑白名单数据信息
 * @method void setValue(OuntputDescribeDataListInfo $Value) 设置黑白名单数据信息
 */
class OutputDescribeDataListFrontData extends AbstractModel
{
    /**
     * @var integer 错误码，0 表示成功，非0表示失败错误码。 0：成功 1002：参数错误 4300：未开通服务 6000：系统内部错误
     */
    public $Code;

    /**
     * @var string 错误信息
     */
    public $Message;

    /**
     * @var OuntputDescribeDataListInfo 黑白名单数据信息
     */
    public $Value;

    /**
     * @param integer $Code 错误码，0 表示成功，非0表示失败错误码。 0：成功 1002：参数错误 4300：未开通服务 6000：系统内部错误
     * @param string $Message 错误信息
     * @param OuntputDescribeDataListInfo $Value 黑白名单数据信息
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new OuntputDescribeDataListInfo();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
