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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知模板与策略绑定关系
 *
 * @method string getNoticeId() 获取<p>告警通知模板 ID</p>
 * @method void setNoticeId(string $NoticeId) 设置<p>告警通知模板 ID</p>
 * @method array getPolicyIds() 获取<p>告警通知模板绑定的告警策略ID列表</p>
 * @method void setPolicyIds(array $PolicyIds) 设置<p>告警通知模板绑定的告警策略ID列表</p>
 */
class NoticeBindPolicys extends AbstractModel
{
    /**
     * @var string <p>告警通知模板 ID</p>
     */
    public $NoticeId;

    /**
     * @var array <p>告警通知模板绑定的告警策略ID列表</p>
     */
    public $PolicyIds;

    /**
     * @param string $NoticeId <p>告警通知模板 ID</p>
     * @param array $PolicyIds <p>告警通知模板绑定的告警策略ID列表</p>
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
        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }
    }
}
