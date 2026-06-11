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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResizeDisk请求参数结构体
 *
 * @method integer getDiskSize() 获取<p>云硬盘扩容后的大小，单位为GB，必须大于当前云硬盘大小。云盘大小取值范围参见云硬盘<a href="/document/product/362/2353">产品分类</a>的说明。</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>云硬盘扩容后的大小，单位为GB，必须大于当前云硬盘大小。云盘大小取值范围参见云硬盘<a href="/document/product/362/2353">产品分类</a>的说明。</p>
 * @method string getDiskId() 获取<p>云硬盘ID， 通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。该字段仅供单块云硬盘扩容时传入。</p>
 * @method void setDiskId(string $DiskId) 设置<p>云硬盘ID， 通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。该字段仅供单块云硬盘扩容时传入。</p>
 */
class ResizeDiskRequest extends AbstractModel
{
    /**
     * @var integer <p>云硬盘扩容后的大小，单位为GB，必须大于当前云硬盘大小。云盘大小取值范围参见云硬盘<a href="/document/product/362/2353">产品分类</a>的说明。</p>
     */
    public $DiskSize;

    /**
     * @var string <p>云硬盘ID， 通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。该字段仅供单块云硬盘扩容时传入。</p>
     */
    public $DiskId;

    /**
     * @param integer $DiskSize <p>云硬盘扩容后的大小，单位为GB，必须大于当前云硬盘大小。云盘大小取值范围参见云硬盘<a href="/document/product/362/2353">产品分类</a>的说明。</p>
     * @param string $DiskId <p>云硬盘ID， 通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。该字段仅供单块云硬盘扩容时传入。</p>
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
