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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeActivityRecord请求参数结构体
 *
 * @method string getChannelToken() 获取渠道加密token
 * @method void setChannelToken(string $ChannelToken) 设置渠道加密token
 * @method string getChannel() 获取渠道来源，每个来源对应不同secretKey
 * @method void setChannel(string $Channel) 设置渠道来源，每个来源对应不同secretKey
 * @method array getActivityIdList() 获取活动id列表
 * @method void setActivityIdList(array $ActivityIdList) 设置活动id列表
 * @method integer getStatus() 获取过滤状态码，已废弃
 * @method void setStatus(integer $Status) 设置过滤状态码，已废弃
 * @method array getStatuses() 获取状态码过滤数组，空数组时不过滤
 * @method void setStatuses(array $Statuses) 设置状态码过滤数组，空数组时不过滤
 * @method array getIsDeletedList() 获取根据是否软删除进行过滤，[0]未删除, [1] 删除，不传不过滤
 * @method void setIsDeletedList(array $IsDeletedList) 设置根据是否软删除进行过滤，[0]未删除, [1] 删除，不传不过滤
 */
class DescribeActivityRecordRequest extends AbstractModel
{
    /**
     * @var string 渠道加密token
     */
    public $ChannelToken;

    /**
     * @var string 渠道来源，每个来源对应不同secretKey
     */
    public $Channel;

    /**
     * @var array 活动id列表
     */
    public $ActivityIdList;

    /**
     * @var integer 过滤状态码，已废弃
     */
    public $Status;

    /**
     * @var array 状态码过滤数组，空数组时不过滤
     */
    public $Statuses;

    /**
     * @var array 根据是否软删除进行过滤，[0]未删除, [1] 删除，不传不过滤
     */
    public $IsDeletedList;

    /**
     * @param string $ChannelToken 渠道加密token
     * @param string $Channel 渠道来源，每个来源对应不同secretKey
     * @param array $ActivityIdList 活动id列表
     * @param integer $Status 过滤状态码，已废弃
     * @param array $Statuses 状态码过滤数组，空数组时不过滤
     * @param array $IsDeletedList 根据是否软删除进行过滤，[0]未删除, [1] 删除，不传不过滤
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
        if (array_key_exists("ChannelToken",$param) and $param["ChannelToken"] !== null) {
            $this->ChannelToken = $param["ChannelToken"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("ActivityIdList",$param) and $param["ActivityIdList"] !== null) {
            $this->ActivityIdList = $param["ActivityIdList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Statuses",$param) and $param["Statuses"] !== null) {
            $this->Statuses = $param["Statuses"];
        }

        if (array_key_exists("IsDeletedList",$param) and $param["IsDeletedList"] !== null) {
            $this->IsDeletedList = $param["IsDeletedList"];
        }
    }
}
