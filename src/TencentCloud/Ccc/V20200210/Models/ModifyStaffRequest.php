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
 * ModifyStaff请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置应用ID
 * @method string getEmail() 获取坐席账户
 * @method void setEmail(string $Email) 设置坐席账户
 * @method string getName() 获取坐席名称
 * @method void setName(string $Name) 设置坐席名称
 * @method string getPhone() 获取坐席手机号（带0086前缀,示例：008618011111111）
 * @method void setPhone(string $Phone) 设置坐席手机号（带0086前缀,示例：008618011111111）
 * @method string getNick() 获取坐席昵称
 * @method void setNick(string $Nick) 设置坐席昵称
 * @method array getSkillGroupIds() 获取绑定技能组ID列表
 * @method void setSkillGroupIds(array $SkillGroupIds) 设置绑定技能组ID列表
 * @method boolean getUseMobileCallOut() 获取是否开启手机外呼开关
 * @method void setUseMobileCallOut(boolean $UseMobileCallOut) 设置是否开启手机外呼开关
 * @method integer getUseMobileAccept() 获取手机接听模式 0 - 关闭 | 1 - 仅离线 | 2 - 始终
 * @method void setUseMobileAccept(integer $UseMobileAccept) 设置手机接听模式 0 - 关闭 | 1 - 仅离线 | 2 - 始终
 */
class ModifyStaffRequest extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $SdkAppId;

    /**
     * @var string 坐席账户
     */
    public $Email;

    /**
     * @var string 坐席名称
     */
    public $Name;

    /**
     * @var string 坐席手机号（带0086前缀,示例：008618011111111）
     */
    public $Phone;

    /**
     * @var string 坐席昵称
     */
    public $Nick;

    /**
     * @var array 绑定技能组ID列表
     */
    public $SkillGroupIds;

    /**
     * @var boolean 是否开启手机外呼开关
     */
    public $UseMobileCallOut;

    /**
     * @var integer 手机接听模式 0 - 关闭 | 1 - 仅离线 | 2 - 始终
     */
    public $UseMobileAccept;

    /**
     * @param integer $SdkAppId 应用ID
     * @param string $Email 坐席账户
     * @param string $Name 坐席名称
     * @param string $Phone 坐席手机号（带0086前缀,示例：008618011111111）
     * @param string $Nick 坐席昵称
     * @param array $SkillGroupIds 绑定技能组ID列表
     * @param boolean $UseMobileCallOut 是否开启手机外呼开关
     * @param integer $UseMobileAccept 手机接听模式 0 - 关闭 | 1 - 仅离线 | 2 - 始终
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

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("SkillGroupIds",$param) and $param["SkillGroupIds"] !== null) {
            $this->SkillGroupIds = $param["SkillGroupIds"];
        }

        if (array_key_exists("UseMobileCallOut",$param) and $param["UseMobileCallOut"] !== null) {
            $this->UseMobileCallOut = $param["UseMobileCallOut"];
        }

        if (array_key_exists("UseMobileAccept",$param) and $param["UseMobileAccept"] !== null) {
            $this->UseMobileAccept = $param["UseMobileAccept"];
        }
    }
}
