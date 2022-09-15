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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIotDevices请求参数结构体
 *
 * @method integer getOffset() 获取页偏移
 * @method void setOffset(integer $Offset) 设置页偏移
 * @method integer getLimit() 获取每页数量
 * @method void setLimit(integer $Limit) 设置每页数量
 * @method string getProductId() 获取产品id
 * @method void setProductId(string $ProductId) 设置产品id
 * @method string getNamePattern() 获取设备名称模糊查找
 * @method void setNamePattern(string $NamePattern) 设置设备名称模糊查找
 * @method array getVersions() 获取版本列表
 * @method void setVersions(array $Versions) 设置版本列表
 * @method string getOrder() 获取ASC 或 DESC
 * @method void setOrder(string $Order) 设置ASC 或 DESC
 */
class DescribeIotDevicesRequest extends AbstractModel
{
    /**
     * @var integer 页偏移
     */
    public $Offset;

    /**
     * @var integer 每页数量
     */
    public $Limit;

    /**
     * @var string 产品id
     */
    public $ProductId;

    /**
     * @var string 设备名称模糊查找
     */
    public $NamePattern;

    /**
     * @var array 版本列表
     */
    public $Versions;

    /**
     * @var string ASC 或 DESC
     */
    public $Order;

    /**
     * @param integer $Offset 页偏移
     * @param integer $Limit 每页数量
     * @param string $ProductId 产品id
     * @param string $NamePattern 设备名称模糊查找
     * @param array $Versions 版本列表
     * @param string $Order ASC 或 DESC
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("NamePattern",$param) and $param["NamePattern"] !== null) {
            $this->NamePattern = $param["NamePattern"];
        }

        if (array_key_exists("Versions",$param) and $param["Versions"] !== null) {
            $this->Versions = $param["Versions"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
