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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProductDynamicRegister请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getRegisterType() 获取动态注册类型，0-关闭 1-预创建设备 2-自动创建设备
 * @method void setRegisterType(integer $RegisterType) 设置动态注册类型，0-关闭 1-预创建设备 2-自动创建设备
 * @method integer getRegisterLimit() 获取动态注册设备上限
 * @method void setRegisterLimit(integer $RegisterLimit) 设置动态注册设备上限
 */
class ModifyProductDynamicRegisterRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 动态注册类型，0-关闭 1-预创建设备 2-自动创建设备
     */
    public $RegisterType;

    /**
     * @var integer 动态注册设备上限
     */
    public $RegisterLimit;

    /**
     * @param string $ProductId 产品ID
     * @param integer $RegisterType 动态注册类型，0-关闭 1-预创建设备 2-自动创建设备
     * @param integer $RegisterLimit 动态注册设备上限
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("RegisterType",$param) and $param["RegisterType"] !== null) {
            $this->RegisterType = $param["RegisterType"];
        }

        if (array_key_exists("RegisterLimit",$param) and $param["RegisterLimit"] !== null) {
            $this->RegisterLimit = $param["RegisterLimit"];
        }
    }
}
