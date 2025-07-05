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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询当前垫片流的信息
 *
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getDomainName() 获取推流域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
 * @method string getPadStreamType() 获取垫片流类型。
0-自动垫片；
1-手动切入垫片。
 * @method void setPadStreamType(string $PadStreamType) 设置垫片流类型。
0-自动垫片；
1-手动切入垫片。
 * @method string getPublishTime() 获取垫片流开始时间。UTC时间，示例：2025-04-10T00:01:00Z。注意：该时间与北京时间相差八小时。
 * @method void setPublishTime(string $PublishTime) 设置垫片流开始时间。UTC时间，示例：2025-04-10T00:01:00Z。注意：该时间与北京时间相差八小时。
 */
class PadStreamInfo extends AbstractModel
{
    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 推流域名。
     */
    public $DomainName;

    /**
     * @var string 垫片流类型。
0-自动垫片；
1-手动切入垫片。
     */
    public $PadStreamType;

    /**
     * @var string 垫片流开始时间。UTC时间，示例：2025-04-10T00:01:00Z。注意：该时间与北京时间相差八小时。
     */
    public $PublishTime;

    /**
     * @param string $StreamName 流名称。
     * @param string $AppName 应用名称。
     * @param string $DomainName 推流域名。
     * @param string $PadStreamType 垫片流类型。
0-自动垫片；
1-手动切入垫片。
     * @param string $PublishTime 垫片流开始时间。UTC时间，示例：2025-04-10T00:01:00Z。注意：该时间与北京时间相差八小时。
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
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("PadStreamType",$param) and $param["PadStreamType"] !== null) {
            $this->PadStreamType = $param["PadStreamType"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }
    }
}
