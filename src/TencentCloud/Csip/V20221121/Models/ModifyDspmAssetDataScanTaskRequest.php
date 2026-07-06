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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmAssetDataScanTask请求参数结构体
 *
 * @method array getAssetIds() 获取实例id
 * @method void setAssetIds(array $AssetIds) 设置实例id
 * @method boolean getIsScheduled() 获取是否定时任务
 * @method void setIsScheduled(boolean $IsScheduled) 设置是否定时任务
 * @method boolean getIsAgreeAuth() 获取是否同意一键授权
 * @method void setIsAgreeAuth(boolean $IsAgreeAuth) 设置是否同意一键授权
 * @method boolean getIsRunAtOnce() 获取是否立即执行
 * @method void setIsRunAtOnce(boolean $IsRunAtOnce) 设置是否立即执行
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method DspmScheduleConfig getScheduleConfig() 获取调度周期配置
 * @method void setScheduleConfig(DspmScheduleConfig $ScheduleConfig) 设置调度周期配置
 */
class ModifyDspmAssetDataScanTaskRequest extends AbstractModel
{
    /**
     * @var array 实例id
     */
    public $AssetIds;

    /**
     * @var boolean 是否定时任务
     */
    public $IsScheduled;

    /**
     * @var boolean 是否同意一键授权
     */
    public $IsAgreeAuth;

    /**
     * @var boolean 是否立即执行
     */
    public $IsRunAtOnce;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var DspmScheduleConfig 调度周期配置
     */
    public $ScheduleConfig;

    /**
     * @param array $AssetIds 实例id
     * @param boolean $IsScheduled 是否定时任务
     * @param boolean $IsAgreeAuth 是否同意一键授权
     * @param boolean $IsRunAtOnce 是否立即执行
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param DspmScheduleConfig $ScheduleConfig 调度周期配置
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
        if (array_key_exists("AssetIds",$param) and $param["AssetIds"] !== null) {
            $this->AssetIds = $param["AssetIds"];
        }

        if (array_key_exists("IsScheduled",$param) and $param["IsScheduled"] !== null) {
            $this->IsScheduled = $param["IsScheduled"];
        }

        if (array_key_exists("IsAgreeAuth",$param) and $param["IsAgreeAuth"] !== null) {
            $this->IsAgreeAuth = $param["IsAgreeAuth"];
        }

        if (array_key_exists("IsRunAtOnce",$param) and $param["IsRunAtOnce"] !== null) {
            $this->IsRunAtOnce = $param["IsRunAtOnce"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ScheduleConfig",$param) and $param["ScheduleConfig"] !== null) {
            $this->ScheduleConfig = new DspmScheduleConfig();
            $this->ScheduleConfig->deserialize($param["ScheduleConfig"]);
        }
    }
}
