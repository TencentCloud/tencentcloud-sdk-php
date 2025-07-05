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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAlertChannel请求参数结构体
 *
 * @method string getProjectId() 获取项目 ID
 * @method void setProjectId(string $ProjectId) 设置项目 ID
 * @method string getNoticeId() 获取待删除的通知渠道的 Notice ID（所有通知渠道的 Notice ID 可以从 DescribeAlertChannels 接口获取）
 * @method void setNoticeId(string $NoticeId) 设置待删除的通知渠道的 Notice ID（所有通知渠道的 Notice ID 可以从 DescribeAlertChannels 接口获取）
 */
class DeleteAlertChannelRequest extends AbstractModel
{
    /**
     * @var string 项目 ID
     */
    public $ProjectId;

    /**
     * @var string 待删除的通知渠道的 Notice ID（所有通知渠道的 Notice ID 可以从 DescribeAlertChannels 接口获取）
     */
    public $NoticeId;

    /**
     * @param string $ProjectId 项目 ID
     * @param string $NoticeId 待删除的通知渠道的 Notice ID（所有通知渠道的 Notice ID 可以从 DescribeAlertChannels 接口获取）
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }
    }
}
