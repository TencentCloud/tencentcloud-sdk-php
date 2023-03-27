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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserStatus返回参数结构体
 *
 * @method integer getAppId() 获取客户的AppId
 * @method void setAppId(integer $AppId) 设置客户的AppId
 * @method integer getIsTiwUser() 获取是否开通过白板（试用或正式）

0: 从未开通过白板服务
1: 已经开通过白板服务
 * @method void setIsTiwUser(integer $IsTiwUser) 设置是否开通过白板（试用或正式）

0: 从未开通过白板服务
1: 已经开通过白板服务
 * @method integer getIsSaaSUser() 获取是否开通过互动课堂（试用或正式）
 * @method void setIsSaaSUser(integer $IsSaaSUser) 设置是否开通过互动课堂（试用或正式）
 * @method integer getIsTiwOfflineRecordUser() 获取是否使用白板的课后录制
 * @method void setIsTiwOfflineRecordUser(integer $IsTiwOfflineRecordUser) 设置是否使用白板的课后录制
 * @method integer getIsAuthenticated() 获取用户是否实名认证
 * @method void setIsAuthenticated(integer $IsAuthenticated) 设置用户是否实名认证
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserStatusResponse extends AbstractModel
{
    /**
     * @var integer 客户的AppId
     */
    public $AppId;

    /**
     * @var integer 是否开通过白板（试用或正式）

0: 从未开通过白板服务
1: 已经开通过白板服务
     */
    public $IsTiwUser;

    /**
     * @var integer 是否开通过互动课堂（试用或正式）
     */
    public $IsSaaSUser;

    /**
     * @var integer 是否使用白板的课后录制
     */
    public $IsTiwOfflineRecordUser;

    /**
     * @var integer 用户是否实名认证
     */
    public $IsAuthenticated;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AppId 客户的AppId
     * @param integer $IsTiwUser 是否开通过白板（试用或正式）

0: 从未开通过白板服务
1: 已经开通过白板服务
     * @param integer $IsSaaSUser 是否开通过互动课堂（试用或正式）
     * @param integer $IsTiwOfflineRecordUser 是否使用白板的课后录制
     * @param integer $IsAuthenticated 用户是否实名认证
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IsTiwUser",$param) and $param["IsTiwUser"] !== null) {
            $this->IsTiwUser = $param["IsTiwUser"];
        }

        if (array_key_exists("IsSaaSUser",$param) and $param["IsSaaSUser"] !== null) {
            $this->IsSaaSUser = $param["IsSaaSUser"];
        }

        if (array_key_exists("IsTiwOfflineRecordUser",$param) and $param["IsTiwOfflineRecordUser"] !== null) {
            $this->IsTiwOfflineRecordUser = $param["IsTiwOfflineRecordUser"];
        }

        if (array_key_exists("IsAuthenticated",$param) and $param["IsAuthenticated"] !== null) {
            $this->IsAuthenticated = $param["IsAuthenticated"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
