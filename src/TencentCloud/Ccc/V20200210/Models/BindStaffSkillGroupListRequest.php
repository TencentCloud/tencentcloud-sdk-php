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
 * BindStaffSkillGroupList请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method string getStaffEmail() 获取座席邮箱
 * @method void setStaffEmail(string $StaffEmail) 设置座席邮箱
 * @method array getSkillGroupList() 获取绑定技能组列表
 * @method void setSkillGroupList(array $SkillGroupList) 设置绑定技能组列表
 * @method array getStaffSkillGroupList() 获取绑定技能组列表(必填)
 * @method void setStaffSkillGroupList(array $StaffSkillGroupList) 设置绑定技能组列表(必填)
 */
class BindStaffSkillGroupListRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var string 座席邮箱
     */
    public $StaffEmail;

    /**
     * @var array 绑定技能组列表
     * @deprecated
     */
    public $SkillGroupList;

    /**
     * @var array 绑定技能组列表(必填)
     */
    public $StaffSkillGroupList;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param string $StaffEmail 座席邮箱
     * @param array $SkillGroupList 绑定技能组列表
     * @param array $StaffSkillGroupList 绑定技能组列表(必填)
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

        if (array_key_exists("StaffEmail",$param) and $param["StaffEmail"] !== null) {
            $this->StaffEmail = $param["StaffEmail"];
        }

        if (array_key_exists("SkillGroupList",$param) and $param["SkillGroupList"] !== null) {
            $this->SkillGroupList = $param["SkillGroupList"];
        }

        if (array_key_exists("StaffSkillGroupList",$param) and $param["StaffSkillGroupList"] !== null) {
            $this->StaffSkillGroupList = [];
            foreach ($param["StaffSkillGroupList"] as $key => $value){
                $obj = new StaffSkillGroupList();
                $obj->deserialize($value);
                array_push($this->StaffSkillGroupList, $obj);
            }
        }
    }
}
