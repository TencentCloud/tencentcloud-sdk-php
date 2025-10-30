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
 * UpdateCCCSkillGroup请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method integer getSkillGroupID() 获取技能组ID
 * @method void setSkillGroupID(integer $SkillGroupID) 设置技能组ID
 * @method string getSkillGroupName() 获取修改后的技能组名字
 * @method void setSkillGroupName(string $SkillGroupName) 设置修改后的技能组名字
 * @method integer getMaxConcurrency() 获取修改后的最大并发数,同振最大为2
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置修改后的最大并发数,同振最大为2
 * @method boolean getRingAll() 获取true同振，false顺振
 * @method void setRingAll(boolean $RingAll) 设置true同振，false顺振
 */
class UpdateCCCSkillGroupRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var integer 技能组ID
     */
    public $SkillGroupID;

    /**
     * @var string 修改后的技能组名字
     */
    public $SkillGroupName;

    /**
     * @var integer 修改后的最大并发数,同振最大为2
     */
    public $MaxConcurrency;

    /**
     * @var boolean true同振，false顺振
     */
    public $RingAll;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param integer $SkillGroupID 技能组ID
     * @param string $SkillGroupName 修改后的技能组名字
     * @param integer $MaxConcurrency 修改后的最大并发数,同振最大为2
     * @param boolean $RingAll true同振，false顺振
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

        if (array_key_exists("SkillGroupID",$param) and $param["SkillGroupID"] !== null) {
            $this->SkillGroupID = $param["SkillGroupID"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("RingAll",$param) and $param["RingAll"] !== null) {
            $this->RingAll = $param["RingAll"];
        }
    }
}
