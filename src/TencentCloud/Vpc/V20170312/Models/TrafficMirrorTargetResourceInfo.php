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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量镜像接收流量信息，当接收目标为ENI和CLB时返回
 *
 * @method string getTargetId() 获取接收目标的资源Id
 * @method void setTargetId(string $TargetId) 设置接收目标的资源Id
 * @method string getTargetName() 获取接收目标的资源名称
 * @method void setTargetName(string $TargetName) 设置接收目标的资源名称
 */
class TrafficMirrorTargetResourceInfo extends AbstractModel
{
    /**
     * @var string 接收目标的资源Id
     */
    public $TargetId;

    /**
     * @var string 接收目标的资源名称
     */
    public $TargetName;

    /**
     * @param string $TargetId 接收目标的资源Id
     * @param string $TargetName 接收目标的资源名称
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
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }
    }
}
