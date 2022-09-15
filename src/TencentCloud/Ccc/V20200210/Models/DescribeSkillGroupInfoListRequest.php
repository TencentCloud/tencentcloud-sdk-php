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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillGroupInfoList请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method integer getPageSize() 获取分页尺寸，上限 100
 * @method void setPageSize(integer $PageSize) 设置分页尺寸，上限 100
 * @method integer getPageNumber() 获取分页页码，从 0 开始
 * @method void setPageNumber(integer $PageNumber) 设置分页页码，从 0 开始
 * @method integer getSkillGroupId() 获取技能组ID，查询单个技能组时使用
 * @method void setSkillGroupId(integer $SkillGroupId) 设置技能组ID，查询单个技能组时使用
 * @method integer getModifiedTime() 获取查询修改时间大于等于ModifiedTime的技能组时使用
 * @method void setModifiedTime(integer $ModifiedTime) 设置查询修改时间大于等于ModifiedTime的技能组时使用
 * @method string getSkillGroupName() 获取技能组名称
 * @method void setSkillGroupName(string $SkillGroupName) 设置技能组名称
 */
class DescribeSkillGroupInfoListRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var integer 分页尺寸，上限 100
     */
    public $PageSize;

    /**
     * @var integer 分页页码，从 0 开始
     */
    public $PageNumber;

    /**
     * @var integer 技能组ID，查询单个技能组时使用
     */
    public $SkillGroupId;

    /**
     * @var integer 查询修改时间大于等于ModifiedTime的技能组时使用
     */
    public $ModifiedTime;

    /**
     * @var string 技能组名称
     */
    public $SkillGroupName;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param integer $PageSize 分页尺寸，上限 100
     * @param integer $PageNumber 分页页码，从 0 开始
     * @param integer $SkillGroupId 技能组ID，查询单个技能组时使用
     * @param integer $ModifiedTime 查询修改时间大于等于ModifiedTime的技能组时使用
     * @param string $SkillGroupName 技能组名称
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

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }
    }
}
