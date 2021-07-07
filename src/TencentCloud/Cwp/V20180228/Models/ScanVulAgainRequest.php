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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanVulAgain请求参数结构体
 *
 * @method string getEventIds() 获取漏洞事件id串，多个用英文逗号分隔
 * @method void setEventIds(string $EventIds) 设置漏洞事件id串，多个用英文逗号分隔
 * @method string getUuids() 获取重新检查的机器uuid,多个逗号分隔
 * @method void setUuids(string $Uuids) 设置重新检查的机器uuid,多个逗号分隔
 */
class ScanVulAgainRequest extends AbstractModel
{
    /**
     * @var string 漏洞事件id串，多个用英文逗号分隔
     */
    public $EventIds;

    /**
     * @var string 重新检查的机器uuid,多个逗号分隔
     */
    public $Uuids;

    /**
     * @param string $EventIds 漏洞事件id串，多个用英文逗号分隔
     * @param string $Uuids 重新检查的机器uuid,多个逗号分隔
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
        if (array_key_exists("EventIds",$param) and $param["EventIds"] !== null) {
            $this->EventIds = $param["EventIds"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }
    }
}
