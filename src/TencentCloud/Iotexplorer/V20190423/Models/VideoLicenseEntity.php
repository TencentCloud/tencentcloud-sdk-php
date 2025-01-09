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
 * 视频设备激活码统计
 *
 * @method string getType() 获取激活码类型，取值范围如下：0_5_mbps、1_mbps、1_5_mbps、2_mbps
 * @method void setType(string $Type) 设置激活码类型，取值范围如下：0_5_mbps、1_mbps、1_5_mbps、2_mbps
 * @method integer getTotalCount() 获取有效激活码总数
 * @method void setTotalCount(integer $TotalCount) 设置有效激活码总数
 * @method integer getUsedCount() 获取待使用的激活码数量
 * @method void setUsedCount(integer $UsedCount) 设置待使用的激活码数量
 * @method integer getExpiresSoonCount() 获取即将过期的激活码数量
 * @method void setExpiresSoonCount(integer $ExpiresSoonCount) 设置即将过期的激活码数量
 */
class VideoLicenseEntity extends AbstractModel
{
    /**
     * @var string 激活码类型，取值范围如下：0_5_mbps、1_mbps、1_5_mbps、2_mbps
     */
    public $Type;

    /**
     * @var integer 有效激活码总数
     */
    public $TotalCount;

    /**
     * @var integer 待使用的激活码数量
     */
    public $UsedCount;

    /**
     * @var integer 即将过期的激活码数量
     */
    public $ExpiresSoonCount;

    /**
     * @param string $Type 激活码类型，取值范围如下：0_5_mbps、1_mbps、1_5_mbps、2_mbps
     * @param integer $TotalCount 有效激活码总数
     * @param integer $UsedCount 待使用的激活码数量
     * @param integer $ExpiresSoonCount 即将过期的激活码数量
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("UsedCount",$param) and $param["UsedCount"] !== null) {
            $this->UsedCount = $param["UsedCount"];
        }

        if (array_key_exists("ExpiresSoonCount",$param) and $param["ExpiresSoonCount"] !== null) {
            $this->ExpiresSoonCount = $param["ExpiresSoonCount"];
        }
    }
}
