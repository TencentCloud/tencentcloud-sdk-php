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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmPolicyNotice请求参数结构体
 *
 * @method string getModule() 获取模块名，这里填“monitor”。
 * @method void setModule(string $Module) 设置模块名，这里填“monitor”。
 * @method string getPolicyId() 获取告警策略 ID，如果该参数与PolicyIds参数同时存在，则以PolicyIds为准。
 * @method void setPolicyId(string $PolicyId) 设置告警策略 ID，如果该参数与PolicyIds参数同时存在，则以PolicyIds为准。
 * @method array getNoticeIds() 获取告警通知模板 ID 列表。
 * @method void setNoticeIds(array $NoticeIds) 设置告警通知模板 ID 列表。
 * @method array getPolicyIds() 获取告警策略ID数组，支持给多个告警策略批量绑定通知模板。最多30个。
 * @method void setPolicyIds(array $PolicyIds) 设置告警策略ID数组，支持给多个告警策略批量绑定通知模板。最多30个。
 */
class ModifyAlarmPolicyNoticeRequest extends AbstractModel
{
    /**
     * @var string 模块名，这里填“monitor”。
     */
    public $Module;

    /**
     * @var string 告警策略 ID，如果该参数与PolicyIds参数同时存在，则以PolicyIds为准。
     */
    public $PolicyId;

    /**
     * @var array 告警通知模板 ID 列表。
     */
    public $NoticeIds;

    /**
     * @var array 告警策略ID数组，支持给多个告警策略批量绑定通知模板。最多30个。
     */
    public $PolicyIds;

    /**
     * @param string $Module 模块名，这里填“monitor”。
     * @param string $PolicyId 告警策略 ID，如果该参数与PolicyIds参数同时存在，则以PolicyIds为准。
     * @param array $NoticeIds 告警通知模板 ID 列表。
     * @param array $PolicyIds 告警策略ID数组，支持给多个告警策略批量绑定通知模板。最多30个。
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }
    }
}
