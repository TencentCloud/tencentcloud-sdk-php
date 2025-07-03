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
 * InquiryPriceResizeDisk请求参数结构体
 *
 * @method integer getDiskSize() 获取云硬盘扩容后的大小，单位为GiB，不得小于当前云硬盘大小。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘扩容后的大小，单位为GiB，不得小于当前云硬盘大小。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
 * @method string getDiskId() 获取云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method void setDiskId(string $DiskId) 设置云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method integer getProjectId() 获取云硬盘所属项目ID。该参数可以通过调用[DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。 如传入则仅用于鉴权。
 * @method void setProjectId(integer $ProjectId) 设置云硬盘所属项目ID。该参数可以通过调用[DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。 如传入则仅用于鉴权。
 */
class InquiryPriceResizeDiskRequest extends AbstractModel
{
    /**
     * @var integer 云硬盘扩容后的大小，单位为GiB，不得小于当前云硬盘大小。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
     */
    public $DiskSize;

    /**
     * @var string 云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。
     */
    public $DiskId;

    /**
     * @var integer 云硬盘所属项目ID。该参数可以通过调用[DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。 如传入则仅用于鉴权。
     */
    public $ProjectId;

    /**
     * @param integer $DiskSize 云硬盘扩容后的大小，单位为GiB，不得小于当前云硬盘大小。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
     * @param string $DiskId 云硬盘ID， 通过[DescribeDisks](/document/product/362/16315)接口查询。
     * @param integer $ProjectId 云硬盘所属项目ID。该参数可以通过调用[DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。 如传入则仅用于鉴权。
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
