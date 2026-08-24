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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDisasterRecoveryOverview请求参数结构体
 *
 * @method string getCopyPairType() 获取要查询的产品/复制对的类型，枚举值：• DISK：云硬盘类型复制对• INSTANCE：CVM 实例复制对• CFS：文件存储复制对• ALL：聚合当前支持的类型；默认为CFS
 * @method void setCopyPairType(string $CopyPairType) 设置要查询的产品/复制对的类型，枚举值：• DISK：云硬盘类型复制对• INSTANCE：CVM 实例复制对• CFS：文件存储复制对• ALL：聚合当前支持的类型；默认为CFS
 */
class DescribeDisasterRecoveryOverviewRequest extends AbstractModel
{
    /**
     * @var string 要查询的产品/复制对的类型，枚举值：• DISK：云硬盘类型复制对• INSTANCE：CVM 实例复制对• CFS：文件存储复制对• ALL：聚合当前支持的类型；默认为CFS
     */
    public $CopyPairType;

    /**
     * @param string $CopyPairType 要查询的产品/复制对的类型，枚举值：• DISK：云硬盘类型复制对• INSTANCE：CVM 实例复制对• CFS：文件存储复制对• ALL：聚合当前支持的类型；默认为CFS
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
        if (array_key_exists("CopyPairType",$param) and $param["CopyPairType"] !== null) {
            $this->CopyPairType = $param["CopyPairType"];
        }
    }
}
