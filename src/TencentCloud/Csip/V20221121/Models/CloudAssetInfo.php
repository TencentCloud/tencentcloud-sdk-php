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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云厂商资产数量明细
 *
 * @method string getCloudType() 获取云厂商类型
枚举值：
tencent：腾讯云
aliyun：阿里云
aws：AWS
huawei：华为云
azure：Azure
 * @method void setCloudType(string $CloudType) 设置云厂商类型
枚举值：
tencent：腾讯云
aliyun：阿里云
aws：AWS
huawei：华为云
azure：Azure
 * @method integer getCount() 获取该云厂商的资产数量
取值范围：[0, +∞)
 * @method void setCount(integer $Count) 设置该云厂商的资产数量
取值范围：[0, +∞)
 */
class CloudAssetInfo extends AbstractModel
{
    /**
     * @var string 云厂商类型
枚举值：
tencent：腾讯云
aliyun：阿里云
aws：AWS
huawei：华为云
azure：Azure
     */
    public $CloudType;

    /**
     * @var integer 该云厂商的资产数量
取值范围：[0, +∞)
     */
    public $Count;

    /**
     * @param string $CloudType 云厂商类型
枚举值：
tencent：腾讯云
aliyun：阿里云
aws：AWS
huawei：华为云
azure：Azure
     * @param integer $Count 该云厂商的资产数量
取值范围：[0, +∞)
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
        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
