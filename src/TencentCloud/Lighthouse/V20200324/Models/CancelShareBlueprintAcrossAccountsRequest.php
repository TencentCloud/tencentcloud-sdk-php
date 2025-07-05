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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelShareBlueprintAcrossAccounts请求参数结构体
 *
 * @method string getBlueprintId() 获取镜像ID, 可以通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回的BlueprintId获取。
 * @method void setBlueprintId(string $BlueprintId) 设置镜像ID, 可以通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回的BlueprintId获取。
 * @method array getAccountIds() 获取接收共享镜像的[账号ID](https://cloud.tencent.com/document/product/213/4944#.E8.8E.B7.E5.8F.96.E4.B8.BB.E8.B4.A6.E5.8F.B7.E7.9A.84.E8.B4.A6.E5.8F.B7-id)列表。账号ID不同于QQ号，查询用户账号ID请查看账号信息中的账号ID栏。账号个数取值最大为10。
 * @method void setAccountIds(array $AccountIds) 设置接收共享镜像的[账号ID](https://cloud.tencent.com/document/product/213/4944#.E8.8E.B7.E5.8F.96.E4.B8.BB.E8.B4.A6.E5.8F.B7.E7.9A.84.E8.B4.A6.E5.8F.B7-id)列表。账号ID不同于QQ号，查询用户账号ID请查看账号信息中的账号ID栏。账号个数取值最大为10。
 */
class CancelShareBlueprintAcrossAccountsRequest extends AbstractModel
{
    /**
     * @var string 镜像ID, 可以通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回的BlueprintId获取。
     */
    public $BlueprintId;

    /**
     * @var array 接收共享镜像的[账号ID](https://cloud.tencent.com/document/product/213/4944#.E8.8E.B7.E5.8F.96.E4.B8.BB.E8.B4.A6.E5.8F.B7.E7.9A.84.E8.B4.A6.E5.8F.B7-id)列表。账号ID不同于QQ号，查询用户账号ID请查看账号信息中的账号ID栏。账号个数取值最大为10。
     */
    public $AccountIds;

    /**
     * @param string $BlueprintId 镜像ID, 可以通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回的BlueprintId获取。
     * @param array $AccountIds 接收共享镜像的[账号ID](https://cloud.tencent.com/document/product/213/4944#.E8.8E.B7.E5.8F.96.E4.B8.BB.E8.B4.A6.E5.8F.B7.E7.9A.84.E8.B4.A6.E5.8F.B7-id)列表。账号ID不同于QQ号，查询用户账号ID请查看账号信息中的账号ID栏。账号个数取值最大为10。
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
        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("AccountIds",$param) and $param["AccountIds"] !== null) {
            $this->AccountIds = $param["AccountIds"];
        }
    }
}
