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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDidService、CheckDidDeploy出参
 *
 * @method integer getId() 获取任务ID
 * @method void setId(integer $Id) 设置任务ID
 * @method integer getAppId() 获取应用ID
 * @method void setAppId(integer $AppId) 设置应用ID
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method integer getServiceId() 获取服务ID
 * @method void setServiceId(integer $ServiceId) 设置服务ID
 * @method integer getStatus() 获取0: 部署中，1:部署成功，其他失败
 * @method void setStatus(integer $Status) 设置0: 部署中，1:部署成功，其他失败
 * @method string getErrorCode() 获取错误码
 * @method void setErrorCode(string $ErrorCode) 设置错误码
 * @method string getErrorMsg() 获取错误提示
 * @method void setErrorMsg(string $ErrorMsg) 设置错误提示
 * @method string getCreateTime() 获取生成时间
 * @method void setCreateTime(string $CreateTime) 设置生成时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class Task extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $Id;

    /**
     * @var integer 应用ID
     */
    public $AppId;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var integer 服务ID
     */
    public $ServiceId;

    /**
     * @var integer 0: 部署中，1:部署成功，其他失败
     */
    public $Status;

    /**
     * @var string 错误码
     */
    public $ErrorCode;

    /**
     * @var string 错误提示
     */
    public $ErrorMsg;

    /**
     * @var string 生成时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param integer $Id 任务ID
     * @param integer $AppId 应用ID
     * @param string $ClusterId 网络ID
     * @param integer $GroupId 群组ID
     * @param integer $ServiceId 服务ID
     * @param integer $Status 0: 部署中，1:部署成功，其他失败
     * @param string $ErrorCode 错误码
     * @param string $ErrorMsg 错误提示
     * @param string $CreateTime 生成时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
