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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStrategy请求参数结构体
 *
 * @method string getProduct() 获取产品类型
 * @method void setProduct(string $Product) 设置产品类型
 * @method array getReceiveAccount() 获取下发账号
 * @method void setReceiveAccount(array $ReceiveAccount) 设置下发账号
 * @method array getPreStrategy() 获取前区规则组
 * @method void setPreStrategy(array $PreStrategy) 设置前区规则组
 * @method array getPostStrategy() 获取后区规则组
 * @method void setPostStrategy(array $PostStrategy) 设置后区规则组
 * @method array getReceiveGroup() 获取下发账号组
 * @method void setReceiveGroup(array $ReceiveGroup) 设置下发账号组
 */
class CreateStrategyRequest extends AbstractModel
{
    /**
     * @var string 产品类型
     */
    public $Product;

    /**
     * @var array 下发账号
     */
    public $ReceiveAccount;

    /**
     * @var array 前区规则组
     */
    public $PreStrategy;

    /**
     * @var array 后区规则组
     */
    public $PostStrategy;

    /**
     * @var array 下发账号组
     */
    public $ReceiveGroup;

    /**
     * @param string $Product 产品类型
     * @param array $ReceiveAccount 下发账号
     * @param array $PreStrategy 前区规则组
     * @param array $PostStrategy 后区规则组
     * @param array $ReceiveGroup 下发账号组
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ReceiveAccount",$param) and $param["ReceiveAccount"] !== null) {
            $this->ReceiveAccount = $param["ReceiveAccount"];
        }

        if (array_key_exists("PreStrategy",$param) and $param["PreStrategy"] !== null) {
            $this->PreStrategy = [];
            foreach ($param["PreStrategy"] as $key => $value){
                $obj = new StrategyReq();
                $obj->deserialize($value);
                array_push($this->PreStrategy, $obj);
            }
        }

        if (array_key_exists("PostStrategy",$param) and $param["PostStrategy"] !== null) {
            $this->PostStrategy = [];
            foreach ($param["PostStrategy"] as $key => $value){
                $obj = new StrategyReq();
                $obj->deserialize($value);
                array_push($this->PostStrategy, $obj);
            }
        }

        if (array_key_exists("ReceiveGroup",$param) and $param["ReceiveGroup"] !== null) {
            $this->ReceiveGroup = $param["ReceiveGroup"];
        }
    }
}
