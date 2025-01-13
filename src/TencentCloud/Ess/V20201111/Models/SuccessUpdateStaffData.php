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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 更新员工信息成功返回的数据信息， 仅支持未实名的用户进行更新
会通过短信、企微消息或者H5Url 链接
如果是通过H5邀请加入的方式，会返回H5 链接
 *
 * @method string getDisplayName() 获取传入的用户名称
 * @method void setDisplayName(string $DisplayName) 设置传入的用户名称
 * @method string getMobile() 获取传入的手机号，没有打码
 * @method void setMobile(string $Mobile) 设置传入的手机号，没有打码
 * @method string getUserId() 获取员工在腾讯电子签平台的唯一身份标识，为32位字符串。
可登录腾讯电子签控制台，在 "更多能力"->"组织管理" 中查看某位员工的UserId(在页面中展示为用户ID)。
 * @method void setUserId(string $UserId) 设置员工在腾讯电子签平台的唯一身份标识，为32位字符串。
可登录腾讯电子签控制台，在 "更多能力"->"组织管理" 中查看某位员工的UserId(在页面中展示为用户ID)。
 * @method string getUrl() 获取H5端员工实名链接
只有入参 InvitationNotifyType = H5的时候才会进行返回。
 * @method void setUrl(string $Url) 设置H5端员工实名链接
只有入参 InvitationNotifyType = H5的时候才会进行返回。
 */
class SuccessUpdateStaffData extends AbstractModel
{
    /**
     * @var string 传入的用户名称
     */
    public $DisplayName;

    /**
     * @var string 传入的手机号，没有打码
     */
    public $Mobile;

    /**
     * @var string 员工在腾讯电子签平台的唯一身份标识，为32位字符串。
可登录腾讯电子签控制台，在 "更多能力"->"组织管理" 中查看某位员工的UserId(在页面中展示为用户ID)。
     */
    public $UserId;

    /**
     * @var string H5端员工实名链接
只有入参 InvitationNotifyType = H5的时候才会进行返回。
     */
    public $Url;

    /**
     * @param string $DisplayName 传入的用户名称
     * @param string $Mobile 传入的手机号，没有打码
     * @param string $UserId 员工在腾讯电子签平台的唯一身份标识，为32位字符串。
可登录腾讯电子签控制台，在 "更多能力"->"组织管理" 中查看某位员工的UserId(在页面中展示为用户ID)。
     * @param string $Url H5端员工实名链接
只有入参 InvitationNotifyType = H5的时候才会进行返回。
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
