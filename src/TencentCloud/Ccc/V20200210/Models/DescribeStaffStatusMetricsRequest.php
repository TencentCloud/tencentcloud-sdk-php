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
 * DescribeStaffStatusMetrics请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method array getStaffList() 获取筛选坐席列表，默认不传返回全部坐席信息
 * @method void setStaffList(array $StaffList) 设置筛选坐席列表，默认不传返回全部坐席信息
 * @method array getGroupIdList() 获取筛选技能组ID列表
 * @method void setGroupIdList(array $GroupIdList) 设置筛选技能组ID列表
 * @method array getStatusList() 获取筛选坐席状态列表
 * @method void setStatusList(array $StatusList) 设置筛选坐席状态列表
 */
class DescribeStaffStatusMetricsRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var array 筛选坐席列表，默认不传返回全部坐席信息
     */
    public $StaffList;

    /**
     * @var array 筛选技能组ID列表
     */
    public $GroupIdList;

    /**
     * @var array 筛选坐席状态列表
     */
    public $StatusList;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param array $StaffList 筛选坐席列表，默认不传返回全部坐席信息
     * @param array $GroupIdList 筛选技能组ID列表
     * @param array $StatusList 筛选坐席状态列表
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

        if (array_key_exists("StaffList",$param) and $param["StaffList"] !== null) {
            $this->StaffList = $param["StaffList"];
        }

        if (array_key_exists("GroupIdList",$param) and $param["GroupIdList"] !== null) {
            $this->GroupIdList = $param["GroupIdList"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }
    }
}
