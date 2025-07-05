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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作的进程范围
 *
 * @method string getComponentName() 获取进程名，必填，如NameNode
 * @method void setComponentName(string $ComponentName) 设置进程名，必填，如NameNode
 * @method array getIpList() 获取操作的IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpList(array $IpList) 设置操作的IP列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComponentBasicRestartInfo extends AbstractModel
{
    /**
     * @var string 进程名，必填，如NameNode
     */
    public $ComponentName;

    /**
     * @var array 操作的IP列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpList;

    /**
     * @param string $ComponentName 进程名，必填，如NameNode
     * @param array $IpList 操作的IP列表
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
        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
