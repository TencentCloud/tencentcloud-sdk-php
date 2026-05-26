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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于展示该节点的 Binlog 信息。
 *
 * @method string getSid() 获取日志服务的唯一 ID
 * @method void setSid(string $Sid) 设置日志服务的唯一 ID
 * @method string getType() 获取日志服务的类型
 * @method void setType(string $Type) 设置日志服务的类型
 * @method string getInstanceId() 获取实例的唯一 ID
 * @method void setInstanceId(string $InstanceId) 设置实例的唯一 ID
 */
class BinlogInfo extends AbstractModel
{
    /**
     * @var string 日志服务的唯一 ID
     */
    public $Sid;

    /**
     * @var string 日志服务的类型
     */
    public $Type;

    /**
     * @var string 实例的唯一 ID
     */
    public $InstanceId;

    /**
     * @param string $Sid 日志服务的唯一 ID
     * @param string $Type 日志服务的类型
     * @param string $InstanceId 实例的唯一 ID
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
        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
