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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryFlexWechatAuthResult请求参数结构体
 *
 * @method string getAuthNo() 获取商户核身单号
 * @method void setAuthNo(string $AuthNo) 设置商户核身单号
 * @method string getEnvironment() 获取环境类型
test 测试
release 生产
sandbox 沙箱
 * @method void setEnvironment(string $Environment) 设置环境类型
test 测试
release 生产
sandbox 沙箱
 */
class QueryFlexWechatAuthResultRequest extends AbstractModel
{
    /**
     * @var string 商户核身单号
     */
    public $AuthNo;

    /**
     * @var string 环境类型
test 测试
release 生产
sandbox 沙箱
     */
    public $Environment;

    /**
     * @param string $AuthNo 商户核身单号
     * @param string $Environment 环境类型
test 测试
release 生产
sandbox 沙箱
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
        if (array_key_exists("AuthNo",$param) and $param["AuthNo"] !== null) {
            $this->AuthNo = $param["AuthNo"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
