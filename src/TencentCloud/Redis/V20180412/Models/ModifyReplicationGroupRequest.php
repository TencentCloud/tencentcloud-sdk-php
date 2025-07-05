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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReplicationGroup请求参数结构体
 *
 * @method string getGroupId() 获取复制组ID。请登录[Redis控制台的全球复制](https://console.cloud.tencent.com/redis/replication)页面获取复制组 ID。
 * @method void setGroupId(string $GroupId) 设置复制组ID。请登录[Redis控制台的全球复制](https://console.cloud.tencent.com/redis/replication)页面获取复制组 ID。
 * @method string getGroupName() 获取修改后的复制组名称。
 * @method void setGroupName(string $GroupName) 设置修改后的复制组名称。
 * @method string getRemark() 获取备注描述。
 * @method void setRemark(string $Remark) 设置备注描述。
 */
class ModifyReplicationGroupRequest extends AbstractModel
{
    /**
     * @var string 复制组ID。请登录[Redis控制台的全球复制](https://console.cloud.tencent.com/redis/replication)页面获取复制组 ID。
     */
    public $GroupId;

    /**
     * @var string 修改后的复制组名称。
     */
    public $GroupName;

    /**
     * @var string 备注描述。
     */
    public $Remark;

    /**
     * @param string $GroupId 复制组ID。请登录[Redis控制台的全球复制](https://console.cloud.tencent.com/redis/replication)页面获取复制组 ID。
     * @param string $GroupName 修改后的复制组名称。
     * @param string $Remark 备注描述。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
