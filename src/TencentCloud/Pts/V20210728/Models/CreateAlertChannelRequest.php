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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlertChannel请求参数结构体
 *
 * @method string getNoticeId() 获取Notice ID
 * @method void setNoticeId(string $NoticeId) 设置Notice ID
 * @method string getProjectId() 获取项目 ID
 * @method void setProjectId(string $ProjectId) 设置项目 ID
 * @method string getAMPConsumerId() 获取AMP Consumer ID
 * @method void setAMPConsumerId(string $AMPConsumerId) 设置AMP Consumer ID
 */
class CreateAlertChannelRequest extends AbstractModel
{
    /**
     * @var string Notice ID
     */
    public $NoticeId;

    /**
     * @var string 项目 ID
     */
    public $ProjectId;

    /**
     * @var string AMP Consumer ID
     */
    public $AMPConsumerId;

    /**
     * @param string $NoticeId Notice ID
     * @param string $ProjectId 项目 ID
     * @param string $AMPConsumerId AMP Consumer ID
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AMPConsumerId",$param) and $param["AMPConsumerId"] !== null) {
            $this->AMPConsumerId = $param["AMPConsumerId"];
        }
    }
}
