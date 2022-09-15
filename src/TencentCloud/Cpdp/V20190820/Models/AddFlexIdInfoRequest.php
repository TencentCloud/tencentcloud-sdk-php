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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddFlexIdInfo请求参数结构体
 *
 * @method integer getIdType() 获取证件类型
0:身份证
1:社会信用代码
 * @method void setIdType(integer $IdType) 设置证件类型
0:身份证
1:社会信用代码
 * @method string getIdNo() 获取证件号
 * @method void setIdNo(string $IdNo) 设置证件号
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 */
class AddFlexIdInfoRequest extends AbstractModel
{
    /**
     * @var integer 证件类型
0:身份证
1:社会信用代码
     */
    public $IdType;

    /**
     * @var string 证件号
     */
    public $IdNo;

    /**
     * @var string 收款用户ID
     */
    public $PayeeId;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @param integer $IdType 证件类型
0:身份证
1:社会信用代码
     * @param string $IdNo 证件号
     * @param string $PayeeId 收款用户ID
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     * @param string $Name 姓名
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
        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("IdNo",$param) and $param["IdNo"] !== null) {
            $this->IdNo = $param["IdNo"];
        }

        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
