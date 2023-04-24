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
 * DescribeCallInMetrics请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method boolean getEnabledSkillGroup() 获取是否返回技能组维度信息，默认“是”
 * @method void setEnabledSkillGroup(boolean $EnabledSkillGroup) 设置是否返回技能组维度信息，默认“是”
 * @method boolean getEnabledNumber() 获取是否返回线路维度信息，默认“否”
 * @method void setEnabledNumber(boolean $EnabledNumber) 设置是否返回线路维度信息，默认“否”
 * @method array getGroupIdList() 获取筛选技能组列表
 * @method void setGroupIdList(array $GroupIdList) 设置筛选技能组列表
 */
class DescribeCallInMetricsRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var boolean 是否返回技能组维度信息，默认“是”
     */
    public $EnabledSkillGroup;

    /**
     * @var boolean 是否返回线路维度信息，默认“否”
     */
    public $EnabledNumber;

    /**
     * @var array 筛选技能组列表
     */
    public $GroupIdList;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param boolean $EnabledSkillGroup 是否返回技能组维度信息，默认“是”
     * @param boolean $EnabledNumber 是否返回线路维度信息，默认“否”
     * @param array $GroupIdList 筛选技能组列表
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

        if (array_key_exists("EnabledSkillGroup",$param) and $param["EnabledSkillGroup"] !== null) {
            $this->EnabledSkillGroup = $param["EnabledSkillGroup"];
        }

        if (array_key_exists("EnabledNumber",$param) and $param["EnabledNumber"] !== null) {
            $this->EnabledNumber = $param["EnabledNumber"];
        }

        if (array_key_exists("GroupIdList",$param) and $param["GroupIdList"] !== null) {
            $this->GroupIdList = $param["GroupIdList"];
        }
    }
}
