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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetSyncStatus请求参数结构体
 *
 * @method integer getCategory() 获取查询的资产同步类型。1 -主机资产， 2 - 数据库资产
 * @method void setCategory(integer $Category) 设置查询的资产同步类型。1 -主机资产， 2 - 数据库资产
 */
class DescribeAssetSyncStatusRequest extends AbstractModel
{
    /**
     * @var integer 查询的资产同步类型。1 -主机资产， 2 - 数据库资产
     */
    public $Category;

    /**
     * @param integer $Category 查询的资产同步类型。1 -主机资产， 2 - 数据库资产
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
