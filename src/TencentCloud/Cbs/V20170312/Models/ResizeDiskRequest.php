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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResizeDisk请求参数结构体
 *
 * @method integer getDiskSize() 获取云硬盘扩容后的大小，单位为GB，必须大于当前云硬盘大小。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘扩容后的大小，单位为GB，必须大于当前云硬盘大小。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
 * @method string getDiskId() 获取云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。该字段仅供单块云硬盘扩容时传入。
 * @method void setDiskId(string $DiskId) 设置云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。该字段仅供单块云硬盘扩容时传入。
 */
class ResizeDiskRequest extends AbstractModel
{
    /**
     * @var integer 云硬盘扩容后的大小，单位为GB，必须大于当前云硬盘大小。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
     */
    public $DiskSize;

    /**
     * @var string 云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。该字段仅供单块云硬盘扩容时传入。
     */
    public $DiskId;

    /**
     * @param integer $DiskSize 云硬盘扩容后的大小，单位为GB，必须大于当前云硬盘大小。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
     * @param string $DiskId 云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。该字段仅供单块云硬盘扩容时传入。
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
        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }
    }
}
