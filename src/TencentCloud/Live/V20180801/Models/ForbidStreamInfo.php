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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 禁推流列表
 *
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getExpireTime() 获取禁推过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置禁推过期时间。
 * @method string getAppName() 获取推流路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppName(string $AppName) 设置推流路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainName() 获取推流域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainName(string $DomainName) 设置推流域名。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ForbidStreamInfo extends AbstractModel
{
    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 禁推过期时间。
     */
    public $ExpireTime;

    /**
     * @var string 推流路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppName;

    /**
     * @var string 推流域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainName;

    /**
     * @param string $StreamName 流名称。
     * @param string $CreateTime 创建时间。
     * @param string $ExpireTime 禁推过期时间。
     * @param string $AppName 推流路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainName 推流域名。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }
    }
}
