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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStaffInfoList请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method integer getPageSize() 获取<p>分页尺寸，上限 9999</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页尺寸，上限 9999</p>
 * @method integer getPageNumber() 获取<p>分页页码，从 0 开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>分页页码，从 0 开始</p>
 * @method string getStaffMail() 获取<p>坐席账号，查询单个坐席时使用</p>
 * @method void setStaffMail(string $StaffMail) 设置<p>坐席账号，查询单个坐席时使用</p>
 * @method integer getModifiedTime() 获取<p>查询修改时间大于等于ModifiedTime的坐席时使用</p>
 * @method void setModifiedTime(integer $ModifiedTime) 设置<p>查询修改时间大于等于ModifiedTime的坐席时使用</p>
 * @method integer getSkillGroupId() 获取<p>技能组ID</p>
 * @method void setSkillGroupId(integer $SkillGroupId) 设置<p>技能组ID</p>
 */
class DescribeStaffInfoListRequest extends AbstractModel
{
    /**
     * @var integer <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>分页尺寸，上限 9999</p>
     */
    public $PageSize;

    /**
     * @var integer <p>分页页码，从 0 开始</p>
     */
    public $PageNumber;

    /**
     * @var string <p>坐席账号，查询单个坐席时使用</p>
     */
    public $StaffMail;

    /**
     * @var integer <p>查询修改时间大于等于ModifiedTime的坐席时使用</p>
     */
    public $ModifiedTime;

    /**
     * @var integer <p>技能组ID</p>
     */
    public $SkillGroupId;

    /**
     * @param integer $SdkAppId <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     * @param integer $PageSize <p>分页尺寸，上限 9999</p>
     * @param integer $PageNumber <p>分页页码，从 0 开始</p>
     * @param string $StaffMail <p>坐席账号，查询单个坐席时使用</p>
     * @param integer $ModifiedTime <p>查询修改时间大于等于ModifiedTime的坐席时使用</p>
     * @param integer $SkillGroupId <p>技能组ID</p>
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("StaffMail",$param) and $param["StaffMail"] !== null) {
            $this->StaffMail = $param["StaffMail"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }
    }
}
