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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceUpgradeCheckJob请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method string getDstMysqlVersion() 获取目标数据库版本。
说明：可选值5.6、5.7、8.0，不支持跨版本升级，升级后不支持版本降级。
 * @method void setDstMysqlVersion(string $DstMysqlVersion) 设置目标数据库版本。
说明：可选值5.6、5.7、8.0，不支持跨版本升级，升级后不支持版本降级。
 */
class DescribeInstanceUpgradeCheckJobRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 目标数据库版本。
说明：可选值5.6、5.7、8.0，不支持跨版本升级，升级后不支持版本降级。
     */
    public $DstMysqlVersion;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param string $DstMysqlVersion 目标数据库版本。
说明：可选值5.6、5.7、8.0，不支持跨版本升级，升级后不支持版本降级。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DstMysqlVersion",$param) and $param["DstMysqlVersion"] !== null) {
            $this->DstMysqlVersion = $param["DstMysqlVersion"];
        }
    }
}
