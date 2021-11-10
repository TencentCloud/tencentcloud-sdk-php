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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取返回列表的详情。
 *
 * @method string getBatchProductionId() 获取量产ID
 * @method void setBatchProductionId(string $BatchProductionId) 设置量产ID
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getBurnMethod() 获取烧录方式
 * @method void setBurnMethod(integer $BurnMethod) 设置烧录方式
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 */
class BatchProductionInfo extends AbstractModel
{
    /**
     * @var string 量产ID
     */
    public $BatchProductionId;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 烧录方式
     */
    public $BurnMethod;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @param string $BatchProductionId 量产ID
     * @param string $ProductId 产品ID
     * @param integer $BurnMethod 烧录方式
     * @param integer $CreateTime 创建时间
     * @param string $ProductName 产品名称
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
        if (array_key_exists("BatchProductionId",$param) and $param["BatchProductionId"] !== null) {
            $this->BatchProductionId = $param["BatchProductionId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("BurnMethod",$param) and $param["BurnMethod"] !== null) {
            $this->BurnMethod = $param["BurnMethod"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }
    }
}
