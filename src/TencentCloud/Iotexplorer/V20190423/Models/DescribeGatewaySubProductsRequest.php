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
 * DescribeGatewaySubProducts请求参数结构体
 *
 * @method string getGatewayProductId() 获取网关产品ID
 * @method void setGatewayProductId(string $GatewayProductId) 设置网关产品ID
 * @method integer getOffset() 获取分页的偏移量
 * @method void setOffset(integer $Offset) 设置分页的偏移量
 * @method integer getLimit() 获取分页的大小
 * @method void setLimit(integer $Limit) 设置分页的大小
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method integer getProductSource() 获取是否跨账号产品
 * @method void setProductSource(integer $ProductSource) 设置是否跨账号产品
 */
class DescribeGatewaySubProductsRequest extends AbstractModel
{
    /**
     * @var string 网关产品ID
     */
    public $GatewayProductId;

    /**
     * @var integer 分页的偏移量
     */
    public $Offset;

    /**
     * @var integer 分页的大小
     */
    public $Limit;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var integer 是否跨账号产品
     */
    public $ProductSource;

    /**
     * @param string $GatewayProductId 网关产品ID
     * @param integer $Offset 分页的偏移量
     * @param integer $Limit 分页的大小
     * @param string $ProjectId 项目Id
     * @param integer $ProductSource 是否跨账号产品
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
        if (array_key_exists("GatewayProductId",$param) and $param["GatewayProductId"] !== null) {
            $this->GatewayProductId = $param["GatewayProductId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProductSource",$param) and $param["ProductSource"] !== null) {
            $this->ProductSource = $param["ProductSource"];
        }
    }
}
