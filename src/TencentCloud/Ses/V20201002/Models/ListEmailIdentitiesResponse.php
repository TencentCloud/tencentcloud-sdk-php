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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListEmailIdentities返回参数结构体
 *
 * @method array getEmailIdentities() 获取发信域名列表
 * @method void setEmailIdentities(array $EmailIdentities) 设置发信域名列表
 * @method integer getMaxReputationLevel() 获取最大信誉等级
 * @method void setMaxReputationLevel(integer $MaxReputationLevel) 设置最大信誉等级
 * @method integer getMaxDailyQuota() 获取单域名最高日发送量
 * @method void setMaxDailyQuota(integer $MaxDailyQuota) 设置单域名最高日发送量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListEmailIdentitiesResponse extends AbstractModel
{
    /**
     * @var array 发信域名列表
     */
    public $EmailIdentities;

    /**
     * @var integer 最大信誉等级
     */
    public $MaxReputationLevel;

    /**
     * @var integer 单域名最高日发送量
     */
    public $MaxDailyQuota;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $EmailIdentities 发信域名列表
     * @param integer $MaxReputationLevel 最大信誉等级
     * @param integer $MaxDailyQuota 单域名最高日发送量
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
        if (array_key_exists("EmailIdentities",$param) and $param["EmailIdentities"] !== null) {
            $this->EmailIdentities = [];
            foreach ($param["EmailIdentities"] as $key => $value){
                $obj = new EmailIdentity();
                $obj->deserialize($value);
                array_push($this->EmailIdentities, $obj);
            }
        }

        if (array_key_exists("MaxReputationLevel",$param) and $param["MaxReputationLevel"] !== null) {
            $this->MaxReputationLevel = $param["MaxReputationLevel"];
        }

        if (array_key_exists("MaxDailyQuota",$param) and $param["MaxDailyQuota"] !== null) {
            $this->MaxDailyQuota = $param["MaxDailyQuota"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
