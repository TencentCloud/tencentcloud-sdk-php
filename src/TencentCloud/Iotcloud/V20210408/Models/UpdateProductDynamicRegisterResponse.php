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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProductDynamicRegister返回参数结构体
 *
 * @method integer getRegisterType() 获取动态注册类型，0-关闭 1-预创建设备 2-自动创建设备
 * @method void setRegisterType(integer $RegisterType) 设置动态注册类型，0-关闭 1-预创建设备 2-自动创建设备
 * @method string getProductSecret() 获取动态注册产品密钥
 * @method void setProductSecret(string $ProductSecret) 设置动态注册产品密钥
 * @method integer getRegisterLimit() 获取动态注册设备上限
 * @method void setRegisterLimit(integer $RegisterLimit) 设置动态注册设备上限
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class UpdateProductDynamicRegisterResponse extends AbstractModel
{
    /**
     * @var integer 动态注册类型，0-关闭 1-预创建设备 2-自动创建设备
     */
    public $RegisterType;

    /**
     * @var string 动态注册产品密钥
     */
    public $ProductSecret;

    /**
     * @var integer 动态注册设备上限
     */
    public $RegisterLimit;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RegisterType 动态注册类型，0-关闭 1-预创建设备 2-自动创建设备
     * @param string $ProductSecret 动态注册产品密钥
     * @param integer $RegisterLimit 动态注册设备上限
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RegisterType",$param) and $param["RegisterType"] !== null) {
            $this->RegisterType = $param["RegisterType"];
        }

        if (array_key_exists("ProductSecret",$param) and $param["ProductSecret"] !== null) {
            $this->ProductSecret = $param["ProductSecret"];
        }

        if (array_key_exists("RegisterLimit",$param) and $param["RegisterLimit"] !== null) {
            $this->RegisterLimit = $param["RegisterLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
