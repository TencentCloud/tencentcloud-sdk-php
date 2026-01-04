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
 * InquiryPriceRenewDisks请求参数结构体
 *
 * @method array getDiskIds() 获取<p>云硬盘ID， 通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。</p>
 * @method void setDiskIds(array $DiskIds) 设置<p>云硬盘ID， 通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。</p>
 * @method array getDiskChargePrepaids() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。</p>
 * @method void setDiskChargePrepaids(array $DiskChargePrepaids) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。</p>
 * @method string getNewDeadline() 获取<p>指定云硬盘新的到期时间，形式如：2017-12-17 00:00:00。参数<code>NewDeadline</code>和<code>DiskChargePrepaids</code>是两种指定询价时长的方式，两者必传一个。</p>
 * @method void setNewDeadline(string $NewDeadline) 设置<p>指定云硬盘新的到期时间，形式如：2017-12-17 00:00:00。参数<code>NewDeadline</code>和<code>DiskChargePrepaids</code>是两种指定询价时长的方式，两者必传一个。</p>
 * @method integer getProjectId() 获取<p>云硬盘所属项目ID。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/651/78725">DescribeProject</a> 的返回值中的 projectId 字段来获取。 如传入则仅用于鉴权。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>云硬盘所属项目ID。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/651/78725">DescribeProject</a> 的返回值中的 projectId 字段来获取。 如传入则仅用于鉴权。</p>
 */
class InquiryPriceRenewDisksRequest extends AbstractModel
{
    /**
     * @var array <p>云硬盘ID， 通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。</p>
     */
    public $DiskIds;

    /**
     * @var array <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。</p>
     */
    public $DiskChargePrepaids;

    /**
     * @var string <p>指定云硬盘新的到期时间，形式如：2017-12-17 00:00:00。参数<code>NewDeadline</code>和<code>DiskChargePrepaids</code>是两种指定询价时长的方式，两者必传一个。</p>
     */
    public $NewDeadline;

    /**
     * @var integer <p>云硬盘所属项目ID。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/651/78725">DescribeProject</a> 的返回值中的 projectId 字段来获取。 如传入则仅用于鉴权。</p>
     */
    public $ProjectId;

    /**
     * @param array $DiskIds <p>云硬盘ID， 通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。</p>
     * @param array $DiskChargePrepaids <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月云盘的购买时长。如果在该参数中指定CurInstanceDeadline，则会按对齐到子机到期时间来续费。如果是批量续费询价，该参数与Disks参数一一对应，元素数量需保持一致。</p>
     * @param string $NewDeadline <p>指定云硬盘新的到期时间，形式如：2017-12-17 00:00:00。参数<code>NewDeadline</code>和<code>DiskChargePrepaids</code>是两种指定询价时长的方式，两者必传一个。</p>
     * @param integer $ProjectId <p>云硬盘所属项目ID。该参数可以通过调用<a href="https://cloud.tencent.com/document/api/651/78725">DescribeProject</a> 的返回值中的 projectId 字段来获取。 如传入则仅用于鉴权。</p>
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("DiskChargePrepaids",$param) and $param["DiskChargePrepaids"] !== null) {
            $this->DiskChargePrepaids = [];
            foreach ($param["DiskChargePrepaids"] as $key => $value){
                $obj = new DiskChargePrepaid();
                $obj->deserialize($value);
                array_push($this->DiskChargePrepaids, $obj);
            }
        }

        if (array_key_exists("NewDeadline",$param) and $param["NewDeadline"] !== null) {
            $this->NewDeadline = $param["NewDeadline"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
